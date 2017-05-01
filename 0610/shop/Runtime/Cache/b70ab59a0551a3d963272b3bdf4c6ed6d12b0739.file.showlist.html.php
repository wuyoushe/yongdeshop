<?php /* Smarty version Smarty-3.1.6, created on 2017-03-16 22:16:57
         compiled from "D:/SERVER/AppServ/www/0610/shop/Admin/View\Order\showlist.html" */ ?>
<?php /*%%SmartyHeaderCode:162658ca9e597e2262-24029362%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b70ab59a0551a3d963272b3bdf4c6ed6d12b0739' => 
    array (
      0 => 'D:/SERVER/AppServ/www/0610/shop/Admin/View\\Order\\showlist.html',
      1 => 1489673811,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '162658ca9e597e2262-24029362',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'info' => 0,
    'arr' => 0,
    'k' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_58ca9e59de934',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58ca9e59de934')) {function content_58ca9e59de934($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
    <head>
        <meta http-equiv="content-type" content="text/html; charset=UTF-8" />

        <title>权限列表</title>

        <link href="<?php echo @ADMIN_CSS_URL;?>
mine.css" type="text/css" rel="stylesheet" />
    </head>
    <body>
       <style>
            .tr_color { background-color:#9F88FF}
        </style> 
        
        <div class="div_head">
            <span>
                <span style="float: left;">当前位置是：权限管理-》权限列表</span>
                <span style="float: right; margin-right: 8px; font-weight: bold;">
                    <a style="text-decoration: none;" href="<?php echo @__CONTROLLER__;?>
/tianjia" target="_self">【添加权限】</a>
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
                        <td>权限名称</td>
                        <td>父id</td>
                        <td>控制器</td>
                        <td>操作方法</td>
                        <td>全路径</td>
                        <td>等级</td>
                        
                        <td align="center" colspan="2">操作</td>
                    </tr>
                    <?php  $_smarty_tpl->tpl_vars['arr'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['arr']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['info']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['arr']->key => $_smarty_tpl->tpl_vars['arr']->value){
$_smarty_tpl->tpl_vars['arr']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['arr']->key;
?>
                    
                    <tr id="product1">
                        <td><?php echo $_smarty_tpl->tpl_vars['arr']->value['auth_id'];?>
</td>  <!--自增长用<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
-->
                        <td><a href="#"><?php echo preg_replace('!^!m',str_repeat('--/',$_smarty_tpl->tpl_vars['arr']->value['auth_level']),$_smarty_tpl->tpl_vars['arr']->value['auth_name']);?>
</a></td>
                        <td><?php echo $_smarty_tpl->tpl_vars['arr']->value['auth_pid'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['arr']->value['auth_c'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['arr']->value['auth_a'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['arr']->value['auth_path'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['arr']->value['auth_level'];?>
</td>
                        <td><a href="<?php echo @__CONTROLLER__;?>
/xiugai/goods_id/<?php echo $_smarty_tpl->tpl_vars['arr']->value['goods_id'];?>
">修改</a></td>
                        <td><a href="javascript:;" onclick="delete_product(1)">删除</a></td>
                    </tr>
                    <?php } ?>
                    
                    
                </tbody>
            </table>
        </div>
    </body>
</html><?php }} ?>