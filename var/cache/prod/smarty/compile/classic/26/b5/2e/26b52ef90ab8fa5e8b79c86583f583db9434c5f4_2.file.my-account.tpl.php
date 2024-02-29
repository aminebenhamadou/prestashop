<?php
/* Smarty version 4.3.1, created on 2024-02-27 00:02:49
  from 'C:\xampp\htdocs\prestashop\themes\classic\modules\ps_emailalerts\views\templates\hook\my-account.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_65dd1899944774_54294576',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '26b52ef90ab8fa5e8b79c86583f583db9434c5f4' => 
    array (
      0 => 'C:\\xampp\\htdocs\\prestashop\\themes\\classic\\modules\\ps_emailalerts\\views\\templates\\hook\\my-account.tpl',
      1 => 1708984734,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65dd1899944774_54294576 (Smarty_Internal_Template $_smarty_tpl) {
?>
<a class="col-lg-4 col-md-6 col-sm-6 col-xs-12" id="emailsalerts"
   href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('entity'=>'module','name'=>'ps_emailalerts','controller'=>'account'),$_smarty_tpl ) );?>
" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'My alerts','d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );?>
">
  <span class="link-item">
  <i class="material-icons">&#xE151;</i>
    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'My alerts','d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );?>

  </span>
</a>
<?php }
}
