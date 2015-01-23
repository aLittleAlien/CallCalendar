<<<<<<< HEAD
<?php /* Smarty version Smarty-3.1.13, created on 2014-11-28 10:52:46
         compiled from "C:\xampp\htdocs\CallCalendar\prestashop-skeleton\back-office\themes\idt\template\helpers\list\list_action_delete.tpl" */ ?>
<?php /*%%SmartyHeaderCode:12597547845ee6ecb42-75269418%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
=======
<?php /* Smarty version Smarty-3.1.13, created on 2014-11-30 18:22:36
         compiled from "C:\xampp\htdocs\CallCalendar\prestashop-skeleton\back-office\themes\idt\template\helpers\list\list_action_delete.tpl" */ ?>
<?php /*%%SmartyHeaderCode:27579547b525c8af6d7-96434986%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
>>>>>>> call
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6c1a64a43f36ef770d0bd956b22c68b207900312' => 
    array (
      0 => 'C:\\xampp\\htdocs\\CallCalendar\\prestashop-skeleton\\back-office\\themes\\idt\\template\\helpers\\list\\list_action_delete.tpl',
      1 => 1417109203,
      2 => 'file',
    ),
  ),
<<<<<<< HEAD
  'nocache_hash' => '12597547845ee6ecb42-75269418',
=======
  'nocache_hash' => '27579547b525c8af6d7-96434986',
>>>>>>> call
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'href' => 0,
    'confirm' => 0,
    'action' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
<<<<<<< HEAD
  'unifunc' => 'content_547845ee7080c4_24660296',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_547845ee7080c4_24660296')) {function content_547845ee7080c4_24660296($_smarty_tpl) {?>
=======
  'unifunc' => 'content_547b525c8cac58_81760913',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_547b525c8cac58_81760913')) {function content_547b525c8cac58_81760913($_smarty_tpl) {?>
>>>>>>> call
<a href="<?php echo $_smarty_tpl->tpl_vars['href']->value;?>
" class="delete" <?php if (isset($_smarty_tpl->tpl_vars['confirm']->value)){?>onclick="if (confirm('<?php echo $_smarty_tpl->tpl_vars['confirm']->value;?>
')){ return true; }else{ event.stopPropagation(); event.preventDefault();};"<?php }?> title="<?php echo $_smarty_tpl->tpl_vars['action']->value;?>
">
	<img src="../img/admin/delete.gif" alt="<?php echo $_smarty_tpl->tpl_vars['action']->value;?>
" />
</a><?php }} ?>