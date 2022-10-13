<?php
require_once 'requires.php';
require_once 'forms/usuarios_agregar.php';

$smarty->assign('agregaruser', $agregaruser);
$smarty->display('usuarios_agregar.tpl');