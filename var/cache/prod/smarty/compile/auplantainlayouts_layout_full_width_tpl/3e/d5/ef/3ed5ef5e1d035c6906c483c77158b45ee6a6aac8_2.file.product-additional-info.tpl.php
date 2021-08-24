<?php
/* Smarty version 3.1.39, created on 2021-08-24 20:56:14
  from '/Applications/MAMP/htdocs/auplantain/themes/classic/templates/catalog/_partials/product-additional-info.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_612540cecdc5c6_55843167',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3ed5ef5e1d035c6906c483c77158b45ee6a6aac8' => 
    array (
      0 => '/Applications/MAMP/htdocs/auplantain/themes/classic/templates/catalog/_partials/product-additional-info.tpl',
      1 => 1629829309,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_612540cecdc5c6_55843167 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="product-additional-info">
  <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayProductAdditionalInfo','product'=>$_smarty_tpl->tpl_vars['product']->value),$_smarty_tpl ) );?>

</div>
<?php }
}
