<?php
/* Smarty version 4.1.0, created on 2023-01-08 12:51:21
  from '/Applications/XAMPP/xamppfiles/htdocs/eshop/app/views/Shop.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_63baae39ce95e5_24890726',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9db149e9ffc2e048714a48d181096898da9cd270' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/eshop/app/views/Shop.tpl',
      1 => 1673178678,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:ProductAddModal.tpl' => 1,
    'file:BrandAddModal.tpl' => 1,
    'file:Messages.tpl' => 1,
    'file:ProductThumb.tpl' => 1,
  ),
),false)) {
function content_63baae39ce95e5_24890726 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_204408734663baae39cc3922_11599692', 'content');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "Main.tpl");
}
/* {block 'content'} */
class Block_204408734663baae39cc3922_11599692 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_204408734663baae39cc3922_11599692',
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
                                       href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
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
                                       href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
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
                                       href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
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
                    <div class="col-md-6 pb-4 btn-group">
                        <div class="d-flex">
                            <?php if ((isset($_smarty_tpl->tpl_vars['conf']->value->roles["Employee"]))) {?>
                                <?php $_smarty_tpl->_subTemplateRender("file:ProductAddModal.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
                            <?php }?>
                        </div>
                        <div class="d-flex" style="margin-left: 10px">
                            <?php if ((isset($_smarty_tpl->tpl_vars['conf']->value->roles["Employee"]))) {?>
                                <?php $_smarty_tpl->_subTemplateRender("file:BrandAddModal.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
                            <?php }?>
                        </div>
                    </div>
                </div>
                <div class="col-lg-9">
                    <div class="row">
                        <div class="col-md-auto pb-4">
                            <?php if (!$_smarty_tpl->tpl_vars['msgs']->value->isEmpty()) {?>
                                <?php $_smarty_tpl->_subTemplateRender("file:Messages.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
                            <?php }?>
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
            </div>

        </div>
    </div>
<?php
}
}
/* {/block 'content'} */
}
