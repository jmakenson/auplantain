<?php
/* Smarty version 3.1.39, created on 2021-08-24 22:00:14
  from '/Applications/MAMP/htdocs/auplantain/themes/classic/templates/page.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_61254fce686f68_29947456',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'dc997337bd21bd5d06ca2d523b9b5b56ce961b5c' => 
    array (
      0 => '/Applications/MAMP/htdocs/auplantain/themes/classic/templates/page.tpl',
      1 => 1629829309,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_61254fce686f68_29947456 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_53896159761254fce67f6b8_44541169', 'content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, $_smarty_tpl->tpl_vars['layout']->value);
}
/* {block 'page_title'} */
class Block_123737265361254fce680bc8_45171044 extends Smarty_Internal_Block
{
public $callsChild = 'true';
public $hide = 'true';
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <header class="page-header">
          <h1><?php 
$_smarty_tpl->inheritance->callChild($_smarty_tpl, $this);
?>
</h1>
        </header>
      <?php
}
}
/* {/block 'page_title'} */
/* {block 'page_header_container'} */
class Block_12995984161254fce67ffb2_15425504 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_123737265361254fce680bc8_45171044', 'page_title', $this->tplIndex);
?>

    <?php
}
}
/* {/block 'page_header_container'} */
/* {block 'page_content_top'} */
class Block_134404469361254fce683332_17409275 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'page_content_top'} */
/* {block 'page_content'} */
class Block_109336440361254fce683f71_26335858 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <!-- Page content -->
        <?php
}
}
/* {/block 'page_content'} */
/* {block 'page_content_container'} */
class Block_69528582561254fce682a87_14252717 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <section id="content" class="page-content card card-block">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_134404469361254fce683332_17409275', 'page_content_top', $this->tplIndex);
?>

        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_109336440361254fce683f71_26335858', 'page_content', $this->tplIndex);
?>

      </section>
    <?php
}
}
/* {/block 'page_content_container'} */
/* {block 'page_footer'} */
class Block_134465263061254fce685ab8_83155914 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <!-- Footer content -->
        <?php
}
}
/* {/block 'page_footer'} */
/* {block 'page_footer_container'} */
class Block_27517867661254fce685239_09069690 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <footer class="page-footer">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_134465263061254fce685ab8_83155914', 'page_footer', $this->tplIndex);
?>

      </footer>
    <?php
}
}
/* {/block 'page_footer_container'} */
/* {block 'content'} */
class Block_53896159761254fce67f6b8_44541169 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_53896159761254fce67f6b8_44541169',
  ),
  'page_header_container' => 
  array (
    0 => 'Block_12995984161254fce67ffb2_15425504',
  ),
  'page_title' => 
  array (
    0 => 'Block_123737265361254fce680bc8_45171044',
  ),
  'page_content_container' => 
  array (
    0 => 'Block_69528582561254fce682a87_14252717',
  ),
  'page_content_top' => 
  array (
    0 => 'Block_134404469361254fce683332_17409275',
  ),
  'page_content' => 
  array (
    0 => 'Block_109336440361254fce683f71_26335858',
  ),
  'page_footer_container' => 
  array (
    0 => 'Block_27517867661254fce685239_09069690',
  ),
  'page_footer' => 
  array (
    0 => 'Block_134465263061254fce685ab8_83155914',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


  <section id="main">

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_12995984161254fce67ffb2_15425504', 'page_header_container', $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_69528582561254fce682a87_14252717', 'page_content_container', $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_27517867661254fce685239_09069690', 'page_footer_container', $this->tplIndex);
?>


  </section>

<?php
}
}
/* {/block 'content'} */
}
