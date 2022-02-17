<?php
# carregando o arquivo
require 'vendor/autoload.php';
 
$dotenv = Dotenv\Dotenv::createUnsafeImmutable(__DIR__);
$dotenv->load();

echo '<h1>'.getenv('MENSAGEM_NO_INDEX').'</h1><hr>';


try
{
    # conexão com banco de dados
    $pdo = new PDO('mysql:host=' . getenv('MYSQL_HOST'). ';dbname=' . getenv('MYSQL_DATABASE') . ';port=' . getenv('MYSQL_PORT'), getenv('MYSQL_USER'), getenv('MYSQL_PASSWORD'));
    echo '<span style="color:green">Conexão com banco  de dados realizada com sucesso!</span>';
}
catch (Exception $e)
{
    echo '<span style="color:red">Configure seu banco de dados no arquivo .env</span>';
}

?>