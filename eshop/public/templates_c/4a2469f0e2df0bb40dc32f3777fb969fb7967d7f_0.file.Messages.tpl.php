<?php
/* Smarty version 4.1.0, created on 2023-01-07 18:55:42
  from '/Applications/XAMPP/xamppfiles/htdocs/eshop/app/views/Messages.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_63b9b21ec3ead1_49669789',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4a2469f0e2df0bb40dc32f3777fb969fb7967d7f' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/eshop/app/views/Messages.tpl',
      1 => 1673113216,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63b9b21ec3ead1_49669789 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="row">
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['msgs']->value->getMessages(), 'msg');
$_smarty_tpl->tpl_vars['msg']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['msg']->value) {
$_smarty_tpl->tpl_vars['msg']->do_else = false;
?>
        <?php if ($_smarty_tpl->tpl_vars['msg']->value->isError()) {?>
            <div class="alert alert-danger mt-3 col-md-10 m-auto" role="alert">
                <?php echo $_smarty_tpl->tpl_vars['msg']->value->text;?>

            </div>
        <?php } elseif ($_smarty_tpl->tpl_vars['msg']->value->isWarrning()) {?>
            <div class="alert alert-warning mt-3 col-md-10 m-auto" role="alert">
                <?php echo $_smarty_tpl->tpl_vars['msg']->value->text;?>

            </div>
        <?php } else { ?>
            <div class="alert alert-info mt-3 col-md-10 m-auto" role="alert">
                <?php echo $_smarty_tpl->tpl_vars['msg']->value->text;?>

            </div>
        <?php }?>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</div><?php }
}
