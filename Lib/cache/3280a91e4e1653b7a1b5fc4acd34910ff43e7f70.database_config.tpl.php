<?php /*%%SmartyHeaderCode:28456552aa32f01c548-99399510%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3280a91e4e1653b7a1b5fc4acd34910ff43e7f70' => 
    array (
      0 => 'C:\\xampp\\htdocs\\dexlene-framework\\Application\\View\\App\\database_config.tpl',
      1 => 1428503318,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '28456552aa32f01c548-99399510',
  'variables' => 
  array (
    'request_uri' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_552aa32f0dc6d6_47747539',
  'cache_lifetime' => 3600,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_552aa32f0dc6d6_47747539')) {function content_552aa32f0dc6d6_47747539($_smarty_tpl) {?><form method="post" name="pForm">
  <h1>BANCO DE DADOS - MySQL</h1>
  <div class="inset">
  <p>
    <label for="email">HOST NAME</label>
    <input type="text" name="host" id="host" required="true">
  </p>
  <p>
    <label for="email">PORTA</label>
    <input type="text" name="port" id="porta" value="3306" required="true">
  </p>
  <p>
    <label for="password">USERNAME</label>
    <input type="text" name="username" id="username" required="true">
  </p>
  <p>
    <label for="password">DATABASE NAME</label>
    <input type="text" name="dbname" id="dbname" required="true">
  </p>
  <p>
    <label for="password">PASSWORD</label>
    <input type="password" name="password" id="password">
    <input type="hidden" name="request_uri" id="request_uri" value="/dexlene-framework/">
  </p>
  </div>
  <p class="p-container">
    <span id="error" style="color: #f0c040"></span>
    <input type="submit" name="go" id="go" value="Configurar">
  </p>
</form><?php }} ?>
