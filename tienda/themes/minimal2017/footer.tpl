{*
* 2007-2016 PrestaShop
*
* NOTICE OF LICENSE
*
* This source file is subject to the Academic Free License (AFL 3.0)
* that is bundled with this package in the file LICENSE.txt.
* It is also available through the world-wide-web at this URL:
* http://opensource.org/licenses/afl-3.0.php
* If you did not receive a copy of the license and are unable to
* obtain it through the world-wide-web, please send an email
* to license@prestashop.com so we can send you a copy immediately.
*
* DISCLAIMER
*
* Do not edit or add to this file if you wish to upgrade PrestaShop to newer
* versions in the future. If you wish to customize PrestaShop for your
* needs please refer to http://www.prestashop.com for more information.
*
*  @author PrestaShop SA <contact@prestashop.com>
*  @copyright  2007-2016 PrestaShop SA
*  @license    http://opensource.org/licenses/afl-3.0.php  Academic Free License (AFL 3.0)
*  International Registered Trademark & Property of PrestaShop SA
*}
{if !isset($content_only) || !$content_only}
					</div><!-- #center_column -->
					{if isset($right_column_size) && !empty($right_column_size)}
						<div id="right_column" class="col-xs-12 col-sm-{$right_column_size|intval} column">{$HOOK_RIGHT_COLUMN}</div>
					{/if}
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
			{if isset($HOOK_FOOTER)}
				<!-- Footer -->
				<div class="footer-container">
					<footer id="footer"  class="container" style="position:relative;">
						<div class="row">{$HOOK_FOOTER}</div>
                         <!--<div class="row" style="margin-top:45px; padding-top:35px; border-top:2px solid #eee;">Made with <a href="https://www.prestashop.com/es" target="_blank">Prestashop</a> | Theme by <a href="https://entienda.cl" title="Prestashop Chile" target="_blank">enTienda.cl</a> </div>-->
					</footer>
                    
                   
				</div><!-- #footer -->
			{/if}
		</div><!-- #page -->
{/if}
{include file="$tpl_dir./global.tpl"}
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
</html>