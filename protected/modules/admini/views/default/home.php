<?php $this->renderPartial('/_include/header');?>

<table class="content_list">
 <thead>  <tr >
    <td colspan="2" class="tbTitle">后台管理系统首页</td>
  </tr>
   </thead>
 
</table>
<table class="content_list">
  <thead>
    <tr >
      <td colspan="2" class="tbTitle">系统信息</td>
    </tr>
  </thead>
  <tr>
    <td width="100" >程序版本</td>
    <td >1.0</td>
  </tr>
  <tr>
    <td >操作系统软件</td>
    <td ><?php echo $server['serverOs']?> - <?php echo $server['serverSoft']?></td>
  </tr>
  <tr>
    <td >数据库及大小</td>
    <td ><?php echo $server['mysqlVersion']?> (<?php echo $server['dbsize']?>)</td>
  </tr>
  <tr>
    <td >上传许可</td>
    <td ><?php echo $server['fileupload']?></td>
  </tr>
  <tr>
    <td >主机名</td>
    <td ><?php echo $server['serverUri']?></td>
  </tr>
  <tr>
    <td >当前使用内存</td>
    <td ><?php echo $server['excuteUseMemory']?></td>
  </tr>
  <tr>
    <td >PHP环境</td>
    <td >magic_quote_gpc:<?php echo $server['magic_quote_gpc']?> allow_url_fopen:<?php echo $server['allow_url_fopen']?></td>
  </tr>
</table>
 
<?php $this->renderPartial('/_include/footer');?>
