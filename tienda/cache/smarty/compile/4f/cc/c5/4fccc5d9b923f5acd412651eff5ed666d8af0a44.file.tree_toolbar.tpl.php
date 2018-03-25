<?php /* Smarty version Smarty-3.1.19, created on 2018-01-11 18:05:34
         compiled from "/var/www/vhosts/eurekadigital.com.co/httpdocs/tienda/admineureka/themes/default/template/helpers/tree/tree_toolbar.tpl" */ ?>
<?php /*%%SmartyHeaderCode:20112039415a57edbe75eaa7-01381164%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4fccc5d9b923f5acd412651eff5ed666d8af0a44' => 
    array (
      0 => '/var/www/vhosts/eurekadigital.com.co/httpdocs/tienda/admineureka/themes/default/template/helpers/tree/tree_toolbar.tpl',
      1 => 1505529652,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '20112039415a57edbe75eaa7-01381164',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'actions' => 0,
    'action' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5a57edbe7d86f2_88211868',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a57edbe7d86f2_88211868')) {function content_5a57edbe7d86f2_88211868($_smarty_tpl) {?>
<div class="tree-actions pull-right">
	<?php if (isset($_smarty_tpl->tpl_vars['actions']->value)) {?>
	<?php  $_smarty_tpl->tpl_vars['action'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['action']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['actions']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['action']->key => $_smarty_tpl->tpl_vars['action']->value) {
$_smarty_tpl->tpl_vars['action']->_loop = true;
?>
		<?php echo $_smarty_tpl->tpl_vars['action']->value->render();?>

	<?php } ?>
	<?php }?>
</div><?php }} ?>
