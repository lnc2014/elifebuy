<?php $this->renderPartial('/_include/header');?>

<div id="contentHeader">
  <h3>商品管理</h3>
  <div class="searchArea">
    <ul class="action left">
      <li><a href="<?php echo $this->createUrl('create')?>" class="actionBtn"><span>增加商品</span></a></li>
    </ul>
 
  </div>
</div>
<script type="text/javascript">
$(document).ready(function(){
	$("#title").val('<?php echo Yii::app()->request->getParam('title')?>');
	$("#titleAlias").val('<?php echo Yii::app()->request->getParam('titleAlias')?>');
	$("#catalogId").val('<?php echo Yii::app()->request->getParam('catalogId')?>');
});
</script>
<table border="0" cellpadding="0" cellspacing="0" class="content_list">
  <form method="post" action="<?php echo $this->createUrl('batch')?>" name="cpform" >
    <thead>
      <tr class="tb_header">
        <th width="10%">商品ID</th>
        <th>商品标题</th>
        <th width="16%">商品分类</th>
<!--         <th width="9%">浏览</th> -->
        <th width="15%">录入时间</th>
        <th width="8%">操作</th>
      </tr>
    </thead>
    <?php foreach ($datalist as $row):?>
    <tr class="tb_list" <?php if($row->status_is=='N'):?>style=" background:#F0F7FC"<?php endif?>>
      <td ><input type="checkbox" name="id[]" value="<?php echo $row->id?>">
        <?php echo $row->id?></td>
      <td ><a href="<?php echo $row->getUrl() ?>" target="_blank" style="<?php echo $row->title_style?>"><?php echo $row->title?></a><br />
        <span class="alias"><?php echo $row->title_alias?></span></td>

      <?php $cate = LncGoodsCate::model()->findByAttributes(array('id'=>$row->catalog_id))?>
      <td ><?php echo $cate['cate_name']?></td>
      <td ><?php echo date('Y-m-d H:i',$row->create_time)?></td>
      <td ><a href="<?php echo  $this->createUrl('update',array('id'=>$row->id))?>"><img src="<?php echo $this->_baseUrl?>/static/admin/images/update.png" align="absmiddle" /></a>&nbsp;&nbsp;<a href="<?php echo  $this->createUrl('batch',array('command'=>'delete','id'=>$row->id))?>" class="confirmSubmit"><img src="<?php echo $this->_baseUrl?>/static/admin/images/delete.png" align="absmiddle" /></a></td>
    </tr>
    <?php endforeach;?>
    <tr class="operate">
      <td colspan="6"><div class="cuspages right">
          <?php $this->widget('CLinkPager',array('pages'=>$pagebar));?>
        </div>
        <div class="fixsel">
          <input type="checkbox" name="chkall" id="chkall" onClick="checkAll(this.form, 'id')" />
          <label for="chkall">全选</label>
          <select name="command">
            <option>选择操作</option>
            <option value="delete">删除</option>
<!--             <option value="verify">显示</option> -->
<!--             <option value="unVerify">隐藏</option> -->
<!--            <option value="commend">推荐</option>-->
<!--            <option value="unCommend">取消推荐</option>-->
          </select>
          <input id="submit_maskall" class="button confirmSubmit" type="submit" value="提交" name="maskall" />
        </div></td>
    </tr>
  </form>
</table>
<?php $this->renderPartial('/_include/footer');?>
