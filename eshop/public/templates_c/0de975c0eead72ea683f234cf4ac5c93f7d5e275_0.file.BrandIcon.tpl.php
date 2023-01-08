<?php
/* Smarty version 4.1.0, created on 2023-01-06 12:31:22
  from '/Applications/XAMPP/xamppfiles/htdocs/eshop/app/views/BrandIcon.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_63b8068a42b547_01440111',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0de975c0eead72ea683f234cf4ac5c93f7d5e275' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/eshop/app/views/BrandIcon.tpl',
      1 => 1673004154,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63b8068a42b547_01440111 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['brand']->value->getLogo() != '') {?>
    <div class="col-3 p-md-5">
        <img class="img-fluid brand-img"
             src="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/<?php echo $_smarty_tpl->tpl_vars['brand']->value->getLogo();?>
"
             alt="Brand Logo"></a>
    </div>
<?php }
}
}
