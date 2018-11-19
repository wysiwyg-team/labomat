<?php
/* Smarty version 3.1.33, created on 2018-11-19 09:00:07
  from 'C:\xampp\htdocs\labo\themes\classic\templates\page.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5bf26d873185b5_53962097',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '26b66cfb0b0220e926f8022dcadf060c0c155d52' => 
    array (
      0 => 'C:\\xampp\\htdocs\\labo\\themes\\classic\\templates\\page.tpl',
      1 => 1542613412,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5bf26d873185b5_53962097 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_7059102785bf26d873032e9_88833891', 'content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, $_smarty_tpl->tpl_vars['layout']->value);
}
/* {block 'page_title'} */
class Block_1829868455bf26d87304b86_99138194 extends Smarty_Internal_Block
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
class Block_16042085575bf26d87303de9_21139595 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1829868455bf26d87304b86_99138194', 'page_title', $this->tplIndex);
?>

    <?php
}
}
/* {/block 'page_header_container'} */
/* {block 'page_content_top'} */
class Block_2468640045bf26d87310b88_58928379 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'page_content_top'} */
/* {block 'page_content'} */
class Block_8535552795bf26d87312399_83920500 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <!-- Page content -->
        <?php
}
}
/* {/block 'page_content'} */
/* {block 'page_content_container'} */
class Block_18373018235bf26d8730fcf7_94010041 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <section id="content" class="page-content card card-block">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2468640045bf26d87310b88_58928379', 'page_content_top', $this->tplIndex);
?>

        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_8535552795bf26d87312399_83920500', 'page_content', $this->tplIndex);
?>

      </section>
    <?php
}
}
/* {/block 'page_content_container'} */
/* {block 'page_footer'} */
class Block_14727281235bf26d87316033_84802883 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <!-- Footer content -->
        <?php
}
}
/* {/block 'page_footer'} */
/* {block 'page_footer_container'} */
class Block_1599851355bf26d87315077_87602332 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <footer class="page-footer">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_14727281235bf26d87316033_84802883', 'page_footer', $this->tplIndex);
?>

      </footer>
    <?php
}
}
/* {/block 'page_footer_container'} */
/* {block 'content'} */
class Block_7059102785bf26d873032e9_88833891 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_7059102785bf26d873032e9_88833891',
  ),
  'page_header_container' => 
  array (
    0 => 'Block_16042085575bf26d87303de9_21139595',
  ),
  'page_title' => 
  array (
    0 => 'Block_1829868455bf26d87304b86_99138194',
  ),
  'page_content_container' => 
  array (
    0 => 'Block_18373018235bf26d8730fcf7_94010041',
  ),
  'page_content_top' => 
  array (
    0 => 'Block_2468640045bf26d87310b88_58928379',
  ),
  'page_content' => 
  array (
    0 => 'Block_8535552795bf26d87312399_83920500',
  ),
  'page_footer_container' => 
  array (
    0 => 'Block_1599851355bf26d87315077_87602332',
  ),
  'page_footer' => 
  array (
    0 => 'Block_14727281235bf26d87316033_84802883',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


  <section id="main">

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_16042085575bf26d87303de9_21139595', 'page_header_container', $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_18373018235bf26d8730fcf7_94010041', 'page_content_container', $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1599851355bf26d87315077_87602332', 'page_footer_container', $this->tplIndex);
?>


  </section>

<?php
}
}
/* {/block 'content'} */
}
