<?php

namespace Model;
use Think\Model;

//为sw_goods数据表创建一个Model模型类
//父类Model: ThinkPHP/Library/Think/Model.class.php
class UserModel extends Model{
    //可以自定义方法并访问
    
    //是否批量处理验证
    protected $patchValidate =true;
    //自动验证定义
    public $_validate=array(
       //array(字段,验证规则,错误提示,[验证条件,附件规则,验证时间])
      // 1.用户名验证，不能为空  
      array('username','require','用户名不能为空'),
      // 2.用户名(唯一)
      array('username','','用户名已存在',0,'unique'),
      //2.明码验证，不能为空
      array('password','require','密码不能为空'),
      //3.确认密码,不能为空并且和密码保持一致
      array('password2','require','确认密码不能为空'),
      array('password2','password','两次密码必须一致',0,'confirm'),  
      //4.邮箱验证
      array('user_email','email','邮箱格式不正确'),
      //5 QQ号码验证:存数字 位数5-12.
      array('user_qq','number','QQ号码必须为数字'),
      array('user_qq','5,12','QQ号码长度为5-12之间',0,'length'),
      //6.学历验证，必须选择一项
       array('user_xueli','2,5','学历必须选择一项',0,'between'),
      //7.爱好必须选择两项或者以上
      array('user_hobby','check_hobby','爱好必须两项或者以上','1','callback'),
      
  ); //自动验证定义
  
  //验证爱好
  //参数$arg代表被验证项目的value值
  function check_hobby($arg){
      if(count($arg)<2){
          return false; //会自动的输出验证的错误信息
      }
      return true;
  }
}
