<?php $this->renderPartial('/_include/header',array('cates'=>$cates))?>
 
 
<body>
 
<div id="main">
  <table width="515" height="56" border="0" align="center" cellpadding="0" cellspacing="0">
    <tbody>
      <tr>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
    </tbody>
  </table>
  <table width="820" height="844" border="0" align="center" cellpadding="0" cellspacing="0">
    <tbody>
      <tr>
        <?php foreach ($goods as $k=>$good ){
            $url = $this->createUrl('site/goods',array('id'=>$good['id'])); 
            if($k <2){
                echo '<td width="410" height="40" align="center"><a href="'.$url.'" target="_blank" class="link-w">'.$good['title'].'</a></td>';
            }
        }?>
      </tr>
      <tr>
        <?php foreach ($goods as $k=>$good ){
            $url = $this->createUrl('site/goods',array('id'=>$good['id'])); 
            if($k <2){
                echo '<td align="center">
                    <table border="4" cellpadding="0" cellspacing="0" bordercolor="#70159e">
                        <tbody>
                          <tr>
                            <td><a href="'.$url.'"  target="_blank"><img src="'.$good['attach_file'].'" border="5" style="width: 300px;height: 250px;"/></a></td>
                          </tr>
                        </tbody>
                    </table>
                    </td>';
            }
        }?>
      </tr>
      <tr>
       <?php foreach ($goods as $k=>$good ){
            $url = $this->createUrl('site/goods',array('id'=>$good['id'])); 
            if($k <2){
                
                echo '<td height="100" align="center" class="hong">'.$good['intro'].' <a href="'.$url.'"target="_blank"><img src="'.$this->_baseUrl.'/static/yindushenyou/images/93.gif" width="80" height="23" border="0" align="absmiddle" /></a><br />
      </td>';
            }
        }?>
      </tr>
      <tr>
        <td align="center">&nbsp;</td>
        <td align="center">&nbsp;</td>
      </tr>
      <tr>
        <?php foreach ($goods as $k=>$good ){
            $url = $this->createUrl('site/goods',array('id'=>$good['id'])); 
            if($k >=2 && $k <4){
                echo '<td width="410" height="40" align="center"><a href="'.$url.'" target="_blank" class="link-w">'.$good['title'].'</a></td>';
            }
        }?>
      </tr>
      <tr>
        <?php foreach ($goods as $k=>$good ){
            $url = $this->createUrl('site/goods',array('id'=>$good['id'])); 
            if($k >=2 && $k <4){
                echo '<td align="center">
                    <table border="4" cellpadding="0" cellspacing="0" bordercolor="#70159e">
                        <tbody>
                          <tr>
                            <td><a href="'.$url.'"  target="_blank"><img src="'.$good['attach_file'].'" border="5" style="width: 300px;height: 250px;" /></a></td>
                          </tr>
                        </tbody>
                    </table>
                    </td>';
            }
        }?>
      </tr>
      <tr>
       <?php foreach ($goods as $k=>$good ){
            $url = $this->createUrl('site/goods',array('id'=>$good['id'])); 
            if($k >=2 && $k <4){
                
                echo '<td height="100" align="center" class="hong">'.$good['intro'].' <a href="'.$url.'"target="_blank"><img src="'.$this->_baseUrl.'/static/yindushenyou/images/93.gif" width="80" height="23" border="0" align="absmiddle" /></a><br />
      </td>';
            }
        }?>
      </tr>
      <tr>
        <td align="center">&nbsp;</td>
        <td align="center">&nbsp;</td>
      </tr>
       
    </tbody>
  </table>
  <table width="515" height="22" border="0" align="center" cellpadding="0" cellspacing="0">
    <tbody>
      <tr>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
    </tbody>
  </table>
</div>
<table width="200" border="0" align="center" cellpadding="0" cellspacing="0">
  <tbody>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
  </tbody>
</table>

<?php $this->renderPartial('/_include/footer')?>


