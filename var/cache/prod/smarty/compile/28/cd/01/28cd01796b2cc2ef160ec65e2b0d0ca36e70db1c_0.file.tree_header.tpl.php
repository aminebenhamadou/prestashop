<?php
/* Smarty version 4.3.1, created on 2024-02-26 23:46:27
  from 'C:\xampp\htdocs\prestashop\admin\themes\default\template\helpers\tree\tree_header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_65dd14c38b1058_88769290',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '28cd01796b2cc2ef160ec65e2b0d0ca36e70db1c' => 
    array (
      0 => 'C:\\xampp\\htdocs\\prestashop\\admin\\themes\\default\\template\\helpers\\tree\\tree_header.tpl',
      1 => 1708986166,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65dd14c38b1058_88769290 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="tree-panel-heading-controls clearfix">
	<?php if ((isset($_smarty_tpl->tpl_vars['title']->value))) {?><i class="icon-tag"></i>&nbsp;<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>$_smarty_tpl->tpl_vars['title']->value),$_smarty_tpl ) );
}?>
	<?php if ((isset($_smarty_tpl->tpl_vars['toolbar']->value))) {
echo $_smarty_tpl->tpl_vars['toolbar']->value;
}?>
</div>
<?php }
}
