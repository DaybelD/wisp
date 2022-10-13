<?php
require_once 'requires.php';
session_start();
if (verificar_sesion($_SESSION['usuario']['rol_id'], 'Principal') == false) {
	ir('index.php');
}
$smarty->display('principal.tpl');
ver($_SESSION);