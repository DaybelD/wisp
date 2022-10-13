<?php
require_once 'requires.php';
require_once 'forms/personal_agregar.php';

$smarty->assign('agregarpers', $agregarpers);
$smarty->display('personal_agregar.tpl');