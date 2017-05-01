<?php
namespace Model;
use Think\Model;
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
class BookModel extends Model{
     public function add(){
         $model_goods=M('goods');
         $logic_by=D('buy','Logic');
                if(is_numberic($_GET['goods_id'])){
                    //商品加入购物车
                    $goods_id=intval($_GET['goods_id']);//商品id
                    $num=intval($_GET['num']);//商品数量
                    if($goods_id<=0) return;
                    $goods_info=$model->getGoodsInfoById($goods_id);
                    
                }
         
                
         
         
         
     }   
   
    
    
    
}

