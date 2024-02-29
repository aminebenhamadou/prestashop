<?php
if (!defined('_PS_VERSION_')) {
    exit;
}
use PrestaShop\PrestaShop\Core\Form\FormChoiceOption;
use PrestaShop\PrestaShop\Core\Form\FormChoiceValue;

class FormClient extends Module
{
    public function __construct()
    {
        $this->name = 'formclient';
        $this->tab = 'administration';
        $this->version = '1.0.0';
        $this->author = 'Amine';
        $this->need_instance = 0;

        parent::__construct();

        $this->displayName = $this->l('FormClient');
        $this->description = $this->l('ajouter des champs.');
        //$this->context->smarty->fetch('module:formclient/views/templates/admin/formclient.tpl');    
        $this->ps_versions_compliancy = array('min' => '1.7', 'max' => _PS_VERSION_);
    }

    public function install()
    {
        include(dirname(__FILE__) . '/sql/install.php');
        if (
            !parent::install() ||
            !$this->registerHook('additionalCustomerFormFields') ||
            !$this->registerHook('actionAdminCustomersFormModifier') ||
            !$this->registerHook('actionCustomerAccountAdd') ||
            !$this->registerHook('actionCategoryFormBuilderModifier') ||
            !$this->registerHook('actionAfterUpdateCategoryFormHandler') ||
            !$this->registerHook('actionAfterCreateCategoryFormHandler') ||
            !$this->registerHook('displayAdminCustomers') ||
            
            !$this->registerHook('actionCustomerAccountUpdate')
        ) {
            return false;
        }

        return true;
    }


    public function hookDisplayAdminCustomers(array $params)
    {
        $id_customer = (int)$params['id_customer'];
    
        $customerData = Db::getInstance()->getRow(
            'SELECT `societe`, `Telephone`, `Pays` FROM `' . _DB_PREFIX_ . 'formclient` WHERE `id_customer` = ' . $id_customer
        );
       
    
        if ($customerData) {


            $this->context->smarty->assign(array(
                'societe' => $customerData['societe'],
                'Telephone' => $customerData['Telephone'],
                'Pays' => $customerData['Pays']
            ));
            
    
            return $this->display(__FILE__, 'views/templates/admin/customer_list.tpl');
         
        }
    
    
        return '';
    }
    


    public function hookActionCustomerAccountAdd($params)
    {
        $id_customer = $params['newCustomer']->id;
        $societe = Tools::getValue('societe');
        $telephone = Tools::getValue('telephone');
        $pays = Tools::getValue('pays');
        $image = Tools::getValue('image');
       // var_dump($image);
       //$image = $_FILES['image'];
        //var_dump($_FILES);exit();


        if (!empty($image['tmp_name'])) {
           // var_dump('');exit();
            $imageFileName = md5(uniqid(rand(), true)) . '.' . pathinfo($image['name'], PATHINFO_EXTENSION);
            $imagePath = _PS_MODULE_DIR_ . $this->name . '/images/' . $imageFileName;
            var_dump($imagePath);exit();
            
            if (move_uploaded_file($image['tmp_name'], $imagePath)) {
                Db::getInstance()->insert(
                    'formclient',
                    array(
                        'id_customer' => (int) $id_customer,
                        'societe' => pSQL($societe),
                        'telephone' => pSQL($telephone),
                        'pays' => pSQL($pays),
                        'image' => pSQL($imageFileName)
                    )
                );
            } else {
                $this->context->controller->errors[] = $this->l('Une erreur est survenue lors du téléchargement du fichier.');
                return;
            }
        } else {
            Db::getInstance()->insert(
                'formclient',
                array(
                    'id_customer' => (int) $id_customer,
                    'societe' => pSQL($societe),
                    'telephone' => pSQL($telephone),
                    'pays' => pSQL($pays),
                    'image' => ''
                )
            );
        }

        if (Db::getInstance()->getMsgError()) {
            $this->context->controller->errors[] = $this->l('Une erreur est survenue lors de l\'enregistrement du champ.');
        } else {
            $this->context->controller->confirmations[] = $this->l('Champ enregistré avec succès.');
        }
    }



    public function hookActionCustomerAccountUpdate($params)
    {
        $id_customer = $params['cookie']->id_customer;
        $societe = Tools::getValue('societe');
        $telephone = Tools::getValue('telephone');
        $pays = Tools::getValue('pays');
        $image = Tools::getValue('image');
        //$image = $_FILES['image'];



        if (!empty($image['name']) && getimagesize($image['tmp_name'])) {
            $imageFileName = md5(uniqid(rand(), true)) . '.' . pathinfo($image['name'], PATHINFO_EXTENSION);
            $imagePath = _PS_MODULE_DIR_ . $this->name . '/images/' . $imageFileName;
            if (move_uploaded_file($image['tmp_name'], $imagePath)) {
                Db::getInstance()->update(
                    'formclient',
                    array(
                        'societe' => pSQL($societe),
                        'telephone' => pSQL($telephone),
                        'pays' => pSQL($pays),
                        'image' => pSQL($imageFileName)
                    ),
                    'id_customer = ' . (int) $id_customer
                );
            } else {
                $this->context->controller->errors[] = $this->l('Une erreur est survenue lors du téléchargement du fichier.');
                return;
            }
        } else {
            Db::getInstance()->update(
                'formclient',
                array(
                    'societe' => pSQL($societe),
                    'telephone' => pSQL($telephone),
                    'pays' => pSQL($pays),
                ),
                'id_customer = ' . (int) $id_customer
            );
        }

        if (Db::getInstance()->getMsgError()) {
            $this->context->controller->errors[] = $this->l('Une erreur est survenue lors de la mise à jour du champ.');
        } else {
            $this->context->controller->confirmations[] = $this->l('Champ mis à jour avec succès.');
        }
    }






    public function hookAdditionalCustomerFormFields($params)
    {
        $fields = [];

        $societeField = (new FormField)
            ->setName('societe')
            ->setType('text')
            ->setRequired(true)
            ->setLabel($this->l('Société'));

        $fields[] = $societeField;

        $imageField = (new FormField)
            ->setName('image')
            ->setType('file')
            ->setRequired(true)
            ->setLabel($this->l('Image'));
        $fields[] = $imageField;

        $telephoneField = (new FormField)
            ->setName('telephone')
            ->setType('text')
            ->setRequired(true)

            ->setLabel($this->l('Téléphone'));
        $fields[] = $telephoneField;

        $paysField = (new FormField)
            ->setName('pays')
            ->setType('select')
            ->setRequired(true)

            ->setLabel($this->l('Pays'));

        $paysField->addAvailableValue('Tunisie', $this->l('Tunisie'));
        $paysField->addAvailableValue('France', $this->l('France'));

        $fields[] = $paysField;

        return $fields;
    }


    public function hookActionAdminCustomersFormModifier($params)
    {
        $params['fields'][0]['form']['input'][] = [
            'type' => 'text',
            'label' => $this->l('Société'),
            'name' => 'societe',
            'class' => 'input fixed-width-xxl',
            'hint' => $this->l('Société')
        ];

        $params['fields'][0]['form']['input'][] = [
            'type' => 'text',
            'label' => $this->l('Téléphone'),
            'name' => 'telephone',
            'class' => 'input fixed-width-xxl',
            'hint' => $this->l('Téléphone')
        ];

        $params['fields'][0]['form']['input'][] = [
            'type' => 'select',
            'label' => $this->l('Pays'),
            'name' => 'pays',
            'class' => 'fixed-width-xxl',
            'options' => [
                'query' => [
                    [
                        'id' => 'Tunisie',
                        'name' => $this->l('Tunisie')
                    ],
                    [
                        'id' => 'France',
                        'name' => $this->l('France')
                    ]
                ],
                'id' => 'id',
                'name' => 'name'
            ],
            'hint' => $this->l('Pays')
        ];

        $params['fields_value']['societe'] = $params['object']->societe;
        $params['fields_value']['telephone'] = $params['object']->telephone;
        $params['fields_value']['pays'] = $params['object']->pays;
    }


    public function hookActionCategoryFormBuilderModifier(array $params)
    {
        //Récupération du form builder
        /** @var \Symfony\Component\Form\FormBuilder $formBuilder */
        $formBuilder = $params['form_builder'];
 
 
        //Ajout de notre champ spécifique
        $formBuilder->add($this->name . '_newfield1',
            //Cf génériques symonfy https://symfony.com/doc/current/reference/forms/types.html
            // et spécificiques prestashop https://devdocs.prestashop.com/1.7/development/components/form/types-reference/
            \Symfony\Component\Form\Extension\Core\Type\TextType::class,
            [
                'label' => $this->l('Autre'), //Label du champ
                'required' => false, //Requis ou non
                'constraints' => [ //Contraintes du champs
                    //cf. génériques symfony : https://symfony.com/doc/current/reference/constraints.html
                    // Ou vous pouvez écrire la votre cf. https://symfony.com/doc/current/validation/custom_constraint.html
                    new \Symfony\Component\Validator\Constraints\Length([
                        'max' => 20,
                        'maxMessage' => $this->l('Max caracters allowed : 20'),
                    ]),
                ],
                //La valeur peut être setée ici
                'data' => '', //Valeur du champ
            ]
        );
 
        //Ou surchargée ici
        $params['data'][$this->name . '_newfield1'] = 'Autre';
 
      //Ajout d'un champ langue
        $formBuilder->add($this->name . '_newfield_lang',
            // cf. https://devdocs.prestashop.com/1.7/development/components/form/types-reference/
            \PrestaShopBundle\Form\Admin\Type\TranslatableType::class,
            [
                'label' => $this->l('Langue'), //Label du champ
                'required' => false, //Requis ou non
                'type' => \Symfony\Component\Form\Extension\Core\Type\TextType::class // OU TextAreaType::class
            ]
        );
        //Définition des données du champ langue
        $languages = Language::getLanguages(true);
        foreach ( $languages as $lang){
            $params['data'][$this->name . '_newfield_lang'][$lang['id_lang']] = ''.$lang['iso_code'];
        }
 
        //On peut également changer facilement la donnée de n'importe quel autre champ du formulaire
        $params['data']['active'] = false;
 
        //Il faut bien penser à mettre cette ligne pour mettre à jour les données au formulaire
        $formBuilder->setData($params['data']);
    }
 
    /**
     * Action effectuée après la création d'une catégorie
     * @param array $params
     */
    public function hookActionAfterCreateCategoryFormHandler(array $params)
    {
        $this->updateData($params['id'],$params['form_data']);
    }
 
    /**
     * Action effectuée après la mise à jour d'une catégorie
     * @param array $params
     */
    public function hookActionAfterUpdateCategoryFormHandler(array $params)
    {
        $this->updateData($params['id'],$params['form_data']);
    }
 
    /**
     * Fonction qui va effectuer la mise à jour
     * @param array $data
     */
    protected function updateData(int $id_category,array $data)
    {
        //Réalisation du traitement de mise à jour
    }
 
 


    public function uninstall()
    {
        if (!parent::uninstall()) {
            return false;
        }

        return true;
    }


}
?>