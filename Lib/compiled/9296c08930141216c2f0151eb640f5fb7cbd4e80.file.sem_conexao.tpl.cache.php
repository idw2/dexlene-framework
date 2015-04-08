<?php /* Smarty version Smarty-3.1.19, created on 2015-04-08 17:21:17
         compiled from "C:\xampp\htdocs\dexlene-framework\Application\View\App\sem_conexao.tpl" */ ?>
<?php /*%%SmartyHeaderCode:15535525476d0aeb95-91482006%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9296c08930141216c2f0151eb640f5fb7cbd4e80' => 
    array (
      0 => 'C:\\xampp\\htdocs\\dexlene-framework\\Application\\View\\App\\sem_conexao.tpl',
      1 => 1428377268,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '15535525476d0aeb95-91482006',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'request_uri' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5525476d0f3e42_23885627',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5525476d0f3e42_23885627')) {function content_5525476d0f3e42_23885627($_smarty_tpl) {?><form method="post" name="rForm" style="width: 80%">
  <h1>SEM CONEXÃO COM O BANCO DE DADOS</h1>
  <div class="inset">
  <p>
    <ol>
        <li>Ao testar a conexão verificamos que ocorreu uma alteração de nome ou senha do banco de dados.<br/><br/></li>
        <li>Verifique o arquivo: `Application/Config/database.php` e tente novamente.<br/><br/></li>
        <li>Caso venha optar por `Reconfigurar` certifique-se que fazer antes um backup da sua `Dase de Dados` .<br/><br/></li>
    </ol>
  </p>
  </div>
  <p class="p-container">
    <input type="hidden" name="request_uri" id="request_uri" value="<?php echo $_smarty_tpl->tpl_vars['request_uri']->value;?>
" required="true">
    <span id="error" style="color: #f0c040"></span>
    <input type="submit" name="go" id="go" value="Reconfigurar">
  </p>
</form><?php }} ?>
