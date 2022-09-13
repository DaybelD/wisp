<?php
require_once 'requires.php';
$id = $_GET['id'];

require_once 'forms/modificaruser.php';

$smarty->assign('modificaruser', $modificaruser);
$smarty->display('modificarusuario.tpl');