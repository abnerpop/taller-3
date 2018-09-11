<?php
require ('models/class.Acceso.php');
$template = new Smarty();
$acesso = new Acceso();




$template->display('views/login.tpl');
$template->display('views/menu.tpl');