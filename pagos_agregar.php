<?php
require_once 'requires.php';
require_once 'forms/agregarpago.php';

$smarty->assign('agregarpag', $agregarpag);
$smarty->display('agregarpago.tpl');