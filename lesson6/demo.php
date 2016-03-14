<?php 
include '../init.inc.php';

$smarty->assign('title','this is a title');

$smarty->registerPlugin('modifier','myFun','test');
function test($var,$end='end'){
  return strtoupper($var.$end);
}



$smarty->display('test.htm');//因为上面已经写好目录了，所以这里直接写文件就行了。
 ?>