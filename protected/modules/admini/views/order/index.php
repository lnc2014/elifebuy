<?php $this->renderPartial('/_include/header');?>

<div id="contentHeader">
  <h3>客户信息列表</h3>
</div>
<table border="0" cellpadding="0" cellspacing="0" class="content_list">
    <thead>
      <tr class="tb_header">
        <th width="5%">ID</th>
        <th width="10%">商品订单编号</th>
        <th width="10%">商品标题</th>
        <th width="15%">商品套餐</th>
        <th width="5%">购买数量</th>
        <th width="5%">用户姓名</th>
        <th width="5%">用户电话</th>
        <th width="20%">用户地址</th>
        <th width="5%">价格</th>
        <th width="5%">下单时间</th>
      </tr>
    </thead>
    <?php foreach ($orders as $row):?>
    <tr class="tb_list"  style=" background:#F0F7FC">
      <td ><?php echo $row['id']?></td>
      <td ><?php echo $row['order_no']?></td>
      <?php
      $goods_name = Post::model()->findByAttributes(array('id'=>$row['good_id']));
      $goods_name = $goods_name['title'];
      ?>
      <td ><?php echo $goods_name?></td>
      <?php
      $plan_name = LncGoodsPlan::model()->findByAttributes(array('id'=>$row['good_plan_id']));
      $plan = $plan_name['name'];
      ?>
      <td ><?php echo $plan?></td>
      <td ><?php echo $row['num']?></td>
      <td ><?php echo $row['name']?></td>
      <td ><?php echo $row['mobile']?></td>
      <td ><?php echo $row['province'].$row['city'].$row['area'].$row['address']?></td>
      <td ><?php echo $row['price']?></td>
      <td ><?php echo $row['createtime']?></td>
    </tr>
    <?php endforeach;?>


    <td colspan="8">
      <div class="cuspages right">
        <?php $this->widget('CLinkPager',array('pages'=>$pagebar));?>
        翻页: <ul id="yw0" class="yiiPager"><li class="first hidden"><a href="/ywb/index.php?r=admini/logger/admin">&lt;&lt; 首页</a></li>


          <?php
          for($i=0;$i<$pages;$i++){
            $url = $this->createUrl('order/index',array('page'=>$i));
            echo '<li class="page selected"><a href="'.$url.'">'.$i.'</a></li>';
          }
          ?>

      </div>

    </td>

</table>
<?php $this->renderPartial('/_include/footer');?>