<?php

function ir($direccion) {
	header("Location: $direccion");
	exit();
}

function smt_script($archivo) {
	return "<script>\n" . file_get_contents($archivo) . "\n</script>";
}

function verificar_sesion($rol, $modulo) {
	return true;
}
