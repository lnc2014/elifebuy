<?php $this->renderPartial('/_include/header');?>

<div id="contentHeader">
  <h3>商品分类管理</h3>
  <div class="searchArea">
    <ul class="action left">
      <li><a href="<?php echo $this->createUrl('addcatelist')?>" class="actionBtn"><span>增加商品分类</span></a></li>
    </ul>
 
  </div>
</div>
<table border="0" cellpadding="0" cellspacing="0" class="content_list">
  <form method="post" action="<?php echo $this->createUrl('batch')?>" name="cpform" >
    <thead>
      <tr class="tb_header">
        <th width="10%">商品ID</th>
        <th width="16%">商品分类</th>
        <th width="16%">商品简介</th>
        <th width="15%">添加时间</th>
        <th width="8%">操作</th>
      </tr>
    </thead>
    <?php
        echo empty($catelist)?'暂无数据':'';
        foreach ($catelist as $cate){?>
    <tr class="tb_list" >
      <td >
        <?php echo $cate->id?></td>
      <td ><?php echo $cate->cate_name?></td>
      <td ><?php echo $cate->cate_intro?></td>
      <td ><?php echo $cate->create_time?></td>
      <td ><a href="<?php echo  $this->createUrl('updatecate',array('id'=>$cate->id))?>"><img src="<?php echo $this->_baseUrl?>/static/admin/images/update.png" align="absmiddle" /></a>&nbsp;&nbsp;<a href="<?php echo  $this->createUrl('deletecate',array('command'=>'delete','id'=>$cate->id))?>" class="confirmSubmit"><img src="<?php echo $this->_baseUrl?>/static/admin/images/delete.png" align="absmiddle" /></a></td>
      </tr>
        <?php 
        }    
    ?>
    
 
  </form>
</table>
<?php $this->renderPartial('/_include/footer');?>
