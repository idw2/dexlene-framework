<?php /* Smarty version Smarty-3.1.19, created on 2015-04-10 15:53:49
         compiled from "C:\xampp\htdocs\dexlene-framework\Application\View\App\users.tpl" */ ?>
<?php /*%%SmartyHeaderCode:102875527d5ed260125-67935477%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ba785739f9a11d8d5a9ed4f50ffadc726ab89690' => 
    array (
      0 => 'C:\\xampp\\htdocs\\dexlene-framework\\Application\\View\\App\\users.tpl',
      1 => 1428627210,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '102875527d5ed260125-67935477',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'th' => 0,
    'rows' => 0,
    'row' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5527d5ed45ebc9_74529652',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5527d5ed45ebc9_74529652')) {function content_5527d5ed45ebc9_74529652($_smarty_tpl) {?><?php if (!is_callable('smarty_function_counter')) include 'C:\\xampp\\htdocs\\dexlene-framework\\Lib\\plugins\\function.counter.php';
?><div class="row">
    <div class="col-lg-12">
        <p>
            <button type="button" class="btn btn-lg btn-default">Novo usuário</button>
            <button type="button" class="btn btn-lg btn-default">Grupos</button>
        </p>

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
                        <tr class="success">
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
<!-- /.row --><?php }} ?>
