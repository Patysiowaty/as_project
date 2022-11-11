<?php
/* Smarty version 3.1.30, created on 2022-11-11 13:01:54
  from "C:\xampp\htdocs\as_project\zadanie6\app\calc\MenuView.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_636e39b2547553_91443338',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '67fc6fb9bcfdd9a05e0612cd583e8ac5da7659cc' => 
    array (
      0 => 'C:\\xampp\\htdocs\\as_project\\zadanie6\\app\\calc\\MenuView.html',
      1 => 1668166892,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_636e39b2547553_91443338 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1667398401636e39b25448f5_26602830', 'footer');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1335422631636e39b2547216_98063178', 'content');
$_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender(($_smarty_tpl->tpl_vars['conf']->value->getRootPath()).("/templates/main.html"), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, true);
}
/* {block 'footer'} */
class Block_1667398401636e39b25448f5_26602830 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'footer'} */
/* {block 'content'} */
class Block_1335422631636e39b2547216_98063178 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<h2 class="content-head is-center">Main menu</h2>

<div class="pure-g">
    <div class="l-box-lrg pure-u-1 pure-u-med-2-5">
        <div class="menu">
            <form action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->getActionURL();?>
calculator" class="main-menu-selectors"
                  method="post">
                <button type="submit" class="pure-button">Go to calculator</button>
            </form>
        </div>
    </div>
</div>
<?php
}
}
/* {/block 'content'} */
}
