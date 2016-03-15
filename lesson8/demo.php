<?php 
include '../init.inc.php';

$smarty->assign('title','this is a title');


// $smarty->assign('arr',array('name'=>'xiaomie','age'=>21));
$smarty->assign('arr',array('name'=>'xiaomie','age'=>21,'lesson'=>array('语文','shuxue')));
$smarty->display('test.htm');//因为上面已经写好目录了，所以这里直接写文件就行了。
 ?>