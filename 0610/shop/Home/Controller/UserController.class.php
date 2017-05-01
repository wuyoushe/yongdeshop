<?php
namespace Home\Controller;
use Think\Controller;
 
class UserController extends Controller {
    function login(){
     $this->display();
     
     function register(){
         //  $_POST['user_hobby']=implode(',',$_POST['user_hobby']);//将爱好的信息由array变成字符串   
             //dump($_POST);
         $user=new \Model\UserModel();
         if(!empty($_POST)){
           $shuju=$user->create();//create()方法收集$_POST信息并返回,同时触发表单自动验证
          if($shuju){
              
             if($user->add($shuju)){
                 echo "存入数据成功";
             }
         }else{  
             dump($user->getError());      
     }
    }
       $this->display(); 
    }
}
}
?>
