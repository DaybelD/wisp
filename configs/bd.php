<?php

$bd = bd_conn([
	'host' => 'localhost',
	'login' => 'inspector',
	'pass' => 'inspector',
	'bd' => 'inspector',
]);

/**
 * Crea conexión con base de datos y devuelve un objeto
 */
function bd_conn($datos_bd) {
	$m = new mysqli
		(
		$datos_bd['host'],
		$datos_bd['login'],
		$datos_bd['pass'],
		$datos_bd['bd']
	);

	if ($m->connect_errno) {
		sqlerror('Falló conexión:', $mysqli->connect_error);
	}
	/**
	 * Establece la codificación de las consultas a la bd.
	 */
	$m->set_charset('utf8');
	return $m;
}

function sql($m, $sql) {
	$resultado = $m->query($sql);
	if ($resultado === FALSE) {
		sqlerror($sql, $m->error);
	}
	return $resultado;
}

function sql2array($m, $sql) {
	if (!$res = $m->query($sql)) {
		sqlerror($sql, $m->error);
	}

	$r = array();
	while ($temp = $res->fetch_array(MYSQLI_ASSOC)) {
		$r[] = $temp;
	}
	return $r;
}

function sql2options($m, $sql) {
	if (!$res = $m->query($sql)) {
		sqlerror($sql, $m->error);
	}

	$r = [];
	while ($l = $res->fetch_array(MYSQLI_NUM)) {
		$r[$l[0]] = $l[1];
	}
	return $r;
}

function sql2value($m, $sql) {
	if (!$res = $m->query($sql)) {
		sqlerror($sql, $m->error);
	}

	$p = $res->fetch_array(MYSQLI_NUM);
	if ($p != null) {
		return $p[0];
	} else {
		return '';
	}
}

function sql2contar($m, $sql) {
	if (!$res = $m->query($sql)) {
		sqlerror($sql, $m->error);
	}

	$r = array();
	while ($temp = $res->fetch_array(MYSQLI_ASSOC)) {
		if (isset($r[$temp['calledstation']])) {
			$r[$temp['calledstation']]['n'] += $temp['n'];
		} else {
			$r[$temp['calledstation']] = $temp;
		}
	}
	return $r;
}

function sqlerror($sql, $error) {
	echo "=========== ERROR ===========\n";
	echo $sql, "\n", $error;
	echo "\n=============================\n";
	#vq(debug_backtrace());
	exit();
}