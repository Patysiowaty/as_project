<?php
/* Smarty version 4.1.0, created on 2023-01-08 00:21:39
  from '/Applications/XAMPP/xamppfiles/htdocs/eshop/app/views/Cart.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_63b9fe83d68274_32529207',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '859f0fb3e1fc0a160bf60d2610fb9a41f9572e3f' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/eshop/app/views/Cart.tpl',
      1 => 1673133697,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:CartItem.tpl' => 1,
  ),
),false)) {
function content_63b9fe83d68274_32529207 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_106180022663b9fe83d55494_85875173', 'content');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "Main.tpl");
}
/* {block 'content'} */
class Block_106180022663b9fe83d55494_85875173 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_106180022663b9fe83d55494_85875173',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div class="container py-5">
        <div class="row">
            <section class="h-100 h-custom">
                <div class="container py-5 h-100">
                    <div class="row d-flex justify-content-center align-items-center h-100">
                        <div class="col-12">
                            <div class="card-body p-0">
                                <div class="row g-0">
                                    <div class="col-lg-8">
                                        <div class="p-5">
                                            <div class="d-flex justify-content-between align-items-center mb-5">
                                                <h1 class="fw-bold mb-0 text-black">Shopping Cart</h1>
                                                <h6 class="mb-0 text-muted"><?php echo $_smarty_tpl->tpl_vars['numOfItems']->value;?>
 items</h6>
                                            </div>
                                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['products']->value, 'product', false, 'id');
$_smarty_tpl->tpl_vars['product']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['id']->value => $_smarty_tpl->tpl_vars['product']->value) {
$_smarty_tpl->tpl_vars['product']->do_else = false;
?>
                                                <?php $_smarty_tpl->_subTemplateRender("file:CartItem.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
                                            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 bg-grey">
                                        <div class="p-5">
                                            <h3 class="fw-bold mb-5 mt-2 pt-1">Summary</h3>
                                            <hr class="my-4">

                                            <div class="d-flex justify-content-between mb-4">
                                                <h5 class="text-uppercase">items <?php echo $_smarty_tpl->tpl_vars['numOfItems']->value;?>
</h5>
                                                <h5>$<?php echo $_smarty_tpl->tpl_vars['price']->value;?>
</h5>
                                            </div>

                                            <h5 class="text-uppercase mb-3">Shipping</h5>

                                            <div class="mb-4 pb-2">
                                                <select class="form-select">
                                                    <option value="1">Standard delivery - $0.00</option>
                                                </select>
                                            </div>

                                            <hr class="my-4">

                                            <div class="d-flex justify-content-between mb-5">
                                                <h5 class="text-uppercase">Total price</h5>
                                                <h5>$<?php echo $_smarty_tpl->tpl_vars['price']->value;?>
</h5>
                                            </div>
                                            <form action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/doCheckout" method="post">
                                                <button type="submit" class="btn btn-success btn-block btn-lg"
                                                        data-mdb-ripple-color="dark" name="check" value="1"
                                                        <?php if (count($_smarty_tpl->tpl_vars['products']->value) == 0) {?> disabled<?php }?>>Checkout
                                                </button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
<?php
}
}
/* {/block 'content'} */
}
