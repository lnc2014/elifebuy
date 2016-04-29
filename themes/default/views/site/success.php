<?php
/**
* 文件说明：订单提交成功
* ==============================================
* 版权所有 @lnc 
* ==============================================
* @date: 2016年4月6日
* @author: admin
* @version:1.0
*/
?>
 
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>订单提交页面</title>
<script type="text/javascript">  
alert("订单提交成功！");
function countDown(secs,surl){     
 //alert(surl);     
 var jumpTo = document.getElementById('jumpTo');
 jumpTo.innerHTML=secs;  
 if(--secs>0){     
     setTimeout("countDown("+secs+",'"+surl+"')",1000);     
     }     
 else{       
     location.href=surl;     
     }     
 }     
</script> 
</head>

<body><span id="jumpTo">3</span>秒后自动跳转到网站首页
<script type="text/javascript">countDown(3,'<?php echo Yii::app()->homeUrl?>');</script>  
</body>
</html>