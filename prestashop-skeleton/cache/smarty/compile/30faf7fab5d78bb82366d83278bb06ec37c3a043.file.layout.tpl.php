<<<<<<< HEAD
<?php /* Smarty version Smarty-3.1.13, created on 2014-11-27 18:37:01
         compiled from "C:\xampp\htdocs\CallCalendar\prestashop-skeleton\themes\es\layout.tpl" */ ?>
<?php /*%%SmartyHeaderCode:320835477613d9fda19-79411003%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
=======
<?php /* Smarty version Smarty-3.1.13, created on 2014-11-30 18:04:54
         compiled from "C:\xampp\htdocs\CallCalendar\prestashop-skeleton\themes\es\layout.tpl" */ ?>
<?php /*%%SmartyHeaderCode:12025547b4e366ef305-28836927%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
>>>>>>> call
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '30faf7fab5d78bb82366d83278bb06ec37c3a043' => 
    array (
      0 => 'C:\\xampp\\htdocs\\CallCalendar\\prestashop-skeleton\\themes\\es\\layout.tpl',
      1 => 1417109255,
      2 => 'file',
    ),
  ),
<<<<<<< HEAD
  'nocache_hash' => '320835477613d9fda19-79411003',
=======
  'nocache_hash' => '12025547b4e366ef305-28836927',
>>>>>>> call
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'display_header' => 0,
    'HOOK_HEADER' => 0,
    'template' => 0,
    'display_footer' => 0,
    'live_edit' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
<<<<<<< HEAD
  'unifunc' => 'content_5477613da577a5_36764471',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5477613da577a5_36764471')) {function content_5477613da577a5_36764471($_smarty_tpl) {?>
=======
  'unifunc' => 'content_547b4e36741396_35003524',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_547b4e36741396_35003524')) {function content_547b4e36741396_35003524($_smarty_tpl) {?>
>>>>>>> call

<?php if (!empty($_smarty_tpl->tpl_vars['display_header']->value)){?>
	<?php echo $_smarty_tpl->getSubTemplate ('./header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('HOOK_HEADER'=>$_smarty_tpl->tpl_vars['HOOK_HEADER']->value), 0);?>

<?php }?>
<?php if (!empty($_smarty_tpl->tpl_vars['template']->value)){?>
	<?php echo $_smarty_tpl->tpl_vars['template']->value;?>

<?php }?>
<?php if (!empty($_smarty_tpl->tpl_vars['display_footer']->value)){?>
	<?php echo $_smarty_tpl->getSubTemplate ('./footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php }?>
<?php if (!empty($_smarty_tpl->tpl_vars['live_edit']->value)){?>
	<?php echo $_smarty_tpl->tpl_vars['live_edit']->value;?>

<?php }?><?php }} ?>