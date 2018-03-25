<?php /* Smarty version Smarty-3.1.19, created on 2018-01-13 11:17:37
         compiled from "/var/www/vhosts/eurekadigital.com.co/httpdocs/tienda/pdf/delivery-slip.summary-tab.tpl" */ ?>
<?php /*%%SmartyHeaderCode:11497744075a5a31211d1460-77215306%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f77b5a965de6481ce9e13116b54c086e5b9a8f88' => 
    array (
      0 => '/var/www/vhosts/eurekadigital.com.co/httpdocs/tienda/pdf/delivery-slip.summary-tab.tpl',
      1 => 1505529653,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '11497744075a5a31211d1460-77215306',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'carrier' => 0,
    'order' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5a5a31211ff1c7_65985437',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a5a31211ff1c7_65985437')) {function content_5a5a31211ff1c7_65985437($_smarty_tpl) {?>
<table id="summary-tab" width="100%">
	<tr>
		<th class="header small" valign="middle"><?php echo smartyTranslate(array('s'=>'Order Reference','pdf'=>'true'),$_smarty_tpl);?>
</th>
		<th class="header small" valign="middle"><?php echo smartyTranslate(array('s'=>'Order Date','pdf'=>'true'),$_smarty_tpl);?>
</th>
		<?php if (isset($_smarty_tpl->tpl_vars['carrier']->value)) {?>
			<th class="header small" valign="middle"><?php echo smartyTranslate(array('s'=>'Carrier','pdf'=>'true'),$_smarty_tpl);?>
</th>
		<?php }?>
	</tr>
	<tr>
		<td class="center small white"><?php echo $_smarty_tpl->tpl_vars['order']->value->getUniqReference();?>
</td>
		<td class="center small white"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['dateFormat'][0][0]->dateFormat(array('date'=>$_smarty_tpl->tpl_vars['order']->value->date_add,'full'=>0),$_smarty_tpl);?>
</td>
		<?php if (isset($_smarty_tpl->tpl_vars['carrier']->value)) {?>
			<td class="center small white"><?php echo $_smarty_tpl->tpl_vars['carrier']->value->name;?>
</td>
		<?php }?>
	</tr>
</table>

<?php }} ?>
