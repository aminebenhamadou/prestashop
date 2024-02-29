<?php
/* Smarty version 4.3.1, created on 2024-02-26 23:46:23
  from 'C:\xampp\htdocs\prestashop\admin\themes\default\template\controllers\carriers\helpers\form\form.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_65dd14bfd9f146_42216640',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2d684f947a7dc4a8abef5702b44ec80d990f454a' => 
    array (
      0 => 'C:\\xampp\\htdocs\\prestashop\\admin\\themes\\default\\template\\controllers\\carriers\\helpers\\form\\form.tpl',
      1 => 1708986164,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65dd14bfd9f146_42216640 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_107246971965dd14bfd8c181_00809341', 'script');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_192651795765dd14bfd8e9e1_86562473', "label");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_37840899965dd14bfd99683_54859238', "field");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "helpers/form/form.tpl");
}
/* {block 'script'} */
class Block_107246971965dd14bfd8c181_00809341 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'script' => 
  array (
    0 => 'Block_107246971965dd14bfd8c181_00809341',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	// At the loading
	($("input[name='is_free']:checked").val() == 0) ? $('#shipping_costs_div').show('toggle'): $('#shipping_costs_div').hide();

	$(document).on('change', "input[name='is_free']", function() {
		($("input[name='is_free']:checked").val() == 0) ? $('#shipping_costs_div').show('toggle'): $('#shipping_costs_div').hide();
	});
<?php
}
}
/* {/block 'script'} */
/* {block "label"} */
class Block_192651795765dd14bfd8e9e1_86562473 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'label' => 
  array (
    0 => 'Block_192651795765dd14bfd8e9e1_86562473',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<?php if ($_smarty_tpl->tpl_vars['input']->value['type'] == 'select' && $_smarty_tpl->tpl_vars['input']->value['name'] == 'id_tax_rules_group') {?>
		<div id="shipping_costs_div" style="display:<?php if ((isset($_smarty_tpl->tpl_vars['fields_value']->value['is_free'])) && $_smarty_tpl->tpl_vars['fields_value']->value['is_free']) {?>none<?php } else { ?>block<?php }?>">
	<?php }?>
	<?php 
$_smarty_tpl->inheritance->callParent($_smarty_tpl, $this, '{$smarty.block.parent}');
?>

<?php
}
}
/* {/block "label"} */
/* {block "field"} */
class Block_37840899965dd14bfd99683_54859238 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'field' => 
  array (
    0 => 'Block_37840899965dd14bfd99683_54859238',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<?php 
$_smarty_tpl->inheritance->callParent($_smarty_tpl, $this, '{$smarty.block.parent}');
?>

	<?php if ($_smarty_tpl->tpl_vars['input']->value['type'] == 'select' && $_smarty_tpl->tpl_vars['input']->value['name'] == 'range_behavior') {?>
		</div>
	<?php }
}
}
/* {/block "field"} */
}
