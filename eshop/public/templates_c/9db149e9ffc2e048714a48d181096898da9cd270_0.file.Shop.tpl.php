<?php
/* Smarty version 4.1.0, created on 2023-01-06 13:15:56
  from '/Applications/XAMPP/xamppfiles/htdocs/eshop/app/views/Shop.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_63b810fc58e482_91940972',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9db149e9ffc2e048714a48d181096898da9cd270' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/eshop/app/views/Shop.tpl',
      1 => 1673007354,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:ProductThumb.tpl' => 1,
    'file:BrandIcon.tpl' => 1,
  ),
),false)) {
function content_63b810fc58e482_91940972 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_134591615263b810fc56cfb0_11699823', 'content');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "Main.tpl");
}
/* {block 'content'} */
class Block_134591615263b810fc56cfb0_11699823 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_134591615263b810fc56cfb0_11699823',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


    <!-- Start Content -->
    <div class="container py-5">
        <div class="row">

            <div class="col-lg-3">
                <h1 class="h2 pb-4">Filters</h1>
                <ul class="list-unstyled templatemo-accordion">
                    <li class="pb-3">
                        <a class="collapsed d-flex justify-content-between h3 text-decoration-none" href="#">
                            Gender
                            <i class="fa fa-fw fa-chevron-circle-down mt-1"></i>
                        </a>
                        <ul class="collapse show list-unstyled pl-3">
                                                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['genders']->value, 'isSelected', false, 'gender');
$_smarty_tpl->tpl_vars['isSelected']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['gender']->value => $_smarty_tpl->tpl_vars['isSelected']->value) {
$_smarty_tpl->tpl_vars['isSelected']->do_else = false;
?>
                                <li>
                                    <a class="<?php if ($_smarty_tpl->tpl_vars['isSelected']->value) {?> text-decoration-underline <?php } else { ?> text-decoration-none<?php }?>"
                                       href="<?php echo $_smarty_tpl->tpl_vars['config']->value->app_url;?>
/setFilter?type=gender&name=<?php echo $_smarty_tpl->tpl_vars['gender']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['gender']->value;?>
</a></li>
                            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                        </ul>
                    </li>
                    <li class="pb-3">
                        <a class="collapsed d-flex justify-content-between h3 text-decoration-none" href="#">
                            Brand
                            <i class="pull-right fa fa-fw fa-chevron-circle-down mt-1"></i>
                        </a>
                        <ul id="collapseTwo" class="collapse list-unstyled pl-3">
                                                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['brands']->value, 'isSelected', false, 'brand');
$_smarty_tpl->tpl_vars['isSelected']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['brand']->value => $_smarty_tpl->tpl_vars['isSelected']->value) {
$_smarty_tpl->tpl_vars['isSelected']->do_else = false;
?>
                                <li>
                                    <a class="<?php if ($_smarty_tpl->tpl_vars['isSelected']->value) {?> text-decoration-underline <?php } else { ?> text-decoration-none<?php }?>"
                                       href="<?php echo $_smarty_tpl->tpl_vars['config']->value->app_url;?>
/setFilter?type=brand&name=<?php echo $_smarty_tpl->tpl_vars['brand']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['brand']->value;?>
</a></li>
                            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                        </ul>
                    </li>
                    <li class="pb-3">
                        <a class="collapsed d-flex justify-content-between h3 text-decoration-none" href="#">
                            Category
                            <i class="pull-right fa fa-fw fa-chevron-circle-down mt-1"></i>
                        </a>
                        <ul id="collapseThree" class="collapse list-unstyled pl-3">
                                                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['categories']->value, 'isSelected', false, 'category');
$_smarty_tpl->tpl_vars['isSelected']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['category']->value => $_smarty_tpl->tpl_vars['isSelected']->value) {
$_smarty_tpl->tpl_vars['isSelected']->do_else = false;
?>
                                <li>
                                    <a class="<?php if ($_smarty_tpl->tpl_vars['isSelected']->value) {?> text-decoration-underline <?php } else { ?> text-decoration-none<?php }?>"
                                       href="<?php echo $_smarty_tpl->tpl_vars['config']->value->app_url;?>
/setFilter?type=category&name=<?php echo $_smarty_tpl->tpl_vars['category']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['category']->value;?>
</a>
                                </li>
                            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                        </ul>
                    </li>
                </ul>
            </div>

            <div class="col-lg-9">
                <div class="row">
                    <div class="col-md-6 pb-4">
                        <div class="d-flex">
                            <select class="form-control">
                                <option>Featured</option>
                                <option>A to Z</option>
                                <option>Item</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['products']->value, 'product');
$_smarty_tpl->tpl_vars['product']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['product']->value) {
$_smarty_tpl->tpl_vars['product']->do_else = false;
?>
                        <?php $_smarty_tpl->_subTemplateRender("file:ProductThumb.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </div>
                <div div="row">
                    <ul class="pagination pagination-lg justify-content-end">
                        <li class="page-item disabled">
                            <a class="page-link active rounded-0 mr-3 shadow-sm border-top-0 border-left-0" href="#"
                               tabindex="-1">1</a>
                        </li>
                        <li class="page-item">
                            <a class="page-link rounded-0 mr-3 shadow-sm border-top-0 border-left-0 text-dark" href="#">2</a>
                        </li>
                        <li class="page-item">
                            <a class="page-link rounded-0 shadow-sm border-top-0 border-left-0 text-dark" href="#">3</a>
                        </li>
                    </ul>
                </div>
            </div>

        </div>
    </div>
    <!-- End Content -->

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
    <!--End Brands-->
<?php
}
}
/* {/block 'content'} */
}
