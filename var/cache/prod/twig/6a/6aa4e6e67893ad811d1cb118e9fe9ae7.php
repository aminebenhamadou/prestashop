<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* __string_template__e3241c00be86aa8e5a47945bf37c17fa */
class __TwigTemplate_2d19496ad34ff15970125392aeaaacf8 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'stylesheets' => [$this, 'block_stylesheets'],
            'extra_stylesheets' => [$this, 'block_extra_stylesheets'],
            'content_header' => [$this, 'block_content_header'],
            'content' => [$this, 'block_content'],
            'content_footer' => [$this, 'block_content_footer'],
            'sidebar_right' => [$this, 'block_sidebar_right'],
            'javascripts' => [$this, 'block_javascripts'],
            'extra_javascripts' => [$this, 'block_extra_javascripts'],
            'translate_javascripts' => [$this, 'block_translate_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"fr\">
<head>
  <meta charset=\"utf-8\">
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
<meta name=\"apple-mobile-web-app-capable\" content=\"yes\">
<meta name=\"robots\" content=\"NOFOLLOW, NOINDEX\">

<link rel=\"icon\" type=\"image/x-icon\" href=\"/prestashop/img/favicon.ico\" />
<link rel=\"apple-touch-icon\" href=\"/prestashop/img/app_icon.png\" />

<title>Maintenance • prestashop</title>

  <script type=\"text/javascript\">
    var help_class_name = 'AdminMaintenance';
    var iso_user = 'fr';
    var lang_is_rtl = '0';
    var full_language_code = 'fr-fr';
    var full_cldr_language_code = 'fr-FR';
    var country_iso_code = 'TN';
    var _PS_VERSION_ = '8.0.4';
    var roundMode = 2;
    var youEditFieldFor = '';
        var new_order_msg = 'Une nouvelle commande a été passée sur votre boutique.';
    var order_number_msg = 'Numéro de commande : ';
    var total_msg = 'Total : ';
    var from_msg = 'Du ';
    var see_order_msg = 'Afficher cette commande';
    var new_customer_msg = 'Un nouveau client s\\'est inscrit sur votre boutique';
    var customer_name_msg = 'Nom du client : ';
    var new_msg = 'Un nouveau message a été posté sur votre boutique.';
    var see_msg = 'Lire le message';
    var token = '6c9e101a7150cf93938c7725c79c2aae';
    var token_admin_orders = tokenAdminOrders = '5cb81685dee34fb5ea802d585399c8bd';
    var token_admin_customers = 'e5e10f2394b45a5fe7ecc7dc6f885511';
    var token_admin_customer_threads = tokenAdminCustomerThreads = 'd1cb9a87507d4ec2e0253d4e05c79788';
    var currentIndex = 'index.php?controller=AdminMaintenance';
    var employee_token = '9aec89a41e90c079c9906527c5e42a44';
    var choose_language_translate = 'Choisissez la langue :';
    var default_language = '1';
    var admin_modules_link = '/prestashop/admin8/index.php/improve/modules/manage?_token=tvtzWrsqQOnXGmF030nkPeth9uoEYr_Keugvep9OGi0';
    var admin_notification_get_link = '/prestashop/admin8/index.php/common/notification";
        // line 42
        echo "s?_token=tvtzWrsqQOnXGmF030nkPeth9uoEYr_Keugvep9OGi0';
    var admin_notification_push_link = adminNotificationPushLink = '/prestashop/admin8/index.php/common/notifications/ack?_token=tvtzWrsqQOnXGmF030nkPeth9uoEYr_Keugvep9OGi0';
    var tab_modules_list = '';
    var update_success_msg = 'Mise à jour réussie';
    var search_product_msg = 'Rechercher un produit';
  </script>



<link
      rel=\"preload\"
      href=\"/prestashop/admin8/themes/new-theme/public/703cf8f274fbb265d49c6262825780e1.preload.woff2\"
      as=\"font\"
      crossorigin
    >
      <link href=\"/prestashop/admin8/themes/new-theme/public/theme.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"https://unpkg.com/@prestashopcorp/edition-reskin/dist/back.min.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/prestashop/js/jquery/plugins/chosen/jquery.chosen.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/prestashop/js/jquery/plugins/fancybox/jquery.fancybox.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/prestashop/modules/blockwishlist/public/backoffice.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/prestashop/admin8/themes/default/css/vendor/nv.d3.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/prestashop/modules/klaviyopsautomation/dist/css/klaviyops-admin-global.e510d42b.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/prestashop/modules/psxmarketingwithgoogle/views/css/admin/menu.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/prestashop/modules/ps_facebook/views/css/admin/menu.css\" rel=\"stylesheet\" type=\"text/css\"/>
  
  <script type=\"text/javascript\">
var baseAdminDir = \"\\/prestashop\\/admin8\\/\";
var baseDir = \"\\/prestashop\\/\";
var changeFormLanguageUrl = \"\\/prestashop\\/admin8\\/index.php\\/configure\\/advanced\\/employees\\/change-form-language?_token=tvtzWrsqQOnXGmF030nkPeth9uoEYr_Keugvep9OGi0\";
var currency = {\"iso_code\":\"TND\",\"sign\":\"TND\",\"name\":\"Dinar tunisien\",\"format\":null};
var currency_specifications = {\"symbol";
        // line 72
        echo "\":[\",\",\"\\u202f\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\u00d7\",\"\\u2030\",\"\\u221e\",\"NaN\"],\"currencyCode\":\"TND\",\"currencySymbol\":\"TND\",\"numberSymbols\":[\",\",\"\\u202f\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\u00d7\",\"\\u2030\",\"\\u221e\",\"NaN\"],\"positivePattern\":\"#,##0.00\\u00a0\\u00a4\",\"negativePattern\":\"-#,##0.00\\u00a0\\u00a4\",\"maxFractionDigits\":3,\"minFractionDigits\":3,\"groupingUsed\":true,\"primaryGroupSize\":3,\"secondaryGroupSize\":3};
var number_specifications = {\"symbol\":[\",\",\"\\u202f\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\u00d7\",\"\\u2030\",\"\\u221e\",\"NaN\"],\"numberSymbols\":[\",\",\"\\u202f\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\u00d7\",\"\\u2030\",\"\\u221e\",\"NaN\"],\"positivePattern\":\"#,##0.###\",\"negativePattern\":\"-#,##0.###\",\"maxFractionDigits\":3,\"minFractionDigits\":0,\"groupingUsed\":true,\"primaryGroupSize\":3,\"secondaryGroupSize\":3};
var prestashop = {\"debug\":false};
var show_new_customers = \"1\";
var show_new_messages = \"1\";
var show_new_orders = \"1\";
</script>
<script type=\"text/javascript\" src=\"/prestashop/modules/ps_edition_basic/views/js/favicon.js\"></script>
<script type=\"text/javascript\" src=\"/prestashop/modules/ps_edition_basic/views/js/hideMinifiedChecklist.js\"></script>
<script type=\"text/javascript\" src=\"/prestashop/admin8/themes/new-theme/public/main.bundle.js\"></script>
<script type=\"text/javascript\" src=\"/prestashop/js/jquery/plugins/jquery.chosen.js\"></script>
<script type=\"text/javascript\" src=\"/prestashop/js/jquery/plugins/fancybox/jquery.fancybox.js\"></script>
<script type=\"text/javascript\" src=\"/prestashop/js/admin.js?v=8.0.4\"></script>
<script type=\"text/javascript\" src=\"/prestashop/admin8/themes/new-theme/public/cldr.bundle.js\"></script>
<script type=\"text/javascript\" src=\"/prestashop/js/tools.js?v=8.0.4\"></script>
<script type=\"text/javascript\" src=\"/prestashop/modules/blockwishlist/public/vendors.js\"></script>
<script type=\"text/javascript\" src=\"/prestashop/modules/gamification/views/js/gamification_bt.js\"></script>
<script type=\"text/javascript\" src=\"/prestashop/js/vendor/d3.v3.min.js\"></script>
<script type=\"text/javascript\" src=\"/pre";
        // line 90
        echo "stashop/admin8/themes/default/js/vendor/nv.d3.min.js\"></script>
<script type=\"text/javascript\" src=\"/prestashop/modules/ps_mbo/views/js/recommended-modules.js?v=4.10.2\"></script>
<script type=\"text/javascript\" src=\"/prestashop/modules/ps_faviconnotificationbo/views/js/favico.js\"></script>
<script type=\"text/javascript\" src=\"/prestashop/modules/ps_faviconnotificationbo/views/js/ps_faviconnotificationbo.js\"></script>

  <script>
            var admin_gamification_ajax_url = \"http:\\/\\/localhost:8080\\/prestashop\\/admin8\\/index.php?controller=AdminGamification&token=8eca33eebd3c25527f4c375741d53916\";
            var current_id_tab = 74;
        </script>    <script>
        window.userLocale  = 'fr';
        window.userflow_id = 'ct_55jfryadgneorc45cjqxpbf6o4';
    </script>
    <script type=\"module\" src=\"https://unpkg.com/@prestashopcorp/smb-edition-homepage/dist/assets/index.js\"></script><script>
  if (undefined !== ps_faviconnotificationbo) {
    ps_faviconnotificationbo.initialize({
      backgroundColor: '#DF0067',
      textColor: '#FFFFFF',
      notificationGetUrl: '/prestashop/admin8/index.php/common/notifications?_token=tvtzWrsqQOnXGmF030nkPeth9uoEYr_Keugvep9OGi0',
      CHECKBOX_ORDER: 1,
      CHECKBOX_CUSTOMER: 1,
      CHECKBOX_MESSAGE: 1,
      timer: 120000, // Refresh every 2 minutes
    });
  }
</script>


";
        // line 117
        $this->displayBlock('stylesheets', $context, $blocks);
        $this->displayBlock('extra_stylesheets', $context, $blocks);
        echo "</head>";
        echo "

<body
  class=\"lang-fr adminmaintenance\"
  data-base-url=\"/prestashop/admin8/index.php\"  data-token=\"tvtzWrsqQOnXGmF030nkPeth9uoEYr_Keugvep9OGi0\">

  <header id=\"header\" class=\"d-print-none\">

    <nav id=\"header_infos\" class=\"main-header\">
      <button class=\"btn btn-primary-reverse onclick btn-lg unbind ajax-spinner\"></button>

            <i class=\"material-icons js-mobile-menu\">menu</i>
      <a id=\"header_logo\" class=\"logo float-left\" href=\"/prestashop/admin8/index.php/modules/pseditionbasic/homepage?_token=tvtzWrsqQOnXGmF030nkPeth9uoEYr_Keugvep9OGi0\"></a>
      <span id=\"shop_version\">8.0.4</span>

      <div class=\"component\" id=\"quick-access-container\">
        <div class=\"dropdown quick-accesses\">
  <button class=\"btn btn-link btn-sm dropdown-toggle\" type=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\" id=\"quick_select\">
    Accès rapide
  </button>
  <div class=\"dropdown-menu\">
          <a class=\"dropdown-item quick-row-link\"
         href=\"http://localhost:8080/prestashop/admin8/index.php/sell/orders?token=6a3ee9356e82f0f8be05aeed443346aa\"
                 data-item=\"Commandes\"
      >Commandes</a>
          <a class=\"dropdown-item quick-row-link\"
         href=\"http://localhost:8080/prestashop/admin8/index.php?controller=AdminStats&amp;module=statscheckup&amp;token=c485491c60a6918cad4248db8d5b50e8\"
                 data-item=\"Évaluation du catalogue\"
      >Évaluation du catalogue</a>
          <a class=\"dropdown-item quick-row-link\"
         href=\"http://localhost:8080/prestashop/admin8/index.php/improve/modules/manage?token=6a3ee9356e82f0f8be05aeed443346aa\"
                 data-item=\"Modules installés\"
      >Modules installés</a>
          <a class=\"dropdown-item quick-row-link\"
         href=\"http://localhost:8080/prestashop/admin8/index.php?controller=AdminCartRules&amp;addcart_rule&amp;token=8dce373da6fab67bc6d066652660bce8\"
                 data-item=\"Nouveau bon de réduction\"
      >Nouveau bon de réduction<";
        // line 153
        echo "/a>
          <a class=\"dropdown-item quick-row-link\"
         href=\"http://localhost:8080/prestashop/admin8/index.php/sell/catalog/products/new?token=6a3ee9356e82f0f8be05aeed443346aa\"
                 data-item=\"Nouveau produit\"
      >Nouveau produit</a>
          <a class=\"dropdown-item quick-row-link\"
         href=\"http://localhost:8080/prestashop/admin8/index.php/sell/catalog/categories/new?token=6a3ee9356e82f0f8be05aeed443346aa\"
                 data-item=\"Nouvelle catégorie\"
      >Nouvelle catégorie</a>
        <div class=\"dropdown-divider\"></div>
          <a id=\"quick-add-link\"
        class=\"dropdown-item js-quick-link\"
        href=\"#\"
        data-rand=\"165\"
        data-icon=\"icon-AdminParentPreferences\"
        data-method=\"add\"
        data-url=\"index.php/configure/shop/maintenance\"
        data-post-link=\"http://localhost:8080/prestashop/admin8/index.php?controller=AdminQuickAccesses&token=5f2a1c3d3e398928b4a75ee0c7d06bfd\"
        data-prompt-text=\"Veuillez nommer ce raccourci :\"
        data-link=\"Maintenance - Liste\"
      >
        <i class=\"material-icons\">add_circle</i>
        Ajouter la page actuelle à l'accès rapide
      </a>
        <a id=\"quick-manage-link\" class=\"dropdown-item\" href=\"http://localhost:8080/prestashop/admin8/index.php?controller=AdminQuickAccesses&token=5f2a1c3d3e398928b4a75ee0c7d06bfd\">
      <i class=\"material-icons\">settings</i>
      Gérez vos accès rapides
    </a>
  </div>
</div>
      </div>
      <div class=\"component component-search\" id=\"header-search-container\">
        <div class=\"component-search-body\">
          <div class=\"component-search-top\">
            <form id=\"header_search\"
      class=\"bo_search_form dropdown-form js-dropdown-form collapsed\"
      method=\"post\"
      action=\"/prestashop/admin8/index.php?controller=AdminSearch&amp;token=dc62493c905934acd9e12e5a5e27d539\"
      role=\"search\">
  <input type=\"hidden\" name=\"bo_search_type\" id=\"bo_search_type\" class=\"js-search-type\" />
    <div clas";
        // line 193
        echo "s=\"input-group\">
    <input type=\"text\" class=\"form-control js-form-search\" id=\"bo_query\" name=\"bo_query\" value=\"\" placeholder=\"Rechercher (ex. : référence produit, nom du client, etc.)\" aria-label=\"Barre de recherche\">
    <div class=\"input-group-append\">
      <button type=\"button\" class=\"btn btn-outline-secondary dropdown-toggle js-dropdown-toggle\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
        Partout
      </button>
      <div class=\"dropdown-menu js-items-list\">
        <a class=\"dropdown-item\" data-item=\"Partout\" href=\"#\" data-value=\"0\" data-placeholder=\"Que souhaitez-vous trouver ?\" data-icon=\"icon-search\"><i class=\"material-icons\">search</i> Partout</a>
        <div class=\"dropdown-divider\"></div>
        <a class=\"dropdown-item\" data-item=\"Catalogue\" href=\"#\" data-value=\"1\" data-placeholder=\"Nom du produit, référence, etc.\" data-icon=\"icon-book\"><i class=\"material-icons\">store_mall_directory</i> Catalogue</a>
        <a class=\"dropdown-item\" data-item=\"Clients par nom\" href=\"#\" data-value=\"2\" data-placeholder=\"Nom\" data-icon=\"icon-group\"><i class=\"material-icons\">group</i> Clients par nom</a>
        <a class=\"dropdown-item\" data-item=\"Clients par adresse IP\" href=\"#\" data-value=\"6\" data-placeholder=\"123.45.67.89\" data-icon=\"icon-desktop\"><i class=\"material-icons\">desktop_mac</i> Clients par adresse IP</a>
        <a class=\"dropdown-item\" data-item=\"Commandes\" href=\"#\" data-value=\"3\" data-placeholder=\"ID commande\" data-icon=\"icon-credit-card\"><i class=\"material-icons\">shopping_basket</i> Commandes</a>
        <a class=\"dropdown-item\" data-item=\"Factures\" href=\"#\" data-value=\"4\" data-placeholder=\"Numéro de facture\" data-icon=\"icon-book\"><i class=\"material-icons\">book</i> Factures</a>
        <a class=\"dropdown-item\" data-item=\"Paniers\" href=\"#\" data-value=\"5\" data-placeholder=\"ID panier\" data-icon=\"icon-shopping-cart\"><i class=\"material-icons\">shopping_cart</i> Paniers</a>
        <a class=\"dropdown-item\" data-item=\"Modules\"";
        // line 208
        echo " href=\"#\" data-value=\"7\" data-placeholder=\"Nom du module\" data-icon=\"icon-puzzle-piece\"><i class=\"material-icons\">extension</i> Modules</a>
      </div>
      <button class=\"btn btn-primary\" type=\"submit\"><span class=\"d-none\">RECHERCHE</span><i class=\"material-icons\">search</i></button>
    </div>
  </div>
</form>

<script type=\"text/javascript\">
 \$(document).ready(function(){
    \$('#bo_query').one('click', function() {
    \$(this).closest('form').removeClass('collapsed');
  });
});
</script>
            <button class=\"component-search-cancel d-none\">Annuler</button>
          </div>

          <div class=\"component-search-quickaccess d-none\">
  <p class=\"component-search-title\">Accès rapide</p>
      <a class=\"dropdown-item quick-row-link\"
       href=\"http://localhost:8080/prestashop/admin8/index.php/sell/orders?token=6a3ee9356e82f0f8be05aeed443346aa\"
             data-item=\"Commandes\"
    >Commandes</a>
      <a class=\"dropdown-item quick-row-link\"
       href=\"http://localhost:8080/prestashop/admin8/index.php?controller=AdminStats&amp;module=statscheckup&amp;token=c485491c60a6918cad4248db8d5b50e8\"
             data-item=\"Évaluation du catalogue\"
    >Évaluation du catalogue</a>
      <a class=\"dropdown-item quick-row-link\"
       href=\"http://localhost:8080/prestashop/admin8/index.php/improve/modules/manage?token=6a3ee9356e82f0f8be05aeed443346aa\"
             data-item=\"Modules installés\"
    >Modules installés</a>
      <a class=\"dropdown-item quick-row-link\"
       href=\"http://localhost:8080/prestashop/admin8/index.php?controller=AdminCartRules&amp;addcart_rule&amp;token=8dce373da6fab67bc6d066652660bce8\"
             data-item=\"Nouveau bon de réduction\"
    >Nouveau bon de réduction</a>
      <a class=\"dropdown-item quick-row-link\"
       href=\"http://localhost:8080/prestashop/admin8/index.php/sell/catalog/products/new?token=6a3ee9356e82f0f8be05aeed443346aa\"
             data-item=\"Nouveau produit\"
    >Nouveau produit</a>
      <a class=\"dropdown-ite";
        // line 247
        echo "m quick-row-link\"
       href=\"http://localhost:8080/prestashop/admin8/index.php/sell/catalog/categories/new?token=6a3ee9356e82f0f8be05aeed443346aa\"
             data-item=\"Nouvelle catégorie\"
    >Nouvelle catégorie</a>
    <div class=\"dropdown-divider\"></div>
      <a id=\"quick-add-link\"
      class=\"dropdown-item js-quick-link\"
      href=\"#\"
      data-rand=\"150\"
      data-icon=\"icon-AdminParentPreferences\"
      data-method=\"add\"
      data-url=\"index.php/configure/shop/maintenance\"
      data-post-link=\"http://localhost:8080/prestashop/admin8/index.php?controller=AdminQuickAccesses&token=5f2a1c3d3e398928b4a75ee0c7d06bfd\"
      data-prompt-text=\"Veuillez nommer ce raccourci :\"
      data-link=\"Maintenance - Liste\"
    >
      <i class=\"material-icons\">add_circle</i>
      Ajouter la page actuelle à l'accès rapide
    </a>
    <a id=\"quick-manage-link\" class=\"dropdown-item\" href=\"http://localhost:8080/prestashop/admin8/index.php?controller=AdminQuickAccesses&token=5f2a1c3d3e398928b4a75ee0c7d06bfd\">
    <i class=\"material-icons\">settings</i>
    Gérez vos accès rapides
  </a>
</div>
        </div>

        <div class=\"component-search-background d-none\"></div>
      </div>

      
              <div class=\"component hide-mobile-sm\" id=\"header-maintenance-mode-container\">
          <a class=\"link shop-state\"
             id=\"maintenance-mode\"
             data-toggle=\"pstooltip\"
             data-placement=\"bottom\"
             data-html=\"true\"
             title=\"<p class=&quot;text-left&quot;><strong>Votre boutique est en maintenance.</strong></p><p class=&quot;text-left&quot;>Vos clients et visiteurs ne peuvent y accéder actuellement. &amp;lt;br /&amp;gt; Vous pouvez gérer les paramètres de maintenance dans l&#039;onglet Maintenance de la page Paramètres de la boutique.</p>\" href=\"/prestashop/admin8/index.php/configure/shop/maintenance/?_token=tvtzWrsqQOnXGmF030nkPeth9uoEYr_Keugvep9OGi0\"
          >
            <i class=\"material-icons\">build</i>
   ";
        // line 286
        echo "         <span>Mode maintenance</span>
          </a>
        </div>
      
      <div class=\"header-right\">
                  <div class=\"component\" id=\"header-shop-list-container\">
              <div class=\"shop-list\">
    <a class=\"link\" id=\"header_shopname\" href=\"http://localhost:8080/prestashop/\" target= \"_blank\">
      <i class=\"material-icons\">visibility</i>
      <span>Voir ma boutique</span>
    </a>
  </div>
          </div>
                          <div class=\"component header-right-component\" id=\"header-notifications-container\">
            <div id=\"notif\" class=\"notification-center dropdown dropdown-clickable\">
  <button class=\"btn notification js-notification dropdown-toggle\" data-toggle=\"dropdown\">
    <i class=\"material-icons\">notifications_none</i>
    <span id=\"notifications-total\" class=\"count hide\">0</span>
  </button>
  <div class=\"dropdown-menu dropdown-menu-right js-notifs_dropdown\">
    <div class=\"notifications\">
      <ul class=\"nav nav-tabs\" role=\"tablist\">
                          <li class=\"nav-item\">
            <a
              class=\"nav-link active\"
              id=\"orders-tab\"
              data-toggle=\"tab\"
              data-type=\"order\"
              href=\"#orders-notifications\"
              role=\"tab\"
            >
              Commandes<span id=\"_nb_new_orders_\"></span>
            </a>
          </li>
                                    <li class=\"nav-item\">
            <a
              class=\"nav-link \"
              id=\"customers-tab\"
              data-toggle=\"tab\"
              data-type=\"customer\"
              href=\"#customers-notifications\"
              role=\"tab\"
            >
              Clients<span id=\"_nb_new_customers_\"></span>
            </a>
          </li>
                                    <li class=\"nav-item\">
            <a
              class=\"nav-link \"
              id=\"messages-tab\"
              data-toggle=\"tab\"
              data-type=\"customer_message\"
              href=\"#messages-notifica";
        // line 338
        echo "tions\"
              role=\"tab\"
            >
              Messages<span id=\"_nb_new_messages_\"></span>
            </a>
          </li>
                        </ul>

      <!-- Tab panes -->
      <div class=\"tab-content\">
                          <div class=\"tab-pane active empty\" id=\"orders-notifications\" role=\"tabpanel\">
            <p class=\"no-notification\">
              Pas de nouvelle commande pour le moment :(<br>
              Avez-vous consulté vos <strong><a href=\"http://localhost:8080/prestashop/admin8/index.php?controller=AdminCarts&action=filterOnlyAbandonedCarts&token=26ed5cf2d9f19c81e33790d0c5c1c558\">paniers abandonnés</a></strong> ?<br> Votre prochaine commande s'y trouve peut-être !
            </p>
            <div class=\"notification-elements\"></div>
          </div>
                                    <div class=\"tab-pane  empty\" id=\"customers-notifications\" role=\"tabpanel\">
            <p class=\"no-notification\">
              Aucun nouveau client pour l'instant :(<br>
              Êtes-vous actifs sur les réseaux sociaux en ce moment ?
            </p>
            <div class=\"notification-elements\"></div>
          </div>
                                    <div class=\"tab-pane  empty\" id=\"messages-notifications\" role=\"tabpanel\">
            <p class=\"no-notification\">
              Pas de nouveau message pour l'instant.<br>
              On dirait que vos clients sont satisfaits :)
            </p>
            <div class=\"notification-elements\"></div>
          </div>
                        </div>
    </div>
  </div>
</div>

  <script type=\"text/html\" id=\"order-notification-template\">
    <a class=\"notif\" href='order_url'>
      #_id_order_ -
      de <strong>_customer_name_</strong> (_iso_code_)_carrier_
      <strong class=\"float-sm-right\">_total_paid_</strong>
    </a>
  </script>

  <script type=\"text/html\" id=\"customer-notification-template\">
    <a class=\"notif\" href='customer_url'>
      #_id_customer_ - <strong>_customer_n";
        // line 384
        echo "ame_</strong>_company_ - enregistré le <strong>_date_add_</strong>
    </a>
  </script>

  <script type=\"text/html\" id=\"message-notification-template\">
    <a class=\"notif\" href='message_url'>
    <span class=\"message-notification-status _status_\">
      <i class=\"material-icons\">fiber_manual_record</i> _status_
    </span>
      - <strong>_customer_name_</strong> (_company_) - <i class=\"material-icons\">access_time</i> _date_add_
    </a>
  </script>
          </div>
        
        <div class=\"component\" id=\"header-employee-container\">
          <div class=\"dropdown employee-dropdown\">
  <div class=\"rounded-circle person\" data-toggle=\"dropdown\">
    <i class=\"material-icons\">account_circle</i>
  </div>
  <div class=\"dropdown-menu dropdown-menu-right\">
    <div class=\"employee-wrapper-avatar\">
      <div class=\"employee-top\">
        <span class=\"employee-avatar\"><img class=\"avatar rounded-circle\" src=\"http://localhost:8080/prestashop/img/pr/default.jpg\" alt=\"Ben Hamadou\" /></span>
        <span class=\"employee_profile\">Ravi de vous revoir Ben Hamadou</span>
      </div>

      <a class=\"dropdown-item employee-link profile-link\" href=\"/prestashop/admin8/index.php/configure/advanced/employees/1/edit?_token=tvtzWrsqQOnXGmF030nkPeth9uoEYr_Keugvep9OGi0\">
      <i class=\"material-icons\">edit</i>
      <span>Votre profil</span>
    </a>
    </div>

    <p class=\"divider\"></p>

                  <a class=\"dropdown-item \" href=\"https://accounts.distribution.prestashop.net?utm_source=localhost%3A8080&utm_medium=back-office&utm_campaign=ps_accounts&utm_content=headeremployeedropdownlink\" target=\"_blank\" rel=\"noopener noreferrer nofollow\">
            <i class=\"material-icons\">open_in_new</i> Gérer votre compte PrestaShop
        </a>
                          <a class=\"dropdown-item ps_mbo\" href=\"https://www.prestashop.com/fr/formation?utm_source=back-office&utm_medium=menu&utm_content=download8_0&utm_campaign=training-fr&utm_mbo_source=menu-user-back-office\" target=\"_blan";
        // line 421
        echo "k\" rel=\"noopener noreferrer nofollow\">
            <i class=\"material-icons\">school</i> Formation
        </a>
                          <a class=\"dropdown-item ps_mbo\" href=\"https://www.prestashop.com/fr/experts?utm_source=back-office&utm_medium=menu&utm_content=download8_0&utm_campaign=expert-fr&utm_mbo_source=menu-user-back-office\" target=\"_blank\" rel=\"noopener noreferrer nofollow\">
            <i class=\"material-icons\">person_pin_circle</i> Trouver un expert
        </a>
                          <a class=\"dropdown-item ps_mbo\" href=\"/prestashop/admin/index.php/modules/mbo/modules/catalog/?utm_mbo_source=menu-user-back-office&_token=o7HKGrEiCvJ-rvK7K6SxTqx55EbNnEqwd6X1lCsUCec&utm_source=back-office&utm_medium=menu&utm_content=download8_0&utm_campaign=addons-fr&utm_mbo_source=menu-user-back-office\" target=\"_blank\" rel=\"noopener noreferrer nofollow\">
            <i class=\"material-icons\">extension</i> Marketplace Prestashop
        </a>
                          <a class=\"dropdown-item ps_mbo\" href=\"https://help-center.prestashop.com/fr?utm_source=back-office&utm_medium=menu&utm_content=download8_0&utm_campaign=help-center-fr&utm_mbo_source=menu-user-back-office\" target=\"_blank\" rel=\"noopener noreferrer nofollow\">
            <i class=\"material-icons\">help</i> Centre d'assistance
        </a>
                  <p class=\"divider\"></p>
            
    <a class=\"dropdown-item employee-link text-center\" id=\"header_logout\" href=\"http://localhost:8080/prestashop/admin8/index.php?controller=AdminLogin&amp;logout=1&amp;token=a5ad9f981c92401aa33a9cca35cebf95\">
      <i class=\"material-icons d-lg-none\">power_settings_new</i>
      <span>Déconnexion</span>
    </a>
  </div>
</div>
        </div>
              </div>
    </nav>
  </header>

  <nav class=\"nav-bar d-none d-print-none d-md-block\">
  <span class=\"menu-collapse\" data-toggle-url=\"/prestashop/admin8/index.php/configure/advanced/employees/toggle-navigation?_token=tvtzWrsqQOnXGmF030nkPeth9uoEYr_Keugvep9OGi0\">
    <i";
        // line 448
        echo " class=\"material-icons rtl-flip\">chevron_left</i>
    <i class=\"material-icons rtl-flip\">chevron_left</i>
  </span>

  <div class=\"nav-bar-overflow\">
      <div class=\"logo-container\">
          <a id=\"header_logo\" class=\"logo float-left\" href=\"/prestashop/admin8/index.php/modules/pseditionbasic/homepage?_token=tvtzWrsqQOnXGmF030nkPeth9uoEYr_Keugvep9OGi0\"></a>
          <span id=\"shop_version\" class=\"header-version\">8.0.4</span>
      </div>

      <ul class=\"main-menu\">
              
                                          
                    
          
            <li class=\"category-title\" data-submenu=\"151\" id=\"tab-HOME\">
                <span class=\"title\">Bienvenue</span>
            </li>

                              
                  
                                                      
                  
                  <li class=\"link-levelone\" data-submenu=\"152\" id=\"subtab-AdminPsEditionBasicHomepageController\">
                    <a href=\"/prestashop/admin8/index.php/modules/pseditionbasic/homepage?_token=tvtzWrsqQOnXGmF030nkPeth9uoEYr_Keugvep9OGi0\" class=\"link\">
                      <i class=\"material-icons mi-home\">home</i>
                      <span>
                      Accueil
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone\" data-submenu=\"1\" id=\"subtab-AdminDashboard\">
                    <a href=\"http://localhost:8080/prestashop/admin8/index.php?controller=AdminDashboard&amp;token=e69a2acea6f535a5632e5feab45036b2\" class=\"link\">
       ";
        // line 488
        echo "               <i class=\"material-icons mi-trending_up\">trending_up</i>
                      <span>
                      Tableau de bord
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                        </li>
                              
          
                      
                                          
                    
          
            <li class=\"category-title\" data-submenu=\"2\" id=\"tab-SELL\">
                <span class=\"title\">Vendre</span>
            </li>

                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"3\" id=\"subtab-AdminParentOrders\">
                    <a href=\"/prestashop/admin8/index.php/sell/orders/?_token=tvtzWrsqQOnXGmF030nkPeth9uoEYr_Keugvep9OGi0\" class=\"link\">
                      <i class=\"material-icons mi-shopping_basket\">shopping_basket</i>
                      <span>
                      Commandes
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-3\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"4\" id=\"subtab-AdminOrders\">
                           ";
        // line 526
        echo "     <a href=\"/prestashop/admin8/index.php/sell/orders/?_token=tvtzWrsqQOnXGmF030nkPeth9uoEYr_Keugvep9OGi0\" class=\"link\"> Commandes
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"5\" id=\"subtab-AdminInvoices\">
                                <a href=\"/prestashop/admin8/index.php/sell/orders/invoices/?_token=tvtzWrsqQOnXGmF030nkPeth9uoEYr_Keugvep9OGi0\" class=\"link\"> Factures
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"6\" id=\"subtab-AdminSlip\">
                                <a href=\"/prestashop/admin8/index.php/sell/orders/credit-slips/?_token=tvtzWrsqQOnXGmF030nkPeth9uoEYr_Keugvep9OGi0\" class=\"link\"> Avoirs
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"7\" id=\"subtab-AdminDeliverySlip\">
                                <a href=\"/prestashop/admin8/index.php/sell/orders/delivery-slips/?_token=tvtzWrsqQOnXGmF030nkPeth9uoEYr_Keugvep9OGi0\" class=\"link\"> Bons de livraison
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo";
        // line 557
        echo "\" data-submenu=\"8\" id=\"subtab-AdminCarts\">
                                <a href=\"http://localhost:8080/prestashop/admin8/index.php?controller=AdminCarts&amp;token=26ed5cf2d9f19c81e33790d0c5c1c558\" class=\"link\"> Paniers
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"9\" id=\"subtab-AdminCatalog\">
                    <a href=\"/prestashop/admin8/index.php/sell/catalog/products?_token=tvtzWrsqQOnXGmF030nkPeth9uoEYr_Keugvep9OGi0\" class=\"link\">
                      <i class=\"material-icons mi-store\">store</i>
                      <span>
                      Catalogue
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-9\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"10\" id=\"subtab-AdminProducts\">
                                <a href=\"/prestashop/admin8/index.php/sell/catalog/products?_token=tvtzWrsqQOnXGmF030nkPeth9uoEYr_Keugvep9OGi0\" class=\"link\"> Produits
                                </a>
                              </li>

                                                                                  
                              
                                  ";
        // line 589
        echo "                          
                              <li class=\"link-leveltwo\" data-submenu=\"11\" id=\"subtab-AdminCategories\">
                                <a href=\"/prestashop/admin8/index.php/sell/catalog/categories?_token=tvtzWrsqQOnXGmF030nkPeth9uoEYr_Keugvep9OGi0\" class=\"link\"> Catégories
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"12\" id=\"subtab-AdminTracking\">
                                <a href=\"/prestashop/admin8/index.php/sell/catalog/monitoring/?_token=tvtzWrsqQOnXGmF030nkPeth9uoEYr_Keugvep9OGi0\" class=\"link\"> Suivi
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"13\" id=\"subtab-AdminParentAttributesGroups\">
                                <a href=\"http://localhost:8080/prestashop/admin8/index.php?controller=AdminAttributesGroups&amp;token=9dc198eb6464c4bf47a178c3cb8f58ad\" class=\"link\"> Attributs et caractéristiques
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"16\" id=\"subtab-AdminParentManufacturers\">
                                <a href=\"/prestashop/admin8/index.php/sell/catalog/brands/?_token=tvtzWrsqQOnXGmF030nkPeth9uoEYr_Keugvep9OGi0\" class=\"link\"> Marques et fournisseurs
                                </a>
                         ";
        // line 617
        echo "     </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"19\" id=\"subtab-AdminAttachments\">
                                <a href=\"/prestashop/admin8/index.php/sell/attachments/?_token=tvtzWrsqQOnXGmF030nkPeth9uoEYr_Keugvep9OGi0\" class=\"link\"> Fichiers
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"20\" id=\"subtab-AdminParentCartRules\">
                                <a href=\"http://localhost:8080/prestashop/admin8/index.php?controller=AdminCartRules&amp;token=8dce373da6fab67bc6d066652660bce8\" class=\"link\"> Réductions
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"23\" id=\"subtab-AdminStockManagement\">
                                <a href=\"/prestashop/admin8/index.php/sell/stocks/?_token=tvtzWrsqQOnXGmF030nkPeth9uoEYr_Keugvep9OGi0\" class=\"link\"> Stock
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"24\" id=\"subtab-AdminParentCustomer\">
                    <a href=\"/prestasho";
        // line 650
        echo "p/admin8/index.php/sell/customers/?_token=tvtzWrsqQOnXGmF030nkPeth9uoEYr_Keugvep9OGi0\" class=\"link\">
                      <i class=\"material-icons mi-account_circle\">account_circle</i>
                      <span>
                      Clients
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-24\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"25\" id=\"subtab-AdminCustomers\">
                                <a href=\"/prestashop/admin8/index.php/sell/customers/?_token=tvtzWrsqQOnXGmF030nkPeth9uoEYr_Keugvep9OGi0\" class=\"link\"> Clients
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"26\" id=\"subtab-AdminAddresses\">
                                <a href=\"/prestashop/admin8/index.php/sell/addresses/?_token=tvtzWrsqQOnXGmF030nkPeth9uoEYr_Keugvep9OGi0\" class=\"link\"> Adresses
                                </a>
                              </li>

                                                                                                                                    </ul>
                                        </li>
                                              
                  
                                                      
                  
           ";
        // line 682
        echo "       <li class=\"link-levelone has_submenu\" data-submenu=\"28\" id=\"subtab-AdminParentCustomerThreads\">
                    <a href=\"http://localhost:8080/prestashop/admin8/index.php?controller=AdminCustomerThreads&amp;token=d1cb9a87507d4ec2e0253d4e05c79788\" class=\"link\">
                      <i class=\"material-icons mi-chat\">chat</i>
                      <span>
                      SAV
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-28\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"29\" id=\"subtab-AdminCustomerThreads\">
                                <a href=\"http://localhost:8080/prestashop/admin8/index.php?controller=AdminCustomerThreads&amp;token=d1cb9a87507d4ec2e0253d4e05c79788\" class=\"link\"> SAV
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"30\" id=\"subtab-AdminOrderMessage\">
                                <a href=\"/prestashop/admin8/index.php/sell/customer-service/order-messages/?_token=tvtzWrsqQOnXGmF030nkPeth9uoEYr_Keugvep9OGi0\" class=\"link\"> Messages prédéfinis
                                </a>
                              </li>

                                                                                  
                              
     ";
        // line 711
        echo "                                                       
                              <li class=\"link-leveltwo\" data-submenu=\"31\" id=\"subtab-AdminReturn\">
                                <a href=\"http://localhost:8080/prestashop/admin8/index.php?controller=AdminReturn&amp;token=925551158951a24dd040e0d8e6d7b8b9\" class=\"link\"> Retours produits
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"32\" id=\"subtab-AdminStats\">
                    <a href=\"/prestashop/admin8/index.php/modules/metrics/legacy/stats?_token=tvtzWrsqQOnXGmF030nkPeth9uoEYr_Keugvep9OGi0\" class=\"link\">
                      <i class=\"material-icons mi-assessment\">assessment</i>
                      <span>
                      Statistiques
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-32\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"165\" id=\"subtab-AdminMetricsLegacyStatsController\">
                                <a href=\"/prestashop/admin8/index.php/modules/metrics/legacy/stats?_token=tvtzWrsqQOnXGmF030nkPeth9uoEYr_Keugvep9OGi0\" class=\"link\"> Statistiques
                                </a>
           ";
        // line 740
        echo "                   </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"166\" id=\"subtab-AdminMetricsController\">
                                <a href=\"/prestashop/admin8/index.php/modules/metrics?_token=tvtzWrsqQOnXGmF030nkPeth9uoEYr_Keugvep9OGi0\" class=\"link\"> PrestaShop Metrics
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                              
          
                      
                                          
                    
          
            <li class=\"category-title\" data-submenu=\"37\" id=\"tab-IMPROVE\">
                <span class=\"title\">Personnaliser</span>
            </li>

                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"38\" id=\"subtab-AdminParentModulesSf\">
                    <a href=\"/prestashop/admin8/index.php/modules/mbo/modules/catalog/?_token=tvtzWrsqQOnXGmF030nkPeth9uoEYr_Keugvep9OGi0\" class=\"link\">
                      <i class=\"material-icons mi-extension\">extension</i>
                      <span>
                      Modules
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-38\" class=\"submenu panel-collapse\">
                                                                              ";
        // line 777
        echo "                                                                                    
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"158\" id=\"subtab-AdminPsMboModuleParent\">
                                <a href=\"/prestashop/admin8/index.php/modules/mbo/modules/catalog/?_token=tvtzWrsqQOnXGmF030nkPeth9uoEYr_Keugvep9OGi0\" class=\"link\"> Marketplace
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"39\" id=\"subtab-AdminModulesSf\">
                                <a href=\"/prestashop/admin8/index.php/improve/modules/manage?_token=tvtzWrsqQOnXGmF030nkPeth9uoEYr_Keugvep9OGi0\" class=\"link\"> Gestionnaire de modules 
                                </a>
                              </li>

                                                                                                                                    </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"43\" id=\"subtab-AdminParentThemes\">
                    <a href=\"http://localhost:8080/prestashop/admin8/index.php?controller=AdminPsThemeCustoConfiguration&amp;token=faf7108a8f82d5f48d4d17af614eaf9f\" class=\"link\">
                      <i class=\"material-icons mi-desktop_mac\">desktop_mac</i>
                      <span>
                      Apparence
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                      ";
        // line 806
        echo "              keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-43\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"167\" id=\"subtab-AdminThemesParent\">
                                <a href=\"http://localhost:8080/prestashop/admin8/index.php?controller=AdminPsThemeCustoConfiguration&amp;token=faf7108a8f82d5f48d4d17af614eaf9f\" class=\"link\"> Modules du thème
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"162\" id=\"subtab-AdminPsMboTheme\">
                                <a href=\"/prestashop/admin8/index.php/modules/mbo/themes/catalog/?_token=tvtzWrsqQOnXGmF030nkPeth9uoEYr_Keugvep9OGi0\" class=\"link\"> Catalogue de thèmes
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"137\" id=\"subtab-AdminPsxDesignParentTab\">
                                <a href=\"/prestashop/admin8/index.php/modules/improve/design/themes?_token=tvtzWrsqQOnXGmF030nkPeth9uoEYr_Keugvep9OGi0\" class=\"link\"> Personnalisation
                                </a>
                              </li>

                                                                                  
                              
                     ";
        // line 836
        echo "                                       
                              <li class=\"link-leveltwo\" data-submenu=\"45\" id=\"subtab-AdminParentMailTheme\">
                                <a href=\"/prestashop/admin8/index.php/improve/design/mail_theme/?_token=tvtzWrsqQOnXGmF030nkPeth9uoEYr_Keugvep9OGi0\" class=\"link\"> Thème d&#039;e-mail
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"47\" id=\"subtab-AdminCmsContent\">
                                <a href=\"/prestashop/admin8/index.php/improve/design/cms-pages/?_token=tvtzWrsqQOnXGmF030nkPeth9uoEYr_Keugvep9OGi0\" class=\"link\"> Pages
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"48\" id=\"subtab-AdminModulesPositions\">
                                <a href=\"/prestashop/admin8/index.php/improve/design/modules/positions/?_token=tvtzWrsqQOnXGmF030nkPeth9uoEYr_Keugvep9OGi0\" class=\"link\"> Positions
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"49\" id=\"subtab-AdminImages\">
                                <a href=\"http://localhost:8080/prestashop/admin8/index.php?controller=AdminImages&amp;token=21653cbd4f631bdf3871ecef3b01aeaf\" class=\"link\"> Images
                                </a>
                              </li>

         ";
        // line 866
        echo "                                                                         
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"117\" id=\"subtab-AdminLinkWidget\">
                                <a href=\"/prestashop/admin8/index.php/modules/link-widget/list?_token=tvtzWrsqQOnXGmF030nkPeth9uoEYr_Keugvep9OGi0\" class=\"link\"> Liste de liens
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"50\" id=\"subtab-AdminParentShipping\">
                    <a href=\"http://localhost:8080/prestashop/admin8/index.php?controller=AdminCarriers&amp;token=c36770f11c24c76c03132d1dce3223c6\" class=\"link\">
                      <i class=\"material-icons mi-local_shipping\">local_shipping</i>
                      <span>
                      Livraison
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-50\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"51\" id=\"subtab-AdminCarriers\">
                                <a href=\"http://localhost:8080/prestashop/admin8/index.php?controller=AdminCarriers&amp;to";
        // line 895
        echo "ken=c36770f11c24c76c03132d1dce3223c6\" class=\"link\"> Transporteurs
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"52\" id=\"subtab-AdminShipping\">
                                <a href=\"/prestashop/admin8/index.php/improve/shipping/preferences/?_token=tvtzWrsqQOnXGmF030nkPeth9uoEYr_Keugvep9OGi0\" class=\"link\"> Préférences
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"127\" id=\"subtab-AdminMbeConfiguration\">
                                <a href=\"http://localhost:8080/prestashop/admin8/index.php?controller=AdminMbeConfiguration&amp;token=c3e7853ea8525b4925a979a9161c703e\" class=\"link\"> MBE - Configuration
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"130\" id=\"subtab-AdminMbeShipping\">
                                <a href=\"http://localhost:8080/prestashop/admin8/index.php?controller=AdminMbeShipping&amp;token=699bf33d48c80915bb564abb2c1ebef2\" class=\"link\"> MBE - Expéditions
                                </a>
                              </li>

                                                                                                                                    </ul>
                                        </li>
                                   ";
        // line 925
        echo "           
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"53\" id=\"subtab-AdminParentPayment\">
                    <a href=\"/prestashop/admin8/index.php/improve/payment/payment_methods?_token=tvtzWrsqQOnXGmF030nkPeth9uoEYr_Keugvep9OGi0\" class=\"link\">
                      <i class=\"material-icons mi-payment\">payment</i>
                      <span>
                      Paiement
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-53\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"54\" id=\"subtab-AdminPayment\">
                                <a href=\"/prestashop/admin8/index.php/improve/payment/payment_methods?_token=tvtzWrsqQOnXGmF030nkPeth9uoEYr_Keugvep9OGi0\" class=\"link\"> Moyens de paiement
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"55\" id=\"subtab-AdminPaymentPreferences\">
                                <a href=\"/prestashop/admin8/index.php/improve/payment/preferences?_token=tvtzWrsqQOnXGmF030nkPeth9uoEYr_Keugvep9OGi0\" class=\"link\"> Préférences
                                </a>
                              </li>

                               ";
        // line 956
        echo "                                               </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"56\" id=\"subtab-AdminInternational\">
                    <a href=\"/prestashop/admin8/index.php/improve/international/localization/?_token=tvtzWrsqQOnXGmF030nkPeth9uoEYr_Keugvep9OGi0\" class=\"link\">
                      <i class=\"material-icons mi-language\">language</i>
                      <span>
                      International
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-56\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"57\" id=\"subtab-AdminParentLocalization\">
                                <a href=\"/prestashop/admin8/index.php/improve/international/localization/?_token=tvtzWrsqQOnXGmF030nkPeth9uoEYr_Keugvep9OGi0\" class=\"link\"> Localisation
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"62\" id=\"subtab-AdminParentCountries\">
                                <a href=\"/prestashop/admin8/index.php/improve/international/zones/?_token=tvtzWrsqQOnXGmF030nkPeth9u";
        // line 985
        echo "oEYr_Keugvep9OGi0\" class=\"link\"> Zones géographiques
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"66\" id=\"subtab-AdminParentTaxes\">
                                <a href=\"/prestashop/admin8/index.php/improve/international/taxes/?_token=tvtzWrsqQOnXGmF030nkPeth9uoEYr_Keugvep9OGi0\" class=\"link\"> Taxes
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"69\" id=\"subtab-AdminTranslations\">
                                <a href=\"/prestashop/admin8/index.php/improve/international/translations/settings?_token=tvtzWrsqQOnXGmF030nkPeth9uoEYr_Keugvep9OGi0\" class=\"link\"> Traductions
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"142\" id=\"subtab-Marketing\">
                    <a href=\"http://localhost:8080/prestashop/admin8/index.php?controller=AdminPsxMktgWithGoogleModule&amp;token=c6ce85f3feac5643ea669bc68bf46056\" class=\"link\">
                      <i class=\"material-icons mi-campaign\">campaign</i>
                      <span>
                      Marketing
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">";
        // line 1017
        echo "
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-142\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"143\" id=\"subtab-AdminPsxMktgWithGoogleModule\">
                                <a href=\"http://localhost:8080/prestashop/admin8/index.php?controller=AdminPsxMktgWithGoogleModule&amp;token=c6ce85f3feac5643ea669bc68bf46056\" class=\"link\"> Google
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"155\" id=\"subtab-AdminPsfacebookModule\">
                                <a href=\"http://localhost:8080/prestashop/admin8/index.php?controller=AdminPsfacebookModule&amp;token=fbf1c49fb875d1802cacc5c1041ec809\" class=\"link\"> Facebook &amp; Instagram
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                              
          
                      
                                          
                    
          
            <li class=\"category-title link-active\" data-submenu=\"70\" id=\"tab-CONFIGURE\">
                <span class=\"title\">Configurer</span>
            </li>

                              
                  
                                                      
                  
                  <li class=\"link-levelon";
        // line 1054
        echo "e\" data-submenu=\"153\" id=\"subtab-AdminPsEditionBasicSettingsController\">
                    <a href=\"/prestashop/admin8/index.php/modules/pseditionbasic/settings?_token=tvtzWrsqQOnXGmF030nkPeth9uoEYr_Keugvep9OGi0\" class=\"link\">
                      <i class=\"material-icons mi-settings\">settings</i>
                      <span>
                      Paramètres
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                        </li>
                                              
                  
                                                      
                                                          
                  <li class=\"link-levelone has_submenu link-active open ul-open\" data-submenu=\"71\" id=\"subtab-ShopParameters\">
                    <a href=\"/prestashop/admin8/index.php/configure/shop/preferences/preferences?_token=tvtzWrsqQOnXGmF030nkPeth9uoEYr_Keugvep9OGi0\" class=\"link\">
                      <i class=\"material-icons mi-settings\">settings</i>
                      <span>
                      Paramètres de la boutique
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_up
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-71\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo link-active\" data";
        // line 1083
        echo "-submenu=\"72\" id=\"subtab-AdminParentPreferences\">
                                <a href=\"/prestashop/admin8/index.php/configure/shop/preferences/preferences?_token=tvtzWrsqQOnXGmF030nkPeth9uoEYr_Keugvep9OGi0\" class=\"link\"> Paramètres généraux
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"75\" id=\"subtab-AdminParentOrderPreferences\">
                                <a href=\"/prestashop/admin8/index.php/configure/shop/order-preferences/?_token=tvtzWrsqQOnXGmF030nkPeth9uoEYr_Keugvep9OGi0\" class=\"link\"> Commandes
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"78\" id=\"subtab-AdminPPreferences\">
                                <a href=\"/prestashop/admin8/index.php/configure/shop/product-preferences/?_token=tvtzWrsqQOnXGmF030nkPeth9uoEYr_Keugvep9OGi0\" class=\"link\"> Produits
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"79\" id=\"subtab-AdminParentCustomerPreferences\">
                                <a href=\"/prestashop/admin8/index.php/configure/shop/customer-preferences/?_token=tvtzWrsqQOnXGmF030nkPeth9uoEYr_Keugvep9OGi0\" class=\"link\"> Clients
                                </a>
                              </li>

                                                   ";
        // line 1112
        echo "                               
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"83\" id=\"subtab-AdminParentStores\">
                                <a href=\"/prestashop/admin8/index.php/configure/shop/contacts/?_token=tvtzWrsqQOnXGmF030nkPeth9uoEYr_Keugvep9OGi0\" class=\"link\"> Contact
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"86\" id=\"subtab-AdminParentMeta\">
                                <a href=\"/prestashop/admin8/index.php/configure/shop/seo-urls/?_token=tvtzWrsqQOnXGmF030nkPeth9uoEYr_Keugvep9OGi0\" class=\"link\"> Trafic et SEO
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"89\" id=\"subtab-AdminParentSearchConf\">
                                <a href=\"http://localhost:8080/prestashop/admin8/index.php?controller=AdminSearchConf&amp;token=022772fcbf1a57c21d93be7102ec5d84\" class=\"link\"> Rechercher
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"92\" id=\"subtab-AdminAdvancedParameters\">
                    <a href=\"/prestashop/admin8/index.php/configure/advance";
        // line 1143
        echo "d/system-information/?_token=tvtzWrsqQOnXGmF030nkPeth9uoEYr_Keugvep9OGi0\" class=\"link\">
                      <i class=\"material-icons mi-settings_applications\">settings_applications</i>
                      <span>
                      Paramètres avancés
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-92\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"93\" id=\"subtab-AdminInformation\">
                                <a href=\"/prestashop/admin8/index.php/configure/advanced/system-information/?_token=tvtzWrsqQOnXGmF030nkPeth9uoEYr_Keugvep9OGi0\" class=\"link\"> Informations
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"94\" id=\"subtab-AdminPerformance\">
                                <a href=\"/prestashop/admin8/index.php/configure/advanced/performance/?_token=tvtzWrsqQOnXGmF030nkPeth9uoEYr_Keugvep9OGi0\" class=\"link\"> Performances
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"95\" id=\"subtab-AdminAdmi";
        // line 1172
        echo "nPreferences\">
                                <a href=\"/prestashop/admin8/index.php/configure/advanced/administration/?_token=tvtzWrsqQOnXGmF030nkPeth9uoEYr_Keugvep9OGi0\" class=\"link\"> Administration
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"96\" id=\"subtab-AdminEmails\">
                                <a href=\"/prestashop/admin8/index.php/configure/advanced/emails/?_token=tvtzWrsqQOnXGmF030nkPeth9uoEYr_Keugvep9OGi0\" class=\"link\"> E-mail
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"97\" id=\"subtab-AdminImport\">
                                <a href=\"/prestashop/admin8/index.php/configure/advanced/import/?_token=tvtzWrsqQOnXGmF030nkPeth9uoEYr_Keugvep9OGi0\" class=\"link\"> Importer
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"98\" id=\"subtab-AdminParentEmployees\">
                                <a href=\"/prestashop/admin8/index.php/configure/advanced/employees/?_token=tvtzWrsqQOnXGmF030nkPeth9uoEYr_Keugvep9OGi0\" class=\"link\"> Équipe
                                </a>
                              </li>

                                                                                  
                              
                                          ";
        // line 1203
        echo "                  
                              <li class=\"link-leveltwo\" data-submenu=\"102\" id=\"subtab-AdminParentRequestSql\">
                                <a href=\"/prestashop/admin8/index.php/configure/advanced/sql-requests/?_token=tvtzWrsqQOnXGmF030nkPeth9uoEYr_Keugvep9OGi0\" class=\"link\"> Base de données
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"105\" id=\"subtab-AdminLogs\">
                                <a href=\"/prestashop/admin8/index.php/configure/advanced/logs/?_token=tvtzWrsqQOnXGmF030nkPeth9uoEYr_Keugvep9OGi0\" class=\"link\"> Logs
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"106\" id=\"subtab-AdminWebservice\">
                                <a href=\"/prestashop/admin8/index.php/configure/advanced/webservice-keys/?_token=tvtzWrsqQOnXGmF030nkPeth9uoEYr_Keugvep9OGi0\" class=\"link\"> Webservice
                                </a>
                              </li>

                                                                                                                                                                                              
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"109\" id=\"subtab-AdminFeatureFlag\">
                                <a href=\"/prestashop/admin8/index.php/configure/advanced/feature-flags/?_token=tvtzWrsqQOnXGmF030nkPeth9uoEYr_Keugvep9OGi0\" class=\"link\"> Fonc";
        // line 1229
        echo "tionnalités nouvelles et expérimentales
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"110\" id=\"subtab-AdminParentSecurity\">
                                <a href=\"/prestashop/admin8/index.php/configure/advanced/security/?_token=tvtzWrsqQOnXGmF030nkPeth9uoEYr_Keugvep9OGi0\" class=\"link\"> Sécurité
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone\" data-submenu=\"126\" id=\"subtab-AdminKlaviyoPsConfig\">
                    <a href=\"http://localhost:8080/prestashop/admin8/index.php?controller=AdminKlaviyoPsConfig&amp;token=1f64821ce5e5075597fda0f0e3288eb3\" class=\"link\">
                      <i class=\"material-icons mi-trending_up\">trending_up</i>
                      <span>
                      Klaviyo
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone\" data-submenu=\"136\" id=\"subtab-AdminPsAssistantSettings\">
                    <a href=\"http://localhost:8080/prestashop/ad";
        // line 1263
        echo "min8/index.php?controller=AdminPsAssistantSettings&amp;token=ffa36d94da51501d0a8c2ce9b1a28e5f\" class=\"link\">
                      <i class=\"material-icons mi-extension\">extension</i>
                      <span>
                      Assistance By PrestaShop
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                        </li>
                              
          
                  </ul>
  </div>
  
</nav>


<div class=\"header-toolbar d-print-none\">
    
  <div class=\"container-fluid\">

    
      <nav aria-label=\"Breadcrumb\">
        <ol class=\"breadcrumb\">
                      <li class=\"breadcrumb-item\">Paramètres généraux</li>
          
                      <li class=\"breadcrumb-item active\">
              <a href=\"/prestashop/admin8/index.php/configure/shop/maintenance/?_token=tvtzWrsqQOnXGmF030nkPeth9uoEYr_Keugvep9OGi0\" aria-current=\"page\">Maintenance</a>
            </li>
                  </ol>
      </nav>
    

    <div class=\"title-row\">
      
          <h1 class=\"title\">
            Maintenance          </h1>
      

      
        <div class=\"toolbar-icons\">
          <div class=\"wrapper\">
            
                        
            
                              <a class=\"btn btn-outline-secondary btn-help btn-sidebar\" href=\"#\"
                   title=\"Aide\"
                   data-toggle=\"sidebar\"
                   data-target=\"#right-sidebar\"
                   data-url=\"/prestashop/admin8/index.php/common/sidebar/https%253A%252F%252Fhelp.prestashop-project.org%252Ffr%252Fdoc%252FAdminMaintenance%253Fversion%253D8.0.4%2526country%253Dfr/Aide?_token=tvtzWrsqQOnXGmF030nkPeth9uoEYr_Keugvep9OGi0\"
                   id=\"product_form_open_h";
        // line 1314
        echo "elp\"
                >
                  Aide
                </a>
                                    </div>
        </div>

      
    </div>
  </div>

  
      <div class=\"page-head-tabs\" id=\"head_tabs\">
      <ul class=\"nav nav-pills\">
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    <li class=\"nav-item\">
                    <a href=\"/prestashop/admin8/index.php/configure/shop/preferences/preferences?_token=tvtzWrsqQOnXGmF030nkPeth9uoEYr_Keugvep9OGi0\" id=\"subtab-AdminPreferences\" class=\"nav-link tab \" data-submenu=\"73\">
                      Paramètres généraux
                      <span class=\"notification-container\">
  ";
        // line 1332
        echo "                      <span class=\"notification-counter\"></span>
                      </span>
                    </a>
                  </li>
                                                                <li class=\"nav-item\">
                    <a href=\"/prestashop/admin8/index.php/configure/shop/maintenance/?_token=tvtzWrsqQOnXGmF030nkPeth9uoEYr_Keugvep9OGi0\" id=\"subtab-AdminMaintenance\" class=\"nav-link tab active current\" data-submenu=\"74\">
                      Maintenance
                      <span class=\"notification-container\">
                        <span class=\"notification-counter\"></span>
                      </span>
                    </a>
                  </li>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                </ul>
    </div>
  
  <div class=\"btn-floating\">
    <button class=\"btn btn-primary collapsed\" data-toggle=\"collapse\" data-target=\".btn-floating-container\" aria-expanded=\"false\">
      <i class=\"material-icons\">add</i>
    </button>
    <div class=\"btn-floating-container collapse\">
      <div class=\"btn-floating-menu\">
        
        
                              <a class=\"btn btn-floating-item btn-help btn-sidebar\" href=\"#\"
               title=\"Aide\"
               data-toggle=\"sidebar\"
               data-target=\"#right-sidebar\"
               data-url=\"/prestashop/admin8/index.php/common/sidebar/https%253A%252F%252Fhelp.prestashop-project.org%252Ffr%252Fdoc%252FAdminMaintenance%253Fversion%253D8.0.4%2526country%253Dfr/Aide?_token=tvtzWrsqQOnXGmF03";
        // line 1359
        echo "0nkPeth9uoEYr_Keugvep9OGi0\"
            >
              Aide
            </a>
                        </div>
    </div>
  </div>
  
</div>

<div id=\"main-div\">
          
      <div class=\"content-div  with-tabs\">

        

                                                        
        <div id=\"ajax_confirmation\" class=\"alert alert-success\" style=\"display: none;\"></div>
<div id=\"content-message-box\"></div>


  ";
        // line 1380
        $this->displayBlock('content_header', $context, $blocks);
        $this->displayBlock('content', $context, $blocks);
        $this->displayBlock('content_footer', $context, $blocks);
        $this->displayBlock('sidebar_right', $context, $blocks);
        echo "

        

      </div>
    </div>

  <div id=\"non-responsive\" class=\"js-non-responsive\">
  <h1>Oh non !</h1>
  <p class=\"mt-3\">
    La version mobile de cette page n'est pas encore disponible.
  </p>
  <p class=\"mt-2\">
    Cette page n'est pas encore disponible sur mobile, merci de la consulter sur ordinateur.
  </p>
  <p class=\"mt-2\">
    Merci.
  </p>
  <a href=\"/prestashop/admin8/index.php/modules/pseditionbasic/homepage?_token=tvtzWrsqQOnXGmF030nkPeth9uoEYr_Keugvep9OGi0\" class=\"btn btn-primary py-1 mt-3\">
    <i class=\"material-icons rtl-flip\">arrow_back</i>
    Précédent
  </a>
</div>
  <div class=\"mobile-layer\"></div>

      <div id=\"footer\" class=\"bootstrap\">
    
</div>
  

      <div class=\"bootstrap\">
      
    </div>
  
";
        // line 1414
        $this->displayBlock('javascripts', $context, $blocks);
        $this->displayBlock('extra_javascripts', $context, $blocks);
        $this->displayBlock('translate_javascripts', $context, $blocks);
        echo "</body>";
        echo "
</html>";
    }

    // line 117
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function block_extra_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 1380
    public function block_content_header($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function block_content_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function block_sidebar_right($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 1414
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function block_extra_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function block_translate_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function getTemplateName()
    {
        return "__string_template__e3241c00be86aa8e5a47945bf37c17fa";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1595 => 1414,  1574 => 1380,  1563 => 117,  1554 => 1414,  1514 => 1380,  1491 => 1359,  1462 => 1332,  1442 => 1314,  1389 => 1263,  1353 => 1229,  1325 => 1203,  1292 => 1172,  1261 => 1143,  1228 => 1112,  1197 => 1083,  1166 => 1054,  1127 => 1017,  1093 => 985,  1062 => 956,  1029 => 925,  997 => 895,  966 => 866,  934 => 836,  902 => 806,  871 => 777,  832 => 740,  801 => 711,  770 => 682,  736 => 650,  701 => 617,  671 => 589,  637 => 557,  604 => 526,  564 => 488,  522 => 448,  493 => 421,  454 => 384,  406 => 338,  352 => 286,  311 => 247,  270 => 208,  253 => 193,  211 => 153,  170 => 117,  141 => 90,  121 => 72,  89 => 42,  46 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__e3241c00be86aa8e5a47945bf37c17fa", "");
    }
}
