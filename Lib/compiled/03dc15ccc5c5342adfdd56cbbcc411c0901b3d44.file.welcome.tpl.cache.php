<?php /* Smarty version Smarty-3.1.19, created on 2015-04-14 19:38:51
         compiled from "C:\xampp\htdocs\dexlene-framework\Application\View\App\welcome.tpl" */ ?>
<?php /*%%SmartyHeaderCode:15958552d50ab5bf459-95691182%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '03dc15ccc5c5342adfdd56cbbcc411c0901b3d44' => 
    array (
      0 => 'C:\\xampp\\htdocs\\dexlene-framework\\Application\\View\\App\\welcome.tpl',
      1 => 1429031109,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '15958552d50ab5bf459-95691182',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_552d50ab621526_65549192',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_552d50ab621526_65549192')) {function content_552d50ab621526_65549192($_smarty_tpl) {?><!-- /.row -->

<!-- Main jumbotron for a primary marketing message or call to action -->
<div class="jumbotron">
    <div class="row">
        <div class="col-lg-12">
            <h1>Bem-vindo, Rogério Pontes!</h1>
            <p>Selecione os botões abaixo para gerenciar o sistema!</p>
            </p>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <nav>
                <ul class="pager">
                    <li><a href="<?php $_smarty_tpl->smarty->_tag_stack[] = array('php', array()); $_block_repeat=true; echo smarty_php_tag(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
echo REQUEST_URI;<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_php_tag(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
users" style="font-size: 15px;"><i class="fa fa-fw fa-users" style="font-size: 60px; display: block; padding-top: 14px;"></i><br>Usuários</a></li>
                </ul>
            </nav>
        </div>
    </div>
</div>
<?php }} ?>
