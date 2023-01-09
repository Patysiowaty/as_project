<?php
/* Smarty version 4.1.0, created on 2023-01-08 00:07:03
  from '/Applications/XAMPP/xamppfiles/htdocs/eshop/app/views/CartItem.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_63b9fb17488ab6_13665328',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6452e0dd202e0fa07e0e54554ed7c2e9ebf68535' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/eshop/app/views/CartItem.tpl',
      1 => 1673132817,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63b9fb17488ab6_13665328 (Smarty_Internal_Template $_smarty_tpl) {
?><hr class="my-4" xmlns="http://www.w3.org/1999/html">

<div class="row mb-4 d-flex justify-content-between align-items-center">
    <div class="col-md-2 col-lg-2 col-xl-2">
        <img
                src="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/<?php echo $_smarty_tpl->tpl_vars['product']->value->getThumbnail();?>
"
                class="img-fluid rounded-3" alt="Cotton T-shirt">
    </div>
    <div class="col-md-3 col-lg-3 col-xl-3">
        <h6 class="text-muted"><?php echo $_smarty_tpl->tpl_vars['product']->value->getCategory();?>
</h6>
        <h6 class="text-black mb-0"><?php echo $_smarty_tpl->tpl_vars['product']->value->getName();?>
</h6>
    </div>
    <div class="col-md-3 col-lg-3 col-xl-2 d-flex">
        <form action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/removeFromCart" method="post">
            <button class="btn btn-link px-2" type="submit" name="id" value="<?php echo $_smarty_tpl->tpl_vars['product']->value->getId();?>
">
                <i class="fas fa-minus"></i>
            </button>
        </form>

        <div class="col-md-3 col-lg-2 col-xl-2 offset-lg-1">
            <h6 class="mb-0"><?php echo $_smarty_tpl->tpl_vars['quantities']->value[$_smarty_tpl->tpl_vars['product']->value->getId()];?>
</h6>
        </div>

        <form action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/addToCart" method="post">
            <button class="btn btn-link px-2" type="submit" name="id" value="<?php echo $_smarty_tpl->tpl_vars['product']->value->getId();?>
">
                <i class="fas fa-plus"></i>
            </button>
        </form>
    </div>
    <div class="col-md-3 col-lg-2 col-xl-2 offset-lg-1">
        <h6 class="mb-0">$<?php echo $_smarty_tpl->tpl_vars['product']->value->getPrice();?>
</h6>
    </div>

    <div class="col-md-1 col-lg-1 col-xl-1 text-end">
        <div class="col-md-1 col-lg-1 col-xl-1 text-end">
            <form action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/forceRemoveFromCart" method="post">
                <button class="btn text-muted" type="submit" name="id" value="<?php echo $_smarty_tpl->tpl_vars['product']->value->getId();?>
"><i
                            class="fas fa-times"></i></button>
            </form>
        </div>
    </div>
</div>
<?php }
}
