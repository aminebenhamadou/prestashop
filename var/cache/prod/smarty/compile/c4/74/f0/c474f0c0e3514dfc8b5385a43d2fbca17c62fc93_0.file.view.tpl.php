<?php
/* Smarty version 4.3.1, created on 2024-02-26 23:46:25
  from 'C:\xampp\htdocs\prestashop\admin\themes\default\template\controllers\stats\helpers\view\view.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_65dd14c1a8f6e5_87181396',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c474f0c0e3514dfc8b5385a43d2fbca17c62fc93' => 
    array (
      0 => 'C:\\xampp\\htdocs\\prestashop\\admin\\themes\\default\\template\\controllers\\stats\\helpers\\view\\view.tpl',
      1 => 1708986155,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65dd14c1a8f6e5_87181396 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_13161147665dd14c1a8c9a8_87469536', "override_tpl");
?>


<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "helpers/view/view.tpl");
}
/* {block "override_tpl"} */
class Block_13161147665dd14c1a8c9a8_87469536 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'override_tpl' => 
  array (
    0 => 'Block_13161147665dd14c1a8c9a8_87469536',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<?php echo '<script'; ?>
 type="text/javascript">
		$(function() {
			var btn_save_calendar = $('span[class~="process-icon-save-calendar"]').parent();
			var btn_submit_calendar = $('#submitDatePicker');

			if (btn_save_calendar.length > 0 && btn_submit_calendar.length > 0)
			{
				btn_submit_calendar.hide();
				btn_save_calendar.click(function() {
					btn_submit_calendar.before('<input type="hidden" name="'+btn_submit_calendar.attr("name")+'" value="1" />');

					$('#calendar_form').submit();
				});
			}

			var btn_save_settings = $('span[class~="process-icon-save-settings"]').parent();
			var btn_submit_settings = $('#submitSettings');

			if (btn_save_settings.length > 0 && btn_submit_settings.length > 0)
			{
				btn_submit_settings.hide();
				btn_save_settings.click(function() {
					btn_submit_settings.before('<input type="hidden" name="'+btn_submit_settings.attr("name")+'" value="1" />');

					$('#settings_form').submit();
				});
			}
		});
	<?php echo '</script'; ?>
>
<?php
}
}
/* {/block "override_tpl"} */
}
