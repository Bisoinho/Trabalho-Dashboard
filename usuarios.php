<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestão de Usuários</title>
    <link rel="stylesheet" href="dashboard.css?v=5">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
</head>
<body>

<div class="pagina">
    <div class="dashboard-container">
        <?php include 'menu.php'; ?>

        <main>
            <div class="header-content">
                <div class="header-title">
                    <h2><i class="fa-solid fa-users"></i> Gestão de Usuários</h2>
                    <p>Visualize, edite e exclua os usuários cadastrados no LocalStorage.</p>
                </div>

                <a href="cad-usuarios.php" class="btn-add">
                    <i class="fa-solid fa-plus"></i> Adicionar Usuário
                </a>
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
                    <tbody id="lista-usuarios"></tbody>
                </table>
            </div>
        </main>
    </div>

    <?php include 'footer.php'; ?>
</div>

<script>
    const listaUsuarios = document.getElementById("lista-usuarios");

    function carregarUsuarios() {
        let usuarios = JSON.parse(localStorage.getItem("usuarios")) || [];

        listaUsuarios.innerHTML = "";

        if (usuarios.length === 0) {
            listaUsuarios.innerHTML = `
                <tr>
                    <td colspan="6">Nenhum usuário cadastrado. Clique em Adicionar Usuário para cadastrar.</td>
                </tr>
            `;
            return;
        }

        usuarios.forEach(function(usuario, index) {
            const classeStatus = usuario.status === "Ativo" ? "ativo" : "inativo";

            listaUsuarios.innerHTML += `
                <tr>
                    <td>${String(index + 1).padStart(2, "0")}</td>
                    <td>${usuario.nome}</td>
                    <td>${usuario.email}</td>
                    <td>${usuario.nivel}</td>
                    <td><span class="badge ${classeStatus}">${usuario.status}</span></td>
                    <td>
                        <button type="button" class="btn-icon" onclick="editarUsuario(${index})" title="Editar">
                            <i class="fa-solid fa-pen"></i>
                        </button>

                        <button type="button" class="btn-icon" onclick="excluirUsuario(${index})" title="Excluir">
                            <i class="fa-solid fa-trash"></i>
                        </button>
                    </td>
                </tr>
            `;
        });
    }

    function editarUsuario(index) {
        localStorage.setItem("usuarioEditando", index);
        window.location.href = "cad-usuarios.php";
    }

    function excluirUsuario(index) {
        let usuarios = JSON.parse(localStorage.getItem("usuarios")) || [];

        if (confirm("Tem certeza que deseja excluir este usuário?")) {
            usuarios.splice(index, 1);
            localStorage.setItem("usuarios", JSON.stringify(usuarios));
            carregarUsuarios();
        }
    }

    carregarUsuarios();
</script>

</body>
</html>
