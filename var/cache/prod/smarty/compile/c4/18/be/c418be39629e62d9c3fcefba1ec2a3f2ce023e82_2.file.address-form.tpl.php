<?php
/* Smarty version 4.3.1, created on 2024-02-26 23:46:28
  from 'C:\xampp\htdocs\prestashop\themes\classic\templates\checkout\_partials\address-form.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_65dd14c4ec8d67_01336374',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c418be39629e62d9c3fcefba1ec2a3f2ce023e82' => 
    array (
      0 => 'C:\\xampp\\htdocs\\prestashop\\themes\\classic\\templates\\checkout\\_partials\\address-form.tpl',
      1 => 1708984731,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65dd14c4ec8d67_01336374 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_213437486365dd14c4e98910_87733164', 'form_field');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_210361118065dd14c4ea64b5_13168861', "address_form_url");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_93423896765dd14c4ead4f2_02439089', 'form_fields');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_171064111165dd14c4eb4364_89504994', 'form_buttons');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'customer/_partials/address-form.tpl');
}
/* {block 'form_field'} */
class Block_213437486365dd14c4e98910_87733164 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'form_field' => 
  array (
    0 => 'Block_213437486365dd14c4e98910_87733164',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <?php if ($_smarty_tpl->tpl_vars['field']->value['name'] == "alias" && $_smarty_tpl->tpl_vars['customer']->value['is_guest']) {?>
      <?php } else { ?>
    <?php 
$_smarty_tpl->inheritance->callParent($_smarty_tpl, $this, '{$smarty.block.parent}');
?>

  <?php }
}
}
/* {/block 'form_field'} */
/* {block "address_form_url"} */
class Block_210361118065dd14c4ea64b5_13168861 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'address_form_url' => 
  array (
    0 => 'Block_210361118065dd14c4ea64b5_13168861',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <form
      method="POST"
      action="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('entity'=>'order','params'=>array('id_address'=>$_smarty_tpl->tpl_vars['id_address']->value)),$_smarty_tpl ) );?>
"
      data-id-address="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id_address']->value, ENT_QUOTES, 'UTF-8');?>
"
      data-refresh-url="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('entity'=>'order','params'=>array('ajax'=>1,'action'=>'addressForm')),$_smarty_tpl ) );?>
"
    >
<?php
}
}
/* {/block "address_form_url"} */
/* {block 'form_fields'} */
class Block_93423896765dd14c4ead4f2_02439089 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'form_fields' => 
  array (
    0 => 'Block_93423896765dd14c4ead4f2_02439089',
  ),
);
public $append = 'true';
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <input type="hidden" name="saveAddress" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['type']->value, ENT_QUOTES, 'UTF-8');?>
">
  <?php if ($_smarty_tpl->tpl_vars['type']->value === "delivery") {?>
    <div class="form-group row">
      <div class="col-md-9 col-md-offset-3">
        <input name = "use_same_address" id="use_same_address" type = "checkbox" value = "1" <?php if ($_smarty_tpl->tpl_vars['use_same_address']->value) {?> checked <?php }?>>
        <label for="use_same_address"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Use this address for invoice too','d'=>'Shop.Theme.Checkout'),$_smarty_tpl ) );?>
</label>
      </div>
    </div>
  <?php }
}
}
/* {/block 'form_fields'} */
/* {block 'form_buttons'} */
class Block_171064111165dd14c4eb4364_89504994 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'form_buttons' => 
  array (
    0 => 'Block_171064111165dd14c4eb4364_89504994',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\prestashop\\vendor\\smarty\\smarty\\libs\\plugins\\modifier.count.php','function'=>'smarty_modifier_count',),));
?>

  <?php if (!$_smarty_tpl->tpl_vars['form_has_continue_button']->value) {?>
    <button type="submit" class="btn btn-primary float-xs-right"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Save','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>
</button>
    <a class="js-cancel-address cancel-address float-xs-right" href="<?php ob_start();
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['type']->value, ENT_QUOTES, 'UTF-8');
$_prefixVariable1 = ob_get_clean();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('entity'=>'order','params'=>array('cancelAddress'=>$_prefixVariable1)),$_smarty_tpl ) );?>
"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Cancel','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>
</a>
  <?php } else { ?>
    <form>
      <button type="submit" class="continue btn btn-primary float-xs-right" name="confirm-addresses" value="1">
          <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Continue','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>

      </button>
      <?php if (smarty_modifier_count($_smarty_tpl->tpl_vars['customer']->value['addresses']) > 0) {?>
        <a class="js-cancel-address cancel-address float-xs-right" href="<?php ob_start();
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['type']->value, ENT_QUOTES, 'UTF-8');
$_prefixVariable2 = ob_get_clean();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('entity'=>'order','params'=>array('cancelAddress'=>$_prefixVariable2)),$_smarty_tpl ) );?>
"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Cancel','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>
</a>
      <?php }?>
    </form>
  <?php }
}
}
/* {/block 'form_buttons'} */
}
