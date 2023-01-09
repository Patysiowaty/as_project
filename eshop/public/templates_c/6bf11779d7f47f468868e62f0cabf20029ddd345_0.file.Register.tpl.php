<?php
/* Smarty version 4.1.0, created on 2023-01-07 18:56:10
  from '/Applications/XAMPP/xamppfiles/htdocs/eshop/app/views/Register.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_63b9b23a140e47_04034900',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6bf11779d7f47f468868e62f0cabf20029ddd345' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/eshop/app/views/Register.tpl',
      1 => 1673113846,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:Messages.tpl' => 1,
  ),
),false)) {
function content_63b9b23a140e47_04034900 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_134413404863b9b23a1318d8_15000705', 'content');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "Main.tpl");
}
/* {block 'content'} */
class Block_134413404863b9b23a1318d8_15000705 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_134413404863b9b23a1318d8_15000705',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div class="row py-5 m-auto">
        <form class="col-md-9 m-auto" method="post" role="form" action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/registration">
            <div class="row">
                <div class="form-group mt-2 w-50">
                    <label for="login">Email</label>
                    <input type="text" class="form-control mt-2" id="email" name="email">
                </div>
            </div>
            <div class="row">
                <div class="form-group mt-2 w-50">
                    <label for="password">Password</label>
                    <input type="password" class="form-control mt-2" id="password" name="password">
                </div>
            </div>
            <div class="row">
                <div class="form-group mt-3">
                    <button type="submit" class="btn btn-success btn-lg px-3">Sign up</button>
                </div>
            </div>
        </form>
        <?php if (!$_smarty_tpl->tpl_vars['msgs']->value->isEmpty()) {?>
            <?php $_smarty_tpl->_subTemplateRender("file:Messages.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
        <?php }?>
    </div>
<?php
}
}
/* {/block 'content'} */
}
