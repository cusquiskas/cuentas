<?php
/* creamos la estructura de datos que están en momória */
if (!isset($_SESSION['data'])) $_SESSION['data'] = array();
if (!isset($_SESSION['data']['user'])) $_SESSION['data']['user'] = array();
if (!isset($_SESSION['data']['enlace'])) $_SESSION['data']['enlace'] = array();
if (!isset($_SESSION['data']['buscar'])) $_SESSION['data']['buscar'] = array();
if (!isset($_SESSION['data']['buscar']['movimiento'])) $_SESSION['data']['buscar']['movimiento'] = array();
if (!isset($_SESSION['data']['estadistica'])) $_SESSION['data']['estadistica'] = array();

/* inicializamos la variable que contendrá los errores */
$GLOBALS['__listaExcepciones'] = array();
?>