<?php /* Smarty version Smarty-3.1.19, created on 2015-04-09 19:31:31
         compiled from "C:\xampp\htdocs\dexlene-framework\Application\View\App\users.tpl" */ ?>
<?php /*%%SmartyHeaderCode:96595526b7738f7f77-12561159%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ba785739f9a11d8d5a9ed4f50ffadc726ab89690' => 
    array (
      0 => 'C:\\xampp\\htdocs\\dexlene-framework\\Application\\View\\App\\users.tpl',
      1 => 1428600690,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '96595526b7738f7f77-12561159',
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
  'unifunc' => 'content_5526b7739f5da2_72829312',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5526b7739f5da2_72829312')) {function content_5526b7739f5da2_72829312($_smarty_tpl) {?><?php if (!is_callable('smarty_function_counter')) include 'C:\\xampp\\htdocs\\dexlene-framework\\Lib\\plugins\\function.counter.php';
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
                    
                    "positions" =>
                            array("owner" => 7,
                                "id" => NULL,
                                'password' => NULL,
                                'trash' => NULL,
                                'email' => 5,
                                'ordem' => 6,
                                'username' => 4,
                                '' => 1,
                                'modified' => 2,
                                'name' => 3
                    
                    <?php echo smarty_function_counter(array('assign'=>'i','start'=>0,'print'=>false),$_smarty_tpl);?>
 
                    <?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['row']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['rows']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value) {
$_smarty_tpl->tpl_vars['row']->_loop = true;
?>
                        <tr class="success">
                            <td><?php echo $_smarty_tpl->tpl_vars['row']->value->created;?>
</td>
                            <td>261</td>
                            <td>33.3%</td>
                            <td>$234.12</td>
                        </tr>
                        <?php echo smarty_function_counter(array(),$_smarty_tpl);?>

                    <?php } ?>   
                    
                </tbody>
            </table>
        </div>
    </div>
</div>
<!-- /.row --><?php }} ?>
