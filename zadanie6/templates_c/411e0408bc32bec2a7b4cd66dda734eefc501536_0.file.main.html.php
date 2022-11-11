<?php
/* Smarty version 3.1.30, created on 2022-11-11 13:01:54
  from "C:\xampp\htdocs\as_project\zadanie6\templates\main.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_636e39b25987c2_00561904',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '411e0408bc32bec2a7b4cd66dda734eefc501536' => 
    array (
      0 => 'C:\\xampp\\htdocs\\as_project\\zadanie6\\templates\\main.html',
      1 => 1668165382,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_636e39b25987c2_00561904 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<!doctype html>
<html lang="pl">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['page_description']->value)===null||$tmp==='' ? " Opis domyślny
    " : $tmp);?>
">

    <title><?php echo (($tmp = @$_smarty_tpl->tpl_vars['page_title']->value)===null||$tmp==='' ? "Tytuł domyślny" : $tmp);?>
</title>

    <link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.4.2/pure.css">

    <!--[if lte IE 8]>
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->getAppUrl();?>
/css/main-grid-old-ie.css">
    <![endif]-->
    <!--[if gt IE 8]><!-->
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->getAppUrl();?>
/css/main-grid.css">
    <!--<![endif]-->

    <!--[if lte IE 8]>
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->getAppUrl();?>
/css/layouts/marketing-old-ie.css">
    <![endif]-->
    <!--[if gt IE 8]><!-->
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->getAppUrl();?>
/css/layouts/marketing.css">
    <!--<![endif]-->

    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->getAppUrl();?>
/css/style.css">
    <?php if ($_smarty_tpl->tpl_vars['hide_intro']->value) {?>
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->getAppUrl();?>
/css/style_hide_intro.css">
    <?php }?>

    <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">

    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['conf']->value->getAppUrl();?>
/js/jquery.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['conf']->value->getAppUrl();?>
/js/softscroll.js"><?php echo '</script'; ?>
>
</head>
<body>

<div id="app_top" class="header">
    <div class="home-menu pure-menu pure-menu-open pure-menu-horizontal pure-menu-fixed">
        <a class="pure-menu-heading" href=""><?php echo (($tmp = @$_smarty_tpl->tpl_vars['page_title']->value)===null||$tmp==='' ? "Tytuł domyślny" : $tmp);?>
</a>
        <ul>
            <li class="pure-menu-selected"><a href="#app_top">Go up</a></li>
            <li><a href="#app_content">Go to form</a></li>
        </ul>
    </div>
</div>

<div class="splash-container">
    <div class="splash">
        <h1 class="splash-head"><?php echo (($tmp = @$_smarty_tpl->tpl_vars['page_title']->value)===null||$tmp==='' ? "Tytuł domyślny" : $tmp);?>
</h1>
        <p class="splash-subhead">
            <?php echo (($tmp = @$_smarty_tpl->tpl_vars['page_description']->value)===null||$tmp==='' ? '' : $tmp);?>

        </p>
        <p>
            <a href="#app_content" class="pure-button pure-button-primary">To form</a>
        </p>
    </div>
</div>

<div class="content-wrapper">

    <div id="app_content" class="content">

        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1106383654636e39b25978a6_45312555', 'content');
?>


    </div>

    <div class="footer l-box is-center">
        <p>
            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1490056002636e39b2598137_14150253', 'footer');
?>

        </p>
        <p>Widok oparty na stylach i szablonie <a href="http://purecss.io/" target="_blank">Pure CSS Yahoo!</a>. (autor
            przykładu: Przemysław Kudłacik)</p>
    </div>

</div>


</body>
</html>
<?php }
/* {block 'content'} */
class Block_1106383654636e39b25978a6_45312555 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 Domyślna treść zawartości .... <?php
}
}
/* {/block 'content'} */
/* {block 'footer'} */
class Block_1490056002636e39b2598137_14150253 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 Domyślna treść stopki .... <?php
}
}
/* {/block 'footer'} */
}
