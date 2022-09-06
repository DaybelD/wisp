<?php

$cambiarclave = new FormHandler('', '');

$cambiarclave->passField('Clave actual', 'claveactual', FH_STRING, '', 'placeholder="Clave"');

$cambiarclave->passField('Nueva clave', 'clave', FH_STRING, '', 'placeholder="Clave"');

$cambiarclave->passField('Confirme la nueva clave', 'confirmeclave', FH_STRING);

$cambiarclave->submitButton('Cambiar', 'btn_continuar', 'btn-primary btn-sm');

$cambiarclave= $cambiarclave->flush(true);