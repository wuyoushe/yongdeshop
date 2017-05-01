<?php /* Smarty version Smarty-3.1.6, created on 2017-04-23 21:24:25
         compiled from "D:/SERVER/AppServ/www/0610/shop/Home/View\Book\cart.html" */ ?>
<?php /*%%SmartyHeaderCode:1242358d3cc402ac018-85927919%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a9df82959d0418ab5cde894530dca1549106faa0' => 
    array (
      0 => 'D:/SERVER/AppServ/www/0610/shop/Home/View\\Book\\cart.html',
      1 => 1492953846,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1242358d3cc402ac018-85927919',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_58d3cc402f63a',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58d3cc402f63a')) {function content_58d3cc402f63a($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
    <head>
        <meta http-equiv="content-type" content="text/html; charset=UTF-8" />

        <title>购物车</title>

        <link href="<?php echo @ADMIN_CSS_URL;?>
mine.css" type="text/css" rel="stylesheet" />
    </head>
    <body>
        <style>
            .tr_color{ background-color: #9F88FF }
        </style>
        <div class="div_head">
            <span>
                <span style="float: left;">当前位置是：购物车</span>
                <span style="float: right; margin-right: 8px; font-weight: bold;">
                     <a style="text-decoration: none;" href="<?php echo @__CONTROLLER__;?>
/tianjia" target="_self">【结帐】</a>
                </span>
            </span>
        </div>
        <div></div>
        <div style="font-size: 13px; margin: 10px 5px;">
            <table border="0" cellspacing="0" cellpadding="0"align="center">
                <form id=""myshopcar name="myshopcar" method="post"action="#">
                    <tr>
                        <td width="30" colspan="20" align="center" valign="middle" class="first">我的</td>
                         </tr>
                    <tr border="solid">
                        <td width="100" height="85"align="center" valign="middle" class="left">&nbsp;</td>
                        <td width="100" height="85"align="center" valign="middle" class="center">商品价格</td>
                        <td width="100" height="85"align="center" valign="middle" class="center">商品数量</td>
                        <td width="100" height="85"align="center" valign="middle" class="center">市场价格</td>
                        <td width="100" height="85"align="center" valign="middle" class="center">会员价格</td>
                        <td width="100" height="85"align="center" valign="middle" class="center">折扣率</td>
                        <td width="100" height="85"align="center" valign="middle" class="right">合计</td>  
                    </tr>
                    <tr border="solid">
                        <td width="100" height="85"align="center" valign="middle" class="left"><input id="chk" name="chk【】" type="checkbox" value=""></td>
                        <td width="100" height="85"align="center" valign="middle" class="center"><div id="" >&nbsp</div></td>
                        <td width="100" height="85"align="center" valign="middle" class="center"><input id="chk" name="chk【】" type="checkbox" value=""></td>
                        <td width="100" height="85"align="center" valign="middle" class="center">市场价格</td>
                        <td width="100" height="85"align="center" valign="middle" class="center">会员价格</td>
                        <td width="100" height="85"align="center" valign="middle" class="center">折扣率</td>
                        <td width="100" height="85"align="center" valign="middle" class="right">合计</td>  
                    </tr>
                    
                    
                    
                </form>
                
                
                
                
                
            </table>
        </div>
    </body>
</html><?php }} ?>