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
 <style>  
.goods-left {
    width: 385px;
    height: 500px;  
    display:inline-block;
	margin:0 auto;
}

.main {
/*     margin: 32px 3px 0px 185px; */
	margin:36px auto;
	text-align:center;
}
</style> 
<div class="main">
<?php 
foreach ($goods as $good){

     $url = $this->createUrl('site/goods',array('id'=>$good['id']));
     ?>
    <div class="goods-left">
    <a href="<?php echo $url?>" target="_blank" class="link-w"><?php echo $good['title']?></a>
    <a href="<?php echo $url?>" target="_blank"><img src="<?php echo $good['attach_file']?>" border="5" style="width: 300px;height: 250px;"></a>
     <pre class="hong"><?php echo $good['intro']?> </pre>
    <a href="<?php echo $url?>" target="_blank" class="link-w"><img src="<?php echo $this->_baseUrl?>/static/yindushenyou/images/93.gif" width="80" height="23" border="0" align="absmiddle"></a>
    
</div><?php 
}
?>
  
</div>

  
  <table width="515" height="22" border="0" align="center" cellpadding="0" cellspacing="0">
    <tbody>
      <tr>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
    </tbody>
  </table>
<?php $this->renderPartial('/_include/footer')?>