<?php
function a (){
  static $x=0;
  echo $x;
  $x++;
}
// a();
// a();
// a();
$arr=array('1','2');
echo 'nihao'.$arr[0];
echo 'nihao','lala','<br>';
// echo $_SERVER['HTTP_HOST'];
echo ($_SERVER["PHP_SELF"]);
$y=2;
echo '<br>'.$GLOBALS['y']
?>