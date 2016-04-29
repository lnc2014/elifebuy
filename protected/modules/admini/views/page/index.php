<?php $this->renderPartial('/_include/header');?>

<div id="contentHeader">
  <h3>单页管理</h3>
</div>
<table class="content_list">
  <form method="post" action="<?php echo $this->createUrl('batch')?>" name="cpform" >
    <tr class="tb_header">
<!--       <th width="8%">ID</th> -->
      <th width="25%">标题</th>
      <th width="15%">录入时间</th>
      <th >操作</th>
    </tr>
    <?php foreach ($datalist as $row):?>
    <tr class="tb_list">
      <td ><?php echo $row->title?><br />
        <a href="<?php echo $this->createAbsoluteUrl('/page/show',array('name'=>$row->title_alias))?>" target="_blank"><?php echo $row->title_alias?></a></td>
      <td ><?php echo date('Y-m-d H:i',$row->create_time)?></td>
      <td ><a href="<?php echo  $this->createUrl('update',array('id'=>$row->id))?>"><img src="<?php echo $this->_baseUrl?>/static/admin/images/update.png" align="absmiddle" /></a>
        </td>
    </tr>
    <?php endforeach;?>
    <tr>
      <td colspan="5"><div class="cuspages right">
          <?php $this->widget('CLinkPager',array('pages'=>$pagebar));?>
        </div> </td>
    </tr>
  </form>
</table>
<?php $this->renderPartial('/_include/footer');?>
