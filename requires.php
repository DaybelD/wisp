<?php
require_once 'configs/debug.php';
require_once 'configs/funciones.php';
$CFG = parse_ini_file('./configs/config.php');
require_once 'configs/mypdo.php';
$pdo = new myPDO($CFG['host'], $CFG['bd'], $CFG['user'], $CFG['pass']);
require_once 'vendor/smarty/smarty/libs/Smarty.class.php';
$smarty = new Smarty();
require_once 'vendor/FH3/class.FormHandler.php';
fh_conf('FH_FHTML_DIR', 'FH3/FHTML/');