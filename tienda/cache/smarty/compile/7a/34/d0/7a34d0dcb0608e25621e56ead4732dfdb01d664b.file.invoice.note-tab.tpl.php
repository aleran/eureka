<?php /* Smarty version Smarty-3.1.19, created on 2018-01-13 10:05:05
         compiled from "/var/www/vhosts/eurekadigital.com.co/httpdocs/tienda/pdf/invoice.note-tab.tpl" */ ?>
<?php /*%%SmartyHeaderCode:21726295a5a20214d40e4-17500055%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7a34d0dcb0608e25621e56ead4732dfdb01d664b' => 
    array (
      0 => '/var/www/vhosts/eurekadigital.com.co/httpdocs/tienda/pdf/invoice.note-tab.tpl',
      1 => 1505529653,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '21726295a5a20214d40e4-17500055',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'order_invoice' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5a5a20214e9e41_79221491',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a5a20214e9e41_79221491')) {function content_5a5a20214e9e41_79221491($_smarty_tpl) {?>
<?php if (isset($_smarty_tpl->tpl_vars['order_invoice']->value->note)&&$_smarty_tpl->tpl_vars['order_invoice']->value->note) {?>
	<tr>
		<td colspan="12" height="10">&nbsp;</td>
	</tr>
	
	<tr>
		<td colspan="6" class="left">
			<table id="note-tab" style="width: 100%">
				<tr>
					<td class="grey"><?php echo smartyTranslate(array('s'=>'Note','pdf'=>'true'),$_smarty_tpl);?>
</td>
				</tr>
				<tr>
					<td class="note"><?php echo nl2br($_smarty_tpl->tpl_vars['order_invoice']->value->note);?>
</td>
				</tr>
			</table>
		</td>
		<td colspan="1">&nbsp;</td>
	</tr>
<?php }?>
<?php }} ?>
