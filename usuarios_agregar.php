<?php
require_once 'requires.php';
require_once 'forms/agregaruser.php';

$smarty->assign('agregaruser', $agregaruser);
$smarty->display('usuarios_agregar.tpl');