<?php /* Smarty version Smarty-3.1.13, created on 2014-12-01 14:57:02
         compiled from "C:\xampp\htdocs\CallCalendar\prestashop-skeleton\modules\editorial\editorial.tpl" */ ?>
<?php /*%%SmartyHeaderCode:12661547c73aec538f4-29802318%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b5b56e1e4a4fd151aaff94b4614a34012779acc5' => 
    array (
      0 => 'C:\\xampp\\htdocs\\CallCalendar\\prestashop-skeleton\\modules\\editorial\\editorial.tpl',
      1 => 1417109251,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '12661547c73aec538f4-29802318',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'profile_name' => 0,
    'number_of_publications' => 0,
    'i' => 0,
    'row' => 0,
    'image_path' => 0,
    'editorial' => 0,
    'number_of_active_research_projects' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_547c73aee01408_38594131',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_547c73aee01408_38594131')) {function content_547c73aee01408_38594131($_smarty_tpl) {?><!-- source: modules/editorial/editorial.tpl -->

<script type="text/javascript">
//<![CDATA[
$(document).ready(function()
{
	var data = [];
	for (i = 0; i < 10; i++)
	{
		data.push([parseInt($('#year_' + i).val()), parseInt($('#number_' + i).val())]);
  	}
	
	var profile = $( '#profile_name' ).val();

});
//]]> 


</script>

<!-- Module Editorial -->
<div id="editorial_block_center" class="editorial_block">
	<input type="hidden" id="profile_name" name="profile_name" value="<?php echo $_smarty_tpl->tpl_vars['profile_name']->value;?>
">
	
	<?php $_smarty_tpl->tpl_vars["i"] = new Smarty_variable(0, null, 0);?>
	<?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['row']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['number_of_publications']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value){
$_smarty_tpl->tpl_vars['row']->_loop = true;
?>
		<input type="hidden" id="year_<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
" name="year_<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['publication_year'];?>
">
		<input type="hidden" id="number_<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
" name="number_<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['count'];?>
">
		<?php $_smarty_tpl->tpl_vars["i"] = new Smarty_variable($_smarty_tpl->tpl_vars['i']->value+1, null, 0);?>
	<?php } ?>
	
	<img class="home-img" src="<?php echo $_smarty_tpl->tpl_vars['image_path']->value;?>
" />
	<?php if ($_smarty_tpl->tpl_vars['editorial']->value->body_paragraph){?><div class="rte"><?php echo stripslashes($_smarty_tpl->tpl_vars['editorial']->value->body_paragraph);?>
</div>
	<?php }elseif($_smarty_tpl->tpl_vars['editorial']->value->body_paragraph){?><div class="rte"><?php echo stripslashes($_smarty_tpl->tpl_vars['editorial']->value->body_paragraph);?>
</div><?php }?>
	
	<b><?php echo $_smarty_tpl->tpl_vars['profile_name']->value;?>
 in numbers:</b><br>
	<br>
	<ul>
	<li>
			<a href="projects?status=2">Active research projects (<?php echo $_smarty_tpl->tpl_vars['number_of_active_research_projects']->value;?>
)</a>
		</li>
	</ul>
	<br>
</div>
<!-- /Module Editorial -->
<?php }} ?>