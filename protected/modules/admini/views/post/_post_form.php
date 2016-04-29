<?php if (CHtml::errorSummary($model)):?>
<table id="tips">
  <tr>
    <td><div class="erro_div"><span class="error_message"> <?php echo CHtml::errorSummary($model); ?> </span></div></td>
  </tr>
</table>
<?php endif?>
<script type="text/javascript" src="<?php echo $this->_baseUrl?>/static/js/jscolor/jscolor.js"></script>
<?php $form=$this->beginWidget('CActiveForm',array('id'=>'xform','htmlOptions'=>array('name'=>'xform','enctype'=>'multipart/form-data'))); ?>
<table class="form_table">
  <tr>
    <td class="tb_title" >商品标题：</td>
  </tr>
  <tr >
    <td ><?php echo $form->textField($model,'title',array('size'=>60,'maxlength'=>128, 'class'=>'validate[required]')); ?>
  </tr>
  <tr>
    <td class="tb_title">所属类别/所属专题：</td>
  </tr>
  <tr >
    <td ><select name="Post[catalog_id]" id="Post_catalog_id" onchange="changeCatalog(this)">
        <?php
        $cates = LncGoodsCate::model()->findAll();
        foreach($cates as $catalog):?>
        <option value="<?php echo $catalog['id']?>" <?php XUtils::selected($catalog['id'], $catalog['cate_name']);?>><?php echo $catalog['cate_name']?></option>
        <?php endforeach;?>
      </select> </td>
  </tr>
  <tr>
    <td class="tb_title">封面图片：</td>
  </tr>
  <tr >
    <td colspan="2" ><input name="attach" type="file" id="attach" />
      <?php if ($model->attach_file):?>
      <a href="<?php echo $this->_baseUrl.'/'. $model->attach_file?>" target="_blank"><img src="<?php echo $this->_baseUrl.'/'. $model->attach_file?>" width="50" align="absmiddle" /></a>
      <?php endif?></td>
  </tr>
  <tr>
    <td class="tb_title">商品详细介绍：</td>
  </tr>
  <tr >
    <td ><?php echo $form->textArea($model,'content', array('class'=>'validate[required]')); ?>
      <?php $this->widget('application.widget.kindeditor.KindEditor',array(
	  'target'=>array(
	  	'#Post_content'=>array('uploadJson'=>$this->createUrl('upload'),'extraFileUploadParams'=>array(array('sessionId'=>session_id()))))));?>
	  </td>
  </tr>
  <tr>
    <td class="tb_title">商品摘要：</td>
  </tr>
  <tr >
    <td><?php echo CHtml::activeTextArea($model,'intro',array('rows'=>5, 'cols'=>90)); ?></td>
  </tr>
  <tr>
    <td class="tb_title">商品宣传组图：</td>
  </tr>
  <tr >
    <td><div>
        <p><a href="javascript:uploadifyAction('fileListWarp')" ><img src="<?php echo $this->_baseUrl?>/static/admin/images/create.gif" align="absmiddle">添加图片</a></p>
        <ul id="fileListWarp">
          <?php foreach((array)$imageList as $key=>$row):?>
          <?php if($row):?>
          <li id="image_<?php echo $row['fileId']?>"><a href="<?php echo $this->_baseUrl?>/<?php echo $row['file']?>" target="_blank"><img src="<?php echo $this->_baseUrl?>/<?php echo $row['file']?>" width="40" height="40" align="absmiddle"></a>&nbsp;<br>
            <a href='javascript:uploadifyRemove("<?php echo $row['fileId']?>", "image_")'>删除</a>
            <input name="imageList[fileId][]" type="hidden" value="<?php echo $row['fileId']?>">
            <input name="imageList[file][]" type="hidden" value="<?php echo $row['file']?>">
          </li>
          <?php endif?>
          <?php endforeach?>
        </ul>
      </div></td>
  </tr>
 
  <tbody id="attrArea" <?php if(!$attrModel):?> style="display:none"<?php endif?>>
    <tr>
      <td class="tb_title">自定义属性：</td>
    </tr>
    <tr>
      <td  colspan="2"><div id="attr2cotnent">
          <?php $this->renderPartial('/_include/attr2content', array('attrModel'=>$attrModel, 'attrData'=>$attrData));?>
        </div></td>
    </tr>
  </tbody>
  <tr class="submit">
    <td colspan="2" ><input name="oAttach" type="hidden" value="<?php echo $model->attach_file ?>" />
      <input name="oThumb" type="hidden" value="<?php echo $model->attach_thumb ?>" />
      <input type="submit" name="editsubmit" value="提交" class="button" tabindex="3" /></td>
  </tr>
</table>
<script type="text/javascript">
$(function(){
	$("#xform").validationEngine();
});
</script>
<?php $form=$this->endWidget(); ?>
<script>
function changeCatalog(ths){
	$.post("<?php echo $this->createUrl('ajax/attr2content')?>", {catalog:ths.value}, function(res){
		if(res.state == 'success'){
			$("#attr2cotnent").html(res.text);
			$("#attrArea").show();
		}else{
			$("#attrArea").hide();
			$("#attr2cotnent").html('');
		}
	},'json');
}
</script>