<?php /* Smarty version Smarty-3.1.19, created on 2018-01-13 10:05:05
         compiled from "/var/www/vhosts/eurekadigital.com.co/httpdocs/tienda/pdf/invoice-b2b.tpl" */ ?>
<?php /*%%SmartyHeaderCode:19934982385a5a20215a5351-26035621%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '73049b2f999bbed4435d2b5fd17a26c2a9d331ca' => 
    array (
      0 => '/var/www/vhosts/eurekadigital.com.co/httpdocs/tienda/pdf/invoice-b2b.tpl',
      1 => 1505529653,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '19934982385a5a20215a5351-26035621',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'style_tab' => 0,
    'addresses_tab' => 0,
    'summary_tab' => 0,
    'product_tab' => 0,
    'tax_tab' => 0,
    'total_tab' => 0,
    'payment_tab' => 0,
    'legal_free_text' => 0,
    'HOOK_DISPLAY_PDF' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5a5a20215ca0a4_62498750',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a5a20215ca0a4_62498750')) {function content_5a5a20215ca0a4_62498750($_smarty_tpl) {?>

<?php echo $_smarty_tpl->tpl_vars['style_tab']->value;?>



<table width="100%" id="body" border="0" cellpadding="0" cellspacing="0" style="margin:0;">
	<!-- Invoicing -->
	<tr>
		<td colspan="12">

			<?php echo $_smarty_tpl->tpl_vars['addresses_tab']->value;?>


		</td>
	</tr>

	<tr>
		<td colspan="12" height="30">&nbsp;</td>
	</tr>

	<!-- TVA Info -->
	<tr>
		<td colspan="12">

			<?php echo $_smarty_tpl->tpl_vars['summary_tab']->value;?>


		</td>
	</tr>

	<tr>
		<td colspan="12" height="20">&nbsp;</td>
	</tr>

	<!-- Product -->
	<tr>
		<td colspan="12">

			<?php echo $_smarty_tpl->tpl_vars['product_tab']->value;?>


		</td>
	</tr>

	<tr>
		<td colspan="12" height="10">&nbsp;</td>
	</tr>

	<!-- TVA -->
	<tr>
		<!-- Code TVA -->
		<td colspan="6" class="left">

			<?php echo $_smarty_tpl->tpl_vars['tax_tab']->value;?>


		</td>
		<td colspan="1">&nbsp;</td>
		<!-- Calcule TVA -->
		<td colspan="5" rowspan="5" class="right">

			<?php echo $_smarty_tpl->tpl_vars['total_tab']->value;?>


		</td>
	</tr>

	<tr>
		<td colspan="12" height="10">&nbsp;</td>
	</tr>

	<tr>
		<td colspan="6" class="left">

			<?php echo $_smarty_tpl->tpl_vars['payment_tab']->value;?>


		</td>
		<td colspan="1">&nbsp;</td>
	</tr>

	<tr>
		<td colspan="12" height="10">&nbsp;</td>
	</tr>

	<tr>
		<td colspan="7" class="left small">

			<table>
				<tr>
					<td>
						<p><?php echo nl2br(htmlspecialchars($_smarty_tpl->tpl_vars['legal_free_text']->value, ENT_QUOTES, 'UTF-8', true));?>
</p>
					</td>
				</tr>
			</table>

		</td>
	</tr>

	<!-- Hook -->
	<?php if (isset($_smarty_tpl->tpl_vars['HOOK_DISPLAY_PDF']->value)) {?>
		<tr>
			<td colspan="12" height="30">&nbsp;</td>
		</tr>

		<tr>
			<td colspan="2">&nbsp;</td>
			<td colspan="10">
				<?php echo $_smarty_tpl->tpl_vars['HOOK_DISPLAY_PDF']->value;?>

			</td>
		</tr>
	<?php }?>

</table>
<?php }} ?>
