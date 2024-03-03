<?php
/* Smarty version 4.3.4, created on 2024-03-03 23:39:25
  from '/app/themes/classic/templates/index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_65e4fc1dd7ae00_12990466',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'df6ce1a8ddb421b61b7bc846e98a0cd584dce004' => 
    array (
      0 => '/app/themes/classic/templates/index.tpl',
      1 => 1697822646,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65e4fc1dd7ae00_12990466 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_178709690165e4fc1dd79501_93309377', 'page_content_container');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'page.tpl');
}
/* {block 'page_content_top'} */
class Block_42050753565e4fc1dd79948_01968801 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'page_content_top'} */
/* {block 'hook_home'} */
class Block_201039140165e4fc1dd7a168_69781559 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <?php echo $_smarty_tpl->tpl_vars['HOOK_HOME']->value;?>

          <?php
}
}
/* {/block 'hook_home'} */
/* {block 'page_content'} */
class Block_6534792765e4fc1dd79ea2_77396454 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_201039140165e4fc1dd7a168_69781559', 'hook_home', $this->tplIndex);
?>

        <?php
}
}
/* {/block 'page_content'} */
/* {block 'page_content_container'} */
class Block_178709690165e4fc1dd79501_93309377 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_content_container' => 
  array (
    0 => 'Block_178709690165e4fc1dd79501_93309377',
  ),
  'page_content_top' => 
  array (
    0 => 'Block_42050753565e4fc1dd79948_01968801',
  ),
  'page_content' => 
  array (
    0 => 'Block_6534792765e4fc1dd79ea2_77396454',
  ),
  'hook_home' => 
  array (
    0 => 'Block_201039140165e4fc1dd7a168_69781559',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <section id="content" class="page-home">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_42050753565e4fc1dd79948_01968801', 'page_content_top', $this->tplIndex);
?>


        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_6534792765e4fc1dd79ea2_77396454', 'page_content', $this->tplIndex);
?>

      </section>
    <?php
}
}
/* {/block 'page_content_container'} */
}
