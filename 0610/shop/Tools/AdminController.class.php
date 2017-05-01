<?php

//后台分组 普通控制器的父类
namespace Tools;
use Think\Controller;
use Think\Verify;
class AdminController extends Controller{
    //构造方法：实现各个方法访问过滤效果
//   function __construct(){
//       parent::__construct();
//       //echo "过滤每个方法";
//       $nowac=CONTROLLER_NAME."-".ACTION_NAME;
//       $admin_id=session('admin_id');
//       $admin_name=session('admin_name');
//       //为登录系统用户判断
//       //如果未登录则跳转到登录页面去，如果访问的是登录页，验证码则允许访问
//      $login_ac="Manager-login,Manager-verifyImg";
//      if(empty($admin_name) && strpos($login_ac,$nowac)===false){
//          $this->redirect('Manager/login');
//           exit;    
//       }
//       $manager_info=D('Manager')->find($admin_id);
//       $roleid=$manager_info['mg_role_id'];
//       //根据$role_id获得角色信息
//       $roleinfo=D('Role')->find($roleid);
//       $auth_ac=$roleinfo['role_auth_ac'];
//       //默认大家都可以访问的权限
//       $allow_ac="Manager-login,Manager-logout,Manager-verifyImg,Index-index,Index-left,Index-head,Index-right";
//       //当前访问的权限与允许的访问作对比
//       //strpos()判断一个小的字符串在一个大的字符串里第一次出现的位置
//       //当前访问的权限必须出现在其权限列表里面
//       if(strpos($auth_ac,$nowac)===false && strpos($allow_ac,$nowac)===false && $admin_name!=='admin'){
//         exit('没有权限访问');
//        
//    }
//   
//}
}
