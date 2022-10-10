<?php
require_once 'requires.php';

require_once 'forms/planes_modificar.php';

$smarty->assign('modplan', $modplan);
$smarty->display('planes_modificar.tpl');