<!DOCTYPE html>
<html>

<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Tela de Login</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='assets/main.css'>
    <link rel="stylesheet" href="//use.fontawesome.com/releases/v5.0.7/css/all.css">
</head>

<body>
    <div id="container" class="container">
        <!-- FORM SECTION -->
        <div class="row">
            <!-- Formulario de Criar conta -->
            <div class="col align-items-center flex-col sign-up">
                <div class="form-wrapper align-items-center">
                        <div class="input-group">
                            <i class='fa fa-user'></i>
                            <input id="nameInput" type="text" name="nome" placeholder="Usuario">
                        </div>
                        <div class="input-group">
                            <i class='fa fa-envelope'></i>
                            <input id="emailInput" type="email" name="email" placeholder="E-mail">
                        </div>
                        <div class="input-group">
                            <i class='fa fa-user'></i>
                            <input id="cpfInput" type="text" name="cpf" placeholder="CPF" maxlength="11"
                                oninput="validateAndFormatCPF('cpfInput')">
                        </div>
                        <div class="input-group">
                            <i class='fa fa-lock'></i>
                            <input type="password" name="senha" placeholder="Senha">
                        </div>
                        <button type="submit">
                            Criar Conta
                        </button>
                        <p>
                            <span>
                                Já tem uma Conta
                            </span>
                            <b onclick="toggle()" class="pointer">
                                Entre Aqui
                            </b>
                        </p>
                    </form>
                </div>
            </div>
            <!-- Fim do formulário de registro-->

            <!-- Formulário de logar -->
            <div class="col align-items-center flex-col sign-in">
                <div class="form-wrapper align-items-center">
                    <div class="form sign-in">
                        <div class="input-group">
                            <i class='fa fa-user'></i>
                            <input type="text" placeholder="Usuário">
                        </div>
                        <div class="input-group">
                            <i class='fa fa-lock'></i>
                            <input type="password" placeholder="Senha">
                        </div>
                        <button>
                            Entrar
                        </button>
                        <p>
                            <b onclick="showForgotPassword()">Esqueceu sua Senha?</b>
                        </p>
                        <p>
                            <span>
                                Não tem conta?
                            </span>
                            <b onclick="toggle()" class="pointer">
                                CRIE SUA CONTA AQUI AQUI
                            </b>
                        </p>
                    </div>
                </div>
                <div class="form-wrapper">

                </div>
            </div>
            <!-- Fim do formulário de logar-->
        </div>

        <!-- Animação-->
        <div class="row content-row">
            <!-- Texto da Animação bem vindo-->
            <div class="col align-items-center flex-col">
                <div class="text sign-in">
                    <h2>
                        Bem Vindo!
                    </h2>
                </div>
                <div class="img sign-in">
                    <img src="images/login.png">
                </div>
            </div>
            <!-- fim do conteudo-->

            <!-- Animação de criação de conta-->
            <div class="col align-items-center flex-col">
                <div class="text sign-up">
                    <h2>
                        Criar Conta
                    </h2>
                </div>
                <div class="img sign-up">
                    <img src="images/criarconta.png">
                </div>
            </div>
        </div>
    </div>

    <div id="forgotPasswordModal" class="modal">
        <span class="close" onclick="closeForgotPasswordModal()">&times;</span>
        <div class="modal-content">
            <div class="input-container">
                <div class="input-group">
                    <i class='fa fa-user'></i>
                    <input type="text" placeholder="Nome" pattern="[A-Z ]*" title="Digite apenas letras maiúsculas">
                </div>
            </div>
        </div>
    </div>

    <script src="scripts/main.js"></script>
</body>

</html>