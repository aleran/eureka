<?php /* Smarty version Smarty-3.1.19, created on 2018-01-11 12:53:27
         compiled from "/var/www/vhosts/eurekadigital.com.co/httpdocs/tienda/themes/minimal2017/modules/homefeatured/homefeatured.tpl" */ ?>
<?php /*%%SmartyHeaderCode:20735221145a57a497f3ca61-14157883%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6d6cda076d2cfb1fb1869df6577cccec44ae4e72' => 
    array (
      0 => '/var/www/vhosts/eurekadigital.com.co/httpdocs/tienda/themes/minimal2017/modules/homefeatured/homefeatured.tpl',
      1 => 1505536150,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '20735221145a57a497f3ca61-14157883',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'products' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5a57a49800cc47_62640955',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a57a49800cc47_62640955')) {function content_5a57a49800cc47_62640955($_smarty_tpl) {?>
<?php if (isset($_smarty_tpl->tpl_vars['products']->value)&&$_smarty_tpl->tpl_vars['products']->value) {?>
	<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tpl_dir']->value)."./product-list.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('class'=>'homefeatured tab-pane','id'=>'homefeatured'), 0);?>

<?php } else { ?>
<ul id="homefeatured" class="homefeatured tab-pane">
	<li class="alert alert-info"><?php echo smartyTranslate(array('s'=>'No featured products at this time.','mod'=>'homefeatured'),$_smarty_tpl);?>
</li>
</ul>
<?php }?><?php }} ?>
