<?php /* Smarty version Smarty-3.1.19, created on 2015-04-08 17:22:10
         compiled from "C:\xampp\htdocs\dexlene-framework\Application\Layout\Startbootstrap-sb-admin-1.0.2\breadcrumbs.tpl" */ ?>
<?php /*%%SmartyHeaderCode:28049552547a27a3543-23979921%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bd1f7b62273a20c0e49b96f373b658ca52c29f3d' => 
    array (
      0 => 'C:\\xampp\\htdocs\\dexlene-framework\\Application\\Layout\\Startbootstrap-sb-admin-1.0.2\\breadcrumbs.tpl',
      1 => 1428256946,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '28049552547a27a3543-23979921',
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
  'unifunc' => 'content_552547a28ae821_86016876',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_552547a28ae821_86016876')) {function content_552547a28ae821_86016876($_smarty_tpl) {?><!-- Page Heading -->
<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">
            <?php if ($_smarty_tpl->tpl_vars['page']->value=="welcome") {?>
                Página inicial
            <?php } elseif ($_smarty_tpl->tpl_vars['page']->value=="users") {?>
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
                <?php if ($_smarty_tpl->tpl_vars['page']->value=="welcome") {?>
                    Boas vindas
                <?php } elseif ($_smarty_tpl->tpl_vars['page']->value=="users") {?>
                    Usuários <small>Grupos e premissões</small>
                <?php }?>
            </li>
        </ol>
    </div>
</div><?php }} ?>
