<?php /* Smarty version Smarty-3.1.19, created on 2018-01-10 10:43:44
         compiled from "/var/www/vhosts/eurekadigital.com.co/httpdocs/tienda/themes/minimal2017/modules/blocksearch/blocksearch-top.tpl" */ ?>
<?php /*%%SmartyHeaderCode:16971320205a5634b00702b6-79908881%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9e1799d16893436b83a093b4486b987641219a1e' => 
    array (
      0 => '/var/www/vhosts/eurekadigital.com.co/httpdocs/tienda/themes/minimal2017/modules/blocksearch/blocksearch-top.tpl',
      1 => 1511323054,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '16971320205a5634b00702b6-79908881',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'link' => 0,
    'search_query' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5a5634b0090876_76948368',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a5634b0090876_76948368')) {function content_5a5634b0090876_76948368($_smarty_tpl) {?>
<!-- Block search module TOP -->
<div id="search_block_top" class="col-sm-5 clearfix">
	<form id="searchbox" method="get" action="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('search',null,null,null,false,null,true), ENT_QUOTES, 'UTF-8', true);?>
" >
		<input type="hidden" name="controller" value="search" />
		<input type="hidden" name="orderby" value="position" />
		<input type="hidden" name="orderway" value="desc" />
		<input class="search_query form-control" type="text" id="search_query_top" name="search_query" placeholder="<?php echo smartyTranslate(array('s'=>'Search','mod'=>'blocksearch'),$_smarty_tpl);?>
" value="<?php echo stripslashes(mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['search_query']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8'));?>
" />
		<button type="submit" name="submit_search" class="btn btn-default button-search">
			<span><?php echo smartyTranslate(array('s'=>'Search','mod'=>'blocksearch'),$_smarty_tpl);?>
</span>
		</button>
	</form>
	<span id="busc">Buscar por título, editorial o colegio</span>
	
</div>
<!-- /Block search module TOP -->
<style>
	#busc {
		color: #fff;
	}
</style><?php }} ?>
