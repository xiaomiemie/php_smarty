<?php
/* Smarty version 3.1.29, created on 2016-03-14 11:00:16
  from "D:\xampp2\htdocs\php_smarty\lesson5\tpls\test.htm" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_56e68bb08dae37_35919235',
  'file_dependency' => 
  array (
    '5f3af5c4d0838d404485a8ef6970d7761e285f05' => 
    array (
      0 => 'D:\\xampp2\\htdocs\\php_smarty\\lesson5\\tpls\\test.htm',
      1 => 1457949611,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_56e68bb08dae37_35919235 ($_smarty_tpl) {
?>
<!DOCTYPE html>
<html>
<head>
  <title></title>
</head>
<?php echo test($_smarty_tpl->tpl_vars['title']->value);?>
<br>
<?php echo test($_smarty_tpl->tpl_vars['title']->value,'end2');?>
<br>
<?php echo test($_smarty_tpl->tpl_vars['title']->value);?>
<br>

</body>
</html><?php }
}
