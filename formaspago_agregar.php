<?php
require_once 'requires.php';
require_once 'forms/agregarformapago.php';

$smarty->assign('agregarfrpago', $agregarfrpago);
$smarty->display('agregarformapago.tpl');