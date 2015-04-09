<?php /* Smarty version Smarty-3.1.19, created on 2015-04-09 18:52:51
         compiled from "C:\xampp\htdocs\dexlene-framework\Application\View\Home\index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:123675526ae63507938-03241753%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e00dda4b0def6d188089fdd4e74aa9e78b7e03de' => 
    array (
      0 => 'C:\\xampp\\htdocs\\dexlene-framework\\Application\\View\\Home\\index.tpl',
      1 => 1428597692,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '123675526ae63507938-03241753',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5526ae6354f5e6_59669230',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5526ae6354f5e6_59669230')) {function content_5526ae6354f5e6_59669230($_smarty_tpl) {?><?php $_smarty_tpl->smarty->_tag_stack[] = array('php', array()); $_block_repeat=true; echo smarty_php_tag(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

 var_dump(array("Hello World!"));
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_php_tag(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
<?php }} ?>
