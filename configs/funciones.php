<?php

function ir($direccion) {
	header("Location: $direccion");
	exit();
}