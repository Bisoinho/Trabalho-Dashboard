<?php
session_start();

if (isset($_SESSION['logado']) && $_SESSION['logado'] === true) {
    header("Location: inicio.php");
    exit;
}

$erro = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $usuario = $_POST['usuario'] ?? '';
    $senha = $_POST['senha'] ?? '';

    if ($usuario === "Bisoinho" && $senha === "2401") {
        $_SESSION['logado'] = true;
        $_SESSION['usuario'] = $usuario;

        header("Location: inicio.php");
        exit;
    } else {
        $erro = "Usuário ou senha inválidos!";
    }
}
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Fortnite News Brasil</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <link rel="stylesheet" href="css/common.css">
    <link rel="stylesheet" href="css/login.css">
    <link rel="stylesheet" href="css/responsivo.css">
</head>
<body class="login-page">

    <div class="login-container">
        <div class="login-box">
            <div class="topo-login">
                <div class="icone-login">
                    <i class="fa-solid fa-gamepad"></i>
                </div>
                <h1>Login</h1>
                <p class="subtitulo">Entre no painel do Fortnite News Brasil e continue gerenciando seu conteúdo.</p>
            </div>

            <?php if (!empty($erro)): ?>
                <div class="erro-login"><?php echo htmlspecialchars($erro); ?></div>
            <?php endif; ?>

            <form method="POST">
                <div class="input-group">
                    <label for="usuario">Usuário</label>
                    <div class="input-box">
                        <i class="fa-solid fa-user"></i>
                        <input type="text" id="usuario" name="usuario" placeholder="Digite seu usuário" required>
                    </div>
                </div>

                <div class="input-group">
                    <label for="senha">Senha</label>
                    <div class="input-box">
                        <i class="fa-solid fa-lock"></i>
                        <input type="password" id="senha" name="senha" placeholder="Digite sua senha" required>
                    </div>
                </div>

                <div class="opcoes-login">
                    <label><input type="checkbox"> Lembrar-me</label>
                    <a href="#">Esqueci a senha</a>
                </div>

                <button type="submit">Entrar no painel</button>
            </form>

            <p class="rodape-login">Fortnite News Brasil • Painel administrativo</p>
        </div>
    </div>

</body>
</html>