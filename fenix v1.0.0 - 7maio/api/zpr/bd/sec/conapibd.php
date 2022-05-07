<?php
define('HBBDHST', '127.0.0.1');
define('HBBDUSR', 'usr_sistema');
define('HBBDPSS', 'localhost');
define('HBBDNM', 'app_fenix');

$conexao = mysqli_connect(HBBDHST, HBBDUSR, HBBDPSS, HBBDNM) or die ('Servidor não conectado - [Código 910].');

