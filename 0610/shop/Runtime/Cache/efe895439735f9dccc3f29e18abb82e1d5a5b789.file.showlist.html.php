<?php /* Smarty version Smarty-3.1.6, created on 2017-03-20 23:20:03
         compiled from "D:/SERVER/AppServ/www/0610/shop/Admin/View\User\showlist.html" */ ?>
<?php /*%%SmartyHeaderCode:2695958cfcf6444d8b1-72527317%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'efe895439735f9dccc3f29e18abb82e1d5a5b789' => 
    array (
      0 => 'D:/SERVER/AppServ/www/0610/shop/Admin/View\\User\\showlist.html',
      1 => 1490023200,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2695958cfcf6444d8b1-72527317',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_58cfcf648b684',
  'variables' => 
  array (
    'info' => 0,
    'arr' => 0,
    'k' => 0,
    'pagelist' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58cfcf648b684')) {function content_58cfcf648b684($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
    <head>
        <meta http-equiv="content-type" content="text/html; charset=UTF-8" />

        <title>角色 列表</title>

        <link href="<?php echo @ADMIN_CSS_URL;?>
mine.css" type="text/css" rel="stylesheet" />
    </head>
    <body>
        <style>
            .tr_color{ background-color: #9F88FF }
        </style>
        <div class="div_head">
            <span>
                <span style="float: left;">当前位置是：角色管理-》角色列表</span>
                <span style="float: right; margin-right: 8px; font-weight: bold;">
                    <a style="text-decoration: none;" href="<?php echo @__CONTROLLER__;?>
/tianjia" target="_self">【添加角色】</a>
                </span>
            </span>
        </div>
        <div></div>
        <div class="div_search">
            <span>
                <form action="#" method="get">
                    品牌<select name="s_product_mark" style="width: 100px;">
                        <option selected="selected" value="0">请选择</option>
                        <option value="1">苹果apple</option>
                    </select>
                    <input value="查询" type="submit" />
                </form>
            </span>
        </div>
        <div style="font-size: 13px; margin: 10px 5px;">
            <table class="table_a" border="1" width="100%">
                <tbody><tr style="font-weight: bold;">
                        <td>序号</td>
                        <td>用户姓名</td>
                        <td align="center" >用户邮箱</td>
                         <td>用户性别</td>
                          <td>QQ</td>
                           <td>电话</td>
                    </tr>
                    <?php  $_smarty_tpl->tpl_vars['arr'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['arr']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['info']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['arr']->key => $_smarty_tpl->tpl_vars['arr']->value){
$_smarty_tpl->tpl_vars['arr']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['arr']->key;
?>
                    <tr id="product1">
                        <td><?php echo $_smarty_tpl->tpl_vars['arr']->value['user_id'];?>
</td>  <!--自增长用<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
-->
                        <td><?php echo $_smarty_tpl->tpl_vars['arr']->value['username'];?>
</td>
                          <td><?php echo $_smarty_tpl->tpl_vars['arr']->value['user_email'];?>
</td>
                          <td>
                            
                         <?php if ($_smarty_tpl->tpl_vars['arr']->value['user_sex']==1){?>
                          <php>男</php>
                         <?php }elseif($_smarty_tpl->tpl_vars['arr']->value['user_sex']==2){?>
                           <php>
                          女
                          </php>
                          <?php }?> 
                         </td>
                          <td><?php echo $_smarty_tpl->tpl_vars['arr']->value['user_qq'];?>
</td>
                           <td><?php echo $_smarty_tpl->tpl_vars['arr']->value['user_tel'];?>
</td>
                       
                    </tr>
                     <?php } ?>
                    
                    <tr>
                        <td colspan="20" style="text-align: center;">
                           <?php echo $_smarty_tpl->tpl_vars['pagelist']->value;?>

                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </body>
</html><?php }} ?>