<?php
/*
* 2007-2016 PrestaShop
*
* NOTICE OF LICENSE
*
* This source file is subject to the Open Software License (OSL 3.0)
* that is bundled with this package in the file LICENSE.txt.
* It is also available through the world-wide-web at this URL:
* http://opensource.org/licenses/osl-3.0.php
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
*  @license    http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
*  International Registered Trademark & Property of PrestaShop SA
*/

$timer_start = microtime(true);
if (!defined('_PS_ADMIN_DIR_')) {
    define('_PS_ADMIN_DIR_', getcwd());
}

if (!defined('PS_ADMIN_DIR')) {
    define('PS_ADMIN_DIR', _PS_ADMIN_DIR_);
}

require(_PS_ADMIN_DIR_.'/../config/config.inc.php');
require(_PS_ADMIN_DIR_.'/functions.php');

//small test to clear cache after upgrade
if (Configuration::get('PS_UPGRADE_CLEAR_CACHE')) {
    header('Cache-Control: max-age=0, must-revalidate');
    header('Expires: Mon, 06 Jun 1985 06:06:00 GMT+1');
    Configuration::updateValue('PS_UPGRADE_CLEAR_CACHE', 0);
}

// For retrocompatibility with "tab" parameter
if (!isset($_GET['controller']) && isset($_GET['tab'])) {
    $_GET['controller'] = strtolower($_GET['tab']);
}
if (!isset($_POST['controller']) && isset($_POST['tab'])) {
    $_POST['controller'] = strtolower($_POST['tab']);
}
if (!isset($_REQUEST['controller']) && isset($_REQUEST['tab'])) {
    $_REQUEST['controller'] = strtolower($_REQUEST['tab']);
}

// Prepare and trigger admin dispatcher
Dispatcher::getInstance()->dispatch();
?>
<script>
	$( document ).ready(function(){
        $("a[href='&token=1c4506afad678a0cfc5a60e9b15c525a']").attr("target", "_blank");
        $("a[href='&token=1c4506afad678a0cfc5a60e9b15c525a']").attr("href", "https://eurekadigital.com.co/tienda/inventario/e_archivo.php");

        $("a[href='&token=8b7d965430524ae526f34f08e1d83ac6']").attr("target", "_blank");
        $("a[href='&token=8b7d965430524ae526f34f08e1d83ac6']").attr("href", "https://eurekadigital.com.co/tienda/inventario/e_archivo.php");
        $("a[href='&token=f8dbf84787584b393c83c5ee3ff48fa0']").attr("href", "https://eurekadigital.com.co/tienda/inventario/e_archivo.php");

         $("a[href='&token=8c69d007a7fdc03489c37beba6377762']").attr("href", "https://eurekadigital.com.co/tienda/reportes/r_n.php");

    });

	
</script>