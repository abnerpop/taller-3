<?php /* Smarty version Smarty-3.1.21, created on 2018-09-11 04:28:18
         compiled from "views\login.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2445b97279f6a5002-06779662%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e3f1423cc5f115dae91ae566521d9cfc783cca5b' => 
    array (
      0 => 'views\\login.tpl',
      1 => 1536632895,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2445b97279f6a5002-06779662',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5b97279f6e6955_96554525',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b97279f6e6955_96554525')) {function content_5b97279f6e6955_96554525($_smarty_tpl) {?><!DOCTYPE html>
<html lang="es">
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="css/menu.min.css">
	<link rel="stylesheet" type="text/css" href="css/universal.min.css">
	</head>
	<body>

<form class="formulario" action="index.php?accion=login" method="post">

	
<div class="form-wrap">
	<h3>Login</h3><br><br>
<label for="">Usuario</label><br>
<input type="text" name="usuario" id="usuario"value=""><br><br>
<label for="">Contrseña</label><br>
<input type="text" name="password" id="password" value=""><br><br><br>

<input type="submit" name="" id="button" value="Iniciar Session">
</div>

</form>


	</body>
</html>
<?php }} ?>
