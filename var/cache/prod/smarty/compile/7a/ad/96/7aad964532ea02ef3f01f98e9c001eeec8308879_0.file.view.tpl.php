<?php
/* Smarty version 4.3.1, created on 2024-02-26 23:46:24
  from 'C:\xampp\htdocs\prestashop\admin\themes\default\template\controllers\groups\helpers\view\view.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_65dd14c0bb1439_23884385',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7aad964532ea02ef3f01f98e9c001eeec8308879' => 
    array (
      0 => 'C:\\xampp\\htdocs\\prestashop\\admin\\themes\\default\\template\\controllers\\groups\\helpers\\view\\view.tpl',
      1 => 1708986158,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65dd14c0bb1439_23884385 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_96091763565dd14c0b8a785_79643978', "override_tpl");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "helpers/view/view.tpl");
}
/* {block "override_tpl"} */
class Block_96091763565dd14c0b8a785_79643978 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'override_tpl' => 
  array (
    0 => 'Block_96091763565dd14c0b8a785_79643978',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<div class="row">
	<div class="col-lg-6">
		<div class="panel">
			<h3><i class="icon-group"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Group information','d'=>'Admin.Shopparameters.Feature'),$_smarty_tpl ) );?>
</h3>
			<h2><i class="icon-group"></i> <?php echo $_smarty_tpl->tpl_vars['group']->value->name[$_smarty_tpl->tpl_vars['language']->value->id];?>
</h2>
			<div class="form-horizontal">
				<div class="form-group">
					<label class="col-lg-3 control-label"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Discount:'),$_smarty_tpl ) );?>
</label>
					<div class="col-lg-3"><p class="form-control-static"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Discount: %.2f%%','sprintf'=>array($_smarty_tpl->tpl_vars['group']->value->reduction),'d'=>'Admin.Shopparameters.Feature'),$_smarty_tpl ) );?>
</p></div>
				</div>
				<div class="form-group">
					<label class="col-lg-3 control-label"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Price display method:','d'=>'Admin.Shopparameters.Feature'),$_smarty_tpl ) );?>
</label>
					<div class="col-lg-3"><p class="form-control-static"><?php if ($_smarty_tpl->tpl_vars['group']->value->price_display_method) {?>
					<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Tax excluded','d'=>'Admin.Global'),$_smarty_tpl ) );?>

				<?php } else { ?>
					<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Tax included','d'=>'Admin.Global'),$_smarty_tpl ) );?>

				<?php }?></p></div>
				</div>
				<div class="form-group">
					<label class="col-lg-3 control-label"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Show prices:','d'=>'Admin.Shopparameters.Feature'),$_smarty_tpl ) );?>
</label>
					<div class="col-lg-3"><p class="form-control-static"><?php if ($_smarty_tpl->tpl_vars['group']->value->show_prices) {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Yes','d'=>'Admin.Global'),$_smarty_tpl ) );
} else {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'No','d'=>'Admin.Global'),$_smarty_tpl ) );
}?></p></div>
				</div>
			</div>
		</div>
	</div>
	<div class="col-lg-6">
		<div class="panel">
			<h3><i class="icon-dollar"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Current category discount','d'=>'Admin.Shopparameters.Feature'),$_smarty_tpl ) );?>
</h3>
			<?php if (!$_smarty_tpl->tpl_vars['categorieReductions']->value) {?>
				<div class="alert alert-warning"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'None','d'=>'Admin.Global'),$_smarty_tpl ) );?>
</div>
			<?php } else { ?>
				<table class="table">
					<thead>
						<tr>
							<th><span class="title_box"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Category','d'=>'Admin.Global'),$_smarty_tpl ) );?>
</span></th>
							<th><span class="title_box"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Discount','d'=>'Admin.Global'),$_smarty_tpl ) );?>
</span></th>
						</tr>
					</thead>
					<tbody>
					<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['categorieReductions']->value, 'category', false, 'key');
$_smarty_tpl->tpl_vars['category']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['category']->value) {
$_smarty_tpl->tpl_vars['category']->do_else = false;
?>
						<tr class="alt_row">
							<td><?php echo $_smarty_tpl->tpl_vars['category']->value['path'];?>
</td>
							<td><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Discount: %.2f%%','sprintf'=>array($_smarty_tpl->tpl_vars['category']->value['reduction']),'d'=>'Admin.Shopparameters.Feature'),$_smarty_tpl ) );?>
</td>
						</tr>
					<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
					<tbody>
				</table>
			<?php }?>
		</div>
	</div>
</div>
<div class="row">
	<div class="col-lg-12">
		<h2><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Members of this customer group','d'=>'Admin.Shopparameters.Feature'),$_smarty_tpl ) );?>
</h2>
		<p><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Limited to the first 100 customers.','d'=>'Admin.Shopparameters.Feature'),$_smarty_tpl ) );?>
 <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Please use filters to narrow your search.','d'=>'Admin.Shopparameters.Feature'),$_smarty_tpl ) );?>
</p>
		<?php echo $_smarty_tpl->tpl_vars['customerList']->value;?>

	</div>
</div>
<?php
}
}
/* {/block "override_tpl"} */
}
