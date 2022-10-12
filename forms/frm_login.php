<?php

$frm_login = new FormHandler('frm_login', 'proc_index.php');

$frm_login->textField('Usuario', 'login', FH_STRING, null, 'placeholder="Usuario"');

$frm_login->passField('Clave', 'clave', FH_PASSWORD, null, 'placeholder="Clave"');

$frm_login->submitButton('Continuar', 'btn_continuar', 'btn-primary btn-sm mt-3');

$frm_login = $frm_login->flush(true);