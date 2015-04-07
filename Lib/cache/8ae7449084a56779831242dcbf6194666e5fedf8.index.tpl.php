<?php /*%%SmartyHeaderCode:192165512e97f9da845-49588503%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8ae7449084a56779831242dcbf6194666e5fedf8' => 
    array (
      0 => 'C:\\xampp\\htdocs\\BaseMVC-PHP\\Application\\Layout\\Config\\index.tpl',
      1 => 1427301124,
      2 => 'file',
    ),
    '939010a140c07bfc1796b6f3150ff57cf5e6e0cc' => 
    array (
      0 => 'C:\\xampp\\htdocs\\BaseMVC-PHP\\Application\\Layout\\Config\\head.tpl',
      1 => 1427301653,
      2 => 'file',
    ),
    'aa515e3a6abbee2dc4bde6d31e309e745a539cff' => 
    array (
      0 => 'C:\\xampp\\htdocs\\BaseMVC-PHP\\Application\\Layout\\Config\\body.tpl',
      1 => 1427301146,
      2 => 'file',
    ),
    '243a104d48b290f977b50ff6e100dd3e611e1bbe' => 
    array (
      0 => 'C:\\xampp\\htdocs\\BaseMVC-PHP\\Application\\Layout\\Config\\footer.tpl',
      1 => 1427298948,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '192165512e97f9da845-49588503',
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5512e97fb2dd95_24186367',
  'cache_lifetime' => 120,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5512e97fb2dd95_24186367')) {function content_5512e97fb2dd95_24186367($_smarty_tpl) {?><html>
<head>
    <meta charset="UTF-8"> 
    <title></title>
    <link rel="stylesheet" type="text/css" href="/BaseMVC-PHP/css/Layout/Config/style.css">
</head>
<body>

<form method="post">
  <h1>BANCO DE DADOS - MySQL</h1>
  <div class="inset">
  <p>
    <label for="email">HOST NAME</label>
    <input type="text" name="host" id="host">
  </p>
  <p>
    <label for="password">USERNAME</label>
    <input type="password" name="username" id="username">
  </p>
  <p>
    <label for="password">DATABASE NAME</label>
    <input type="password" name="dbname" id="dbname">
  </p>
  <p>
    <label for="password">PASSWORD</label>
    <input type="password" name="password" id="password">
  </p>
  </div>
  <p class="p-container">
    <input type="submit" name="go" id="go" value="Configurar">
  </p>
</form>

</body>
</html><?php }} ?>
