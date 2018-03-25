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
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5a68ca6384f626_20960107',
  'has_nocache_code' => false,
  'cache_lifetime' => 31536000,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a68ca6384f626_20960107')) {function content_5a68ca6384f626_20960107($_smarty_tpl) {?><!-- Block search module TOP -->
<div id="search_block_top" class="col-sm-5 clearfix">
	<form id="searchbox" method="get" action="//eurekadigital.com.co/tienda/index.php?controller=search" >
		<input type="hidden" name="controller" value="search" />
		<input type="hidden" name="orderby" value="position" />
		<input type="hidden" name="orderway" value="desc" />
		<input class="search_query form-control" type="text" id="search_query_top" name="search_query" placeholder="Buscar" value="" />
		<button type="submit" name="submit_search" class="btn btn-default button-search">
			<span>Buscar</span>
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
