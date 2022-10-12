<?php
require_once 'requires.php';
require_once 'forms/personal_modificar.php';

$smarty->assign('modpers', $modpers);
$smarty->display('personal_modificar.tpl');