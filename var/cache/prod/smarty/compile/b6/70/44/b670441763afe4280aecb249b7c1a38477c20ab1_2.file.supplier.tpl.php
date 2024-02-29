<?php
/* Smarty version 4.3.1, created on 2024-02-26 23:46:28
  from 'C:\xampp\htdocs\prestashop\themes\classic\templates\catalog\listing\supplier.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_65dd14c45e76c3_28746850',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b670441763afe4280aecb249b7c1a38477c20ab1' => 
    array (
      0 => 'C:\\xampp\\htdocs\\prestashop\\themes\\classic\\templates\\catalog\\listing\\supplier.tpl',
      1 => 1708984727,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:catalog/_partials/products.tpl' => 1,
  ),
),false)) {
function content_65dd14c45e76c3_28746850 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_10873843565dd14c45dd9e4_73598551', 'product_list_header');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_23264620565dd14c45e40b7_93540006', 'product_list');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'catalog/listing/product-list.tpl');
}
/* {block 'product_list_header'} */
class Block_10873843565dd14c45dd9e4_73598551 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_list_header' => 
  array (
    0 => 'Block_10873843565dd14c45dd9e4_73598551',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <h1><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'List of products by supplier %s','sprintf'=>array($_smarty_tpl->tpl_vars['supplier']->value['name']),'d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );?>
</h1>
  <div id="supplier-description"><?php echo $_smarty_tpl->tpl_vars['supplier']->value['description'];?>
</div>
<?php
}
}
/* {/block 'product_list_header'} */
/* {block 'product_list'} */
class Block_23264620565dd14c45e40b7_93540006 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_list' => 
  array (
    0 => 'Block_23264620565dd14c45e40b7_93540006',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/products.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('listing'=>$_smarty_tpl->tpl_vars['listing']->value,'productClass'=>"col-xs-12 col-sm-6 col-xl-3"), 0, false);
}
}
/* {/block 'product_list'} */
}
