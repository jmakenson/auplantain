<?php
/* Smarty version 3.1.39, created on 2021-08-24 20:48:23
  from '/Applications/MAMP/htdocs/auplantain/themes/classic/templates/catalog/_partials/product-flags.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_61253ef7a54af9_10503597',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd0553c4fd92620a98a1736b3c667511b10287354' => 
    array (
      0 => '/Applications/MAMP/htdocs/auplantain/themes/classic/templates/catalog/_partials/product-flags.tpl',
      1 => 1629829309,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_61253ef7a54af9_10503597 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->compiled->nocache_hash = '161601439861253ef7a4f645_24834462';
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_54591700561253ef7a50fb6_46167955', 'product_flags');
?>

<?php }
/* {block 'product_flags'} */
class Block_54591700561253ef7a50fb6_46167955 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_flags' => 
  array (
    0 => 'Block_54591700561253ef7a50fb6_46167955',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <ul class="product-flags">
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['product']->value['flags'], 'flag');
$_smarty_tpl->tpl_vars['flag']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['flag']->value) {
$_smarty_tpl->tpl_vars['flag']->do_else = false;
?>
            <li class="product-flag <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['flag']->value['type'], ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['flag']->value['label'], ENT_QUOTES, 'UTF-8');?>
</li>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </ul>
<?php
}
}
/* {/block 'product_flags'} */
}
