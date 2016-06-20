<?php /* Smarty version Smarty-3.1-DEV, created on 2016-06-20 09:39:01
         compiled from "tql\datetime.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2851457679d654422d1-33150196%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '64ff6ed0cacc3478bf0c95ab92e2aeda96a03001' => 
    array (
      0 => 'tql\\datetime.tpl',
      1 => 1466408340,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2851457679d654422d1-33150196',
  'function' => 
  array (
  ),
  'cache_lifetime' => 120,
  'version' => 'Smarty-3.1-DEV',
  'unifunc' => 'content_57679d65464f16_56870273',
  'variables' => 
  array (
    'time' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57679d65464f16_56870273')) {function content_57679d65464f16_56870273($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_test')) include 'F:\\Demo\\smarty\\smarty\\plugins\\modifier.test.php';
?><?php echo smarty_modifier_test($_smarty_tpl->tpl_vars['time']->value,'Y-m-d H:i:s');?>
<?php }} ?>
