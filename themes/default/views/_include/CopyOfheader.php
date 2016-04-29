 <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
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
<div id="header">
  <map name="Maptop" id="Maptop">
  
      <?php
      echo '<area shape="rect" coords="11,4,87,31" href="'.$this->_baseUrl.'"/>';
      foreach ($cates as $k=>$cate){
          
        $goods = Post::model()->findByAttributes(array(
            'catalog_id'=>$cate['id']
        ));
        $coords = '';
        $goods['id'] = empty($goods['id'])?'1':$goods['id'];
        $url = $this->createUrl('site/goods',array('id'=>$goods['id']));
    switch ($k)
        { 
        case 0:
          $coords = '102,3,293,30';
          break;  
         
        case 1:
          $coords = '326,3,527,29';
          break;  
         
        case 2:
          $coords = '559,4,731,28';
          break;  
        case 3:
          $coords = '758,3,897,28';
          break;  
        }  
        echo '<area shape="rect" coords="'.$coords.'" href="'.$url.'" tppabs="'.$url.'" target="_blank" />'; 
        
    }
    ?>
  </map>
  <table width="900" border="0" align="center" cellpadding="0" cellspacing="0">
    <tbody>
      <tr>
        <td height="150" valign="bottom"><img src="<?php echo $this->_baseUrl?>/static/yindushenyou/images/tm.gif" width="900" height="30" border="0" usemap="#Maptop" /></td>
      </tr>
    </tbody>
  </table> 
</div>