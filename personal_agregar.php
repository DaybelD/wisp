<?php
require_once 'requires.php';
require_once 'forms/agregarpers.php';

$smarty->assign('agregarpers', $agregarpers);
$smarty->display('agregarpersonal.tpl');