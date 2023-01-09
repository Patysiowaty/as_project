<?php
/* Smarty version 4.1.0, created on 2023-01-08 13:00:37
  from '/Applications/XAMPP/xamppfiles/htdocs/eshop/app/views/ProductThumb.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_63bab0657a84d3_33557778',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a829401aebc4dcb9bfa6031fe452b8d2224adc01' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/eshop/app/views/ProductThumb.tpl',
      1 => 1673179235,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63bab0657a84d3_33557778 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="col-md-4">
    <div class="card mb-4 product-wap rounded-0">
        <div class="card rounded-0">
            <img class="card-img rounded-0 img-fluid" src="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/<?php echo $_smarty_tpl->tpl_vars['product']->value->getThumbnail();?>
">
            <div class="card-img-overlay rounded-0 product-overlay d-flex align-items-center justify-content-center">
                <ul class="list-unstyled">
                    <li>
                        <?php if ($_smarty_tpl->tpl_vars['conf']->value->is_logged) {?>
                            <form method="post" action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/addToCart">
                                <button class="btn btn-success text-white mt-2" name="id" value="<?php echo $_smarty_tpl->tpl_vars['product']->value->getId();?>
"><i
                                            class="fas fa-cart-plus"></i></button>
                            </form>
                        <?php }?>
                    </li>
                </ul>
            </div>
        </div>
        <div class="card-body">
            <a class="h3 text-decoration-none"><?php echo $_smarty_tpl->tpl_vars['product']->value->getName();?>
</a>
            <ul class="w-100 list-unstyled d-flex justify-content-between mb-0">
                <li><?php echo $_smarty_tpl->tpl_vars['product']->value->getBrand();?>
</li>
                <li class="pt-2">
                    <span class="product-color-dot color-dot-red float-left rounded-circle ml-1"></span>
                    <span class="product-color-dot color-dot-blue float-left rounded-circle ml-1"></span>
                    <span class="product-color-dot color-dot-black float-left rounded-circle ml-1"></span>
                    <span class="product-color-dot color-dot-light float-left rounded-circle ml-1"></span>
                    <span class="product-color-dot color-dot-green float-left rounded-circle ml-1"></span>
                </li>
            </ul>
            <p class="text-center mb-0">$<?php echo $_smarty_tpl->tpl_vars['product']->value->getPrice();?>
</p>
        </div>
    </div>
</div><?php }
}
