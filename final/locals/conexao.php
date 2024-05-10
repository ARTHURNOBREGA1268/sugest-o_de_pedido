<?php

// Informações de conexão
$host = "localhost";
$port = "5432";
$dbname = "polybalas"; // Nome do banco de dados
$user = "postgres";
$password = "1234mud"; // Senha do banco de dados

try {
    // Tentativa de conexão
    $conn = new PDO("pgsql:host=$host;port=$port;dbname=$dbname;user=$user;password=$password");

    // Define para que o PDO lance exceções em caso de erro
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    echo "Conexão efetuada com sucesso!";
} catch(PDOException $e) {
    die("Erro na conexão: " . $e->getMessage());
}
?>