<?php /* Smarty version Smarty-3.1.19, created on 2018-01-13 11:17:37
         compiled from "/var/www/vhosts/eurekadigital.com.co/httpdocs/tienda/pdf/delivery-slip.addresses-tab.tpl" */ ?>
<?php /*%%SmartyHeaderCode:11063403605a5a3121191247-56819432%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8cb584dee217d95050b31b32c8e745b782524e25' => 
    array (
      0 => '/var/www/vhosts/eurekadigital.com.co/httpdocs/tienda/pdf/delivery-slip.addresses-tab.tpl',
      1 => 1505529653,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '11063403605a5a3121191247-56819432',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'order_invoice' => 0,
    'invoice_address' => 0,
    'delivery_address' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5a5a31211becb9_84733900',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a5a31211becb9_84733900')) {function content_5a5a31211becb9_84733900($_smarty_tpl) {?>
<table id="addresses-tab" cellspacing="0" cellpadding="0">
	<tr>
		<td width="33%"><span class="bold"> </span><br/><br/>
			<?php echo $_smarty_tpl->tpl_vars['order_invoice']->value->shop_address;?>

		</td>
		<?php if (!empty($_smarty_tpl->tpl_vars['invoice_address']->value)) {?>
			<td width="33%"><?php if ($_smarty_tpl->tpl_vars['delivery_address']->value) {?><span class="bold"><?php echo smartyTranslate(array('s'=>'Delivery Address','pdf'=>'true'),$_smarty_tpl);?>
</span><br/><br/>
					<?php echo $_smarty_tpl->tpl_vars['delivery_address']->value;?>

				<?php }?>
			</td>
			<td width="33%"><span class="bold"><?php echo smartyTranslate(array('s'=>'Billing Address','pdf'=>'true'),$_smarty_tpl);?>
</span><br/><br/>
				<?php echo $_smarty_tpl->tpl_vars['invoice_address']->value;?>

			</td>
		<?php } else { ?>
			<td width="66%"><?php if ($_smarty_tpl->tpl_vars['delivery_address']->value) {?><span class="bold"><?php echo smartyTranslate(array('s'=>'Billing & Delivery Address','pdf'=>'true'),$_smarty_tpl);?>
</span><br/><br/>
					<?php echo $_smarty_tpl->tpl_vars['delivery_address']->value;?>

				<?php }?>
			</td>
		<?php }?>
	</tr>
</table>
<?php }} ?>
