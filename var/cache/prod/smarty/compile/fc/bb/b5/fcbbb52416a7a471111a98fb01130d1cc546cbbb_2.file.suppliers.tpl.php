<?php
/* Smarty version 4.3.1, created on 2024-02-26 23:46:28
  from 'C:\xampp\htdocs\prestashop\themes\classic\templates\catalog\suppliers.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_65dd14c46dd9c4_33041948',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fcbbb52416a7a471111a98fb01130d1cc546cbbb' => 
    array (
      0 => 'C:\\xampp\\htdocs\\prestashop\\themes\\classic\\templates\\catalog\\suppliers.tpl',
      1 => 1708984727,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65dd14c46dd9c4_33041948 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_88560270265dd14c46db1e6_54187415', 'brand_header');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'catalog/brands.tpl');
}
/* {block 'brand_header'} */
class Block_88560270265dd14c46db1e6_54187415 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'brand_header' => 
  array (
    0 => 'Block_88560270265dd14c46db1e6_54187415',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <h1><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Suppliers','d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );?>
</h1>
<?php
}
}
/* {/block 'brand_header'} */
}
