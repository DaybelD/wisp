<?php
require_once 'requires.php';
require_once 'forms/agregarplan.php';

$smarty->assign('agregarplan', $agregarplan);
$smarty->display('agregarplan.tpl');