<?php
/**
* 文件说明：商品详情页面
* ==============================================
* 版权所有 @lnc 
* ==============================================
* @date: 2016年3月30日
* @author: admin
* @version:1.0
*/

?>
<?php $this->renderPartial('/_include/header',array('cates'=>$cates))?>
 
<style type="text/css">
<!--
.STYLE1 {
	color: #FFFFFF
} 
</style>
<div align="center">
<div style="border-top-width: 0px;
    border-right-width: 0px;
    border-bottom-width: 0px;
    border-left-width: 0px;
    width: 900px;
    height: 630px;
    background-color: #FFF;">
<?php $this->renderPartial('/_include/form',array('plans'=>$plans,'goodsId'=>$goodsId))?>
</div>
</div>
<div id="main">
    <?php echo $goods['content']?>
 
</div>  
<?php $this->renderPartial('/_include/footer')?>