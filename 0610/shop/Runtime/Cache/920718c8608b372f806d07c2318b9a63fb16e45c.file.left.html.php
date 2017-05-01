<?php /* Smarty version Smarty-3.1.6, created on 2017-02-26 15:31:35
         compiled from "D:/SERVER/AppServ/www/0610/shop/Admin/View\Index\left.html" */ ?>
<?php /*%%SmartyHeaderCode:23477584eb32d20bde5-59145340%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '920718c8608b372f806d07c2318b9a63fb16e45c' => 
    array (
      0 => 'D:/SERVER/AppServ/www/0610/shop/Admin/View\\Index\\left.html',
      1 => 1488094178,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '23477584eb32d20bde5-59145340',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_584eb32d29498',
  'variables' => 
  array (
    'auth_infoA' => 0,
    'arr' => 0,
    'auth_infoB' => 0,
    'arr1' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_584eb32d29498')) {function content_584eb32d29498($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
    <head>
        <meta http-equiv=content-type content="text/html; charset=utf-8" />
         <link href="<?php echo @ADMIN_CSS_URL;?>
admin.css" type="text/css" rel="stylesheet" />
        <script language=javascript>
            function expand(el)
            {
                childobj = document.getElementById("child" + el);

                if (childobj.style.display == 'none')
                {
                    childobj.style.display = 'block';
                }
                else
                {
                    childobj.style.display = 'none';
                }
                return;
            }
        </script>
    </head>
    <body>
        <table height="100%" cellspacing=0 cellpadding=0 width=170 
               background=<?php echo @ADMIN_IMG_URL;?>
menu_bg.jpg border=0>
               <tr>
                <td valign=top align=middle>
                    <table cellspacing=0 cellpadding=0 width="100%" border=0>

                        <tr>
                            <td height=10></td></tr></table>
    <?php  $_smarty_tpl->tpl_vars['arr'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['arr']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['auth_infoA']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['arr']->key => $_smarty_tpl->tpl_vars['arr']->value){
$_smarty_tpl->tpl_vars['arr']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['arr']->key;
?>
<table cellspacing=0 cellpadding=0 width=150 border=0>
    <tr height=22>
        <td style="padding-left: 30px" background=<?php echo @ADMIN_IMG_URL;?>
menu_bt.jpg>
            <a  class=menuparent onclick=expand(<?php echo $_smarty_tpl->tpl_vars['arr']->value['auth_id'];?>
)  
                       href="javascript:void(0);"> <?php echo $_smarty_tpl->tpl_vars['arr']->value['auth_name'];?>
</a></td></tr>          
    <tr height=4><td></td></tr>
</table>
<table id="child<?php echo $_smarty_tpl->tpl_vars['arr']->value['auth_id'];?>
" style="display: none" cellspacing=0 cellpadding=0 
       width=150 border=0>
         <?php  $_smarty_tpl->tpl_vars['arr1'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['arr1']->_loop = false;
 $_smarty_tpl->tpl_vars['k1'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['auth_infoB']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['arr1']->key => $_smarty_tpl->tpl_vars['arr1']->value){
$_smarty_tpl->tpl_vars['arr1']->_loop = true;
 $_smarty_tpl->tpl_vars['k1']->value = $_smarty_tpl->tpl_vars['arr1']->key;
?>
         <?php if ($_smarty_tpl->tpl_vars['arr1']->value['auth_pid']===$_smarty_tpl->tpl_vars['arr']->value['auth_id']){?>
    <tr height=20><td align=middle width=30>
           <img height=9  src="<?php echo @ADMIN_IMG_URL;?>
menu_icon.gif" width=9 /></td>
        <td><a class=menuchild  href="<?php echo @__MODULE__;?>
/<?php echo $_smarty_tpl->tpl_vars['arr1']->value['auth_c'];?>
/<?php echo $_smarty_tpl->tpl_vars['arr1']->value['auth_a'];?>
"  target="right"><?php echo $_smarty_tpl->tpl_vars['arr1']->value['auth_name'];?>
</a></td></tr>
        <?php }?>
        <?php } ?>
    <tr height=4><td colspan=2></td></tr>
</table>
        <?php } ?>
                </td>
                <td width=1 bgcolor=#d1e6f7></td>
                </tr>
    </body>
</html><?php }} ?>