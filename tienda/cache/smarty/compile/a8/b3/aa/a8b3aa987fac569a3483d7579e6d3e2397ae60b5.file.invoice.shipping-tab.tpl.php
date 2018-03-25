<?php /* Smarty version Smarty-3.1.19, created on 2018-01-13 10:05:05
         compiled from "/var/www/vhosts/eurekadigital.com.co/httpdocs/tienda/pdf/invoice.shipping-tab.tpl" */ ?>
<?php /*%%SmartyHeaderCode:16151638315a5a2021585c04-03576759%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a8b3aa987fac569a3483d7579e6d3e2397ae60b5' => 
    array (
      0 => '/var/www/vhosts/eurekadigital.com.co/httpdocs/tienda/pdf/invoice.shipping-tab.tpl',
      1 => 1505529653,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '16151638315a5a2021585c04-03576759',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'carrier' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5a5a20215916a2_89434297',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a5a20215916a2_89434297')) {function content_5a5a20215916a2_89434297($_smarty_tpl) {?>
<table id="shipping-tab" width="100%">
	<tr>
		<td class="shipping center small grey bold" width="44%"><?php echo smartyTranslate(array('s'=>'Carrier','pdf'=>'true'),$_smarty_tpl);?>
</td>
		<td class="shipping center small white" width="56%"><?php echo $_smarty_tpl->tpl_vars['carrier']->value->name;?>
</td>
	</tr>
</table>
<?php }} ?>
