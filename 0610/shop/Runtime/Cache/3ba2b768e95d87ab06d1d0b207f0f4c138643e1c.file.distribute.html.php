<?php /* Smarty version Smarty-3.1.6, created on 2017-03-13 22:20:27
         compiled from "D:/SERVER/AppServ/www/0610/shop/Admin/View\Role\distribute.html" */ ?>
<?php /*%%SmartyHeaderCode:2096658b82afbde17a2-19822261%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3ba2b768e95d87ab06d1d0b207f0f4c138643e1c' => 
    array (
      0 => 'D:/SERVER/AppServ/www/0610/shop/Admin/View\\Role\\distribute.html',
      1 => 1489414824,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2096658b82afbde17a2-19822261',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_58b82afbecfc5',
  'variables' => 
  array (
    'role_info' => 0,
    'auth_infoA' => 0,
    'arr' => 0,
    'auth_infoB' => 0,
    'arr1' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58b82afbecfc5')) {function content_58b82afbecfc5($_smarty_tpl) {?>11<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
    <head>
        <title>分配权限</title>
        <meta http-equiv="content-type" content="text/html;charset=utf-8">
        <link href="<?php echo @ADMIN_CSS_URL;?>
mine.css" type="text/css" rel="stylesheet">
    </head>

    <body>

        <div class="div_head">
            <span>
                <span style="float:left">当前位置是：角色管理-》分配权限信息[<?php echo $_smarty_tpl->tpl_vars['role_info']->value['role_name'];?>
]</span>
                <span style="float:right;margin-right: 8px;font-weight: bold">
                    <a style="text-decoration: none" href="<?php echo @__CONTROLLER__;?>
/showlist">【返回】</a>
                </span>
            </span>
        </div>
        <div></div>

        <div style="font-size: 13px;margin: 10px 5px">
            <form action="<?php echo @__SELF__;?>
" method="post" enctype="multipart/form-data">
            <input type="hidden" name="role_id" value="<?php echo $_smarty_tpl->tpl_vars['role_info']->value['role_id'];?>
">
                <style type="text/css">
                    td { border:1px solid gray; }
                   
                </style>
                <table border="1" width="100%" class="table_a">
                <?php  $_smarty_tpl->tpl_vars['arr'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['arr']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['auth_infoA']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['arr']->key => $_smarty_tpl->tpl_vars['arr']->value){
$_smarty_tpl->tpl_vars['arr']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['arr']->key;
?>  
                <tr>
                    <td width="18%"><input type="checkbox" name="auth_id[]" /> value="<?php echo $_smarty_tpl->tpl_vars['arr']->value['auth_id'];?>
"
                          <in name="arr.auth_id" value="$have_authids"></in>                  
                         <?php echo $_smarty_tpl->tpl_vars['arr']->value['auth_name'];?>
</td>
                    <td>
                        <?php  $_smarty_tpl->tpl_vars['arr1'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['arr1']->_loop = false;
 $_smarty_tpl->tpl_vars['k1'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['auth_infoB']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['arr1']->key => $_smarty_tpl->tpl_vars['arr1']->value){
$_smarty_tpl->tpl_vars['arr1']->_loop = true;
 $_smarty_tpl->tpl_vars['k1']->value = $_smarty_tpl->tpl_vars['arr1']->key;
?>  
                        <?php if ($_smarty_tpl->tpl_vars['arr1']->value['auth_pid']===$_smarty_tpl->tpl_vars['arr']->value['auth_id']){?>
                        <div style="width:200px;float:left;"><input type="checkbox" name="auth_id[]" value="<?php echo $_smarty_tpl->tpl_vars['arr1']->value['auth_id'];?>
"
                           <in name="arr1.auth_id" value="$have_authids"></in>                                         
                         ><?php echo $_smarty_tpl->tpl_vars['arr1']->value['auth_name'];?>
</div>
                       <?php }?>
                       <?php } ?>
                    </td>
                </tr>
                    <?php } ?>
            </table>
                <input type="submit" value="分配权限"/>
            </form>
        </div>
    </body>
</html><?php }} ?>