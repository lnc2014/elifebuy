 <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<!--<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">-->
<link rel="shortcut icon" href="favicon.ico" /></head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<head>
<meta charset="utf-8">
<title><?php echo $this->_seoTitle?></title>
<meta name="generator" content="LNCCMS CMS" />
<meta name="author" content="shuguang" />
<meta name="keywords" content="<?php echo $this->_seoKeywords?>">
<meta name="description" content="<?php echo $this->_seoDescription?>"> 
<link href="<?php echo $this->_baseUrl?>/static/yindushenyou/images/main.css" rel="stylesheet" type="text/css" />
</head> 
<body> 
<style> 
#header1 { 
    WIDTH: 100%;
    BACKGROUND: url("<?php echo $this->_baseUrl?>/static/yindushenyou/images/header.jpg") no-repeat 50% 0px;
    HEIGHT: 120px;
}    
a{color:#000000;text-decoration:none} 
a:hover{color:#BA2636} 
.red ,.red a{ color:#F00}
.lan ,.lan a{ color:#1E51A2}
.pd5{ padding-top:5px}
.dis{display:block}
.undis{display:none} 
ul#nav{ width:100%; height:60px; background: #9644A5;margin:-1px  auto}
ul#nav li{display:inline; height:60px}
ul#nav li a{display:inline-block; padding:0 20px; height:60px; line-height:60px; color:#FFF; font-family:"\5FAE\8F6F\96C5\9ED1"; font-size:16px}
ul#nav li a:hover{background:#C189D4}
</style>
<div id="header1">  
</div> 
<ul id="nav" style=" text-align:center">
		<li><a href="<?php echo Yii::app()->homeUrl?>">首页</a></li>
		<li><a href="<?php echo $this->createUrl('site/goodslist')?>">产品</a></li>
		<?php
		$pages = Page::model()->findAll(); 
		foreach ($pages as $page){?>
		    <li><a href="<?php echo $this->createUrl('page/show',array('name'=>$page['title_alias']))?>"><?php echo $page['title']?></a></li>
		    
		<?php }?> 
</ul>  
 