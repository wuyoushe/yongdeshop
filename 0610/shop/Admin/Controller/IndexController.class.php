<?php

namespace Admin\Controller;
//use Think\Controller;
use Tools\AdminController;
 class IndexController extends AdminController{
    function head(){
        $now_time = date('Y-m-d H:i:s',time());
        $this->assign('time',$now_time);
        $this->display();
        //echo "登录系统";
          }   
      function left(){
          //根据管理员获得角色，进而获得角色对应的权限
          //1横距管理员的id信息获得其本身的记录信息
          $admin_id   = session('admin_id');
          $admin_name  = session('admin_name');
          $manager_info = D('Manager')->find($admin_id);
          $role_id = $manager_info['mg_role_id'];
        // dump($manager_info);
        
        //② 根据$role_id获得本身记录信息
        $role_info = D('Role')->find($role_id);
        $auth_ids = $role_info['role_auth_ids'];
        
       // $auth_infoA=D('Auth')->where("auth_level=0 and auth_id in($auth_ids)")->select();
       // $auth_infoB=D('Auth')->where("auth_level=1 and auth_id in($auth_ids)")->select();
    
         //$auth_info = D('Auth')->select( $auth_ids);
         //dump($auth_info);
        $this->assign('auth_infoA','$auth_infoA');
        $this->assign('auth_infoB','$auth_infoB');
        //③ 根据$auth_ids 获得具体权限
      if($admin_name === 'admin'){
            //admin超级管理员显示全部权限
            $auth_infoA = D('Auth')->where("auth_level=0")->select();//父级
            $auth_infoB = D('Auth')->where("auth_level=1")->select();//子级
        } else{
         $auth_infoA = D('Auth')->where("auth_level=0 and auth_id in($auth_ids)")->select();//父级
          $auth_infoB = D('Auth')->where("auth_level=1 and auth_id in($auth_ids)")->select();//子级
        }
       // $auth_infoA = D('Auth')->where("auth_level=0")->select();//父级
        $this -> assign('auth_infoA',$auth_infoA);
        $this -> assign('auth_infoB',$auth_infoB);
      //dump($auth_infoA);
     // dump($auth_infoB);
        $this -> display();
          }   
      function right(){
        $this->display();
        //echo "登录系统";
          }   
           function index(){
        $this->display();
        //echo "登录系统";
          }   
 }
