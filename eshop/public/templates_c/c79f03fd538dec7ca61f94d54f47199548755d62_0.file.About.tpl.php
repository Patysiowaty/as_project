<?php
/* Smarty version 4.1.0, created on 2023-01-06 19:30:30
  from '/Applications/XAMPP/xamppfiles/htdocs/eshop/app/views/About.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_63b868c6d03508_64174417',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c79f03fd538dec7ca61f94d54f47199548755d62' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/eshop/app/views/About.tpl',
      1 => 1673029825,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:BrandIcon.tpl' => 1,
  ),
),false)) {
function content_63b868c6d03508_64174417 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_106851187863b868c6cedcb2_14244286', 'content');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "Main.tpl");
}
/* {block 'content'} */
class Block_106851187863b868c6cedcb2_14244286 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_106851187863b868c6cedcb2_14244286',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <section class="bg-success py-5">
        <div class="container">
            <div class="row align-items-center py-5">
                <div class="col-md-8 text-white">
                    <h1>About Us</h1>
                    <p>
                        Welcome to simple shop project.
                    </p>
                </div>
                <div class="col-md-4">
                    <img src="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/img/about-hero.svg" alt="About Hero">
                </div>
            </div>
        </div>
    </section>
    <!-- Close Banner -->

    <!-- Start Section -->
    <section class="container py-5">
        <div class="row text-center pt-5 pb-3">
            <div class="col-lg-6 m-auto">
                <h1 class="h1">Our Services</h1>
            </div>
        </div>
        <div class="row">

            <div class="col-md-6 col-lg-3 pb-5">
                <div class="h-100 py-5 services-icon-wap shadow">
                    <div class="h1 text-success text-center"><i class="fa fa-truck fa-lg"></i></div>
                    <h2 class="h5 mt-4 text-center">Delivery Services</h2>
                </div>
            </div>

            <div class="col-md-6 col-lg-3 pb-5">
                <div class="h-100 py-5 services-icon-wap shadow">
                    <div class="h1 text-success text-center"><i class="fas fa-exchange-alt"></i></div>
                    <h2 class="h5 mt-4 text-center">Shipping & Return</h2>
                </div>
            </div>

            <div class="col-md-6 col-lg-3 pb-5">
                <div class="h-100 py-5 services-icon-wap shadow">
                    <div class="h1 text-success text-center"><i class="fa fa-percent"></i></div>
                    <h2 class="h5 mt-4 text-center">Promotion</h2>
                </div>
            </div>

            <div class="col-md-6 col-lg-3 pb-5">
                <div class="h-100 py-5 services-icon-wap shadow">
                    <div class="h1 text-success text-center"><i class="fa fa-user"></i></div>
                    <h2 class="h5 mt-4 text-center">24 Hours Service</h2>
                </div>
            </div>
        </div>
    </section>
    <!-- End Section -->

    <!-- Start Brands -->
    <section class="bg-light py-5">
        <div class="container my-4">
            <div class="row text-center py-3">
                <div class="col-lg-6 m-auto">
                    <h1 class="h1">Our Brands</h1>
                </div>
                <div class="col-lg-9 m-auto tempaltemo-carousel">
                    <div class="row d-flex flex-row">
                        <!--Controls-->
                        <div class="col-1 align-self-center">
                            <a class="h1" href="#multi-item-example" role="button" data-bs-slide="prev">
                                <i class="text-light fas fa-chevron-left"></i>
                            </a>
                        </div>
                        <!--End Controls-->

                        <!--Carousel Wrapper-->
                        <div class="col">
                            <div class="carousel slide carousel-multi-item pt-2 pt-md-0" id="multi-item-example"
                                 data-bs-ride="carousel">
                                <!--Slides-->
                                <div class="carousel-inner product-links-wap" role="listbox">
                                    <?php $_smarty_tpl->_assignInScope('i', 0 ,true);?>
                                    <?php $_smarty_tpl->_assignInScope('active', "1" ,true);?>
                                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['brandsLogo']->value, 'brand');
$_smarty_tpl->tpl_vars['brand']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['brand']->value) {
$_smarty_tpl->tpl_vars['brand']->do_else = false;
?>
                                        <?php if ($_smarty_tpl->tpl_vars['i']->value == 0) {?>
                                            <div class="carousel-item <?php if ($_smarty_tpl->tpl_vars['active']->value == 1) {?> active<?php }?>">
                                            <div class="row">
                                        <?php }?>
                                        <?php $_smarty_tpl->_subTemplateRender("file:BrandIcon.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
                                        <?php $_smarty_tpl->_assignInScope('i', $_smarty_tpl->tpl_vars['i']->value+1 ,true);?>
                                        <?php $_smarty_tpl->_assignInScope('brandsSize', $_smarty_tpl->tpl_vars['brandsSize']->value-1 ,true);?>

                                        <?php if ($_smarty_tpl->tpl_vars['i']->value > 3 && $_smarty_tpl->tpl_vars['brandsSize']->value > 3 || $_smarty_tpl->tpl_vars['brandsSize']->value == 0) {?>
                                            <?php $_smarty_tpl->_assignInScope('i', 0 ,true);?>
                                            <?php $_smarty_tpl->_assignInScope('active', 0 ,true);?>
                                            </div>
                                            </div>
                                        <?php }?>
                                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                </div>
                                <!--End Slides-->
                            </div>
                        </div>
                        <!--Controls-->
                        <div class="col-1 align-self-center">
                            <a class="h1" href="#multi-item-example" role="button" data-bs-slide="next">
                                <i class="text-light fas fa-chevron-right"></i>
                            </a>
                        </div>
                        <!--End Controls-->
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php
}
}
/* {/block 'content'} */
}
