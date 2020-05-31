<?php
require_once (dirname(__DIR__).'/vendor/autoload.php');
require_once ('utils.php');

use Medoo\Medoo;
function conectaDB() {
    if(!isProduction()) {
        $dotenv = Dotenv\Dotenv::createImmutable(dirname(__DIR__));
        $dotenv->load();
        $DB_HOST = getenv('DB_HOST');
        $DB_NAME = getenv('DB_NAME');
        $DB_USERNAME = getenv('DB_USERNAME');
        $DB_PASSWORD =getenv('DB_PASSWORD');
    } else {
        $vars = prepareEnvFiles000WEbHosting();
        $DB_HOST = $vars['DB_HOST'];
        $DB_NAME = $vars['DB_NAME'];
        $DB_USERNAME = $vars['DB_USERNAME'];
        $DB_PASSWORD =$vars['DB_PASSWORD'];
    }
  
	$conexao = new medoo([
	'database_type' => 'mysql',
	'database_name' => $DB_NAME,
	'server' => $DB_HOST,
    'username' => $DB_USERNAME,
    'password' => $DB_PASSWORD,
	'charset' => 'utf8'
	]);
    return $conexao;
}
