<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Gestão de Usuários</title>
    <link rel="stylesheet" href="dashboard.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
</head>
<body>

<div class="pagina">
    <div class="dashboard-container">
        <?php include 'menu.php'; ?>

        <main>
            <div class="header-content">
                <div class="header-title">
                    
    <h2>Gestão de Usuários</h2>

    <p>Visualize e gerencie as permissões dos usuários do sistema.</p>
</div>

<a href="cad-usuarios.php" class="btn-add"> <i class="fa-solid fa-plus"></i> Adicionar Usuário </a>
            </div>

            <div class="table-responsive">
                <table>
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nome</th>
                            <th>E-mail</th>
                            <th>Acesso</th>
                            <th>Status</th>
                            <th>Ações</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>01</td>
                            <td>Eric Freitas</td>
                            <td>eric@unifev.edu.br</td>
                            <td>Administrador</td>
                            <td><span class="badge ativo">Ativo</span></td>
                            <td>
                                <button class="btn-icon">
                                    <i class="fa-solid fa-pen"></i>
                                </button>
                            </td>
                        </tr>
                        <tr>
                            <td>02</td>
                            <td>Ana Souza</td>
                            <td>ana.souza@email.com</td>
                            <td>Editor</td>
                            <td><span class="badge ativo">Ativo</span></td>
                            <td>
                                <button class="btn-icon">
                                    <i class="fa-solid fa-pen"></i>
                                </button>
                            </td>
                        </tr>
                        <tr>
                            <td>03</td>
                            <td>Lucas Martins</td>
                            <td>lucas@email.com</td>
                            <td>Usuário</td>
                            <td><span class="badge inativo">Inativo</span></td>
                            <td>
                                <button class="btn-icon">
                                    <i class="fa-solid fa-pen"></i>
                                </button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </main>
    </div>

    <?php include 'footer.php'; ?>
</div>

</body>
</html>