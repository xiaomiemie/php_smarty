
<?php
// 专门用于初始化的文件

define('ROOT',str_replace('\\','/',dirname(__FILE__)).'/');
include ROOT.'libs/Smarty.class.php';//被包含到哪里去，就是相对于哪里开始的路径
$smarty = new Smarty();
$smarty->setTemplateDir('./tpls/');//设置目录
$smarty->setCompileDir('./coms/');
$smarty->setConfigDir('./configs/');
// $smarty->auto_literal=false;//空白
// $smarty->left_delimiter='<!--{';
// $smarty->right='}-->';
?>