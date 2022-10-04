<?php
require_once 'requires.php';

$sql = 'INSERT INTO contratos (id, cliente_id, plan_id, instal_id, personal_id, fecha, zona_id, observacion ) VALUES (?, ?, ?, ?, ?, ?, ?, ?)';

$pdo->exe($sql, myPDO_RET_RES, [
	$_POST['id'], $_POST['cliente_id'], $_POST['plan_id'], $_POST['instal_id'], $_POST['personal_id'], $_POST['fecha'], $_POST['zona_id'], $_POST['observacion']],
	[
		'STR', 'STR', 'STR', 'STR', 'STR', 'STR', 'STR', 'STR',
	]
);
ir('contratos.php');