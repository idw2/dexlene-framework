<?php /* Smarty version Smarty-3.1.19, created on 2015-04-08 18:13:13
         compiled from "C:\xampp\htdocs\dexlene-framework\Application\View\App\sucess_config.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2104055255399b20ec0-14830298%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
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
  'nocache_hash' => '2104055255399b20ec0-14830298',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'request_uri' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_55255399b659f7_85093489',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55255399b659f7_85093489')) {function content_55255399b659f7_85093489($_smarty_tpl) {?><form style="width: 80%" onsubmit="return false">
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
