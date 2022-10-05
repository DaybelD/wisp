<?php
require_once 'requires.php';
$permiso = ['CLIENTE', 'ADMIN', 'USUARIO'];

session_start();

$smarty->display('principal.tpl');
