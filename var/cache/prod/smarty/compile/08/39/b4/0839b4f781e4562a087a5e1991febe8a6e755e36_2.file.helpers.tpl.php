<?php
/* Smarty version 4.3.1, created on 2024-02-26 23:46:30
  from 'C:\xampp\htdocs\prestashop\themes\classic\templates\_partials\helpers.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_65dd14c6293946_12025565',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0839b4f781e4562a087a5e1991febe8a6e755e36' => 
    array (
      0 => 'C:\\xampp\\htdocs\\prestashop\\themes\\classic\\templates\\_partials\\helpers.tpl',
      1 => 1708984729,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65dd14c6293946_12025565 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->smarty->ext->_tplFunction->registerTplFunctions($_smarty_tpl, array (
  'renderLogo' => 
  array (
    'compiled_filepath' => 'C:\\xampp\\htdocs\\prestashop\\var\\cache\\prod\\smarty\\compile\\08\\39\\b4\\0839b4f781e4562a087a5e1991febe8a6e755e36_2.file.helpers.tpl.php',
    'uid' => '0839b4f781e4562a087a5e1991febe8a6e755e36',
    'call_name' => 'smarty_template_function_renderLogo_7430370765dd14c627f410_82794644',
  ),
));
?> 

<?php }
/* smarty_template_function_renderLogo_7430370765dd14c627f410_82794644 */
if (!function_exists('smarty_template_function_renderLogo_7430370765dd14c627f410_82794644')) {
function smarty_template_function_renderLogo_7430370765dd14c627f410_82794644(Smarty_Internal_Template $_smarty_tpl,$params) {
foreach ($params as $key => $value) {
$_smarty_tpl->tpl_vars[$key] = new Smarty_Variable($value, $_smarty_tpl->isRenderingCache);
}
?>

  <a href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['urls']->value['pages']['index'], ENT_QUOTES, 'UTF-8');?>
">
    <img
      class="logo img-fluid"
      src="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['shop']->value['logo_details']['src'], ENT_QUOTES, 'UTF-8');?>
"
      alt="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['shop']->value['name'], ENT_QUOTES, 'UTF-8');?>
"
      width="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['shop']->value['logo_details']['width'], ENT_QUOTES, 'UTF-8');?>
"
      height="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['shop']->value['logo_details']['height'], ENT_QUOTES, 'UTF-8');?>
">
  </a>
<?php
}}
/*/ smarty_template_function_renderLogo_7430370765dd14c627f410_82794644 */
}
