<?php /* Smarty version Smarty-3.1.19, created on 2015-04-07 00:50:07
         compiled from "C:\xampp\htdocs\dexlene-framework\Application\View\App\sucess_config.tpl" */ ?>
<?php /*%%SmartyHeaderCode:26336552353ef11f350-60074427%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f8a999a1133ebe6affc5abaae4c64301ac6e3c1b' => 
    array (
      0 => 'C:\\xampp\\htdocs\\dexlene-framework\\Application\\View\\App\\sucess_config.tpl',
      1 => 1427494056,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '26336552353ef11f350-60074427',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'request_uri' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_552353ef1face4_10739852',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_552353ef1face4_10739852')) {function content_552353ef1face4_10739852($_smarty_tpl) {?><form style="width: 80%" onsubmit="return false">
  <h1>* Successfully performed Settings!</h1>
  <div class="inset">
  </div>
  <p class="p-container">
    <span id="error" style="color: #f0c040"></span>
    <input type="submit" name="go" id="go" value="Sign in" onclick="window.location.href='<?php echo $_smarty_tpl->tpl_vars['request_uri']->value;?>
app/'">
  </p>
</form>


<?php }} ?>
