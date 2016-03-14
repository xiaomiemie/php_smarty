<?php
/* Smarty version 3.1.29, created on 2016-03-14 04:32:27
  from "D:\xampp2\htdocs\php_smarty\lesson3\tpls\test.htm" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_56e630cb23f5a7_67078704',
  'file_dependency' => 
  array (
    '5a1bf80520073c8a90f50759baccdf6253cb2116' => 
    array (
      0 => 'D:\\xampp2\\htdocs\\php_smarty\\lesson3\\tpls\\test.htm',
      1 => 1457926345,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_56e630cb23f5a7_67078704 ($_smarty_tpl) {
?>
<!DOCTYPE html>
<html>
<head>
  <title><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</title>
</head>
<body>
<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

<br>
<?php echo $_smarty_tpl->tpl_vars['author']->value;?>
----<?php echo $_smarty_tpl->tpl_vars['time']->value;?>

<hr>
  
   <?php echo test(array('color'=>"red"),$_smarty_tpl);?>
 
  <?php echo $_smarty_tpl->tpl_vars['contract']->value[0];?>

  <?php echo $_smarty_tpl->tpl_vars['contract']->value[1];?>

  <?php echo $_smarty_tpl->tpl_vars['p']->value->say();?>

  <?php echo $_smarty_tpl->tpl_vars['p']->value->name;?>

  <input type="text" value="<?php echo $_smarty_tpl->tpl_vars['author']->value;
echo $_smarty_tpl->tpl_vars['author']->value;?>
">
  <?php $_smarty_tpl->tpl_vars['foo'] = new Smarty_Variable($_smarty_tpl->tpl_vars['author']->value, null);
$_smarty_tpl->ext->_updateScope->updateScope($_smarty_tpl, 'foo', 0);?>
  <?php echo $_smarty_tpl->tpl_vars['foo']->value;?>

</body>
</html><?php }
}
