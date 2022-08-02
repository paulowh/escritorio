<?php

#caminhos absolutos
$dirInt="escritorio/";
define('DIRPAGE', "http://{$_SERVER['HTTP_HOST']}/{$dirInt}");

$bar=(substr($_SERVER['DOCUMENT_ROOT'],-1)=='/')?"":"/";
define('DIRREQ', "{$_SERVER['DOCUMENT_ROOT']}{$bar}{$dirInt}");

echo DIRPAGE.'<br>'.DIRREQ;

#Banco de dados
define('HOST', 'localhost');
define('DB', 'sistema');
define('USER', 'root');
define('PASS', '');

#Incluir Arquivo
include(DIRREQ.'lib/composer/vendor/autoload.php');