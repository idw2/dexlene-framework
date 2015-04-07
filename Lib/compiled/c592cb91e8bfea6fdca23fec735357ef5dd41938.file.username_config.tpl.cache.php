<?php /* Smarty version Smarty-3.1.19, created on 2015-04-07 00:49:44
         compiled from "C:\xampp\htdocs\dexlene-framework\Application\View\App\username_config.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1736552353d89c9088-14025630%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c592cb91e8bfea6fdca23fec735357ef5dd41938' => 
    array (
      0 => 'C:\\xampp\\htdocs\\dexlene-framework\\Application\\View\\App\\username_config.tpl',
      1 => 1428251451,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1736552353d89c9088-14025630',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'request_uri' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_552353d8b366f8_85644671',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_552353d8b366f8_85644671')) {function content_552353d8b366f8_85644671($_smarty_tpl) {?><form method="post" name="uForm">
  <h1>USERNAME SYSTEM</h1>
  <div class="inset">
  <p>
    <label for="password">YOUR NAME</label>
    <input type="text" name="name" id="name" required="true">
  </p>
  <p>
    <label for="password">E-MAIL</label>
    <input type="email" name="email" id="name" required="true">
  </p>
  <p>
    <label for="password">USERNAME</label>
    <input type="text" name="username" id="username" required="true">
  </p>
  <p>
    <label for="password">PASSWORD</label>
    <input type="password" name="password" id="password">
    <input type="hidden" name="request_uri" id="request_uri" value="<?php echo $_smarty_tpl->tpl_vars['request_uri']->value;?>
" required="true">
  </p>
  <p>
    <label for="password">REPEAT PASSWORD</label>
    <input type="password" name="repeat_password" id="repeat_password">
    <input type="hidden" name="request_uri" id="request_uri" value="<?php echo $_smarty_tpl->tpl_vars['request_uri']->value;?>
" required="true">
  </p>
  </div>
  <p class="p-container">
    <span id="error" style="color: #f0c040"></span>
    <input type="submit" name="go" id="go" value="Save">
  </p>
</form><?php }} ?>
