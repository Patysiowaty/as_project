<?php
/* Smarty version 3.1.30, created on 2022-11-11 13:36:40
  from "C:\xampp\htdocs\as_project\zadanie6a\app\views\CalcView.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_636e41d8554a12_88591575',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2a8a6a3f4ef41ba3c099b30e2e712e867a36300f' => 
    array (
      0 => 'C:\\xampp\\htdocs\\as_project\\zadanie6a\\app\\views\\CalcView.html',
      1 => 1668170198,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_636e41d8554a12_88591575 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1702809466636e41d85489f1_69939119', 'footer');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_95052008636e41d85544a9_20103942', 'content');
$_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender(($_smarty_tpl->tpl_vars['conf']->value->getAppSrc()).("/views/templates/main.html"), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, true);
}
/* {block 'footer'} */
class Block_1702809466636e41d85489f1_69939119 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'footer'} */
/* {block 'content'} */
class Block_95052008636e41d85544a9_20103942 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


<h2 class="content-head is-center">Credit Calculator</h2>

<div class="pure-g">
    <div class="l-box-lrg pure-u-1 pure-u-med-2-5">
        <form class="pure-form pure-form-stacked" action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->getActionUrl();?>
compute" method="post">
            <fieldset>
                <label for="amount_of_credit">Amount of credit</label>
                <input id="amount_of_credit" type="number" placeholder="Amount of credit" name="amount_of_credit"
                       value="<?php echo $_smarty_tpl->tpl_vars['amountCredit']->value;?>
" min="1" max="10000000">

                <label for="credit_years">Years of credits</label>
                <input id="credit_years" type="number" placeholder="Credit's year" name="credit_years"
                       value="<?php echo $_smarty_tpl->tpl_vars['creditYear']->value;?>
" min="1" max="40">

                <label for="interest_value">Interest's value</label>
                <input id="interest_value" type="number" placeholder="Interest value" name="interest_value" min="0"
                       value="<?php echo $_smarty_tpl->tpl_vars['interestValue']->value;?>
" max="200">

                <button type="submit" class="pure-button">Calculate</button>
            </fieldset>
        </form>
    </div>

    <div class="l-box-lrg pure-u-1 pure-u-med-3-5">

        
        <?php if ($_smarty_tpl->tpl_vars['msgs']->value->hasErrors()) {?>
        <h4>Errors: </h4>
        <ol class="err">
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['msgs']->value->getErrors(), 'err');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['err']->value) {
?>
            <li><?php echo $_smarty_tpl->tpl_vars['err']->value;?>
</li>
            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

        </ol>
        <?php }?>

        
        <?php if ($_smarty_tpl->tpl_vars['msgs']->value->hasInfos()) {?>
        <h4>Infos: </h4>
        <ol class="inf">
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['msgs']->value->getInfos(), 'inf');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['inf']->value) {
?>
            <li><?php echo $_smarty_tpl->tpl_vars['inf']->value;?>
</li>
            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

        </ol>
        <?php }?>

        <?php if ($_smarty_tpl->tpl_vars['res']->value > -1) {?>
        <h4>Result</h4>
        <p class="res">
            <?php echo $_smarty_tpl->tpl_vars['res']->value;?>

        </p>
        <?php }?>

    </div>
</div>

<?php
}
}
/* {/block 'content'} */
}
