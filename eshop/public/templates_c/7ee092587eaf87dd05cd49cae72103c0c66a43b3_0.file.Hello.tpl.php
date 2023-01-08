<?php
/* Smarty version 4.1.0, created on 2023-01-03 23:35:12
  from '/Applications/XAMPP/xamppfiles/htdocs/eshop/app/views/Hello.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_63b4ada0e6cad1_56694792',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7ee092587eaf87dd05cd49cae72103c0c66a43b3' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/eshop/app/views/Hello.tpl',
      1 => 1672785309,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63b4ada0e6cad1_56694792 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_199397685563b4ada0e623a0_89426056', 'content');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "Main.tpl");
}
/* {block 'content'} */
class Block_199397685563b4ada0e623a0_89426056 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_199397685563b4ada0e623a0_89426056',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


<h1>
    HELLO WORLD!
</h1>
<?php
}
}
/* {/block 'content'} */
}
