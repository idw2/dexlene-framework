<?php /* Smarty version Smarty-3.1.19, created on 2015-04-14 19:38:51
         compiled from "C:\xampp\htdocs\dexlene-framework\Application\Layout\Startbootstrap-sb-admin-1.0.2\body.tpl" */ ?>
<?php /*%%SmartyHeaderCode:25261552d50ab824633-54771607%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b5312470cbc37026fc3f62f39f02d8f454a79164' => 
    array (
      0 => 'C:\\xampp\\htdocs\\dexlene-framework\\Application\\Layout\\Startbootstrap-sb-admin-1.0.2\\body.tpl',
      1 => 1428256726,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '25261552d50ab824633-54771607',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'content' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_552d50ab8973c4_88290949',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_552d50ab8973c4_88290949')) {function content_552d50ab8973c4_88290949($_smarty_tpl) {?>
<div id="wrapper">

    <?php echo $_smarty_tpl->getSubTemplate ("navbar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>


    <div id="page-wrapper">

        <div class="container-fluid">

            <?php echo $_smarty_tpl->getSubTemplate ("breadcrumbs.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>

            
            <?php echo $_smarty_tpl->tpl_vars['content']->value;?>


        </div>
        <!-- /.container-fluid -->

    </div>
    <!-- /#page-wrapper -->

</div>
<!-- /#wrapper -->
<?php }} ?>
