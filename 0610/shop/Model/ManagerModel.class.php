<?php

namespace Model;
use Think\Model;

//为sw_manager数据表创建一个Model模型类
//父类Model: ThinkPHP/Library/Think/Model.class.php
class ManagerModel extends Model{
    //用户名和密码校验
    function checkNamePwd($nm, $pwd){
        //① 根据$nm判断名字是否存在
        $info = $this -> where("mg_name='$nm'")->find();
        //dump($info);//有结果返回结果的记录信息，否则返回null
        //② 如果$nm的记录存在，就让记录的密码和 $pwd做比较
       if($info){
           if($info['mg_pwd']===$pwd)
                return $info;
       }
       return null;  
    }
}

