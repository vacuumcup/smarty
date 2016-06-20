<?php /* Smarty version Smarty-3.1-DEV, created on 2016-06-20 09:52:02
         compiled from "tql\content.tpl" */ ?>
<?php /*%%SmartyHeaderCode:246175767a0a21ba0d6-46333375%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c9f0861c58e47fabcc60953f7eb41f762371c9f4' => 
    array (
      0 => 'tql\\content.tpl',
      1 => 1466409120,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '246175767a0a21ba0d6-46333375',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'str' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1-DEV',
  'unifunc' => 'content_5767a0a2205091_54827463',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5767a0a2205091_54827463')) {function content_5767a0a2205091_54827463($_smarty_tpl) {?><?php if (!is_callable('smarty_block_test2')) include 'F:\\Demo\\smarty\\smarty\\plugins\\block.test2.php';
?><?php $_smarty_tpl->smarty->_tag_stack[] = array('test2', array('replace'=>'true','maxnum'=>29)); $_block_repeat=true; echo smarty_block_test2(array('replace'=>'true','maxnum'=>29), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

<?php echo $_smarty_tpl->tpl_vars['str']->value;?>

<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_test2(array('replace'=>'true','maxnum'=>29), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
<?php }} ?>
