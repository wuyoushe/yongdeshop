<?php

namespace Admin\Controller;
use Tools\AdminController;
use Think\Verify;
 class ManagerController extends AdminController{
    function login(){
        if(!empty($_POST)){
            $vry=new \Think\Verify();
            if($vry->check($_POST['captcha'])){
                $manager=new \Model\ManagerModel();
                $info=$manager->checkNamePwd($_POST['admin_user'], $_POST['admin_psd']);
              if($info){
                  //session持久化用户名信息（id/name)
                  session('admin_id',$info['mg_id']);
                  session('admin_name',$info['mg_name']);
                //dump($info);    
                  $this->redirect('Index/index');
            }else
               echo "用户名错误";
            }else
            echo "验证码错误";
    }
     $this->display();
            }
    function logout(){
        session(null);
        $this->redirect('login');      
    }
    function verifyImg(){
        $config = array( 
            'fontSize' => 12, 
            'length' => 4,
            'useNoise' => false, 
            'imageW'=>80,
             'imageH'=>25,
            'fontttf'=>'4.ttf',
            );
        $Verify = new \Think\Verify($config);
        $Verify->entry();
       
              
          }
          function showlist(){
          $info = D('Manager')->select();
        $this->assign('info',$info);
        $this->display();
        
    }
 }
