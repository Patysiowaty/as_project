<?php
/* Smarty version 4.1.0, created on 2023-01-07 18:55:40
  from '/Applications/XAMPP/xamppfiles/htdocs/eshop/app/views/Login.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_63b9b21c2dea82_91769657',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '44f21a4269607e0fba84d0f1bae2f49f068fa820' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/eshop/app/views/Login.tpl',
      1 => 1673113385,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:Messages.tpl' => 1,
  ),
),false)) {
function content_63b9b21c2dea82_91769657 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_190703700263b9b21c2cff10_43075801', 'content');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "Main.tpl");
}
/* {block 'content'} */
class Block_190703700263b9b21c2cff10_43075801 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_190703700263b9b21c2cff10_43075801',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div class="row py-5 m-auto">
        <form class="col-md-9 m-auto" method="post" role="form" action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/verify">
            <div class="row">
                <div class="form-group mt-2 w-50">
                    <label for="login">Email</label>
                    <input type="text" class="form-control mt-2" id="email" name="email"
                           placeholder="email@sample.com">
                </div>
            </div>
            <div class="row">
                <div class="form-group mt-2 w-50">
                    <label for="password">Password</label>
                    <input type="password" class="form-control mt-2" id="password" name="password"
                           placeholder="*****">
                </div>
            </div>
            <div class="row">
                <div class="form-group mt-3">
                    <button type="submit" class="btn btn-success btn-lg px-3">Login</button>
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
