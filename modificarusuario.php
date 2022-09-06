<?php
require_once 'requires.php';
require_once 'forms/modificaruser.php';

$smarty->assign('modificaruser', $modificaruser);
$smarty->display('modificarusuario.tpl');