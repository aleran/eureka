<?php /* Smarty version Smarty-3.1.19, created on 2018-01-10 10:49:42
         compiled from "/var/www/vhosts/eurekadigital.com.co/httpdocs/tienda/modules/custompopup/views/templates/hook/custompopup.tpl" */ ?>
<?php /*%%SmartyHeaderCode:18458029785a5636165e5fd7-14794545%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '56a31d0948f0fc9cd5444369aeb6c2ea0124b2d2' => 
    array (
      0 => '/var/www/vhosts/eurekadigital.com.co/httpdocs/tienda/modules/custompopup/views/templates/hook/custompopup.tpl',
      1 => 1505715727,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '18458029785a5636165e5fd7-14794545',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'popup_enabled' => 0,
    'popup_cookie' => 0,
    'popup_color' => 0,
    'padding' => 0,
    'top_padding' => 0,
    'back_color' => 0,
    'button_hover_color' => 0,
    'button_color' => 0,
    'button_top_padding' => 0,
    'button_size' => 0,
    'button_position' => 0,
    'cookie' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5a56361669bf22_32960731',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a56361669bf22_32960731')) {function content_5a56361669bf22_32960731($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['popup_enabled']->value) {?>

    <script>
        $(function() {

            var popup = new $.Popup();
            if ($.cookie('responsive_popup') == null) {
                popup.open('#inline');
            }
            $(".popup_close").click(function(){
                $.cookie('responsive_popup', 'yes', { expires: <?php echo $_smarty_tpl->tpl_vars['popup_cookie']->value*0.000694;?>
, path: '/' });
            });

            var instances = $('.popup').length;
            if(instances > 1)
            {
                $( ".popup" ).last().remove();
                $( ".popup_back" ).last().remove();
                $( ".popup_close" ).last().remove();
            }
        });
    </script>
<?php }?>
<style>
        div.popup {
            background-color: <?php echo $_smarty_tpl->tpl_vars['popup_color']->value;?>
;
            padding: <?php echo $_smarty_tpl->tpl_vars['padding']->value;?>
px;
            padding-top: <?php echo $_smarty_tpl->tpl_vars['top_padding']->value;?>
px;
        }
        .popup_back {
            background-color: <?php echo $_smarty_tpl->tpl_vars['back_color']->value;?>
;
        }
        .popup_close:hover {
            color: <?php echo $_smarty_tpl->tpl_vars['button_hover_color']->value;?>
;
        }
        .popup_close {
            color: <?php echo $_smarty_tpl->tpl_vars['button_color']->value;?>
;
            top: <?php echo $_smarty_tpl->tpl_vars['button_top_padding']->value;?>
px;
            font-size: <?php echo $_smarty_tpl->tpl_vars['button_size']->value;?>
px;
            <?php echo $_smarty_tpl->tpl_vars['button_position']->value;?>
: 5px;
        }
    </style>



<div id="inline" style="display:none">
       <?php echo htmlspecialchars_decode($_smarty_tpl->tpl_vars['content_'.($_smarty_tpl->tpl_vars['cookie']->value->id_lang)]->value, ENT_QUOTES);?>

</div>
<?php }} ?>
