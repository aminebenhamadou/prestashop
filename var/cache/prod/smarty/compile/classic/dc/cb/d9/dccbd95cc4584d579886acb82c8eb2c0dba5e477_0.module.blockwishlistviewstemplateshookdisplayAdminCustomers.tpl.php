<?php
/* Smarty version 4.3.1, created on 2024-02-27 00:03:22
  from 'module:blockwishlistviewstemplateshookdisplayAdminCustomers.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_65dd18baa224b7_28501068',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'dccbd95cc4584d579886acb82c8eb2c0dba5e477' => 
    array (
      0 => 'module:blockwishlistviewstemplateshookdisplayAdminCustomers.tpl',
      1 => 1708985650,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65dd18baa224b7_28501068 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="col">
  <div class="card">
    <h3 class="card-header">
      <i class="material-icons">remove_red_eye</i>
      <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['blockwishlist']->value,'html','UTF-8' ));?>

      <span class="badge badge-primary rounded">0</span>
    </h3>
    <div class="card-body">
      <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['blockwishlist']->value,'html','UTF-8' ));?>

    </div>
  </div>
</div>
<?php }
}
