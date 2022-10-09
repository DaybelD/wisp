<?php
require_once 'requires.php';
$id = $_GET['id'];

require_once 'forms/clientes_modificar.php';

$smarty->assign('modcli', $modcli);
$smarty->display('clientes_modificar.tpl');