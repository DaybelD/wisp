<?php

function smt_script($archivo) {
	return "<script>\n" . file_get_contents($archivo) . "\n</script>";
}