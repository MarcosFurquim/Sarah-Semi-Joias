<?php
require_once (dirname(__DIR__).'/vendor/autoload.php');
$dotenv = Dotenv\Dotenv::createImmutable(dirname(__DIR__));
$dotenv->load();
use Medoo\Medoo;
function conectaDB() {
	$conexao = new medoo([
	'database_type' => 'mysql',
	'database_name' => getenv('DB_NAME'),
	'server' => getenv('DB_HOST'),
    'username' => getenv('DB_USERNAME'),
    'password' => getenv('DB_PASSWORD'),
	'charset' => 'utf8'
	]);
    return $conexao;
}
