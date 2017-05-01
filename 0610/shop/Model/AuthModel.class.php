<?php
namespace Model;
use Think\Model;
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
class AuthModel extends Model{
    function savedata($data) {
        //根据已有的data(name/pid/controller/action)生成一条记录出来
           //制作auth_path 1,顶级权限auth_pid===新例句的主键id值
        //2，非顶级权限 根据pid获得父级权限信息，进而获得其全路径
           //父级全路径-新纪录主键的id值
        //制作auth_level
        $newid=$this->add($data);
        if($data['auth_pid']==0){
            $path=$newid;
        }else{
            $pinfo=$this->find($data['auth_pid']);
            $path=$pinfo['auth_path']."-".$newid;   
        }
        $level=substr_count($path,'-');
        $sql="update sw_auth set auth_paht='$path', auth_level='$level' where auth_id='$newid'";
        return $this->execute($sql);
    }
    
    
    
}


