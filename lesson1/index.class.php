<?php
include 'smarty.class.php';
$smarty = new Smarty;
$title='this is title';
$content='this is conetnt';
$smarty->assign('title',$title);
$smarty->assign('content',$content);
$smarty->display('demo.html');
var_dump($smarty);
?>