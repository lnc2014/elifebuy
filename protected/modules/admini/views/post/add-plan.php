<?php $this->renderPartial('/_include/header');
?>
<div id="contentHeader">
  <h3>商品套餐管理</h3>
  <div class="searchArea">
    <ul class="action left" >
      <li class="current"><a href="<?php echo $this->createUrl('planlist')?>" class="actionBtn"><span>返回</span></a></li> 
    </ul>
    
  </div>
</div>
 
<table class="form_table">
  <tr>
    <td class="tb_title" >商品套餐标题：</td>
  </tr>
  <tr >
    <td>
    <input id="planid" type="hidden" value="<?php echo empty($plan['id'])?'':$plan['id'] ?>">
    <input size="60" maxlength="128"   id="name" type="text" value="<?php echo empty($plan['name'])?'':$plan['name'] ?>">
    </td>
  </tr>
 
  <tr>
  
    <tr>
    <td class="tb_title" >是否为推荐套餐：</td>
  </tr>
  <tr >
    <td>
    <input  id="promoteval" type="hidden" value="<?php echo empty($plan['promote'])?'':$plan['promote'] ?>">
      <select name="promote" id="promote" onchange="promotechange(this)">
        <option value="0">不推荐</option>
        <option value="1">推荐</option>
      </select>
    </td>
  </tr>
  <tr>
    <td class="tb_title" >套餐价格：</td>
  </tr>
  <tr >
    <td> 
    <input size="30" maxlength="128"  id="price" type="text" value="<?php echo empty($plan['price'])?'':$plan['price'] ?>">
    </td>
  </tr>
  <tr>
    <td class="tb_title" >套餐销售数量：</td>
  </tr>
  <tr >
    <td> 
    <input size="30" maxlength="128"  id="sales_num" type="text" value="<?php echo empty($plan['sales_num'])?'':$plan['sales_num'] ?>">
    </td>
  </tr>
 
  <tr>
  <tr>
    <td class="tb_title" >套餐对应商品：</td>
  </tr>
  <tr >
    <td>
    <input  id="goodsid" type="hidden" >
      <select name="goods" id="goods" onchange="change(this)">
        <?php  
        $goods = Post::model()->findAll();
        foreach($goods as $good):?>
        <option value="<?php echo $good['id']?>"><?php echo $good['title']?></option>
        <?php endforeach;?>
      </select>
    </td>
  </tr>
  
  <tr class="submit">
    <td colspan="2" >
      <input type="submit" name="editsubmit" value="增加" class="button" tabindex="3" /></td>
  </tr>
</table>
<script type="text/javascript">
function change(thi){
	var sel = $("#goods").find("option:selected").val();
	$("#goodsid").val(sel);
}
function promotechange(thi){
	var sel = $("#promote").find("option:selected").val();
	$("#promoteval").val(sel);
}

$(function(){ 
 
	$('.button').click(function(){
		var name = $("#name").val();
		var price = $("#price").val(); 
        var goodsid = $('#goodsid').val();
        var sales_num = $('#sales_num').val();
        var pro = $("#promoteval").val();

        if(!goodsid){
        	goodsid = 1; 
            }

        if(!pro){
        	pro = 0; //推荐默认为0
            }
        var planid = $("#planid").val();
        
        var z= /^[0-9]*$/;

		if(!name || !price){
			alert("商品套餐的相关信息不能为空！");
			return;
			}
        if(!z.test(price)){
            alert("价格必须为数字！");
            return;
         }
 		
      $.ajax({
        type:"POST",
        //提交的网址
        url:"<?php echo $this->createUrl('post/addplan')?>",
        //提交的数据
        data:{
          name : name,
          price:price,
          goodsid : goodsid,
          planid :planid,
          sales_num :sales_num,
          pro : pro 
        },
        //返回数据的格式
        datatype: "json",
        success:function(data){
          data = $.parseJSON(data);
          if(data.code == 1){
            alert(data.msg);
            window.location.href = '<?php echo $this->createUrl('post/planlist') ?>';
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
