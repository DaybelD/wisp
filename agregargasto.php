<?php
require_once 'requires.php';
require_once 'forms/agregargasto.php';

$smarty->assign('agregargas', $agregargas);
$smarty->display('agregargasto.tpl');