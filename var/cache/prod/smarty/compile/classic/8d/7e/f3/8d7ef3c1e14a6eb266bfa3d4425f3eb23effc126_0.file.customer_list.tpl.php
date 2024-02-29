<?php
/* Smarty version 4.3.1, created on 2024-02-27 00:03:22
  from 'C:\xampp\htdocs\prestashop\modules\formclient\views\templates\admin\customer_list.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_65dd18baa8f916_05791186',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8d7ef3c1e14a6eb266bfa3d4425f3eb23effc126' => 
    array (
      0 => 'C:\\xampp\\htdocs\\prestashop\\modules\\formclient\\views\\templates\\admin\\customer_list.tpl',
      1 => 1689946048,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65dd18baa8f916_05791186 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="card customer-last-connections-card">
    <h3 class="card-header">
      <i class="material-icons">remove_red_eye</i>
      Informations Supplémentaires
      <span class="badge badge-primary rounded">1</span>
    </h3>
    <div class="card-body">
      <table class="table">
        <thead>
        <tr>
          <th>Societe</th>
          <th>Telephone</th>
          <th>Pays</th>
        </tr>
        </thead>
        <tbody>
           <tr class="customer-last-connection">
           <td class="customer-last-connection-ciete"><?php if ($_smarty_tpl->tpl_vars['societe']->value) {?>
    <div class="form-group">
        <div class="controls"><?php echo $_smarty_tpl->tpl_vars['societe']->value;?>
</div>
    </div>
    <?php }?>
        </td>
            <td class="customer-last-connection-date"> 
    <?php if ($_smarty_tpl->tpl_vars['Telephone']->value) {?>
    <div class="form-group">
            <div class="controls"><?php echo $_smarty_tpl->tpl_vars['Telephone']->value;?>
</div>
    </div>
    <?php }?>
         </td>
            <td class="customer-last-connection-pages-viewed">
    <?php if ($_smarty_tpl->tpl_vars['Pays']->value) {?>
    <div class="form-group">
       
        <div class="controls"><?php echo $_smarty_tpl->tpl_vars['Pays']->value;?>
</div>
    </div>
    <?php }?></td>
            
          </tr>
                </tbody>
      </table>
    </div>

  
    </div><?php }
}
