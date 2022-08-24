<?php
require_once 'requires.php';
require_once 'forms/agregarcompra.php';

$smarty->assign('agregarcom', $agregarcom);
$smarty->display('agregarcompra.tpl');