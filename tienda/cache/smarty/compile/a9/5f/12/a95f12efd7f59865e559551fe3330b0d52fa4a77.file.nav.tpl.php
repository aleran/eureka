<?php /* Smarty version Smarty-3.1.19, created on 2018-01-10 10:43:46
         compiled from "/var/www/vhosts/eurekadigital.com.co/httpdocs/tienda/themes/minimal2017/modules/blockuserinfo/nav.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3136489495a5634b25e2835-45739077%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a95f12efd7f59865e559551fe3330b0d52fa4a77' => 
    array (
      0 => '/var/www/vhosts/eurekadigital.com.co/httpdocs/tienda/themes/minimal2017/modules/blockuserinfo/nav.tpl',
      1 => 1511306446,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3136489495a5634b25e2835-45739077',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'is_logged' => 0,
    'link' => 0,
    'cookie' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5a5634b26298b1_31085285',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a5634b26298b1_31085285')) {function content_5a5634b26298b1_31085285($_smarty_tpl) {?><!-- Block user information module NAV  -->
<style>
	.header_user_info a {
		color:#fff;
		padding-top: 20px;
		font-family: 'Montserrat', sans-serif;
		font-size: 13px;
		font-weight: bold;
		display: inline-block;
	}
	.header_user_info a:visited {
		color:#fff;
	}
	.header_user_info a:hover {
		color: #49C000;
	}
</style>
<!--<link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet' type='text/css'>
<?php if ($_smarty_tpl->tpl_vars['is_logged']->value) {?>
	<div class="header_user_info">
		<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('my-account',true), ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo smartyTranslate(array('s'=>'View my customer account','mod'=>'blockuserinfo'),$_smarty_tpl);?>
" class="account" rel="nofollow"><span><?php echo $_smarty_tpl->tpl_vars['cookie']->value->customer_firstname;?>
 <?php echo $_smarty_tpl->tpl_vars['cookie']->value->customer_lastname;?>
</span></a>
	</div>
<?php }?>
<div class="header_user_info">
	<?php if ($_smarty_tpl->tpl_vars['is_logged']->value) {?>
		<a class="logout" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('index',true,null,"mylogout"), ENT_QUOTES, 'UTF-8', true);?>
" rel="nofollow" title="<?php echo smartyTranslate(array('s'=>'Log me out','mod'=>'blockuserinfo'),$_smarty_tpl);?>
">
			<?php echo smartyTranslate(array('s'=>'Sign out','mod'=>'blockuserinfo'),$_smarty_tpl);?>

		</a>
	<?php } else { ?>
		<a class="login" href="http://www.eurekalibros.com.co/" rel="nofollow" title="">
			Volver a pagina
		</a>
		<a class="login" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('my-account',true), ENT_QUOTES, 'UTF-8', true);?>
" rel="nofollow" title="<?php echo smartyTranslate(array('s'=>'Log in to your customer account','mod'=>'blockuserinfo'),$_smarty_tpl);?>
">
			<?php echo smartyTranslate(array('s'=>'Sign in','mod'=>'blockuserinfo'),$_smarty_tpl);?>

		</a>
		
	<?php }?>
</div>-->
<!-- /Block usmodule NAV -->
<?php }} ?>
