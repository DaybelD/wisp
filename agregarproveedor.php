<?php
require_once 'requires.php';
require_once 'forms/agregarprov.php';

$smarty->assign('agregarprov', $agregarprov);
$smarty->display('agregarproveedor.tpl');