<?php /*%%SmartyHeaderCode:20291269695a5634b14aa827-36920200%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fa4844a6d0dfe581d2e142ceb1e16b5a0e225e33' => 
    array (
      0 => '/var/www/vhosts/eurekadigital.com.co/httpdocs/tienda/themes/minimal2017/modules/blockcms/blockcms.tpl',
      1 => 1508428330,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '20291269695a5634b14aa827-36920200',
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5a59152e838820_81094944',
  'has_nocache_code' => true,
  'cache_lifetime' => 31536000,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a59152e838820_81094944')) {function content_5a59152e838820_81094944($_smarty_tpl) {?>
	<!-- Block CMS module footer -->
	<section class="footer-block col-xs-12 col-sm-2" id="block_various_links_footer">
		<h4>Información</h4>
		<ul class="toggle-footer">
									<li class="item">
				<a href="https://eurekadigital.com.co/tienda/index.php?controller=new-products" title="Novedades">
					Novedades
				</a>
			</li>
																								<li class="item">
						<a href="https://eurekadigital.com.co/tienda/index.php?id_cms=2&amp;controller=cms" title="Aviso de privacidad">
							Aviso de privacidad
						</a>
					</li>
																<li class="item">
						<a href="https://eurekadigital.com.co/tienda/index.php?id_cms=3&amp;controller=cms" title="Términos y condiciones">
							Términos y condiciones
						</a>
					</li>
																<li class="item">
						<a href="https://eurekadigital.com.co/tienda/index.php?id_cms=4&amp;controller=cms" title="Protección de datos">
							Protección de datos
						</a>
					</li>
												</ul>
		
	</section>
		<section class="bottom-footer col-xs-12">
		<div>
			<?php echo smartyTranslate(array('s'=>'[1] %3$s %2$s - Tienda creada por %1$s [/1]','mod'=>'blockcms','sprintf'=>array('Artech Soluciones S.A.S',date('Y'),'©'),'tags'=>array('<a class="_blank" href="https://www.solucionesartech.com">')),$_smarty_tpl);?>

		</div>
	</section>
		<!-- /Block CMS module footer -->
<?php }} ?>
