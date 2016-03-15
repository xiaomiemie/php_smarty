<?php
/* Smarty version 3.1.29, created on 2016-03-15 04:19:12
  from "D:\xampp2\htdocs\php_smarty\lesson8\tpls\test.htm" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_56e77f30e60999_89485852',
  'file_dependency' => 
  array (
    '21d181cc850f91effd42e7f2a30d72c1cff6f2b1' => 
    array (
      0 => 'D:\\xampp2\\htdocs\\php_smarty\\lesson8\\tpls\\test.htm',
      1 => 1458011951,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:test2.htm' => 1,
  ),
),false)) {
function content_56e77f30e60999_89485852 ($_smarty_tpl) {
if (!is_callable('smarty_function_counter')) require_once 'D:\\xampp2\\htdocs\\php_smarty\\libs\\plugins\\function.counter.php';
$_smarty_tpl->ext->_inheritance->init($_smarty_tpl, true);
?>
<!DOCTYPE html>
<html>
<head>
  <title></title>
</head>




<?php 
$_smarty_tpl->ext->_inheritance->processBlock($_smarty_tpl, 0, 'body', array (
  0 => 'block_1279756e77f30e31b95_85878073',
  1 => false,
  3 => 0,
  2 => 0,
));
?>

</body>
</html><?php $_smarty_tpl->ext->_inheritance->endChild($_smarty_tpl);
$_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:test2.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block 'body'}  file:test.htm */
function block_1279756e77f30e31b95_85878073($_smarty_tpl, $_blockParentStack) {
?>

<?php $_smarty_tpl->tpl_vars['a'] = new Smarty_Variable(10, null);
$_smarty_tpl->ext->_updateScope->updateScope($_smarty_tpl, 'a', 0);
$_smarty_tpl->tpl_vars['foo'] = new Smarty_Variable(((string)$_smarty_tpl->tpl_vars['a']->value), null);
$_smarty_tpl->ext->_updateScope->updateScope($_smarty_tpl, 'foo', 0);
echo $_smarty_tpl->tpl_vars['foo']->value;?>

<?php echo smarty_function_counter(array('start'=>'1'),$_smarty_tpl);?>

<?php echo smarty_function_counter(array(),$_smarty_tpl);?>

<?php if ($_smarty_tpl->tpl_vars['a']->value > 10) {?>
111111
<?php  } else { if (!isset($_smarty_tpl->tpl_vars['a'])) $_smarty_tpl->tpl_vars['a'] = new Smarty_Variable(null);if ($_smarty_tpl->tpl_vars['a']->value = 10) {?>
222222
<?php } else { ?>
3333333333
<?php }}?>
<br>

<!-- <?php
$_from = $_smarty_tpl->tpl_vars['arr']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_value_0_saved_item = isset($_smarty_tpl->tpl_vars['value']) ? $_smarty_tpl->tpl_vars['value'] : false;
$_smarty_tpl->tpl_vars['value'] = new Smarty_Variable();
$__foreach_value_0_first = true;
$_smarty_tpl->tpl_vars['value']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->_loop = true;
$_smarty_tpl->tpl_vars['value']->first = $__foreach_value_0_first;
$__foreach_value_0_first = false;
$__foreach_value_0_saved_local_item = $_smarty_tpl->tpl_vars['value'];
if ($_smarty_tpl->tpl_vars['value']->first) {?>
  <p style="color:red"><?php echo $_smarty_tpl->tpl_vars['value']->value;?>
</p>
  <?php } else { ?>  <p style="color:blue"><?php echo $_smarty_tpl->tpl_vars['value']->value;?>
</p>
<?php }
$_smarty_tpl->tpl_vars['value'] = $__foreach_value_0_saved_local_item;
}
if ($__foreach_value_0_saved_item) {
$_smarty_tpl->tpl_vars['value'] = $__foreach_value_0_saved_item;
}
?> -->
<br>
<?php
$_from = $_smarty_tpl->tpl_vars['arr']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_value_1_saved_item = isset($_smarty_tpl->tpl_vars['value']) ? $_smarty_tpl->tpl_vars['value'] : false;
$__foreach_value_1_saved_key = isset($_smarty_tpl->tpl_vars['key']) ? $_smarty_tpl->tpl_vars['key'] : false;
$_smarty_tpl->tpl_vars['value'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['key'] = new Smarty_Variable();
$__foreach_value_1_first = true;
$_smarty_tpl->tpl_vars['value']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->_loop = true;
$_smarty_tpl->tpl_vars['value']->first = $__foreach_value_1_first;
$__foreach_value_1_first = false;
$__foreach_value_1_saved_local_item = $_smarty_tpl->tpl_vars['value'];
$_from = $_smarty_tpl->tpl_vars['value']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_value2_2_saved_item = isset($_smarty_tpl->tpl_vars['value2']) ? $_smarty_tpl->tpl_vars['value2'] : false;
$_smarty_tpl->tpl_vars['value2'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['value2']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['value2']->value) {
$_smarty_tpl->tpl_vars['value2']->_loop = true;
$__foreach_value2_2_saved_local_item = $_smarty_tpl->tpl_vars['value2'];
?>
 <?php echo $_smarty_tpl->tpl_vars['key']->value;?>
--<?php echo $_smarty_tpl->tpl_vars['value2']->value;?>

<?php
$_smarty_tpl->tpl_vars['value2'] = $__foreach_value2_2_saved_local_item;
}
if ($__foreach_value2_2_saved_item) {
$_smarty_tpl->tpl_vars['value2'] = $__foreach_value2_2_saved_item;
}
$_smarty_tpl->tpl_vars['value'] = $__foreach_value_1_saved_local_item;
}
if ($__foreach_value_1_saved_item) {
$_smarty_tpl->tpl_vars['value'] = $__foreach_value_1_saved_item;
}
if ($__foreach_value_1_saved_key) {
$_smarty_tpl->tpl_vars['key'] = $__foreach_value_1_saved_key;
}
}
/* {/block 'body'} */
}
