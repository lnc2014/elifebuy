<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016/3/30 0030
 * Time: 下午 1:04
 */

if($status == 'success'){
    $url = Yii::app()->request->hostInfo.$this->createUrl('post/catelist');
    echo '<script type="text/javascript">
            alert("删除成功！");
        </script>';
    header("Location: ".$url);
}else{
    echo '<script type="text/javascript">alert("删除失败！");
        </script>';
}