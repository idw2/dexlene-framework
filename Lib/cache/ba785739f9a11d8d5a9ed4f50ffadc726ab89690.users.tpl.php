<?php /*%%SmartyHeaderCode:8758552d0b26409d64-25797869%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ba785739f9a11d8d5a9ed4f50ffadc726ab89690' => 
    array (
      0 => 'C:\\xampp\\htdocs\\dexlene-framework\\Application\\View\\App\\users.tpl',
      1 => 1428958852,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '8758552d0b26409d64-25797869',
  'variables' => 
  array (
    'paginator' => 0,
    'th' => 0,
    'rows' => 0,
    'i' => 0,
    'row' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_552d0b2697c791_66211009',
  'cache_lifetime' => 3600,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_552d0b2697c791_66211009')) {function content_552d0b2697c791_66211009($_smarty_tpl) {?>
<div class="row">
    <div class="col-lg-6" style="line-height: 6;">
        <button type="button" class="btn btn-lg btn-default">Novo usuário</button>
        <button type="button" class="btn btn-lg btn-default">Grupos</button>
    </div>
    <div class="col-lg-6" style="text-align: right;">
        <br />
<font size='1'><table class='xdebug-error xe-notice' dir='ltr' border='1' cellspacing='0' cellpadding='1'>
<tr><th align='left' bgcolor='#f57900' colspan="5"><span style='background-color: #cc0000; color: #fce94f; font-size: x-large;'>( ! )</span> Notice: Undefined index: paginator in C:\xampp\htdocs\dexlene-framework\Lib\sysplugins\smarty_internal_templatebase.php(157) : eval()'d code on line <i>39</i></th></tr>
<tr><th align='left' bgcolor='#e9b96e' colspan='5'>Call Stack</th></tr>
<tr><th align='center' bgcolor='#eeeeec'>#</th><th align='left' bgcolor='#eeeeec'>Time</th><th align='left' bgcolor='#eeeeec'>Memory</th><th align='left' bgcolor='#eeeeec'>Function</th><th align='left' bgcolor='#eeeeec'>Location</th></tr>
<tr><td bgcolor='#eeeeec' align='center'>1</td><td bgcolor='#eeeeec' align='center'>0.0463</td><td bgcolor='#eeeeec' align='right'>1624776</td><td bgcolor='#eeeeec'>System->__destruct(  )</td><td title='C:\xampp\htdocs\dexlene-framework\System\system.php' bgcolor='#eeeeec'>..\system.php<b>:</b>0</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>2</td><td bgcolor='#eeeeec' align='center'>0.0465</td><td bgcolor='#eeeeec' align='right'>1624944</td><td bgcolor='#eeeeec'>My_smarty->view_tpl(  )</td><td title='C:\xampp\htdocs\dexlene-framework\System\system.php' bgcolor='#eeeeec'>..\system.php<b>:</b>32</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>3</td><td bgcolor='#eeeeec' align='center'>0.0465</td><td bgcolor='#eeeeec' align='right'>1625016</td><td bgcolor='#eeeeec'>Smarty_Internal_TemplateBase->display(  )</td><td title='C:\xampp\htdocs\dexlene-framework\Lib\Smarty.php' bgcolor='#eeeeec'>..\Smarty.php<b>:</b>29</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>4</td><td bgcolor='#eeeeec' align='center'>0.0466</td><td bgcolor='#eeeeec' align='right'>1627176</td><td bgcolor='#eeeeec'>Smarty_Internal_TemplateBase->fetch(  )</td><td title='C:\xampp\htdocs\dexlene-framework\Lib\sysplugins\smarty_internal_templatebase.php' bgcolor='#eeeeec'>..\smarty_internal_templatebase.php<b>:</b>394</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>5</td><td bgcolor='#eeeeec' align='center'>0.2971</td><td bgcolor='#eeeeec' align='right'>3536440</td><td bgcolor='#eeeeec'>content_552d0b26768d19_43691024(  )</td><td title='C:\xampp\htdocs\dexlene-framework\Lib\sysplugins\smarty_internal_templatebase.php' bgcolor='#eeeeec'>..\smarty_internal_templatebase.php<b>:</b>188</td></tr>
</table></font>
<br />
<font size='1'><table class='xdebug-error xe-notice' dir='ltr' border='1' cellspacing='0' cellpadding='1'>
<tr><th align='left' bgcolor='#f57900' colspan="5"><span style='background-color: #cc0000; color: #fce94f; font-size: x-large;'>( ! )</span> Notice: Trying to get property of non-object in C:\xampp\htdocs\dexlene-framework\Lib\sysplugins\smarty_internal_templatebase.php(157) : eval()'d code on line <i>39</i></th></tr>
<tr><th align='left' bgcolor='#e9b96e' colspan='5'>Call Stack</th></tr>
<tr><th align='center' bgcolor='#eeeeec'>#</th><th align='left' bgcolor='#eeeeec'>Time</th><th align='left' bgcolor='#eeeeec'>Memory</th><th align='left' bgcolor='#eeeeec'>Function</th><th align='left' bgcolor='#eeeeec'>Location</th></tr>
<tr><td bgcolor='#eeeeec' align='center'>1</td><td bgcolor='#eeeeec' align='center'>0.0463</td><td bgcolor='#eeeeec' align='right'>1624776</td><td bgcolor='#eeeeec'>System->__destruct(  )</td><td title='C:\xampp\htdocs\dexlene-framework\System\system.php' bgcolor='#eeeeec'>..\system.php<b>:</b>0</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>2</td><td bgcolor='#eeeeec' align='center'>0.0465</td><td bgcolor='#eeeeec' align='right'>1624944</td><td bgcolor='#eeeeec'>My_smarty->view_tpl(  )</td><td title='C:\xampp\htdocs\dexlene-framework\System\system.php' bgcolor='#eeeeec'>..\system.php<b>:</b>32</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>3</td><td bgcolor='#eeeeec' align='center'>0.0465</td><td bgcolor='#eeeeec' align='right'>1625016</td><td bgcolor='#eeeeec'>Smarty_Internal_TemplateBase->display(  )</td><td title='C:\xampp\htdocs\dexlene-framework\Lib\Smarty.php' bgcolor='#eeeeec'>..\Smarty.php<b>:</b>29</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>4</td><td bgcolor='#eeeeec' align='center'>0.0466</td><td bgcolor='#eeeeec' align='right'>1627176</td><td bgcolor='#eeeeec'>Smarty_Internal_TemplateBase->fetch(  )</td><td title='C:\xampp\htdocs\dexlene-framework\Lib\sysplugins\smarty_internal_templatebase.php' bgcolor='#eeeeec'>..\smarty_internal_templatebase.php<b>:</b>394</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>5</td><td bgcolor='#eeeeec' align='center'>0.2971</td><td bgcolor='#eeeeec' align='right'>3536440</td><td bgcolor='#eeeeec'>content_552d0b26768d19_43691024(  )</td><td title='C:\xampp\htdocs\dexlene-framework\Lib\sysplugins\smarty_internal_templatebase.php' bgcolor='#eeeeec'>..\smarty_internal_templatebase.php<b>:</b>188</td></tr>
</table></font>

    </div>
</div>
<div class="row">
    <div class="col-lg-12">
        <div class="table-responsive">
            <table class="table table-bordered table-hover table-striped">
                <thead>
                    <tr>
                        <br />
<font size='1'><table class='xdebug-error xe-notice' dir='ltr' border='1' cellspacing='0' cellpadding='1'>
<tr><th align='left' bgcolor='#f57900' colspan="5"><span style='background-color: #cc0000; color: #fce94f; font-size: x-large;'>( ! )</span> Notice: Undefined index: th in C:\xampp\htdocs\dexlene-framework\Lib\sysplugins\smarty_internal_templatebase.php(157) : eval()'d code on line <i>49</i></th></tr>
<tr><th align='left' bgcolor='#e9b96e' colspan='5'>Call Stack</th></tr>
<tr><th align='center' bgcolor='#eeeeec'>#</th><th align='left' bgcolor='#eeeeec'>Time</th><th align='left' bgcolor='#eeeeec'>Memory</th><th align='left' bgcolor='#eeeeec'>Function</th><th align='left' bgcolor='#eeeeec'>Location</th></tr>
<tr><td bgcolor='#eeeeec' align='center'>1</td><td bgcolor='#eeeeec' align='center'>0.0463</td><td bgcolor='#eeeeec' align='right'>1624776</td><td bgcolor='#eeeeec'>System->__destruct(  )</td><td title='C:\xampp\htdocs\dexlene-framework\System\system.php' bgcolor='#eeeeec'>..\system.php<b>:</b>0</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>2</td><td bgcolor='#eeeeec' align='center'>0.0465</td><td bgcolor='#eeeeec' align='right'>1624944</td><td bgcolor='#eeeeec'>My_smarty->view_tpl(  )</td><td title='C:\xampp\htdocs\dexlene-framework\System\system.php' bgcolor='#eeeeec'>..\system.php<b>:</b>32</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>3</td><td bgcolor='#eeeeec' align='center'>0.0465</td><td bgcolor='#eeeeec' align='right'>1625016</td><td bgcolor='#eeeeec'>Smarty_Internal_TemplateBase->display(  )</td><td title='C:\xampp\htdocs\dexlene-framework\Lib\Smarty.php' bgcolor='#eeeeec'>..\Smarty.php<b>:</b>29</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>4</td><td bgcolor='#eeeeec' align='center'>0.0466</td><td bgcolor='#eeeeec' align='right'>1627176</td><td bgcolor='#eeeeec'>Smarty_Internal_TemplateBase->fetch(  )</td><td title='C:\xampp\htdocs\dexlene-framework\Lib\sysplugins\smarty_internal_templatebase.php' bgcolor='#eeeeec'>..\smarty_internal_templatebase.php<b>:</b>394</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>5</td><td bgcolor='#eeeeec' align='center'>0.2971</td><td bgcolor='#eeeeec' align='right'>3536440</td><td bgcolor='#eeeeec'>content_552d0b26768d19_43691024(  )</td><td title='C:\xampp\htdocs\dexlene-framework\Lib\sysplugins\smarty_internal_templatebase.php' bgcolor='#eeeeec'>..\smarty_internal_templatebase.php<b>:</b>188</td></tr>
</table></font>
<br />
<font size='1'><table class='xdebug-error xe-notice' dir='ltr' border='1' cellspacing='0' cellpadding='1'>
<tr><th align='left' bgcolor='#f57900' colspan="5"><span style='background-color: #cc0000; color: #fce94f; font-size: x-large;'>( ! )</span> Notice: Trying to get property of non-object in C:\xampp\htdocs\dexlene-framework\Lib\sysplugins\smarty_internal_templatebase.php(157) : eval()'d code on line <i>49</i></th></tr>
<tr><th align='left' bgcolor='#e9b96e' colspan='5'>Call Stack</th></tr>
<tr><th align='center' bgcolor='#eeeeec'>#</th><th align='left' bgcolor='#eeeeec'>Time</th><th align='left' bgcolor='#eeeeec'>Memory</th><th align='left' bgcolor='#eeeeec'>Function</th><th align='left' bgcolor='#eeeeec'>Location</th></tr>
<tr><td bgcolor='#eeeeec' align='center'>1</td><td bgcolor='#eeeeec' align='center'>0.0463</td><td bgcolor='#eeeeec' align='right'>1624776</td><td bgcolor='#eeeeec'>System->__destruct(  )</td><td title='C:\xampp\htdocs\dexlene-framework\System\system.php' bgcolor='#eeeeec'>..\system.php<b>:</b>0</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>2</td><td bgcolor='#eeeeec' align='center'>0.0465</td><td bgcolor='#eeeeec' align='right'>1624944</td><td bgcolor='#eeeeec'>My_smarty->view_tpl(  )</td><td title='C:\xampp\htdocs\dexlene-framework\System\system.php' bgcolor='#eeeeec'>..\system.php<b>:</b>32</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>3</td><td bgcolor='#eeeeec' align='center'>0.0465</td><td bgcolor='#eeeeec' align='right'>1625016</td><td bgcolor='#eeeeec'>Smarty_Internal_TemplateBase->display(  )</td><td title='C:\xampp\htdocs\dexlene-framework\Lib\Smarty.php' bgcolor='#eeeeec'>..\Smarty.php<b>:</b>29</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>4</td><td bgcolor='#eeeeec' align='center'>0.0466</td><td bgcolor='#eeeeec' align='right'>1627176</td><td bgcolor='#eeeeec'>Smarty_Internal_TemplateBase->fetch(  )</td><td title='C:\xampp\htdocs\dexlene-framework\Lib\sysplugins\smarty_internal_templatebase.php' bgcolor='#eeeeec'>..\smarty_internal_templatebase.php<b>:</b>394</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>5</td><td bgcolor='#eeeeec' align='center'>0.2971</td><td bgcolor='#eeeeec' align='right'>3536440</td><td bgcolor='#eeeeec'>content_552d0b26768d19_43691024(  )</td><td title='C:\xampp\htdocs\dexlene-framework\Lib\sysplugins\smarty_internal_templatebase.php' bgcolor='#eeeeec'>..\smarty_internal_templatebase.php<b>:</b>188</td></tr>
</table></font>

                    </tr>
                </thead>
                <tbody>
                     
                    <br />
<font size='1'><table class='xdebug-error xe-notice' dir='ltr' border='1' cellspacing='0' cellpadding='1'>
<tr><th align='left' bgcolor='#f57900' colspan="5"><span style='background-color: #cc0000; color: #fce94f; font-size: x-large;'>( ! )</span> Notice: Undefined index: rows in C:\xampp\htdocs\dexlene-framework\Lib\sysplugins\smarty_internal_templatebase.php(157) : eval()'d code on line <i>57</i></th></tr>
<tr><th align='left' bgcolor='#e9b96e' colspan='5'>Call Stack</th></tr>
<tr><th align='center' bgcolor='#eeeeec'>#</th><th align='left' bgcolor='#eeeeec'>Time</th><th align='left' bgcolor='#eeeeec'>Memory</th><th align='left' bgcolor='#eeeeec'>Function</th><th align='left' bgcolor='#eeeeec'>Location</th></tr>
<tr><td bgcolor='#eeeeec' align='center'>1</td><td bgcolor='#eeeeec' align='center'>0.0463</td><td bgcolor='#eeeeec' align='right'>1624776</td><td bgcolor='#eeeeec'>System->__destruct(  )</td><td title='C:\xampp\htdocs\dexlene-framework\System\system.php' bgcolor='#eeeeec'>..\system.php<b>:</b>0</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>2</td><td bgcolor='#eeeeec' align='center'>0.0465</td><td bgcolor='#eeeeec' align='right'>1624944</td><td bgcolor='#eeeeec'>My_smarty->view_tpl(  )</td><td title='C:\xampp\htdocs\dexlene-framework\System\system.php' bgcolor='#eeeeec'>..\system.php<b>:</b>32</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>3</td><td bgcolor='#eeeeec' align='center'>0.0465</td><td bgcolor='#eeeeec' align='right'>1625016</td><td bgcolor='#eeeeec'>Smarty_Internal_TemplateBase->display(  )</td><td title='C:\xampp\htdocs\dexlene-framework\Lib\Smarty.php' bgcolor='#eeeeec'>..\Smarty.php<b>:</b>29</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>4</td><td bgcolor='#eeeeec' align='center'>0.0466</td><td bgcolor='#eeeeec' align='right'>1627176</td><td bgcolor='#eeeeec'>Smarty_Internal_TemplateBase->fetch(  )</td><td title='C:\xampp\htdocs\dexlene-framework\Lib\sysplugins\smarty_internal_templatebase.php' bgcolor='#eeeeec'>..\smarty_internal_templatebase.php<b>:</b>394</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>5</td><td bgcolor='#eeeeec' align='center'>0.2971</td><td bgcolor='#eeeeec' align='right'>3536440</td><td bgcolor='#eeeeec'>content_552d0b26768d19_43691024(  )</td><td title='C:\xampp\htdocs\dexlene-framework\Lib\sysplugins\smarty_internal_templatebase.php' bgcolor='#eeeeec'>..\smarty_internal_templatebase.php<b>:</b>188</td></tr>
</table></font>
<br />
<font size='1'><table class='xdebug-error xe-notice' dir='ltr' border='1' cellspacing='0' cellpadding='1'>
<tr><th align='left' bgcolor='#f57900' colspan="5"><span style='background-color: #cc0000; color: #fce94f; font-size: x-large;'>( ! )</span> Notice: Trying to get property of non-object in C:\xampp\htdocs\dexlene-framework\Lib\sysplugins\smarty_internal_templatebase.php(157) : eval()'d code on line <i>57</i></th></tr>
<tr><th align='left' bgcolor='#e9b96e' colspan='5'>Call Stack</th></tr>
<tr><th align='center' bgcolor='#eeeeec'>#</th><th align='left' bgcolor='#eeeeec'>Time</th><th align='left' bgcolor='#eeeeec'>Memory</th><th align='left' bgcolor='#eeeeec'>Function</th><th align='left' bgcolor='#eeeeec'>Location</th></tr>
<tr><td bgcolor='#eeeeec' align='center'>1</td><td bgcolor='#eeeeec' align='center'>0.0463</td><td bgcolor='#eeeeec' align='right'>1624776</td><td bgcolor='#eeeeec'>System->__destruct(  )</td><td title='C:\xampp\htdocs\dexlene-framework\System\system.php' bgcolor='#eeeeec'>..\system.php<b>:</b>0</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>2</td><td bgcolor='#eeeeec' align='center'>0.0465</td><td bgcolor='#eeeeec' align='right'>1624944</td><td bgcolor='#eeeeec'>My_smarty->view_tpl(  )</td><td title='C:\xampp\htdocs\dexlene-framework\System\system.php' bgcolor='#eeeeec'>..\system.php<b>:</b>32</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>3</td><td bgcolor='#eeeeec' align='center'>0.0465</td><td bgcolor='#eeeeec' align='right'>1625016</td><td bgcolor='#eeeeec'>Smarty_Internal_TemplateBase->display(  )</td><td title='C:\xampp\htdocs\dexlene-framework\Lib\Smarty.php' bgcolor='#eeeeec'>..\Smarty.php<b>:</b>29</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>4</td><td bgcolor='#eeeeec' align='center'>0.0466</td><td bgcolor='#eeeeec' align='right'>1627176</td><td bgcolor='#eeeeec'>Smarty_Internal_TemplateBase->fetch(  )</td><td title='C:\xampp\htdocs\dexlene-framework\Lib\sysplugins\smarty_internal_templatebase.php' bgcolor='#eeeeec'>..\smarty_internal_templatebase.php<b>:</b>394</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>5</td><td bgcolor='#eeeeec' align='center'>0.2971</td><td bgcolor='#eeeeec' align='right'>3536440</td><td bgcolor='#eeeeec'>content_552d0b26768d19_43691024(  )</td><td title='C:\xampp\htdocs\dexlene-framework\Lib\sysplugins\smarty_internal_templatebase.php' bgcolor='#eeeeec'>..\smarty_internal_templatebase.php<b>:</b>188</td></tr>
</table></font>
                </tbody>
            </table>
        </div>       
    </div>
</div>
<div class="row">
    <div class="col-lg-6" style="line-height: 6;">
        <button type="button" class="btn btn-lg btn-default">Novo usuário</button>
        <button type="button" class="btn btn-lg btn-default">Grupos</button>
    </div>
    <div class="col-lg-6" style="text-align: right;">
        <br />
<font size='1'><table class='xdebug-error xe-notice' dir='ltr' border='1' cellspacing='0' cellpadding='1'>
<tr><th align='left' bgcolor='#f57900' colspan="5"><span style='background-color: #cc0000; color: #fce94f; font-size: x-large;'>( ! )</span> Notice: Undefined index: paginator in C:\xampp\htdocs\dexlene-framework\Lib\sysplugins\smarty_internal_templatebase.php(157) : eval()'d code on line <i>106</i></th></tr>
<tr><th align='left' bgcolor='#e9b96e' colspan='5'>Call Stack</th></tr>
<tr><th align='center' bgcolor='#eeeeec'>#</th><th align='left' bgcolor='#eeeeec'>Time</th><th align='left' bgcolor='#eeeeec'>Memory</th><th align='left' bgcolor='#eeeeec'>Function</th><th align='left' bgcolor='#eeeeec'>Location</th></tr>
<tr><td bgcolor='#eeeeec' align='center'>1</td><td bgcolor='#eeeeec' align='center'>0.0463</td><td bgcolor='#eeeeec' align='right'>1624776</td><td bgcolor='#eeeeec'>System->__destruct(  )</td><td title='C:\xampp\htdocs\dexlene-framework\System\system.php' bgcolor='#eeeeec'>..\system.php<b>:</b>0</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>2</td><td bgcolor='#eeeeec' align='center'>0.0465</td><td bgcolor='#eeeeec' align='right'>1624944</td><td bgcolor='#eeeeec'>My_smarty->view_tpl(  )</td><td title='C:\xampp\htdocs\dexlene-framework\System\system.php' bgcolor='#eeeeec'>..\system.php<b>:</b>32</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>3</td><td bgcolor='#eeeeec' align='center'>0.0465</td><td bgcolor='#eeeeec' align='right'>1625016</td><td bgcolor='#eeeeec'>Smarty_Internal_TemplateBase->display(  )</td><td title='C:\xampp\htdocs\dexlene-framework\Lib\Smarty.php' bgcolor='#eeeeec'>..\Smarty.php<b>:</b>29</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>4</td><td bgcolor='#eeeeec' align='center'>0.0466</td><td bgcolor='#eeeeec' align='right'>1627176</td><td bgcolor='#eeeeec'>Smarty_Internal_TemplateBase->fetch(  )</td><td title='C:\xampp\htdocs\dexlene-framework\Lib\sysplugins\smarty_internal_templatebase.php' bgcolor='#eeeeec'>..\smarty_internal_templatebase.php<b>:</b>394</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>5</td><td bgcolor='#eeeeec' align='center'>0.2971</td><td bgcolor='#eeeeec' align='right'>3536440</td><td bgcolor='#eeeeec'>content_552d0b26768d19_43691024(  )</td><td title='C:\xampp\htdocs\dexlene-framework\Lib\sysplugins\smarty_internal_templatebase.php' bgcolor='#eeeeec'>..\smarty_internal_templatebase.php<b>:</b>188</td></tr>
</table></font>
<br />
<font size='1'><table class='xdebug-error xe-notice' dir='ltr' border='1' cellspacing='0' cellpadding='1'>
<tr><th align='left' bgcolor='#f57900' colspan="5"><span style='background-color: #cc0000; color: #fce94f; font-size: x-large;'>( ! )</span> Notice: Trying to get property of non-object in C:\xampp\htdocs\dexlene-framework\Lib\sysplugins\smarty_internal_templatebase.php(157) : eval()'d code on line <i>106</i></th></tr>
<tr><th align='left' bgcolor='#e9b96e' colspan='5'>Call Stack</th></tr>
<tr><th align='center' bgcolor='#eeeeec'>#</th><th align='left' bgcolor='#eeeeec'>Time</th><th align='left' bgcolor='#eeeeec'>Memory</th><th align='left' bgcolor='#eeeeec'>Function</th><th align='left' bgcolor='#eeeeec'>Location</th></tr>
<tr><td bgcolor='#eeeeec' align='center'>1</td><td bgcolor='#eeeeec' align='center'>0.0463</td><td bgcolor='#eeeeec' align='right'>1624776</td><td bgcolor='#eeeeec'>System->__destruct(  )</td><td title='C:\xampp\htdocs\dexlene-framework\System\system.php' bgcolor='#eeeeec'>..\system.php<b>:</b>0</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>2</td><td bgcolor='#eeeeec' align='center'>0.0465</td><td bgcolor='#eeeeec' align='right'>1624944</td><td bgcolor='#eeeeec'>My_smarty->view_tpl(  )</td><td title='C:\xampp\htdocs\dexlene-framework\System\system.php' bgcolor='#eeeeec'>..\system.php<b>:</b>32</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>3</td><td bgcolor='#eeeeec' align='center'>0.0465</td><td bgcolor='#eeeeec' align='right'>1625016</td><td bgcolor='#eeeeec'>Smarty_Internal_TemplateBase->display(  )</td><td title='C:\xampp\htdocs\dexlene-framework\Lib\Smarty.php' bgcolor='#eeeeec'>..\Smarty.php<b>:</b>29</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>4</td><td bgcolor='#eeeeec' align='center'>0.0466</td><td bgcolor='#eeeeec' align='right'>1627176</td><td bgcolor='#eeeeec'>Smarty_Internal_TemplateBase->fetch(  )</td><td title='C:\xampp\htdocs\dexlene-framework\Lib\sysplugins\smarty_internal_templatebase.php' bgcolor='#eeeeec'>..\smarty_internal_templatebase.php<b>:</b>394</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>5</td><td bgcolor='#eeeeec' align='center'>0.2971</td><td bgcolor='#eeeeec' align='right'>3536440</td><td bgcolor='#eeeeec'>content_552d0b26768d19_43691024(  )</td><td title='C:\xampp\htdocs\dexlene-framework\Lib\sysplugins\smarty_internal_templatebase.php' bgcolor='#eeeeec'>..\smarty_internal_templatebase.php<b>:</b>188</td></tr>
</table></font>

    </div>
</div>
<!-- /.row --><?php }} ?>
