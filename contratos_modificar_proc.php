<?php
require_once 'requires.php';

$sql = 'UPDATE contratos SET cliente_id=?, plan_id=?, instal_id=?, personal_id=?, fecha=?, zona_id=?, observacion=? WHERE id=?';

$pdo->exe($sql, myPDO_RET_RES, [
	$_POST['cliente_id'], $_POST['plan_id'], $_POST['instal_id'], $_POST['personal_id'], $_POST['fecha'], $_POST['zona_id'], $_POST['observacion'], $_POST['id']], 
	[
		'STR', 'STR', 'STR', 'STR', 'STR', 'STR', 'STR', 'STR',
	]
);
ir('contratos.php');