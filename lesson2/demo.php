<?php 
include '../init.inc.php';

$smarty->assign('title','this is title');
$smarty->assign('content','this is content');
$smarty->display('test.htm');//因为上面已经写好目录了，所以这里直接写文件就行了。
 ?>