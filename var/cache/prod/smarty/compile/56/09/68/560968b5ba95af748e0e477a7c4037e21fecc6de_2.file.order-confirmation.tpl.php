<?php
/* Smarty version 4.3.1, created on 2024-02-26 23:46:28
  from 'C:\xampp\htdocs\prestashop\themes\classic\templates\checkout\order-confirmation.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_65dd14c4e79ef4_98859072',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '560968b5ba95af748e0e477a7c4037e21fecc6de' => 
    array (
      0 => 'C:\\xampp\\htdocs\\prestashop\\themes\\classic\\templates\\checkout\\order-confirmation.tpl',
      1 => 1708984730,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:checkout/_partials/order-confirmation-table.tpl' => 1,
    'file:customer/_partials/account-transformation-form.tpl' => 1,
  ),
),false)) {
function content_65dd14c4e79ef4_98859072 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_20853308565dd14c4e38f92_92697110', 'page_content_container');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_212924617565dd14c4e4f520_98654021', 'page_content_container');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'page.tpl');
}
/* {block 'order_confirmation_header'} */
class Block_187575812065dd14c4e39f36_51964726 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

              <h3 class="h1 card-title">
                <i class="material-icons rtl-no-flip done">&#xE876;</i><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Your order is confirmed','d'=>'Shop.Theme.Checkout'),$_smarty_tpl ) );?>

              </h3>
            <?php
}
}
/* {/block 'order_confirmation_header'} */
/* {block 'hook_order_confirmation'} */
class Block_74970637965dd14c4e4c115_78409600 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

              <?php echo $_smarty_tpl->tpl_vars['HOOK_ORDER_CONFIRMATION']->value;?>

            <?php
}
}
/* {/block 'hook_order_confirmation'} */
/* {block 'page_content_container'} */
class Block_20853308565dd14c4e38f92_92697110 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_content_container' => 
  array (
    0 => 'Block_20853308565dd14c4e38f92_92697110',
  ),
  'order_confirmation_header' => 
  array (
    0 => 'Block_187575812065dd14c4e39f36_51964726',
  ),
  'hook_order_confirmation' => 
  array (
    0 => 'Block_74970637965dd14c4e4c115_78409600',
  ),
);
public $prepend = 'true';
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <section id="content-hook_order_confirmation" class="card">
      <div class="card-block">
        <div class="row">
          <div class="col-md-12">

            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_187575812065dd14c4e39f36_51964726', 'order_confirmation_header', $this->tplIndex);
?>


            <p>
              <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'An email has been sent to your mail address %email%.','d'=>'Shop.Theme.Checkout','sprintf'=>array('%email%'=>$_smarty_tpl->tpl_vars['order_customer']->value['email'])),$_smarty_tpl ) );?>

              <?php if ($_smarty_tpl->tpl_vars['order']->value['details']['invoice_url']) {?>
                                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'You can also [1]download your invoice[/1]','d'=>'Shop.Theme.Checkout','sprintf'=>array('[1]'=>"<a href='".((string)$_smarty_tpl->tpl_vars['order']->value['details']['invoice_url'])."'>",'[/1]'=>"</a>")),$_smarty_tpl ) );?>

              <?php }?>
            </p>

            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_74970637965dd14c4e4c115_78409600', 'hook_order_confirmation', $this->tplIndex);
?>


          </div>
        </div>
      </div>
    </section>
<?php
}
}
/* {/block 'page_content_container'} */
/* {block 'order_confirmation_table'} */
class Block_192931251165dd14c4e50032_26749424 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <?php $_smarty_tpl->_subTemplateRender('file:checkout/_partials/order-confirmation-table.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('products'=>$_smarty_tpl->tpl_vars['order']->value['products'],'subtotals'=>$_smarty_tpl->tpl_vars['order']->value['subtotals'],'totals'=>$_smarty_tpl->tpl_vars['order']->value['totals'],'labels'=>$_smarty_tpl->tpl_vars['order']->value['labels'],'add_product_link'=>false), 0, false);
?>
        <?php
}
}
/* {/block 'order_confirmation_table'} */
/* {block 'order_details'} */
class Block_140560737065dd14c4e567c5_79154736 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <div id="order-details" class="col-md-4">
            <h3 class="h3 card-title"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Order details','d'=>'Shop.Theme.Checkout'),$_smarty_tpl ) );?>
:</h3>
            <ul>
              <li id="order-reference-value"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Order reference: %reference%','d'=>'Shop.Theme.Checkout','sprintf'=>array('%reference%'=>$_smarty_tpl->tpl_vars['order']->value['details']['reference'])),$_smarty_tpl ) );?>
</li>
              <li><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Payment method: %method%','d'=>'Shop.Theme.Checkout','sprintf'=>array('%method%'=>$_smarty_tpl->tpl_vars['order']->value['details']['payment'])),$_smarty_tpl ) );?>
</li>
              <?php if (!$_smarty_tpl->tpl_vars['order']->value['details']['is_virtual']) {?>
                <li>
                  <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Shipping method: %method%','d'=>'Shop.Theme.Checkout','sprintf'=>array('%method%'=>$_smarty_tpl->tpl_vars['order']->value['carrier']['name'])),$_smarty_tpl ) );?>
<br>
                  <em><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['order']->value['carrier']['delay'], ENT_QUOTES, 'UTF-8');?>
</em>
                </li>
              <?php }?>
              <?php if ($_smarty_tpl->tpl_vars['order']->value['details']['recyclable']) {?>
                <li>  
                  <em><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'You have given permission to receive your order in recycled packaging.','d'=>"Shop.Theme.Customeraccount"),$_smarty_tpl ) );?>
</em>
                </li>
              <?php }?>
            </ul>
          </div>
        <?php
}
}
/* {/block 'order_details'} */
/* {block 'hook_payment_return'} */
class Block_28334086965dd14c4e6b3e9_16312736 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php if (!empty($_smarty_tpl->tpl_vars['HOOK_PAYMENT_RETURN']->value)) {?>
    <section id="content-hook_payment_return" class="card definition-list">
      <div class="card-block">
        <div class="row">
          <div class="col-md-12">
            <?php echo $_smarty_tpl->tpl_vars['HOOK_PAYMENT_RETURN']->value;?>

          </div>
        </div>
      </div>
    </section>
    <?php }?>
  <?php
}
}
/* {/block 'hook_payment_return'} */
/* {block 'account_transformation_form'} */
class Block_105208896865dd14c4e71d02_93696696 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <div class="card">
        <div class="card-block">
          <?php $_smarty_tpl->_subTemplateRender('file:customer/_partials/account-transformation-form.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
        </div>
      </div>
    <?php
}
}
/* {/block 'account_transformation_form'} */
/* {block 'hook_order_confirmation_1'} */
class Block_213139337965dd14c4e74540_00110603 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayOrderConfirmation1'),$_smarty_tpl ) );?>

  <?php
}
}
/* {/block 'hook_order_confirmation_1'} */
/* {block 'hook_order_confirmation_2'} */
class Block_83287737065dd14c4e76ba9_39734712 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <section id="content-hook-order-confirmation-footer">
      <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayOrderConfirmation2'),$_smarty_tpl ) );?>

    </section>
  <?php
}
}
/* {/block 'hook_order_confirmation_2'} */
/* {block 'page_content_container'} */
class Block_212924617565dd14c4e4f520_98654021 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_content_container' => 
  array (
    0 => 'Block_212924617565dd14c4e4f520_98654021',
  ),
  'order_confirmation_table' => 
  array (
    0 => 'Block_192931251165dd14c4e50032_26749424',
  ),
  'order_details' => 
  array (
    0 => 'Block_140560737065dd14c4e567c5_79154736',
  ),
  'hook_payment_return' => 
  array (
    0 => 'Block_28334086965dd14c4e6b3e9_16312736',
  ),
  'account_transformation_form' => 
  array (
    0 => 'Block_105208896865dd14c4e71d02_93696696',
  ),
  'hook_order_confirmation_1' => 
  array (
    0 => 'Block_213139337965dd14c4e74540_00110603',
  ),
  'hook_order_confirmation_2' => 
  array (
    0 => 'Block_83287737065dd14c4e76ba9_39734712',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <section id="content" class="page-content page-order-confirmation card">
    <div class="card-block">
      <div class="row">

        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_192931251165dd14c4e50032_26749424', 'order_confirmation_table', $this->tplIndex);
?>


        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_140560737065dd14c4e567c5_79154736', 'order_details', $this->tplIndex);
?>


      </div>
    </div>
  </section>

  <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_28334086965dd14c4e6b3e9_16312736', 'hook_payment_return', $this->tplIndex);
?>


  <?php if (!$_smarty_tpl->tpl_vars['registered_customer_exists']->value) {?>
    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_105208896865dd14c4e71d02_93696696', 'account_transformation_form', $this->tplIndex);
?>

  <?php }?>

  <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_213139337965dd14c4e74540_00110603', 'hook_order_confirmation_1', $this->tplIndex);
?>


  <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_83287737065dd14c4e76ba9_39734712', 'hook_order_confirmation_2', $this->tplIndex);
?>

<?php
}
}
/* {/block 'page_content_container'} */
}
