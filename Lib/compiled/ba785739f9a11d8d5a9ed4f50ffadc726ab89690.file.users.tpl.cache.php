<?php /* Smarty version Smarty-3.1.19, created on 2015-04-14 14:42:14
         compiled from "C:\xampp\htdocs\dexlene-framework\Application\View\App\users.tpl" */ ?>
<?php /*%%SmartyHeaderCode:8758552d0b26409d64-25797869%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ba785739f9a11d8d5a9ed4f50ffadc726ab89690' => 
    array (
      0 => 'C:\\xampp\\htdocs\\dexlene-framework\\Application\\View\\App\\users.tpl',
      1 => 1428958852,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '8758552d0b26409d64-25797869',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'paginator' => 0,
    'th' => 0,
    'rows' => 0,
    'i' => 0,
    'row' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_552d0b26768d19_43691024',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_552d0b26768d19_43691024')) {function content_552d0b26768d19_43691024($_smarty_tpl) {?><?php if (!is_callable('smarty_function_counter')) include 'C:\\xampp\\htdocs\\dexlene-framework\\Lib\\plugins\\function.counter.php';
?>

<div class="row">
    <div class="col-lg-6" style="line-height: 6;">
        <button type="button" class="btn btn-lg btn-default">Novo usuário</button>
        <button type="button" class="btn btn-lg btn-default">Grupos</button>
    </div>
    <div class="col-lg-6" style="text-align: right;">
        <?php echo $_smarty_tpl->tpl_vars['paginator']->value;?>

    </div>
</div>
<div class="row">
    <div class="col-lg-12">
        <div class="table-responsive">
            <table class="table table-bordered table-hover table-striped">
                <thead>
                    <tr>
                        <?php echo $_smarty_tpl->tpl_vars['th']->value;?>

                    </tr>
                </thead>
                <tbody>
                    <?php echo smarty_function_counter(array('assign'=>'i','start'=>0,'print'=>false),$_smarty_tpl);?>
 
                    <?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['row']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['rows']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value) {
$_smarty_tpl->tpl_vars['row']->_loop = true;
?>
                        <?php if ($_smarty_tpl->tpl_vars['i']->value==0) {?>
                            <tr class="active">
                            <?php } elseif ($_smarty_tpl->tpl_vars['i']->value==1) {?>
                            <tr class="success">
                            <?php } elseif ($_smarty_tpl->tpl_vars['i']->value==2) {?>
                            <tr class="warning">
                            <?php } elseif ($_smarty_tpl->tpl_vars['i']->value==3) {?>
                            <tr class="danger">
                            <?php } elseif ($_smarty_tpl->tpl_vars['i']->value==4) {?>
                            <tr>
                                <?php echo smarty_function_counter(array('assign'=>'i','start'=>0,'print'=>false),$_smarty_tpl);?>
 
                            <?php }?>

                            <td><?php echo $_smarty_tpl->tpl_vars['row']->value->created;?>
</td>
                            <td><?php echo $_smarty_tpl->tpl_vars['row']->value->modified;?>
</td>
                            <td><?php echo $_smarty_tpl->tpl_vars['row']->value->name;?>
</td>
                            <td><?php echo $_smarty_tpl->tpl_vars['row']->value->username;?>
</td>
                            <td><?php echo $_smarty_tpl->tpl_vars['row']->value->email;?>
</td>
                            <td><?php echo $_smarty_tpl->tpl_vars['row']->value->ordem;?>
</td>
                            <td><?php echo $_smarty_tpl->tpl_vars['row']->value->status;?>
</td>
                            <td><?php echo $_smarty_tpl->tpl_vars['row']->value->owner;?>
</td>
                        </tr>
                        <?php echo smarty_function_counter(array(),$_smarty_tpl);?>

                    <?php } ?>
                </tbody>
            </table>
        </div>       
    </div>
</div>
<div class="row">
    <div class="col-lg-6" style="line-height: 6;">
        <button type="button" class="btn btn-lg btn-default">Novo usuário</button>
        <button type="button" class="btn btn-lg btn-default">Grupos</button>
    </div>
    <div class="col-lg-6" style="text-align: right;">
        <?php echo $_smarty_tpl->tpl_vars['paginator']->value;?>

    </div>
</div>
<!-- /.row --><?php }} ?>
