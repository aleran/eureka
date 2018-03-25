<?php /* Smarty version Smarty-3.1.19, created on 2018-01-11 07:30:29
         compiled from "/var/www/vhosts/eurekadigital.com.co/httpdocs/tienda/admineureka/themes/default/template/helpers/tree/tree_node_item_radio.tpl" */ ?>
<?php /*%%SmartyHeaderCode:12470503705a5758e5e9dd71-41465491%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8e4e796ae9de86fbbfe95602e8e20a90d8b9be10' => 
    array (
      0 => '/var/www/vhosts/eurekadigital.com.co/httpdocs/tienda/admineureka/themes/default/template/helpers/tree/tree_node_item_radio.tpl',
      1 => 1505529652,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '12470503705a5758e5e9dd71-41465491',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'node' => 0,
    'input_name' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5a5758e5ebd616_44957670',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a5758e5ebd616_44957670')) {function content_5a5758e5ebd616_44957670($_smarty_tpl) {?>
<li class="tree-item<?php if (isset($_smarty_tpl->tpl_vars['node']->value['disabled'])&&$_smarty_tpl->tpl_vars['node']->value['disabled']==true) {?> tree-item-disable<?php }?>">
	<span class="tree-item-name">
		<input type="radio" name="<?php echo $_smarty_tpl->tpl_vars['input_name']->value;?>
" value="<?php echo $_smarty_tpl->tpl_vars['node']->value['id_category'];?>
"<?php if (isset($_smarty_tpl->tpl_vars['node']->value['disabled'])&&$_smarty_tpl->tpl_vars['node']->value['disabled']==true) {?> disabled="disabled"<?php }?> />
		<i class="tree-dot"></i>
		<label class="tree-toggler"><?php echo $_smarty_tpl->tpl_vars['node']->value['name'];?>
</label>
	</span>
</li><?php }} ?>
