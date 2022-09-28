<?php
require_once 'requires.php';
require_once 'forms/agregarcli.php';

$smarty->assign('agregarcli', $agregarcli);
$smarty->display('agregarcliente.tpl');