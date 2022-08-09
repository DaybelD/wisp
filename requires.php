<?php
require_once 'configs/debug.php';
require_once 'vendor/smarty/smarty/libs/Smarty.class.php';
$smarty = new Smarty();
require_once 'vendor/FH3/class.FormHandler.php';
fh_conf('FH_FHTML_DIR', 'FH3/FHTML/');