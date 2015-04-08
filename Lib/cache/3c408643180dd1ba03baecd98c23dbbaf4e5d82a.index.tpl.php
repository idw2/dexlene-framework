<?php /*%%SmartyHeaderCode:8961552563d902f332-57695804%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3c408643180dd1ba03baecd98c23dbbaf4e5d82a' => 
    array (
      0 => 'C:\\xampp\\htdocs\\dexlene-framework\\Application\\View\\App\\index.tpl',
      1 => 1427494094,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '8961552563d902f332-57695804',
  'variables' => 
  array (
    'request_uri' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_552563d90a3e36_75368374',
  'cache_lifetime' => 120,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_552563d90a3e36_75368374')) {function content_552563d90a3e36_75368374($_smarty_tpl) {?><form method="post">
  <h1>LOGIN</h1>
  <div class="inset">
  <p>
    <label for="password">USERNAME</label>
    <input type="text" name="username" id="username" required="true">
  </p>
  <p>
    <label for="password">PASSWORD</label>
    <input type="password" name="password" id="password" required="true">
    <input type="hidden" name="request_uri" id="request_uri" value="/dexlene-framework/" required="true">
  </p>
  </div>
  <p class="p-container">
    <span id="error" style="color: #f0c040"></span>
    <input type="submit" name="go" id="go" value="Sign in">
  </p>
</form><?php }} ?>
