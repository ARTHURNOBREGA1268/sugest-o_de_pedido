<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// Define uma variável para armazenar a mensagem de erro
$error_message = "";

// Verifica se os dados foram submetidos
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Inclui o arquivo de conexão com o banco de dados
    include 'conexao.php';

    try {
        // Consulta SQL para verificar as credenciais do usuário
        $stmt = $conn->prepare("SELECT * FROM pcusuario WHERE email = :email");
        
        // Bind do parâmetro
        $stmt->bindParam(':email', $_POST['email']);
        
        // Executa a consulta SQL
        $stmt->execute();
        
        // Verifica se encontrou um usuário com o email fornecido
        if ($stmt->rowCount() > 0) {
            // Obtém os dados do usuário
            $usuario = $stmt->fetch(PDO::FETCH_ASSOC);
            
            // Verifica se a senha fornecida corresponde à senha armazenada
            if ($_POST['senha'] === $usuario['senha']) {
                // Usuário autenticado com sucesso
                // Redireciona para o link fornecido
                header("Location: https://www.youtube.com/live/xFv3k930_0g?si=mcxrDXlFzheQku0a");
                exit; // Certifica-se de que o script não continua a ser executado após o redirecionamento
            } else {
                // Senha incorreta
                $error_message = "Senha incorreta.";
            }
        } else {
            // Usuário com o email fornecido não encontrado
            $error_message = "Email não encontrado.";
        }
    } catch (PDOException $e) {
        $error_message = "Erro ao realizar login: " . $e->getMessage();
    }
}

// Redireciona para a página de login após 1,5 segundos caso haja erro
if (!empty($error_message)) {
    header("refresh:1.5;url=http://localhost/final/index.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
        .error-container {
            text-align: center;
            margin-top: 50px;
        }
        .error-message {
            font-size: 35px;
        }
        .error-image {
            width: 250px;
        }
    </style>
</head>
<body>
    <?php if (!empty($error_message)): ?>
        <div class="error-container">
            <img src="erro.png" alt="Erro" class="error-image">
            <p class="error-message"><?php echo $error_message; ?></p>
        </div>
    <?php endif; ?>
</body>
</html>
