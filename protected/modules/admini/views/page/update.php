<?php $this->renderPartial('/_include/header');?>

<div id="contentHeader">
  <h1>单页管理</h1><br>
</div>
<?php $this->renderPartial('_form',array('model'=>$model))?>
<?php $this->renderPartial('/_include/footer');?>
