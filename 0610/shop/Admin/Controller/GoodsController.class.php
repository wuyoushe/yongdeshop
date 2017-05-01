<?php
//TP-11讲添加商品
namespace Admin\Controller;
//use Think\Controller;
use Tools\AdminController;
 class GoodsController extends AdminController{
   function showlist1(){
       
           // 1,实例化普通model对象
           // $goods=new \Model\GoodsModel(); 
           // 实例父类的Model对象 
           //  1 $model=D();实例model对象
       // var_dump($model);
//       //2 $model=D('Goods');这种方式得到的一个数据表计时没有对应的model类型也不影响我们的直接操作数据表
//       $goods=D('Goods');
//       $total=$goods->count();
//       $per=7;
//       echo $total;
//       $info=$goods->order('goods_id desc')->select();
//       $this->assign('info','$info');
//       
//     $this->display();
        
   }
    function showlist(){
     
         $goods=new \Model\GoodsModel();
         //$goods=D('Goods');实例化
        // $info=$goods ->select();
      //var_dump($info);
     //echo "<pre>";
    // var_dump($info);
       // $goods=new GoodsModel();
       // echo "</pre>";
         //order();
         //limit();
        $total=$goods->count();
       $per=7;
       //echo $total;
       $page_obj=new \Tools\Page($total,$per);
       $sql="select * from sw_goods order by goods_id desc ".$page_obj->limit;//desc 后面一定要加空格
       $info=$goods->query($sql);
       $pagelist=$page_obj->fpage(array(3,4,5,6,7,8));
       //$info=$goods->order('goods_id desc')->select();      
      // $info=$goods ->page('1,10')->select();
      //把获得的数据传递给模板使用
       // var_dump($info);
       // dump($info);
       $this->assign('pagelist',$pagelist);
        $this->assign('info',$info);
        $this->display();
          }   
          
    function tianjia(){
       // $this->display();
        //echo "登录系统";
      /*  $goods=new \Model\GoodsModel();//操作sw_gooods 数据表的对象
       // $user=new \Model\UserModel();
        $arr=array(
            'goods_name'=>'sansung6s',
            'goods_price'=>5600,
            'goods_weight'=>130,
            'goods_number'=>16, 
        );
        $z=$goods->add($arr);
        dump($z);*/
        $goods=D('Goods');
        //收集信息
        if(!empty($_POST)){
            if($_FILES['goods_pic']['error']<4){
                $cfg=array(
                     'rootPath'      =>  './Public/uploads/', //保存路径    
                );
                $up=new \Think\Upload($cfg);
                //uploadOne()方法执行成功后会把附件的名字和路径相关信息给我们返回
               $z=$up->uploadOne($_FILES['goods_pic']); 
               $bigimg=$up->rootPath.$z['savepath'].$z['savename'];
               $smallimg=$up->rootPath.$z['savepath'].'small_'.$z['savename'];
               //dump($up->getError());
              // dump($z);
               //把上传的附件存储到数据库里边
               //实例化Image对象
               $im=new \Think\Image();
               $im->open( $bigimg);//打开被处理的图片
               $im->thumb(100,100);//制作缩略图
               $im->save( $smallimg);       //保存缩略图到服务器
               
               $_POST['goods_big_img']= $bigimg;
            }
            //exit;
            $shuju=$goods->create();
           $z= $goods ->add($shuju);
           if($z){
               //$this->redirect([分组/控制器/操作方法]地址，参数，延迟时间，提示信息）；实现跳转
               $this ->redirect('showlist',array('name'=>'tom','age'=>21),3,'添加商品成功');            
           }else{
               $this->redirect('tianjia',array('name'=>'tom','age'=>21),3,'添加商品失败');
           }
         // dump($_POST);
        }else{    
        $this->display();  
    } 
        }  
    function xiugai($goods_id){
      //echo $goods_id;
      // $goods=new \Model\GoodsModel();
      //  echo $goods_id;
      // $goods-> goods_id=108;
      // $goods->goods_name='huawei111';
     // $goods ->goods_price='1700';
       //$goods ->goods_number=21;
       //$z=$goods ->save();
       //dump($z);
        //根据$goods_id获得被修改商品的信息，并给模板展示
        //find()负责返回一条记录结果
        $goods=D('Goods');
        if(!empty($_POST)){
           // dump($_POST);
            $z=$goods->save($_POST);
             if($z){
               //$this->redirect([分组/控制器/操作方法]地址，参数，延迟时间，提示信息）；实现跳转
               $this ->redirect('showlist',array(),3,'修改商品成功');            
           }else{
               $this->redirect('xiugai',array('goods_id'=>$goods_id),3,'修改商品失败');
           }
            
        }else{
      $info=$goods->find($goods_id);
     dump($info);
     $this->assign('info',$info);
      $this->display();
        //echo "登录系统";
 }
 
    }
    function category(){
        $goods=D('Goods');
        //$this->assign();
        $this->display();
        
        
    }
 }
     
         
  ?>
