<?php
/* Smarty version 3.1.29, created on 2016-03-14 12:38:02
  from "D:\xampp2\htdocs\php_smarty\lesson6\tpls\test.htm" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_56e6a29aece816_75014049',
  'file_dependency' => 
  array (
    '4ff9e9aac9d45654d6a64bec0612844f42130287' => 
    array (
      0 => 'D:\\xampp2\\htdocs\\php_smarty\\lesson6\\tpls\\test.htm',
      1 => 1457955472,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_56e6a29aece816_75014049 ($_smarty_tpl) {
if (!is_callable('smarty_function_html_select_date')) require_once 'D:\\xampp2\\htdocs\\php_smarty\\libs\\plugins\\function.html_select_date.php';
if (!is_callable('smarty_function_html_select_time')) require_once 'D:\\xampp2\\htdocs\\php_smarty\\libs\\plugins\\function.html_select_time.php';
if (!is_callable('smarty_modifier_date_format')) require_once 'D:\\xampp2\\htdocs\\php_smarty\\libs\\plugins\\modifier.date_format.php';
?>
<!DOCTYPE html>
<html>
<head>
  <title></title>
</head>
<?php echo smarty_function_html_select_date(array('day_extra'=>'class="demo"'),$_smarty_tpl);?>

<?php ob_start();
echo time();
$_tmp1=ob_get_clean();
echo smarty_function_html_select_time(array('use_24_hours'=>true,'time'=>$_tmp1),$_smarty_tpl);?>

<?php echo time();?>

<?php echo smarty_modifier_date_format(time(),"%A,%B,%e %H");?>

</body>
</html><?php }
}
