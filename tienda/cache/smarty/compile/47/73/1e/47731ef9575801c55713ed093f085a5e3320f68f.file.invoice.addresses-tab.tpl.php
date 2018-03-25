<?php /* Smarty version Smarty-3.1.19, created on 2018-01-13 10:05:05
         compiled from "/var/www/vhosts/eurekadigital.com.co/httpdocs/tienda/pdf/invoice.addresses-tab.tpl" */ ?>
<?php /*%%SmartyHeaderCode:12383601155a5a2021273e59-01833146%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '47731ef9575801c55713ed093f085a5e3320f68f' => 
    array (
      0 => '/var/www/vhosts/eurekadigital.com.co/httpdocs/tienda/pdf/invoice.addresses-tab.tpl',
      1 => 1513833786,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '12383601155a5a2021273e59-01833146',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'order_invoice' => 0,
    'invoice_address' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5a5a2021284b49_10993611',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a5a2021284b49_10993611')) {function content_5a5a2021284b49_10993611($_smarty_tpl) {?>
<table id="addresses-tab" cellspacing="0" cellpadding="0">
	<tr>
		<td width="23%"><span class="bold"> </span><br/><br/>
			<?php if (isset($_smarty_tpl->tpl_vars['order_invoice']->value)) {?><?php echo $_smarty_tpl->tpl_vars['order_invoice']->value->shop_address;?>
<?php }?>
		</td>
		<td width="23%"><span class="bold"></span><br/><br/>
			Cedula o NIT<br>
			Nombre<br>
			<br>
			Direción:<br>
			País<br>
			Telefonos:<br>
			Alumnos:<br>
			Cursos:
			
		</td>
		<td width="53%"><span class="bold"><?php echo smartyTranslate(array('s'=>'Billing Address','pdf'=>'true'),$_smarty_tpl);?>
</span><br/><br/>
				<?php echo $_smarty_tpl->tpl_vars['invoice_address']->value;?>

		</td>
	</tr>
</table>
<?php }} ?>
