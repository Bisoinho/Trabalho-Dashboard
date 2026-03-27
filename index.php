<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Fortnite News Brasil</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Segoe UI', sans-serif;
            background:
                radial-gradient(circle at top, rgba(106, 17, 203, 0.35), transparent 35%),
                radial-gradient(circle at bottom right, rgba(37, 117, 252, 0.25), transparent 30%),
                linear-gradient(135deg, #0f0c29, #302b63, #24243e);
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            padding: 20px;
        }

        .login-container {
            width: 100%;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .login-box {
            width: 100%;
            max-width: 430px;
            padding: 40px 32px;
            border-radius: 24px;
            background: rgba(24, 24, 40, 0.88);
            backdrop-filter: blur(12px);
            border: 1px solid rgba(255, 255, 255, 0.08);
            box-shadow: 0 20px 50px rgba(0, 0, 0, 0.35);
            color: white;
        }

        .topo-login {
            text-align: center;
            margin-bottom: 28px;
        }

        .icone-login {
            width: 74px;
            height: 74px;
            margin: 0 auto 16px;
            border-radius: 18px;
            display: flex;
            justify-content: center;
            align-items: center;
            background: linear-gradient(135deg, #6a11cb, #2575fc);
            box-shadow: 0 10px 25px rgba(37, 117, 252, 0.28);
        }

        .icone-login i {
            font-size: 30px;
            color: white;
        }

        .topo-login h1 {
            font-size: 2rem;
            margin-bottom: 8px;
            color: #ffffff;
        }

        .subtitulo {
            color: #cfcfff;
            font-size: 0.95rem;
            line-height: 1.5;
        }

        .input-group {
            margin-bottom: 20px;
        }

        .input-group label {
            display: block;
            margin-bottom: 8px;
            font-size: 0.95rem;
            color: #f1f1f1;
            font-weight: 600;
        }

        .input-box {
            display: flex;
            align-items: center;
            gap: 10px;
            background: rgba(255, 255, 255, 0.05);
            border: 1px solid rgba(255,255,255,0.08);
            border-radius: 12px;
            padding: 0 14px;
            transition: 0.3s ease;
        }

        .input-box i {
            color: #b9a8ff;
            font-size: 15px;
        }

        .input-box input {
            width: 100%;
            padding: 14px 0;
            border: none;
            background: transparent;
            color: white;
            font-size: 1rem;
            outline: none;
        }

        .input-box input::placeholder {
            color: #bdbddb;
        }

        .input-box:focus-within {
            border-color: #7c3aed;
            box-shadow: 0 0 0 4px rgba(124, 58, 237, 0.18);
        }

        .opcoes-login {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 22px;
            font-size: 0.9rem;
            gap: 10px;
        }

        .opcoes-login label {
            color: #d6d6f5;
            display: flex;
            align-items: center;
            gap: 6px;
            cursor: pointer;
        }

        .opcoes-login a {
            color: #b9a8ff;
            text-decoration: none;
            transition: 0.3s ease;
        }

        .opcoes-login a:hover {
            color: #ffffff;
            text-decoration: underline;
        }

        button {
            width: 100%;
            padding: 14px;
            border: none;
            border-radius: 12px;
            background: linear-gradient(90deg, #6a11cb, #2575fc);
            color: white;
            font-size: 1rem;
            font-weight: 700;
            cursor: pointer;
            transition: 0.3s ease;
            box-shadow: 0 10px 22px rgba(37, 117, 252, 0.25);
        }

        button:hover {
            background: linear-gradient(90deg, #7b2ff7, #00c6ff);
            transform: translateY(-2px);
        }

        .rodape-login {
            text-align: center;
            margin-top: 22px;
            font-size: 0.85rem;
            color: #a9a9cc;
        }

        @media (max-width: 480px) {
            .login-box {
                padding: 30px 22px;
                border-radius: 20px;
            }

            .topo-login h1 {
                font-size: 1.7rem;
            }

            .opcoes-login {
                flex-direction: column;
                align-items: flex-start;
            }
        }
    </style>
</head>
<body>

    <div class="login-container">
        <div class="login-box">
            <div class="topo-login">
                <div class="icone-login">
                    <i class="fa-solid fa-gamepad"></i>
                </div>
                <h1>Login</h1>
                <p class="subtitulo">Entre no painel do Fortnite News Brasil e continue gerenciando seu conteúdo.</p>
            </div>

            <form action="inicio.php" method="POST">
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