<?php /* Smarty version Smarty-3.1.19, created on 2018-01-13 10:05:05
         compiled from "/var/www/vhosts/eurekadigital.com.co/httpdocs/tienda/pdf/invoice.summary-tab.tpl" */ ?>
<?php /*%%SmartyHeaderCode:5227951795a5a2021295c37-11885430%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '97faf359b1a2b692d4f63bd07c46ae3a5f6bd5c5' => 
    array (
      0 => '/var/www/vhosts/eurekadigital.com.co/httpdocs/tienda/pdf/invoice.summary-tab.tpl',
      1 => 1505529653,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '5227951795a5a2021295c37-11885430',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'addresses' => 0,
    'title' => 0,
    'order' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5a5a20212c7c33_50113142',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a5a20212c7c33_50113142')) {function content_5a5a20212c7c33_50113142($_smarty_tpl) {?>
<table id="summary-tab" width="100%">
	<tr>
		<th class="header small" valign="middle"><?php echo smartyTranslate(array('s'=>'Invoice Number','pdf'=>'true'),$_smarty_tpl);?>
</th>
		<th class="header small" valign="middle"><?php echo smartyTranslate(array('s'=>'Invoice Date','pdf'=>'true'),$_smarty_tpl);?>
</th>
		<th class="header small" valign="middle"><?php echo smartyTranslate(array('s'=>'Order Reference','pdf'=>'true'),$_smarty_tpl);?>
</th>
		<th class="header small" valign="middle"><?php echo smartyTranslate(array('s'=>'Order date','pdf'=>'true'),$_smarty_tpl);?>
</th>
		<?php if ($_smarty_tpl->tpl_vars['addresses']->value['invoice']->vat_number) {?>
			<th class="header small" valign="middle"><?php echo smartyTranslate(array('s'=>'VAT Number','pdf'=>'true'),$_smarty_tpl);?>
</th>
		<?php }?>
	</tr>
	<tr>
		<td class="center small white"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['title']->value, ENT_QUOTES, 'UTF-8', true);?>
</td>
		<td class="center small white"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['dateFormat'][0][0]->dateFormat(array('date'=>$_smarty_tpl->tpl_vars['order']->value->invoice_date,'full'=>0),$_smarty_tpl);?>
</td>
		<td class="center small white"><?php echo $_smarty_tpl->tpl_vars['order']->value->getUniqReference();?>
</td>
		<td class="center small white"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['dateFormat'][0][0]->dateFormat(array('date'=>$_smarty_tpl->tpl_vars['order']->value->date_add,'full'=>0),$_smarty_tpl);?>
</td>
		<?php if ($_smarty_tpl->tpl_vars['addresses']->value['invoice']->vat_number) {?>
			<td class="center small white">
				<?php echo $_smarty_tpl->tpl_vars['addresses']->value['invoice']->vat_number;?>

			</td>
		<?php }?>
	</tr>
</table>
<?php }} ?>
