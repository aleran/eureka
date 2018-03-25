<?php /* Smarty version Smarty-3.1.19, created on 2018-01-12 10:53:34
         compiled from "/var/www/vhosts/eurekadigital.com.co/httpdocs/tienda/modules/payulatam/views/templates/hook/payulatam_payment.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2464221365a58d9fe8bc401-83814621%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'dc9f0bfc25fe37841bf7e763fdaa7183725144e7' => 
    array (
      0 => '/var/www/vhosts/eurekadigital.com.co/httpdocs/tienda/modules/payulatam/views/templates/hook/payulatam_payment.tpl',
      1 => 1513265168,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2464221365a58d9fe8bc401-83814621',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'css' => 0,
    'module_dir' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5a58d9fe8f5b39_95736142',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a58d9fe8f5b39_95736142')) {function content_5a58d9fe8f5b39_95736142($_smarty_tpl) {?>
<link href="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['css']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
payu.css" rel="stylesheet" type="text/css">
<div class="row">
	<div class="col-xs-12 col-md-6">
		<p class="payment_module">
			<a href="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['module_dir']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
validation.php" class="link-redirect">
				<?php echo smartyTranslate(array('s'=>'Pagar con PayU','mod'=>'payulatam'),$_smarty_tpl);?>

			</a>
		</p>
	</div>
</div><?php }} ?>
