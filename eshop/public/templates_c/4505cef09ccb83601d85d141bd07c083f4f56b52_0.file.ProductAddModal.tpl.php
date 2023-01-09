<?php
/* Smarty version 4.1.0, created on 2023-01-08 11:49:24
  from '/Applications/XAMPP/xamppfiles/htdocs/eshop/app/views/ProductAddModal.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_63ba9fb4043010_88648567',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4505cef09ccb83601d85d141bd07c083f4f56b52' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/eshop/app/views/ProductAddModal.tpl',
      1 => 1673174959,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63ba9fb4043010_88648567 (Smarty_Internal_Template $_smarty_tpl) {
?><button type="button" class="btn btn-success" data-bs-toggle="modal"
        data-bs-target="#productModal">
    + Add product
</button>
<!-- Modal -->
<div class="modal fade" id="productModal" tabindex="-1"
     aria-labelledby="productModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="productModal">Adding product</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"
                        aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/addProduct" method="post" role="form" enctype="multipart/form-data">
                    <div class="row">
                        <div class="form-group mt-2 w-50">
                            <label for="login">Icon path</label>
                            <input type="file" class="form-control mt-2" id="icon"
                                   name="icon"
                                   placeholder="path/to/img">
                        </div>
                        <div class="form-group mt-2 w-50">
                            <label for="login">Name</label>
                            <input type="text" class="form-control mt-2" id="name"
                                   name="name" min="1" max="10000">
                        </div>
                        <div class="form-group mt-2 w-50">
                            <label for="login">Price</label>
                            <input type="number" class="form-control mt-2" id="price"
                                   name="price">
                        </div>
                        <div class="form-group mt-2 w-50">
                            <label for="login">Brand</label>
                            <select type="" class="form-control mt-2" id="brand"
                                    name="brand">
                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['brands']->value, 'un', false, 'brand');
$_smarty_tpl->tpl_vars['un']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['brand']->value => $_smarty_tpl->tpl_vars['un']->value) {
$_smarty_tpl->tpl_vars['un']->do_else = false;
?>
                                    <option value="<?php echo $_smarty_tpl->tpl_vars['brand']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['brand']->value;?>
</option>
                                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                            </select>
                        </div>
                        <div class="form-group mt-2 w-50">
                            <label for="login">Category</label>
                            <select type="" class="form-select mt-2" id="category"
                                    name="category">
                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['categories']->value, 'un', false, 'cat');
$_smarty_tpl->tpl_vars['un']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['cat']->value => $_smarty_tpl->tpl_vars['un']->value) {
$_smarty_tpl->tpl_vars['un']->do_else = false;
?>
                                    <option value="<?php echo $_smarty_tpl->tpl_vars['cat']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['cat']->value;?>
</option>
                                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                            </select>
                        </div>
                        <div class="form-group mt-2 w-50">
                            <label for="login">Gender</label>
                            <select type="" class="form-select mt-2" id="gender"
                                    name="gender">
                                <option value="Man">Man</option>
                                <option value="Woman">Woman</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group mt-3">
                        <button type="submit" class="btn btn-success btn-lg px-3">Add
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div><?php }
}
