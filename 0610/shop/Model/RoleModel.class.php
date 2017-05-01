<?php
//命名空间
namespace Model;
use Think\Model;

//角色控制器
class RoleModel extends Model{
   //制作数据(role_auth_ids,role_auth_ac)和存储数据
    function saveAuth($roleid,$authid){
        $authids=implode(',',$authid);
       // dump($authids);
        //2制作role_auth_ac(控制器和操作方法连接的字符串）
        //把选中权限的id信息，查询对应的权限记录，并从获得每个权限的controller和action信息
        $authinfo=D('Auth')->select($authids);
        $s="";
        foreach($authinfo as $k=>$v){
            if(!empty($v['auth_c']) && !empty($v['auth_a']))
           $s .= $v['auth_c']."-".$v['auth_a'].",";
        echo $s;
    }
    $s=rtrim($s,',');
     $sql = "update sw_role set role_auth_ids='$authids',role_auth_ac='$s' where role_id='$roleid'";
        //$this代表调用该方法的当前对象  $role
        return $this -> execute($sql);
}
}