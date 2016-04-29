<?php $this->renderPartial('/_include/header');
?>
<div id="contentHeader">
  <h3>商品分类管理</h3>
  <div class="searchArea">
    <ul class="action left" >
      <li class="current"><a href="<?php echo $this->createUrl('catelist')?>" class="actionBtn"><span>返回</span></a></li> 
    </ul>
    
  </div>
</div>
 
<table class="form_table">
  <tr>
    <td class="tb_title" >商品分类标题：</td>
  </tr>
  <tr >
    <td>
    <input  name="id" id="id" type="hidden" value="<?php echo empty($cate['id'])?'':$cate['id'] ?>">
    <input size="60" maxlength="128"  name="Post[title]" id="catetitle" type="text" value="<?php echo empty($cate['cate_name'])?'':$cate['cate_name'] ?>">
  </tr>
 
  <tr>
    <td class="tb_title">商品简介：</td>
  </tr>
  <tr>
    <td><textarea rows="5" cols="90"  id="cateintro"><?php echo empty($cate['cate_intro'])?'':$cate['cate_intro'];?></textarea></td>
  </tr>
  <tr class="submit">
    <td colspan="2" >
      <input type="submit" name="editsubmit" value="增加" class="button" tabindex="3" /></td>
  </tr>
</table>
<script type="text/javascript">

$(function(){ 
	$('.button').click(function(){
		var catetitle = $("#catetitle").val();
		var cateintro = $("#cateintro").val();
        var id = $('#id').val();

		if(!catetitle || !cateintro){
			alert("商品分类的相关信息不能为空！");
			return;
			}
      $.ajax({
        type:"POST",
        //提交的网址
        url:"<?php echo $this->createUrl('post/addcate')?>",
        //提交的数据
        data:{
          id : id,
          title:catetitle,
          intro:cateintro
        },
        //返回数据的格式
        datatype: "json",
        success:function(data){
          data = $.parseJSON(data);
          if(data.code == 1){
            alert(data.msg);
            window.location.href = '<?php echo $this->createUrl('post/catelist') ?>';
          }else{
            alert(data.msg);
            window.location.reload();
          }

        }   ,
        //调用执行后调用的函数
        complete: function(XMLHttpRequest, textStatus){

        },
        //调用出错执行的函数
        error: function(){
          //请求出错处理
          alert('程序出错！');
        }
      });
		
		});
});

</script>
<?php $this->renderPartial('/_include/footer');?>
