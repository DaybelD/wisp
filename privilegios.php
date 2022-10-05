<?php
require_once 'requires.php';
$modulo = 'Ajustes_Privilegios';

$modulos=[ 
'Ajustes_Privilegios',
'Ajustes_Usuarios',
'Almacén_Inventario',
'Almacén_Productos',
'Almacén_Routers',
'Clientes',
'Contratos',
'Facturación',
'Finanzas_Compras',
'Finanzas_Formas de pago',
'Finanzas_Gastos',
'Finanzas_Pagos',
'Personal',
'Proveedores',
'Servicios_Instalaciones',
'Servicios_Planes',
];

$privilegios = array_values($pdo->enum('usuarios', 'nivel'));

$smarty->assign('modulos', $modulos);
$smarty->assign('privilegios', $privilegios);
$smarty->assign('npriv', count($privilegios));
$smarty->display('privilegios.tpl');