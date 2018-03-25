<?php /* Smarty version Smarty-3.1.19, created on 2018-01-11 07:30:30
         compiled from "/var/www/vhosts/eurekadigital.com.co/httpdocs/tienda/admineureka/themes/default/template/helpers/list/list_action_preview.tpl" */ ?>
<?php /*%%SmartyHeaderCode:17365288195a5758e6779409-02048768%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a681cd6d473d0005ab2022e4c1f879e7de4c914d' => 
    array (
      0 => '/var/www/vhosts/eurekadigital.com.co/httpdocs/tienda/admineureka/themes/default/template/helpers/list/list_action_preview.tpl',
      1 => 1505529652,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '17365288195a5758e6779409-02048768',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'href' => 0,
    'action' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5a5758e6785fb9_72460142',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a5758e6785fb9_72460142')) {function content_5a5758e6785fb9_72460142($_smarty_tpl) {?>
<a href="<?php echo $_smarty_tpl->tpl_vars['href']->value;?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['action']->value, ENT_QUOTES, 'UTF-8', true);?>
" target="_blank">
	<i class="icon-eye"></i> <?php echo $_smarty_tpl->tpl_vars['action']->value;?>

</a>
<?php }} ?>
