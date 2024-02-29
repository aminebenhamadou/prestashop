<?php
/* Smarty version 4.3.1, created on 2024-02-26 23:46:29
  from 'C:\xampp\htdocs\prestashop\themes\classic\templates\errors\forbidden.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_65dd14c5dfa484_05723987',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '123863a503df9b98de4ea29295bf151b70d7f8b8' => 
    array (
      0 => 'C:\\xampp\\htdocs\\prestashop\\themes\\classic\\templates\\errors\\forbidden.tpl',
      1 => 1708984732,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65dd14c5dfa484_05723987 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_80010900665dd14c5de8ad7_74849857', 'content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, $_smarty_tpl->tpl_vars['layout']->value);
}
/* {block 'page_title'} */
class Block_190470610865dd14c5ded327_59315190 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['shop']->value['name'], ENT_QUOTES, 'UTF-8');
}
}
/* {/block 'page_title'} */
/* {block 'page_header'} */
class Block_95010619665dd14c5dec340_99234728 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <h1><?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_190470610865dd14c5ded327_59315190', 'page_title', $this->tplIndex);
?>
</h1>
        <?php
}
}
/* {/block 'page_header'} */
/* {block 'page_header_container'} */
class Block_174988812265dd14c5de9bd9_93577976 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <header class="page-header">
      <div class="logo"><img src="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['shop']->value['logo'], ENT_QUOTES, 'UTF-8');?>
" alt="logo" loading="lazy"></div>
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_95010619665dd14c5dec340_99234728', 'page_header', $this->tplIndex);
?>

    </header>
  <?php
}
}
/* {/block 'page_header_container'} */
/* {block 'page_content'} */
class Block_159040258665dd14c5df2ac7_98279750 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <h2><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'403 Forbidden','d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>
</h2>
          <p><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>"You are not allowed to access this page.",'d'=>"Shop.Theme.Global"),$_smarty_tpl ) );?>
</p>
        <?php
}
}
/* {/block 'page_content'} */
/* {block 'page_content_container'} */
class Block_72605127565dd14c5df1af2_63542476 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <section id="content" class="page-content page-restricted">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_159040258665dd14c5df2ac7_98279750', 'page_content', $this->tplIndex);
?>

    </section>
  <?php
}
}
/* {/block 'page_content_container'} */
/* {block 'page_footer_container'} */
class Block_173723046765dd14c5df8280_80652167 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


  <?php
}
}
/* {/block 'page_footer_container'} */
/* {block 'content'} */
class Block_80010900665dd14c5de8ad7_74849857 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_80010900665dd14c5de8ad7_74849857',
  ),
  'page_header_container' => 
  array (
    0 => 'Block_174988812265dd14c5de9bd9_93577976',
  ),
  'page_header' => 
  array (
    0 => 'Block_95010619665dd14c5dec340_99234728',
  ),
  'page_title' => 
  array (
    0 => 'Block_190470610865dd14c5ded327_59315190',
  ),
  'page_content_container' => 
  array (
    0 => 'Block_72605127565dd14c5df1af2_63542476',
  ),
  'page_content' => 
  array (
    0 => 'Block_159040258665dd14c5df2ac7_98279750',
  ),
  'page_footer_container' => 
  array (
    0 => 'Block_173723046765dd14c5df8280_80652167',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


  <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_174988812265dd14c5de9bd9_93577976', 'page_header_container', $this->tplIndex);
?>


  <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_72605127565dd14c5df1af2_63542476', 'page_content_container', $this->tplIndex);
?>


  <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_173723046765dd14c5df8280_80652167', 'page_footer_container', $this->tplIndex);
?>

<?php
}
}
/* {/block 'content'} */
}
