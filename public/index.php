<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once realpath('../vendor/autoload.php');

echo '1';

new \Integradora\Clases\Datos\Playera();

phpinfo();
