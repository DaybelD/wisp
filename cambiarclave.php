<?php
require_once 'requires.php';
require_once 'forms/cambiarclave.php';

$smarty->assign('cambiarclave', $cambiarclave);
$smarty->display('cambiarclave.tpl');