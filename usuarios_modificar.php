<?php
require_once 'requires.php';
$id = $_GET['id'];

require_once 'forms/usuarios_modificar.php';

$smarty->assign('modificaruser', $modificaruser);
$smarty->display('usuarios_modificar.tpl');