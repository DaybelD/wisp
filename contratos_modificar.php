<?php
require_once 'requires.php';
$id = $_GET['id'];

require_once 'forms/contratos_modificar.php';

$smarty->assign('modcontr', $modcontr);
$smarty->display('contratos_modificar.tpl');