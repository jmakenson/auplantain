<?php
/* Smarty version 3.1.39, created on 2021-08-24 22:00:13
  from '/Applications/MAMP/htdocs/auplantain/themes/classic/templates/index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_61254fcd9037c2_59032534',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '887a8bb5611ee4e7a30c337e434727480097906f' => 
    array (
      0 => '/Applications/MAMP/htdocs/auplantain/themes/classic/templates/index.tpl',
      1 => 1629829309,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_61254fcd9037c2_59032534 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_129107385661254fcd8fd135_37954442', 'page_content_container');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'page.tpl');
}
/* {block 'page_content_top'} */
class Block_109519785461254fcd8fdc14_46785323 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'page_content_top'} */
/* {block 'hook_home'} */
class Block_175306747361254fcd8ff4f4_73622320 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <?php echo $_smarty_tpl->tpl_vars['HOOK_HOME']->value;?>

          <?php
}
}
/* {/block 'hook_home'} */
/* {block 'page_content'} */
class Block_54343239461254fcd8fec39_83432234 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_175306747361254fcd8ff4f4_73622320', 'hook_home', $this->tplIndex);
?>

        <?php
}
}
/* {/block 'page_content'} */
/* {block 'page_content_container'} */
class Block_129107385661254fcd8fd135_37954442 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_content_container' => 
  array (
    0 => 'Block_129107385661254fcd8fd135_37954442',
  ),
  'page_content_top' => 
  array (
    0 => 'Block_109519785461254fcd8fdc14_46785323',
  ),
  'page_content' => 
  array (
    0 => 'Block_54343239461254fcd8fec39_83432234',
  ),
  'hook_home' => 
  array (
    0 => 'Block_175306747361254fcd8ff4f4_73622320',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <section id="content" class="page-home">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_109519785461254fcd8fdc14_46785323', 'page_content_top', $this->tplIndex);
?>


        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_54343239461254fcd8fec39_83432234', 'page_content', $this->tplIndex);
?>

      </section>
    <?php
}
}
/* {/block 'page_content_container'} */
}
