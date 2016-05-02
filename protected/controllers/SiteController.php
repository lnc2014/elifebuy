<?php
/**
 * 首页控制器
 *  
 */

class SiteController extends XFrontBase
{
    /**
     * 首页
     */
    public function actionIndex ()
    {

        //处理幻灯片

        $banners = Ad::model()->findAll();

        $this->render('index',array(
            'banners' => $banners
        ));
    }


    public function actionGoodsList(){
        
        $cates = LncGoodsCate::model()->findAll();
        $goods = Post::model()->findAll();
        $this->render('goods-list',array('cates'=>$cates,'goods'=>$goods));
        
    }
    /**
     * 商品详情页面
     */
    
    public function actionGoods($id) {
        $cates = LncGoodsCate::model()->findAll();
        $goods = Post::model()->findByAttributes(array(
            'id' => $id
        ));  
        $plans = LncGoodsPlan::model()->findAllByAttributes(array(
            'goods_id' => $id
        ));
        $this->render('goods-detail',array('goods'=>$goods,'cates'=>$cates,'plans'=>$plans));
    }
    /**
     * 处理前台页面递交过来的页面
     */
    public function actionForm() {  
        
        $token = $_POST['token'];
        //增加一个token作为验证的一个标准
        if(empty($_POST)){
            $this->renderPartial('/error/error404',array(
                'code' => '0001',
                'message' => '传递参数错误'
            ));
        }
        //TODO 增加token验证，防止没有必要的刷新
        
        
        $order_no = $_POST['orderid'];
        $goodsId = $_POST['goodsId'];
        $planId = $_POST['product'];
        $name = $_POST['name'];
        $num = $_POST['mun'];
        $mobile = $_POST['mob'];
        $province = $_POST['province'];
        $city = $_POST['city'];
        $area = $_POST['area'];
        $address = $_POST['address'];
        $price = $_POST['price'];
        $guest = $_POST['guest'];//留言 
        $order = new LncGoodsOrder();
        $order->order_no = $order_no;
        $order->good_id = $goodsId;
        $order->good_plan_id = $planId;
        $order->name = $name; 
        $order->num = $num;
        $order->mobile = $mobile;
        $order->price = $price;
        $order->province = $province;
        $order->city = $city;
        $order->area = $area;
        $order->address = $address;
        $order->message = $guest;
        $order->createtime = date('Y-m-d H:i:s',time()); 
        $order->updatetime = date('Y-m-d H:i:s',time());
        
        if(!$order->save()){
            $this->renderPartial('/error/error404',array(
                'code' => '0003',
                'message' => '订单提交失败，请联系客服。'
            ));
        }else{
            $this->render('success');
      
        }
        
    }
}




















