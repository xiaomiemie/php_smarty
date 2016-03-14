<?php
/* Smarty version 3.1.29, created on 2016-03-14 08:12:01
  from "D:\xampp2\htdocs\php_smarty\lesson4\tpls\test.htm" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_56e66441d38866_99267396',
  'file_dependency' => 
  array (
    'fe6271210602c36c7effc881a31109b5d0c8907e' => 
    array (
      0 => 'D:\\xampp2\\htdocs\\php_smarty\\lesson4\\tpls\\test.htm',
      1 => 1457939518,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_56e66441d38866_99267396 ($_smarty_tpl) {
?>
<!DOCTYPE html>
<html>
<head>
  <title></title>
</head>
<?php
$_smarty_tpl->smarty->ext->configLoad->_loadConfigFile($_smarty_tpl, "test.conf", "index1", 0);
?>

<body style="background:<?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'bgcolor1');?>
">
<table border="<?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'border');?>
" width="<?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'width');?>
">
  <tr>
    <td>111</td>
    <td>111</td>
    <td>111</td>
  </tr>
    <tr>
    <td>222</td>
    <td>222</td>
    <td>222</td>
  </tr>
    <tr>
    <td>333</td>
    <td>333</td>
    <td>333</td>
   
  </tr>
</table>

<?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'one');?>

<?php echo $_SESSION['username'];?>

<?php echo '<?php ';?>echo $_SESSION['username'] <?php echo '?>';?>
</body>
</html><?php }
}
