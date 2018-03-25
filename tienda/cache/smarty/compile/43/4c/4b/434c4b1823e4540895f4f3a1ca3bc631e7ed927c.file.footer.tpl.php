<?php /* Smarty version Smarty-3.1.19, created on 2018-01-21 23:52:34
         compiled from "/var/www/vhosts/eurekadigital.com.co/httpdocs/tienda/themes/minimal2017/footer.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1484280695a5634b277aac8-83521482%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '434c4b1823e4540895f4f3a1ca3bc631e7ed927c' => 
    array (
      0 => '/var/www/vhosts/eurekadigital.com.co/httpdocs/tienda/themes/minimal2017/footer.tpl',
      1 => 1516596753,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1484280695a5634b277aac8-83521482',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5a5634b27a6ce4_35386067',
  'variables' => 
  array (
    'content_only' => 0,
    'right_column_size' => 0,
    'HOOK_RIGHT_COLUMN' => 0,
    'HOOK_FOOTER' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a5634b27a6ce4_35386067')) {function content_5a5634b27a6ce4_35386067($_smarty_tpl) {?>
<?php if (!isset($_smarty_tpl->tpl_vars['content_only']->value)||!$_smarty_tpl->tpl_vars['content_only']->value) {?>
					</div><!-- #center_column -->
					<?php if (isset($_smarty_tpl->tpl_vars['right_column_size']->value)&&!empty($_smarty_tpl->tpl_vars['right_column_size']->value)) {?>
						<div id="right_column" class="col-xs-12 col-sm-<?php echo intval($_smarty_tpl->tpl_vars['right_column_size']->value);?>
 column"><?php echo $_smarty_tpl->tpl_vars['HOOK_RIGHT_COLUMN']->value;?>
</div>
					<?php }?>
					</div><!-- .row -->
				</div><!-- #columns -->
			</div><!-- .columns-container -->
			<style>
	#IrArriba {
position: fixed;
bottom: 30px; /* Distancia desde abajo */
right: 5px; /* Distancia desde la derecha */
z-index: 100;

}

#IrArriba span {
width: 90px; /* Ancho del botón */
height: 60px; /* Alto del botón */
display: block;
background: url('flecha2.png') no-repeat center center;

}
</style>
<div id='IrArriba'>
<a href='#'><span/></a>
</div>
			<?php if (isset($_smarty_tpl->tpl_vars['HOOK_FOOTER']->value)) {?>
				<!-- Footer -->
				<div class="footer-container">
					<footer id="footer"  class="container" style="position:relative;">
						<div class="row"><?php echo $_smarty_tpl->tpl_vars['HOOK_FOOTER']->value;?>
</div>
                         <!--<div class="row" style="margin-top:45px; padding-top:35px; border-top:2px solid #eee;">Made with <a href="https://www.prestashop.com/es" target="_blank">Prestashop</a> | Theme by <a href="https://entienda.cl" title="Prestashop Chile" target="_blank">enTienda.cl</a> </div>-->
					</footer>
                    
                   
				</div><!-- #footer -->
			<?php }?>
		</div><!-- #page -->
<?php }?>
<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tpl_dir']->value)."./global.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

		<script>
		$(window).scroll(function(){
   if ($(this).scrollTop() > 100) {
        $('#IrArriba').fadeIn();
   } else {
        $('#IrArriba').fadeOut();
   }
});
		$('#IrArriba').click(function(){
    $("html, body").animate({ scrollTop: 0 }, 600);
    return false;
});
	</script>
	</body>
</html><?php }} ?>
