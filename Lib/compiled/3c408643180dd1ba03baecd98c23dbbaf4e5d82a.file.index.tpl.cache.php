<?php /* Smarty version Smarty-3.1.19, created on 2015-04-13 16:03:15
         compiled from "C:\xampp\htdocs\dexlene-framework\Application\View\App\index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:16789552bcca3cb4101-30587829%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
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
  'nocache_hash' => '16789552bcca3cb4101-30587829',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'request_uri' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_552bcca3d044c0_95500647',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_552bcca3d044c0_95500647')) {function content_552bcca3d044c0_95500647($_smarty_tpl) {?><form method="post">
  <h1>LOGIN</h1>
  <div class="inset">
  <p>
    <label for="password">USERNAME</label>
    <input type="text" name="username" id="username" required="true">
  </p>
  <p>
    <label for="password">PASSWORD</label>
    <input type="password" name="password" id="password" required="true">
    <input type="hidden" name="request_uri" id="request_uri" value="<?php echo $_smarty_tpl->tpl_vars['request_uri']->value;?>
" required="true">
  </p>
  </div>
  <p class="p-container">
    <span id="error" style="color: #f0c040"></span>
    <input type="submit" name="go" id="go" value="Sign in">
  </p>
</form><?php }} ?>
