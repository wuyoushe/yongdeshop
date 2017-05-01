<?php
//命名空间
namespace Admin\Controller;
//use Think\Controller;
use Tools\AdminController;

//角色控制器
class OrderController extends AdminController{
    //列表展示
    function showlist(){
        //获得角色数据
        $info = D('Role')->select();
        
     $this -> assign('info',$info);
        $this -> display();
    }
    
    //分配权限
    function look(){
        //查询被分配权限的角色信息
       
        
       
            $this -> display();
        }
        function dayin(){
        //查询被分配权限的角色信息
       
        
       
            $this -> display();
        }
        
}
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
