<?php
require ('models/class.Acceso.php');
$template = new Smarty();
$acesso = new Acceso();




$acesso->login( $_POST['usuario'], $_POST['password']);


$template->display('views/menu.tpl');