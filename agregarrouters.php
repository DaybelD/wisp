<?php
require_once 'requires.php';
require_once 'forms/agregarrout.php';

$smarty->assign('agregarrout', $agregarrout);
$smarty->display('agregarrouters.tpl');