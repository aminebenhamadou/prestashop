<?php
/* Smarty version 4.3.1, created on 2024-02-26 23:55:06
  from 'C:\xampp\htdocs\prestashop\admin8\themes\new-theme\template\content.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_65dd16ca6c1263_67544281',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '82028f601fb2cf646cf90b00c980d7d8a9631656' => 
    array (
      0 => 'C:\\xampp\\htdocs\\prestashop\\admin8\\themes\\new-theme\\template\\content.tpl',
      1 => 1708986128,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65dd16ca6c1263_67544281 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div id="ajax_confirmation" class="alert alert-success" style="display: none;"></div>
<div id="content-message-box"></div>


<?php if ((isset($_smarty_tpl->tpl_vars['content']->value))) {?>
  <?php echo $_smarty_tpl->tpl_vars['content']->value;?>

<?php }
}
}
