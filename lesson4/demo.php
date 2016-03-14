<?php 
include '../init.inc.php';

session_start();
$_SESSION['username']='admin';






$smarty->display('test.htm');//因为上面已经写好目录了，所以这里直接写文件就行了。
 ?>