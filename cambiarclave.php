<?php
require_once 'requires.php';
$id = $_GET['id'];

require_once 'forms/usuarios_cambioclave.php';

$smarty->assign('cambiarclave', $cambiarclave);
$smarty->display('cambiarclave.tpl');