<?php /* Smarty version Smarty-3.1.19, created on 2015-04-14 15:14:20
         compiled from "C:\xampp\htdocs\dexlene-framework\Application\Layout\Startbootstrap-sb-admin-1.0.2\breadcrumbs.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2165552d12ac8935c2-65723792%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bd1f7b62273a20c0e49b96f373b658ca52c29f3d' => 
    array (
      0 => 'C:\\xampp\\htdocs\\dexlene-framework\\Application\\Layout\\Startbootstrap-sb-admin-1.0.2\\breadcrumbs.tpl',
      1 => 1429017130,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2165552d12ac8935c2-65723792',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'page' => 0,
    'request_uri' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_552d12ac9e5137_98093441',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_552d12ac9e5137_98093441')) {function content_552d12ac9e5137_98093441($_smarty_tpl) {?><!-- Page Heading -->
<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">
            <?php if ($_smarty_tpl->tpl_vars['page']->value=="AppController/welcome") {?>
                Página inicial
            <?php } elseif ($_smarty_tpl->tpl_vars['page']->value=="UsersController/index") {?>
                Usuários <small>Grupos e premissões</small>
            <?php }?>    
        </h1>
        <ol class="breadcrumb">
            <li>
                <i class="fa fa-dashboard"></i>  <a href="<?php echo $_smarty_tpl->tpl_vars['request_uri']->value;?>
app/welcome">Home</a>
            </li>
            <li class="active">
                <i class="fa fa-desktop"></i>
                <?php if ($_smarty_tpl->tpl_vars['page']->value=="AppController/welcome") {?>
                    Boas vindas
                <?php } elseif ($_smarty_tpl->tpl_vars['page']->value=="UsersController/index") {?>
                    Usuários <small>Grupos e premissões</small>
                <?php }?>
            </li>
        </ol>
    </div>
</div><?php }} ?>
