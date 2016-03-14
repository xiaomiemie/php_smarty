<?php 
include '../init.inc.php';

$smarty->assign('title','this is title');
$smarty->assign('content','this is content');
$smarty->assign(array('author'=>'小咩','time'=>date('y-m-d H:i:s')));
$smarty->assign('contract',array('15682566795','145@1623.com'));
class Person{
  public $name='xiaomie';
  function say(){
    return $this->name;
  }
}
$smarty->assign('p',new Person());
// function myFun(){
//   return date('Y-m-d');
// }
$smarty->registerPlugin('function','myFun','test');
function test($args){
  // $args参数是传来的里面的属性
  $str='<p style="color:'.$args['color'].'">myFun</p>';
  
  return $str;
}
$smarty->display('test.htm');//因为上面已经写好目录了，所以这里直接写文件就行了。
 ?>