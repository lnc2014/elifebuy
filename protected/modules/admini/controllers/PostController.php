<?php
/**
 * 商品内容管理
 *  
 */

class PostController extends XAdminiBase
{
    /**
     * 首页
     *
     */
    public function actionIndex() {

        parent::_acl();
        $model = new Post();
        $criteria = new CDbCriteria();
        $condition = '1';
        $title = trim( $this->_gets->getParam( 'title' ) );
        $titleAlias = trim( $this->_gets->getParam( 'titleAlias' ) );
        $catalogId = intval( $this->_gets->getParam( 'catalogId' ) );
        $title && $condition .= ' AND title LIKE \'%' . $title . '%\'';
        $titleAlias && $condition .= ' AND title_alias LIKE \'%' . $titleAlias . '%\'';
        $catalogId && $condition .= ' AND catalog_id= ' . $catalogId;
        $criteria->condition = $condition;
        $criteria->order = 't.id DESC';
        $criteria->with = array ( 'catalog' );
        $count = $model->count( $criteria );
        $pages = new CPagination( $count );
        $pages->pageSize = 13;
        $pageParams = XUtils::buildCondition( $_GET, array ( 'title' , 'catalogId','titleAlias' ) );
        $pages->params = is_array( $pageParams ) ? $pageParams : array ();
        $criteria->limit = $pages->pageSize;
        $criteria->offset = $pages->currentPage * $pages->pageSize;
        $result = $model->findAll( $criteria );

        $this->render( 'index', array ( 'datalist' => $result , 'pagebar' => $pages) );
    }

    /**
     * 录入
     *
     */
    public function actionCreate() {
        parent::_acl();
        $model = new Post();
        $attr = $this->_gets->getPost( 'attr' );
        $imageList = $this->_gets->getPost( 'imageList' );
        $imageListSerialize = XUtils::imageListSerialize($imageList);
      
        if ( isset( $_POST['Post'] ) ) {
            $style = $this->_gets->getPost( 'style' );
            $acl = $this->_gets->getPost( 'acl' );
            $styleFormat = XUtils::titleStyle( $style );
            $file = XUpload::upload( $_FILES['attach'], array( 'thumb'=>true, 'thumbSize'=>array ( 400 , 250 ) ) );
            $model->attributes = $_POST['Post'];
            if ( is_array( $file ) ) {
                $model->attach_status = 'Y';
                $model->attach_file = $file['pathname'];
                $model->attach_thumb = $file['paththumbname'];
            }
            $model->title_style = $styleFormat['text'];
            $model->title_style_serialize = $styleFormat['serialize'];
            $model->acl = is_array( $acl )? implode( ',', $acl ): '';
            $model->image_list = $imageListSerialize['dataSerialize'];
            if ($model->save() ) {
                Attr::create( $model->id,  $attr );
                Post2tags::build( 'create', $_POST['Post']['tags'], $model->id, $model->catalog_id );
                AdminLogger::_create( array ( 'catalog' => 'create' , 'intro' => '录入内容,ID:' . $model->id ) ); 
                $this->redirect( array ( 'index' ) );
            }
        }
        $attrData =  Attr::dataReset($attr);
        $attrModel = Attr::lists( $model->catalog_id, 'post' );
        $this->render( 'create', array ( 'model' => $model, 'imageList'=>$imageListSerialize['data'], 'attrModel'=>$attrModel ,'attrData'=>$attrData   ) );
    }

    /**
     * 更新
     *
     * @param  $id
     */
    public function actionUpdate( $id ) {
        parent::_acl();
        $attr = $this->_gets->getParam( 'attr' );
        $model = parent::_dataLoad( new Post(), $id );
        $imageList = $this->_gets->getParam( 'imageList' );
        $imageListSerialize = XUtils::imageListSerialize($imageList);
        if ( isset( $_POST['Post'] ) ) {
            $style = $this->_gets->getParam( 'style' );
            $acl = $this->_gets->getParam( 'acl' );
            $styleFormat = XUtils::titleStyle( $style );
            $model->attributes = $_POST['Post'];
            $file = XUpload::upload( $_FILES['attach'], array( 'thumb'=>true, 'thumbSize'=>array ( 400 , 250  ) ) );
            if ( is_array( $file ) ) {
                $model->attach_file = $file['pathname'];
                $model->attach_thumb = $file['paththumbname'];
                $model->attach_status = 'Y';
                @unlink( $_POST['oAttach'] );
                @unlink( $_POST['oThumb'] );
            }
            $model->title_style = $styleFormat['text'];
            $model->title_style_serialize = $styleFormat['serialize'];
            $model->acl = is_array( $acl )? implode( ',', $acl ): '';
            $model->image_list = $imageListSerialize['dataSerialize'];
            if ( $model->save() ) {
                Attr::xupdate( $model->id,  $attr );
                Post2tags::build( 'update', $_POST['Post']['tags'], $model->id, $model->catalog_id );
                AdminLogger::_create( array ( 'catalog' => 'update' , 'intro' => '编辑内容,ID:' . $id ) ); 
                $this->redirect( array ( 'index' ) );
            }
        }
        $attrModel = Attr::lists( $model->catalog_id, 'post' );
        if ( $attr )
            $attrData =  Attr::dataReset($attr);
        else
            $attrData = Attr::datas( $model->id );

        if ( $imageList )
            $imageList =  $imageListSerialize['data'];
        elseif($model->image_list)
            $imageList = unserialize($model->image_list);
        $this->render( 'update', array ( 'model' => $model,'imageList'=>$imageList, 'attrModel'=>$attrModel, 'attrData'=>$attrData , 'groupList'=>$this->_groupList( 'user' ) ) );

    }

    
    /**
     * 商品分类列表
     */
    public function actionCateList(){
        parent::_acl();
        
        $cate = new LncGoodsCate();

        $criteria = new CDbCriteria();
        $criteria->order = 'id DESC';   // 排序
        $catelist = $cate->findAll($criteria);

        $this->render('cate-list',array(
            'catelist'=>$catelist
        ));
        
        
    }
    
    /**
     * 商品套餐列表
     */
    public function actionPlanList(){
        parent::_acl(); 
        
        $sql = "SELECT a.`title`,b.* FROM lnc_post a ,lnc_goods_plan b WHERE a.id = b.`goods_id` ORDER BY b.`id` DESC;";
        $connection = Yii::app()->db; 
        $command = $connection->createCommand($sql);
        $planlist = $command->queryAll();  
        $this->render('plan-list',array(
            'planlist'=>$planlist
        ));
    }
    /**
     * 增加商品套餐
     */
    public function actionAddPlanList(){ 
        $this->render('add-plan');
    
    }
    /**
     * 删除分类
     */
    public function actionDeleteCate(){
        $id = Yii::app()->request->getParam('id');
        $cate = LncGoodsCate::model()->findByAttributes(array(
                'id'=>$id
        ) );
        if($cate->delete()){
            return $this->render('cate-delete',array('status'=>'success'));
        }else{
            return $this->render('cate-delete',array('status'=>'fail'));
        }
    }
    /**
     * 删除分类
     */
    public function actionDeletePlan(){
        $id = Yii::app()->request->getParam('id');
        $cate = LncGoodsPlan::model()->findByAttributes(array(
                'id'=>$id
        ) );
        if($cate->delete()){
            return $this->render('plan-delete',array('status'=>'success'));
        }else{
            return $this->render('plan-delete',array('status'=>'fail'));
        }
    }
    public function actionUpdateCate($id){
        if(empty($id)){
            throw new CHttpException('传入ID为空');
        }
        $cate = LncGoodsCate::model()->findByAttributes(array(
            'id'=>$id
        ));
        $this->render('add-cate',array(
            'cate' => $cate
        ));

    }
    public function actionUpdatePlan($id){
        if(empty($id)){
            throw new CHttpException('传入ID为空');
        }
        $plan = LncGoodsPlan::model()->findByAttributes(array(
            'id'=>$id
        ));
        $this->render('add-plan',array(
            'plan' => $plan
        ));

    }
    /**
     * 增加商品分类列表
     */
    public function actionAddCateList(){
        $this->render('add-cate');
        
    }

    /**
     * 处理前台页面的数据
     */
    public function actionAddCate(){
        if(empty($_POST)){
            echo XUtils::json_encode('0','参数传递错误！');
        }
        $cate_id = $_POST['id'];
        $title = $_POST['title'];
        $intro = $_POST['intro'];

        if(empty($cate_id)){

            $cate = new LncGoodsCate();
            $cate->cate_name = $title;
            $cate->cate_intro = $intro;
            $cate->create_time = date('Y-m-d H:i:s',time());
            $cate->upadate_time = date('Y-m-d H:i:s',time());
            if($cate->save()){
                echo XUtils::json_encode('1','商品分类添加成功！');
            }else{
                echo XUtils::json_encode('0','商品分类添加失败！');
            }
        }else{
            $cateUpdate = LncGoodsCate::model()->findByAttributes(array(
                'id'=>$cate_id
            ));
            $cateUpdate->cate_name = $title;
            $cateUpdate->cate_intro = $intro;
            $cateUpdate->upadate_time = date('Y-m-d H:i:s',time());
            if($cateUpdate->update()){
                echo XUtils::json_encode('1','商品分类更新成功！');
            }else{
                echo XUtils::json_encode('0','商品分类更新失败！');
            }

        } 
    }

    /**
     * 处理前台页面的数据
     */
    public function actionAddPlan(){
        if(empty($_POST)){
            echo XUtils::json_encode('0','参数传递错误！');
        }
         
        $name = $_POST['name'];
        $price = $_POST['price'];
        $goods_id = $_POST['goodsid'];
        $pro = $_POST['pro'];
        $sales_num = $_POST['sales_num'];
        
        $plan_id = $_POST['planid'];

        if(empty($plan_id)){
            $plan = new LncGoodsPlan();
            $plan->name = $name;
            $plan->price = $price;
            $plan->sales_num = $sales_num;
            $plan->promote = $pro;
            $plan->goods_id = intval($goods_id); 
            $plan->create_time = date('Y-m-d H:i:s',time());
            $plan->upadate_time = date('Y-m-d H:i:s',time());
            if($plan->save()){
                echo XUtils::json_encode('1','商品套餐添加成功！');
            }else{
                echo XUtils::json_encode('0','商品套餐添加失败！');
            }
        }else{
            $cateUpdate = LncGoodsPlan::model()->findByAttributes(array(
                'id'=>$plan_id
            ));
            $cateUpdate->name = $name;
            $cateUpdate->price = $price;
            $cateUpdate->sales_num = $sales_num;
            $cateUpdate->goods_id = $goods_id;
            $cateUpdate->promote = $pro;
            $cateUpdate->upadate_time = date('Y-m-d H:i:s',time());
            if($cateUpdate->update()){
                echo XUtils::json_encode('1','商品套餐更新成功！');
            }else{
                echo XUtils::json_encode('0','商品套餐更新失败！');
            }

        } 
    }
    
    
    
    /**
     * 评论管理
     *
     */
    public function actionComment() {
        parent::_acl();
        $model = new PostComment();
        $criteria = new CDbCriteria();
        $condition = '1';
        $postTitle = $this->_gets->getParam( 'postTitle' );
        $content = $this->_gets->getParam( 'content' );
        $postTitle && $condition .= ' AND post.title LIKE \'%' . $postTitle . '%\'';
        $content && $condition .= ' AND t.content LIKE \'%' . $content . '%\'';
        $criteria->condition = $condition;
        $criteria->order = 't.id DESC';
        $criteria->with = array ( 'post' );
        $count = $model->count( $criteria );
        $pages = new CPagination( $count );
        $pages->pageSize = 13;
        $pageParams = XUtils::buildCondition( $_GET, array ( 'postTitle' , 'content' ) );
        $pages->params = is_array( $pageParams ) ? $pageParams : array ();
        $criteria->limit = $pages->pageSize;
        $criteria->offset = $pages->currentPage * $pages->pageSize;
        $result = $model->findAll( $criteria );
        $this->render( 'post_comment', array ( 'datalist' => $result , 'pagebar' => $pages ) );
    }

    /**
     * 更新
     *
     * @param  $id
     */
    public function actionCommentUpdate( $id ) {
        parent::_acl( 'post_comment_update' );
        $model = parent::_dataLoad( new PostComment(), $id );
        if ( isset( $_POST['PostComment'] ) ) {
            $model->attributes = $_POST['PostComment'];
            if ( $model->save() ) {
                AdminLogger::_create( array ( 'catalog' => 'update' , 'intro' => '编辑内容评论，ID:' . $id ) ); 
                $this->redirect( array ( 'comment' ) );
            }
        }
        $this->render( 'post_comment_update', array ( 'model' => $model ) );
    }

    /**
     * 标签管理
     *
     */
    public function actionPostTags() {
        $model = new PostTags();
        $criteria = new CDbCriteria();
        $condition = '1';
        $tagName = $this->_gets->getParam( 'tagName' );
        $tagName && $condition .= ' AND tag_name LIKE \'%' . $tagName . '%\'';
        $catalog_id = intval( $this->_gets->getParam( 'catalog_id' ) );
        $catalog_id && $condition .= ' AND t.catalog_id= ' . $catalog_id;
        $criteria->condition = $condition;
        $criteria->order = 't.id DESC';
        $criteria->with = 'catalog';
        $count = $model->count( $criteria );
        $pages = new CPagination( $count );
        $pages->pageSize = 13;
        $pageParams = XUtils::buildCondition( $_GET, array ( 'tagName' , 'catalog_id' ) );
        $pages->params = is_array( $pageParams ) ? $pageParams : array ();
        $criteria->limit = $pages->pageSize;
        $criteria->offset = $pages->currentPage * $pages->pageSize;
        $result = $model->findAll( $criteria );
        $this->render( 'post_tags', array ( 'datalist' => $result , 'pagebar' => $pages ) );
    }

    /*
     * 专题
     */
    public function actionSpecial() {
        parent::_acl( 'post_special' );
        $model = new Special();
        $criteria = new CDbCriteria();
        $condition = '1';
        $title = $this->_gets->getParam( 'title' );
        $titleAlias = $this->_gets->getParam( 'titleAlias' );
        $title && $condition .= ' AND title LIKE \'%' . $title . '%\'';
        $titleAlias && $condition .= ' AND title_alias LIKE \'%' . $titleAlias . '%\'';
        $criteria->condition = $condition;
        $criteria->order = 't.id DESC';
        $count = $model->count( $criteria );
        $pages = new CPagination( $count );
        $pages->pageSize = 13;
        $pageParams = XUtils::buildCondition( $_GET, array ( 'page_name_alias' , 'page_name' ) );
        $pages->params = is_array( $pageParams ) ? $pageParams : array ();
        $criteria->limit = $pages->pageSize;
        $criteria->offset = $pages->currentPage * $pages->pageSize;
        $result = $model->findAll( $criteria );
        $this->render( 'special_index', array ( 'datalist' => $result , 'pagebar' => $pages ) );
    }

    /**
     * 专题录入
     */
    public function actionSpecialCreate() {
        parent::_acl( 'post_special_create' );
        $model = new Special();
        if ( isset( $_POST['Special'] ) ) {
            $model->attributes = $_POST['Special'];
            $file = XUpload::upload( $_FILES['attach'], array( 'thumb'=>true, 'thumbSize'=>array ( 500 , 400 ) )  );
            if ( is_array( $file ) ) {
                $model->attach_file = $file['pathname'];
                $model->attach_thumb = $file['paththumbname'];
            }
            if ( $model->save() ) {
                self::_adminiLogger( array ( 'catalog' => 'update' , 'intro' => '专题录入：' . $this->id .',ID:' . $id ) ); 
                $this->redirect( array( 'special' ) );
            }
        }
        $this->render( 'special_create', array ( 'model' => $model ) );
    }

    /**
     * 专题更新
     *
     * @param $id
     */
    public function actionSpecialUpdate( $id ) {
        parent::_acl( 'post_special_update' );
        $model = parent::_dataLoad( new Special(), $id );
        if ( isset( $_POST['Special'] ) ) {
            $model->attributes = $_POST['Special'];
            $file = XUpload::upload( $_FILES['attach'], array( 'thumb'=>true, 'thumbSize'=>array (  500 , 400  ) )  );
            if ( is_array( $file ) ) {
                $model->attach_file = $file['pathname'];
                $model->attach_thumb = $file['paththumbname'];
                @unlink( $_POST['oAttach'] );
                @unlink( $_POST['oThumb'] );
            }
            if ( $model->save() ) {
                self::_adminiLogger( array ( 'catalog' => 'update' , 'intro' => '专题更新,ID:' .$model->id ) ); 
                $this->redirect( array( 'special' ) );
            }
        }
        $this->render( 'special_update', array ( 'model' => $model ) );
    }

    /**
     * 批量操作
     *
     */
    public function actionBatch() {
        if ( XUtils::method() == 'GET' ) {
            $command = trim( $_GET['command'] );
            $ids = intval( $_GET['id'] );
        } elseif ( XUtils::method() == 'POST' ) {
            $command = trim( $_POST['command'] );
            $ids = $_POST['id'];
            is_array( $ids ) && $ids = implode( ',', $ids );
        } else {
            XUtils::message( 'errorBack', '只支持POST,GET数据' );
        }
        empty( $ids ) && XUtils::message( 'error', '未选择记录' );

        switch ( $command ) {
        case 'delete':
            parent::_acl( 'post_delete' );
            Post2tags::xdelete( $ids );
            $commentModel = new PostComment();
            $commentModel->deleteAll( 'post_id IN(' . $ids . ')' );
            AdminLogger::_create( array ( 'catalog' => 'delete' , 'intro' => '删除内容，ID:' . $ids ) ); 
            parent::_delete( new Post(), $ids, array ( 'index' ), array( 'attach_file', 'attach_thumb' ) );
            break;
        case 'commentDelete':
            parent::_acl( 'post_comment_delete' );
            AdminLogger::_create( array ( 'catalog' => 'delete' , 'intro' => '删除内容评论，ID:' . $ids ) ); 
            parent::_delete( new PostComment(), $ids, array ( 'comment' ) );
            break;
        case 'commentVerify':
            parent::_acl( 'post_comment_verify' );
            AdminLogger::_create( array ( 'catalog' => 'update' , 'intro' => '审核评论，ID:' . $ids ) ); 
            parent::_verify( new PostComment(), 'verify', $ids, array ( 'comment' ) );
            break;
        case 'commentUnVerify':
            parent::_acl( 'post_comment_verify' );
            AdminLogger::_create( array ( 'catalog' => 'update' , 'intro' => '取消评论审核，ID:' . $ids ) ); 
            parent::_verify( new PostComment(), 'unVerify', $ids, array ( 'comment' ) );
            break;
        case 'verify':
            parent::_acl( 'post_verify' );
            AdminLogger::_create( array ( 'catalog' => 'update' , 'intro' => '批量审核内容，ID:' . $ids ) ); 
            parent::_verify( new Post(), 'verify', $ids, array ( 'index' ) );
            break;
        case 'unVerify':
            parent::_acl( 'post_verify' );
            AdminLogger::_create( array ( 'catalog' => 'update' , 'intro' => '批量取消内容审核，ID:' . $ids ) ); 
            parent::_verify( new Post(), 'unVerify', $ids, array ( 'index' ) );
            break;
        case 'commend':
            parent::_acl( 'post_commend' );
            AdminLogger::_create( array ( 'catalog' => 'update' , 'intro' => '批量推荐内容，ID:' . $ids ) ); 
            parent::_commend( new Post(), 'commend', $ids, array ( 'index' ) );
            break;
        case 'unCommend':
            parent::_acl( 'post_commend' );
            AdminLogger::_create( array ( 'catalog' => 'update' , 'intro' => '批量取消内容推荐，ID:' . $ids ) ); 
            parent::_commend( new Post(), 'unCommend', $ids, array ( 'index' ) );
            break;
        case 'specialDelete':
            parent::_acl( 'post_special_delete' );
            AdminLogger::_create( array ( 'catalog' => 'delete' , 'intro' => '删除内容，ID:' . $ids ) ); 
            parent::_delete( new Special(), $ids, array ( 'special' ), array( 'attach_file', 'attach_thumb' ) );
            break;
        default:
            throw new CHttpException(404, '错误的操作类型:' . $command);
            break;
        }
    }
}
