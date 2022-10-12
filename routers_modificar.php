<?php
require_once 'requires.php';

require_once 'forms/routers_modificar.php';

$smarty->assign('modrout', $modrout);
$smarty->display('routers_modificar.tpl');