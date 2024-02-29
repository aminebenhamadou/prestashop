<?php
/* Smarty version 4.3.1, created on 2024-02-26 23:46:25
  from 'C:\xampp\htdocs\prestashop\admin\themes\default\template\controllers\shop_url\helpers\list\list_content.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_65dd14c198f9c8_72348663',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '80f9e5bbcf33e3894435e53c7667392f541f1766' => 
    array (
      0 => 'C:\\xampp\\htdocs\\prestashop\\admin\\themes\\default\\template\\controllers\\shop_url\\helpers\\list\\list_content.tpl',
      1 => 1708986156,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65dd14c198f9c8_72348663 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_211489862165dd14c1988746_85890605', "td_content");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "helpers/list/list_content.tpl");
}
/* {block "td_content"} */
class Block_211489862165dd14c1988746_85890605 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'td_content' => 
  array (
    0 => 'Block_211489862165dd14c1988746_85890605',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<?php if ($_smarty_tpl->tpl_vars['key']->value == 'url') {?>
		<a href="<?php echo $_smarty_tpl->tpl_vars['tr']->value[$_smarty_tpl->tpl_vars['key']->value];?>
" onmouseover="$(this).css('text-decoration', 'underline')" onmouseout="$(this).css('text-decoration', 'none')" target="_blank" rel="noopener noreferrer nofollow"><?php echo $_smarty_tpl->tpl_vars['tr']->value[$_smarty_tpl->tpl_vars['key']->value];?>
</a>
	<?php } else { ?>
		<?php 
$_smarty_tpl->inheritance->callParent($_smarty_tpl, $this, '{$smarty.block.parent}');
?>

	<?php }
}
}
/* {/block "td_content"} */
}
