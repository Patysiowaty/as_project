<?php
/* Smarty version 4.1.0, created on 2023-01-08 12:36:16
  from '/Applications/XAMPP/xamppfiles/htdocs/eshop/app/views/Tools.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_63baaab027e544_71926056',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'aff46112372b518da6e236be2bf88a2e8c8aeca6' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/eshop/app/views/Tools.tpl',
      1 => 1673177773,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:Messages.tpl' => 1,
  ),
),false)) {
function content_63baaab027e544_71926056 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_14432001963baaab0267d23_39270985', 'content');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "Main.tpl");
}
/* {block 'content'} */
class Block_14432001963baaab0267d23_39270985 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_14432001963baaab0267d23_39270985',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div class="container py-5">
                <form class="input-group" action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/search" method="post">
            <input type="search" class="form-control rounded" placeholder="Search" aria-label="Search"
                   aria-describedby="search-addon" name="email"/>
            <button type="submit" class="btn btn-outline-primary" name="pls">search</button>
        </form>
        <?php if (!$_smarty_tpl->tpl_vars['msg']->value->isEmpty) {?>
            <?php $_smarty_tpl->_subTemplateRender("file:Messages.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
        <?php }?>
        <table class="table table-striped">
            <thead>
            <tr>
                <th scope="col">Id</th>
                <th scope="col">Email</th>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['roles']->value, 'role');
$_smarty_tpl->tpl_vars['role']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['role']->value) {
$_smarty_tpl->tpl_vars['role']->do_else = false;
?>
                    <th scope="col"><?php echo $_smarty_tpl->tpl_vars['role']->value;?>
</th>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                <th scope="col">Active</th>
            </tr>
            </thead>
            <tbody>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['users']->value, 'user');
$_smarty_tpl->tpl_vars['user']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['user']->value) {
$_smarty_tpl->tpl_vars['user']->do_else = false;
?>
                <tr>
                    <td>
                        <?php echo $_smarty_tpl->tpl_vars['user']->value->getId();?>

                    </td>
                    <td>
                        <?php echo $_smarty_tpl->tpl_vars['user']->value->getEmail();?>

                    </td>
                    <td>
                        <div class="form-check form-switch">
                            <input type="checkbox" class="form-check-input" id="AdminCheck" value="<?php echo $_smarty_tpl->tpl_vars['user']->value->getId();?>
"
                                   <?php if ($_smarty_tpl->tpl_vars['user']->value->isAdmin()) {?>checked<?php }?>/>
                        </div>
                    </td>
                    <td>
                        <div class="form-check form-switch">
                            <input type="checkbox" class="form-check-input" id="EmployeeCheck" value="<?php echo $_smarty_tpl->tpl_vars['user']->value->getId();?>
"
                                   <?php if ($_smarty_tpl->tpl_vars['user']->value->isEmployee()) {?>checked<?php }?>/>
                        </div>
                    </td>
                    <td>
                        <div class="form-check form-switch">
                            <input type="checkbox" class="form-check-input" id="UserCheck" value="<?php echo $_smarty_tpl->tpl_vars['user']->value->getId();?>
"
                                   <?php if ($_smarty_tpl->tpl_vars['user']->value->isCustomer()) {?>checked<?php }?>/>
                        </div>
                    </td>
                    <td>
                        <div class="form-check form-switch">
                            <input type="checkbox" class="form-check-input" id="ActiveCheck" value="<?php echo $_smarty_tpl->tpl_vars['user']->value->getId();?>
"
                                   <?php if ($_smarty_tpl->tpl_vars['user']->value->isActive()) {?>checked<?php }?>/>
                        </div>
                    </td>
                </tr>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </tbody>
        </table>
    </div>
<?php
}
}
/* {/block 'content'} */
}
