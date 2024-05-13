<?php

// Informações de conexão
$host = "localhost";
$port = "5432";
$dbname = "polybalas"; // Nome do banco de dados
$user = "postgres";
$password = "root1234"; // Senha do banco de dados

try {
    // Tentativa de conexão
    $conn = new PDO("pgsql:host=$host;port=$port;dbname=$dbname;user=$user;password=$password");

    // Define para que o PDO lance exceções em caso de erro
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Conexão estabelecida com sucesso, sem mensagem
} catch(PDOException $e) {
    // Erro na conexão, sem mensagem
    die();
}
?>
