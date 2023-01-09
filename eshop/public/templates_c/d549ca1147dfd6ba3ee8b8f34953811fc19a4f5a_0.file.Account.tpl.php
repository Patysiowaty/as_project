<?php
/* Smarty version 4.1.0, created on 2023-01-07 19:15:21
  from '/Applications/XAMPP/xamppfiles/htdocs/eshop/app/views/Account.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_63b9b6b9417228_81380703',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd549ca1147dfd6ba3ee8b8f34953811fc19a4f5a' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/eshop/app/views/Account.tpl',
      1 => 1673113395,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:Messages.tpl' => 1,
  ),
),false)) {
function content_63b9b6b9417228_81380703 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_101011674263b9b6b9408986_62234145', 'content');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "Main.tpl");
}
/* {block 'content'} */
class Block_101011674263b9b6b9408986_62234145 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_101011674263b9b6b9408986_62234145',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div class="row py-5 m-auto">
        <form class="col-md-9 m-auto" method="post" role="form" action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/updateAccount">
            <div class="row">
                <div class="form-group col-md-6">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" id="email" placeholder="<?php echo $_smarty_tpl->tpl_vars['user']->value->getEmail();?>
" disabled>
                </div>
                <div class="form-group col-md-6">
                    <label for="password">Password</label>
                    <input type="password" class="form-control" id="password" name="password" placeholder="**********">
                </div>
            </div>
            <div class="form-group">
                <label for="address">Address</label>
                <input type="text" class="form-control" id="address" name="address" placeholder="<?php echo $_smarty_tpl->tpl_vars['user']->value->getStreet();?>
">
            </div>
            <div class="row">
                <div class="form-group col-md-5">
                    <label for="city">City</label>
                    <input type="text" class="form-control" id="city" name="city" placeholder="<?php echo $_smarty_tpl->tpl_vars['user']->value->getCity();?>
">
                </div>
                <div class="form-group col-md-2">
                    <label for="postal">Zip</label>
                    <input type="text" class="form-control" id="postal" name="postal"
                           placeholder="<?php echo $_smarty_tpl->tpl_vars['user']->value->getPostalCode();?>
">
                </div>
            </div>
            <div class="form-group mt-3">
                <button type="submit" class="btn btn-primary btn-lg px-3">Update</button>
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
