<?php $this->renderPartial('/_include/header');?>

<div id="contentHeader">
  <h3>商品套餐管理</h3>
  <div class="searchArea">
    <ul class="action left">
      <li><a href="<?php echo $this->createUrl('addplanlist')?>" class="actionBtn"><span>增加商品套餐</span></a></li>
    </ul>
 
  </div>
</div>
<table border="0" cellpadding="0" cellspacing="0" class="content_list">
  <form method="post" action="<?php echo $this->createUrl('batch')?>" name="cpform" >
    <thead>
      <tr class="tb_header">
        <th width="10%">商品套餐ID</th>
        <th width="10%">商品名称</th>
        <th width="16%">商品套餐名称</th>
        <th width="16%">商品套餐价格</th>
        <th width="15%">添加时间</th>
        <th width="8%">操作</th>
      </tr>
    </thead>
    <?php
        echo empty($planlist)?'暂无数据':'';
        foreach ($planlist as $plan){?>
    <tr class="tb_list" >
      <td > <?php echo $plan['id']?></td>
      <td > <?php echo $plan['title']?></td>
      <td ><?php echo $plan['name']?></td>
      <td ><?php echo $plan['price']?></td>
      <td ><?php echo $plan['create_time']?></td>
      <td ><a href="<?php echo  $this->createUrl('updateplan',array('id'=>$plan['id']))?>"><img src="<?php echo $this->_baseUrl?>/static/admin/images/update.png" align="absmiddle" /></a>&nbsp;&nbsp;<a href="<?php echo  $this->createUrl('deleteplan',array('command'=>'delete','id'=>$plan['id']))?>" class="confirmSubmit"><img src="<?php echo $this->_baseUrl?>/static/admin/images/delete.png" align="absmiddle" /></a></td>
      </tr>
        <?php 
        }    
    ?>
    
 
  </form>
</table>
<?php $this->renderPartial('/_include/footer');?>
