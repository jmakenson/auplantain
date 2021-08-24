<?php
/* Smarty version 3.1.39, created on 2021-08-24 21:35:48
  from '/Applications/MAMP/htdocs/auplantain/adm79/themes/default/template/content.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_61254a14761eb1_98218383',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '089173bb99dcb537eeb2dc09103198a2cc365637' => 
    array (
      0 => '/Applications/MAMP/htdocs/auplantain/adm79/themes/default/template/content.tpl',
      1 => 1629829373,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_61254a14761eb1_98218383 (Smarty_Internal_Template $_smarty_tpl) {
?><div id="ajax_confirmation" class="alert alert-success hide"></div>
<div id="ajaxBox" style="display:none"></div>

<div class="row">
	<div class="col-lg-12">
		<?php if ((isset($_smarty_tpl->tpl_vars['content']->value))) {?>
			<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

		<?php }?>
	</div>
</div>
<?php }
}
