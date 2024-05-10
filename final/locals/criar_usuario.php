<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// Verifica se os dados foram submetidos
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Inclui o arquivo de conexão com o banco de dados
    include 'conexão.php';

    try {
        // Prepara a instrução SQL para inserção dos dados
        $stmt = $conn->prepare("INSERT INTO pcusuari (nome, email, cpf, senha) VALUES (:nome, :email, :cpf, :senha)");

        // Bind dos parâmetros
        $stmt->bindParam(':nome', $_POST['nome']);
        $stmt->bindParam(':email', $_POST['email']);
        $stmt->bindParam(':cpf', $_POST['cpf']);
        $stmt->bindParam(':senha', $_POST['senha']);

        // Executa a instrução SQL
        $stmt->execute();

        // Verifica se a inserção foi bem-sucedida
        if ($stmt->rowCount() > 0) {
            echo "Cadastro realizado com sucesso!";
        } else {
            echo "Erro ao cadastrar usuário.";
        }
    } catch (PDOException $e) {
        echo "Erro ao cadastrar usuário: " . $e->getMessage();
    }
}
?>
