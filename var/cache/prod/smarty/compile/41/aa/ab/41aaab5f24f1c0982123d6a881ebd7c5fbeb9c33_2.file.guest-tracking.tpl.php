<?php
/* Smarty version 4.3.1, created on 2024-02-26 23:46:29
  from 'C:\xampp\htdocs\prestashop\themes\classic\templates\customer\guest-tracking.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_65dd14c5774525_50583635',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '41aaab5f24f1c0982123d6a881ebd7c5fbeb9c33' => 
    array (
      0 => 'C:\\xampp\\htdocs\\prestashop\\themes\\classic\\templates\\customer\\guest-tracking.tpl',
      1 => 1708984732,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:customer/_partials/order-detail-no-return.tpl' => 1,
    'file:customer/_partials/account-transformation-form.tpl' => 1,
  ),
),false)) {
function content_65dd14c5774525_50583635 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_4312283265dd14c5767ca5_33817595', 'page_title');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_184373591865dd14c576aba2_27001832', 'order_detail');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_86789552965dd14c576d9a6_52345093', 'order_messages');
?>


<?php if (!$_smarty_tpl->tpl_vars['registered_customer_exists']->value) {?>
  <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_72424862965dd14c57701c4_36348625', 'page_content');
?>

<?php }
$_smarty_tpl->inheritance->endChild($_smarty_tpl, 'customer/order-detail.tpl');
}
/* {block 'page_title'} */
class Block_4312283265dd14c5767ca5_33817595 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_title' => 
  array (
    0 => 'Block_4312283265dd14c5767ca5_33817595',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Guest Tracking','d'=>'Shop.Theme.Customeraccount'),$_smarty_tpl ) );?>

<?php
}
}
/* {/block 'page_title'} */
/* {block 'order_detail'} */
class Block_184373591865dd14c576aba2_27001832 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'order_detail' => 
  array (
    0 => 'Block_184373591865dd14c576aba2_27001832',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <?php $_smarty_tpl->_subTemplateRender('file:customer/_partials/order-detail-no-return.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
/* {/block 'order_detail'} */
/* {block 'order_messages'} */
class Block_86789552965dd14c576d9a6_52345093 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'order_messages' => 
  array (
    0 => 'Block_86789552965dd14c576d9a6_52345093',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<?php
}
}
/* {/block 'order_messages'} */
/* {block 'account_transformation_form'} */
class Block_164048902965dd14c5771007_37705502 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <?php $_smarty_tpl->_subTemplateRender('file:customer/_partials/account-transformation-form.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <?php
}
}
/* {/block 'account_transformation_form'} */
/* {block 'page_content'} */
class Block_72424862965dd14c57701c4_36348625 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_content' => 
  array (
    0 => 'Block_72424862965dd14c57701c4_36348625',
  ),
  'account_transformation_form' => 
  array (
    0 => 'Block_164048902965dd14c5771007_37705502',
  ),
);
public $append = 'true';
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_164048902965dd14c5771007_37705502', 'account_transformation_form', $this->tplIndex);
?>

  <?php
}
}
/* {/block 'page_content'} */
}
