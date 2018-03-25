<?php /* Smarty version Smarty-3.1.19, created on 2018-01-10 10:49:42
         compiled from "/var/www/vhosts/eurekadigital.com.co/httpdocs/tienda/modules/blocknewproducts/views/templates/hook/blocknewproducts_home.tpl" */ ?>
<?php /*%%SmartyHeaderCode:13131891365a563616e278e2-06653674%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'acc071a6225ac90a3cc63e6dad687f6ea349a174' => 
    array (
      0 => '/var/www/vhosts/eurekadigital.com.co/httpdocs/tienda/modules/blocknewproducts/views/templates/hook/blocknewproducts_home.tpl',
      1 => 1513736437,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '13131891365a563616e278e2-06653674',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'new_products' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5a563616e3e136_50269028',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a563616e3e136_50269028')) {function content_5a563616e3e136_50269028($_smarty_tpl) {?>
<?php if (isset($_smarty_tpl->tpl_vars['new_products']->value)&&$_smarty_tpl->tpl_vars['new_products']->value) {?>
	<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tpl_dir']->value)."./product-list.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array('products'=>$_smarty_tpl->tpl_vars['new_products']->value,'class'=>'blocknewproducts tab-pane','id'=>'blocknewproducts'), 0);?>

<?php } else { ?>
<ul id="blocknewproducts" class="blocknewproducts tab-pane">
	<li class="alert alert-info"><?php echo smartyTranslate(array('s'=>'No new products at this time.','mod'=>'blocknewproducts'),$_smarty_tpl);?>
</li>
</ul>
<?php }?>
<?php }} ?>
