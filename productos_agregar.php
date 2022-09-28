<?php
require_once 'requires.php';
require_once 'forms/agregarproduc.php';

$smarty->assign('agregarproduc', $agregarproduc);
$smarty->display('agregarproductos.tpl');