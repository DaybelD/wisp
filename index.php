<?php
require_once 'requires.php';
require_once 'forms/frm_login.php';

if (isset($_GET['error'])) {
	$showalert = true;
} else {
	$showalert = false;
}

$smarty->assign('showalert', $showalert);
$smarty->assign('frm_login', $frm_login);
$smarty->display('index.tpl');
