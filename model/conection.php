<?php

$link = mysql_connect('localhost', 'root', '')
    or die('No se pudo conectar: ' . mysql_error());

mysql_select_db('lp4') or die('No se pudo seleccionar la base de datos');

