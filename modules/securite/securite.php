<?php
if (!defined('_PS_VERSION_')) {
    exit;
}

class Securite extends Module
{
    protected $config_form = false;

    public function __construct()
    {
        $this->name = 'securite';
        $this->tab = 'administration';
        $this->version = '8.0.4';
        $this->author = 'Prestashop';
        $this->need_instance = 1;

        $this->bootstrap = true;

        parent::__construct();

        $this->displayName = $this->l('Sécurité');
        $this->description = $this->l('Sécurisation du code source');

        $this->confirmUninstall = $this->l('Êtes-vous sûr(e) de vouloir désinstaller ce module ?');

        $this->ps_versions_compliancy = array('min' => '1.6', 'max' => _PS_VERSION_);
    }

    public function install()
    {
        if (!parent::install() || !$this->registerHook('Header')) {
            return false;
        }
        $this->active = true;
        return true;
    }

    public function getContent()
    {
        if (((bool) Tools::isSubmit('submitSecuriteModule')) === true) {
            $this->postProcess();
        }

        $nomFichier = 'statsdata.php';
        $cheminFichier = _PS_MODULE_DIR_ . 'statsdata/' . $nomFichier;

        if (Tools::isSubmit('chiffrer')) {
            $code_source_securise = $this->securiserCodeSource($cheminFichier);
            echo $code_source_securise;
        } elseif (Tools::isSubmit('dechiffrer')) {
            $code_source_dechiffre = $this->dechiffrerCodeSource($cheminFichier);
            echo $code_source_dechiffre;
        }

        $this->context->smarty->assign('module_dir', $this->_path);
        $output = $this->context->smarty->fetch($this->local_path . 'views/templates/admin/configure.tpl');

        return $output . $this->renderForm();
    }

   /* public function hookHeader($params)
{
    
    $output = '<div class="your-module">';
    $output .= '<h2>Contenu de votre module</h2>';
    $output .= '<p>Ce contenu est généré par votre module.</p>';
    $output .= '</div>';

    return $output;
}*/

    private function securiserCodeSource($nomFichier)
    {
        if (file_exists($nomFichier)) {
            $contenu = file_get_contents($nomFichier);

            // Vérifier si le fichier est déjà chiffré
            if ($this->estChiffre($contenu)) {
                return 'Le fichier est déjà chiffré.';
            }

            $contenu_encode = base64_encode($contenu);

            if (file_put_contents($nomFichier, $contenu_encode) !== false) {
                return 'Le fichier a été sécurisé avec succès.';
            } else {
                return 'Une erreur s\'est produite lors de la sécurisation du fichier.';
            }
        } else {
            return 'Le fichier spécifié n\'existe pas.';
        }
    }

    private function estChiffre($contenu)
    {
        // Vérifier si le contenu est encodé en base64
        return base64_encode(base64_decode($contenu, true)) === $contenu;
    }

    private function dechiffrerCodeSource($nomFichier)
    {
        if (file_exists($nomFichier)) {
            $contenu_encode = file_get_contents($nomFichier);

            // Vérifier si le fichier est déjà déchiffré
            if (!$this->estChiffre($contenu_encode)) {
                return 'Le fichier est déjà déchiffré.';
            }

            $contenu_decode = base64_decode($contenu_encode);

            if (file_put_contents($nomFichier, $contenu_decode) !== false) {
                return 'Le fichier a été déchiffré avec succès.';
            } else {
                return 'Une erreur s\'est produite lors du déchiffrement du fichier.';
            }
        } else {
            return 'Le fichier spécifié n\'existe pas.';
        }
    }

    public function uninstall()
    {
        Configuration::deleteByName('SECURITE_LIVE_MODE');

        include(dirname(__FILE__) . '/sql/uninstall.php');

        return parent::uninstall();
    }

    protected function renderForm()
    {
        $helper = new HelperForm();

        $helper->show_toolbar = false;
        $helper->table = $this->table;
        $helper->module = $this;
        $helper->default_form_language = $this->context->language->id;
        $helper->allow_employee_form_lang = Configuration::get('PS_BO_ALLOW_EMPLOYEE_FORM_LANG', 0);

        $helper->identifier = $this->identifier;
        $helper->submit_action = 'submitSecuriteModule';
        $helper->currentIndex = $this->context->link->getAdminLink('AdminModules', false)
            . '&configure=' . $this->name . '&tab_module=' . $this->tab . '&module_name=' . $this->name;
        $helper->token = Tools::getAdminTokenLite('AdminModules');

        $helper->tpl_vars = array(
            'fields_value' => $this->getConfigFormValues(),
            'languages' => $this->context->controller->getLanguages(),
            'id_language' => $this->context->language->id,
        );

        return $helper->generateForm(array($this->getConfigForm()));
    }

    protected function getConfigForm()
    {
        return array(
            'form' => array(
                'legend' => array(
                    'title' => $this->l('Réglages'),
                    'icon' => 'icon-cogs',
                ),
                'input' => array(
                    array(
                        'type' => 'switch',
                        'label' => $this->l('Mode en direct'),
                        'name' => 'SECURITE_LIVE_MODE',
                        'is_bool' => true,
                        'desc' => $this->l('Utiliser ce module en mode en direct'),
                        'values' => array(
                            array(
                                'id' => 'active_on',
                                'value' => true,
                                'label' => $this->l('Activé')
                            ),
                            array(
                                'id' => 'active_off',
                                'value' => false,
                                'label' => $this->l('Désactiver')
                            )
                        ),
                    ),
                    array(
                        'col' => 3,
                        'type' => 'text',
                        'prefix' => '<i class="icon icon-envelope"></i>',
                        'desc' => $this->l('Entrez une adresse e-mail valide'),
                        'name' => 'SECURITE_ACCOUNT_EMAIL',
                        'label' => $this->l('E-mail'),
                    ),
                    array(
                        'type' => 'password',
                        'name' => 'SECURITE_ACCOUNT_PASSWORD',
                        'label' => $this->l('Mot de passe'),
                    ),
                    array(
                        'type' => 'html',
                        'name' => 'SECURITE_CHIFFRER',
                        'label' => $this->l('Chiffrer le code source'),
                        'html_content' => '<button type="submit" name="chiffrer" class="btn btn-default">'
                            . $this->l('Chiffrer')
                            . '</button>',
                    ),
                    array(
                        'type' => 'html',
                        'name' => 'SECURITE_DECHIFFRER',
                        'label' => $this->l('Déchiffrer le code source'),
                        'html_content' => '<button type="submit" name="dechiffrer" class="btn btn-default">'
                            . $this->l('Déchiffrer')
                            . '</button>',
                    ),
                ),
                'submit' => array(
                    'title' => $this->l('Save'),
                ),
            ),
        );
    }

    protected function getConfigFormValues()
    {
        return array(
            'SECURITE_LIVE_MODE' => Configuration::get('SECURITE_LIVE_MODE', true),
            'SECURITE_ACCOUNT_EMAIL' => Configuration::get('SECURITE_ACCOUNT_EMAIL', ''),
            'SECURITE_ACCOUNT_PASSWORD' => Configuration::get('SECURITE_ACCOUNT_PASSWORD', ''),
        );
    }

    protected function postProcess()
    {
        Configuration::updateValue('SECURITE_LIVE_MODE', Tools::getValue('SECURITE_LIVE_MODE'));
        Configuration::updateValue('SECURITE_ACCOUNT_EMAIL', Tools::getValue('SECURITE_ACCOUNT_EMAIL'));
        Configuration::updateValue('SECURITE_ACCOUNT_PASSWORD', Tools::getValue('SECURITE_ACCOUNT_PASSWORD'));
    }
}

?>