<?php
/* Smarty version 4.3.4, created on 2024-03-03 23:39:26
  from '/app/themes/classic/templates/page.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_65e4fc1e297737_19751133',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8c2f8c3390a5ffa3628731e2ca3d1c11f395765b' => 
    array (
      0 => '/app/themes/classic/templates/page.tpl',
      1 => 1697822646,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65e4fc1e297737_19751133 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_191685981065e4fc1e2324a2_62307334', 'content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, $_smarty_tpl->tpl_vars['layout']->value);
}
/* {block 'page_title'} */
class Block_141086944665e4fc1e233112_84000812 extends Smarty_Internal_Block
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
class Block_110080159765e4fc1e232b49_76723354 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_141086944665e4fc1e233112_84000812', 'page_title', $this->tplIndex);
?>

    <?php
}
}
/* {/block 'page_header_container'} */
/* {block 'page_content_top'} */
class Block_169149972065e4fc1e296195_26779876 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'page_content_top'} */
/* {block 'page_content'} */
class Block_96493052165e4fc1e296602_94391080 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <!-- Page content -->
        <?php
}
}
/* {/block 'page_content'} */
/* {block 'page_content_container'} */
class Block_21824577465e4fc1e295dd2_87744430 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <div id="content" class="page-content card card-block">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_169149972065e4fc1e296195_26779876', 'page_content_top', $this->tplIndex);
?>

        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_96493052165e4fc1e296602_94391080', 'page_content', $this->tplIndex);
?>

      </div>
    <?php
}
}
/* {/block 'page_content_container'} */
/* {block 'page_footer'} */
class Block_194285204965e4fc1e296f36_18814638 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <!-- Footer content -->
        <?php
}
}
/* {/block 'page_footer'} */
/* {block 'page_footer_container'} */
class Block_164190497465e4fc1e296c96_12466333 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <footer class="page-footer">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_194285204965e4fc1e296f36_18814638', 'page_footer', $this->tplIndex);
?>

      </footer>
    <?php
}
}
/* {/block 'page_footer_container'} */
/* {block 'content'} */
class Block_191685981065e4fc1e2324a2_62307334 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_191685981065e4fc1e2324a2_62307334',
  ),
  'page_header_container' => 
  array (
    0 => 'Block_110080159765e4fc1e232b49_76723354',
  ),
  'page_title' => 
  array (
    0 => 'Block_141086944665e4fc1e233112_84000812',
  ),
  'page_content_container' => 
  array (
    0 => 'Block_21824577465e4fc1e295dd2_87744430',
  ),
  'page_content_top' => 
  array (
    0 => 'Block_169149972065e4fc1e296195_26779876',
  ),
  'page_content' => 
  array (
    0 => 'Block_96493052165e4fc1e296602_94391080',
  ),
  'page_footer_container' => 
  array (
    0 => 'Block_164190497465e4fc1e296c96_12466333',
  ),
  'page_footer' => 
  array (
    0 => 'Block_194285204965e4fc1e296f36_18814638',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


  <section id="main">

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_110080159765e4fc1e232b49_76723354', 'page_header_container', $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_21824577465e4fc1e295dd2_87744430', 'page_content_container', $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_164190497465e4fc1e296c96_12466333', 'page_footer_container', $this->tplIndex);
?>


  </section>

<?php
}
}
/* {/block 'content'} */
}
