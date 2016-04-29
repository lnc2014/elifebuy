<?php
/**
 * 客户信息管理
 *  
 */

class OrderController extends XAdminiBase
{
    /**
     * 首页
     *
     */
    public function actionIndex() {

        parent::_acl();
        $page = trim( $this->_gets->getParam('page'));
        $page = empty($page)?0:$page;
        $order = new LncGoodsOrder();

        $criteria = new CDbCriteria();
        $count = $order->findAll();
        $pages = new CPagination( $count );
        $pages->pageSize = 10;
        $count = count($count);
        $page_s = 10;
        $all_pages = ceil($count/$page_s);
        $criteria->limit = $pages->pageSize;
        $criteria->offset = $page * $pages->pageSize;
        $criteria->order = 'id DESC';
        $result = $order->findAll( $criteria );

        $this->render( 'index',array(
            'orders'=>$result,
            'pages' => $all_pages
        ));
    }

}
