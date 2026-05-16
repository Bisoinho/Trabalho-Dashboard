<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Usuários</title>
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
                    <h2><i class="fa-solid fa-user-plus"></i> Cadastrar Usuários</h2>
                    <p>Cadastre, visualize, edite e exclua usuários usando LocalStorage.</p>
                </div>
            </div>

            <section class="card-form">
                <div class="form-header">
                    <h2><i class="fa-solid fa-plus"></i> Novo Usuário</h2>
                    <p>Preencha os dados abaixo para registrar um novo usuário.</p>
                </div>

                <form id="form-usuario">
                    <div class="form-group">
                        <label for="nome">Nome Completo</label>
                        <input type="text" id="nome" placeholder="Ex: Eric Freitas" required>
                    </div>

                    <div class="form-group">
                        <label for="email">E-mail</label>
                        <input type="email" id="email" placeholder="nome@empresa.com" required>
                    </div>

                    <div class="form-row">
                        <div class="form-group flex-1">
                            <label for="senha">Senha</label>
                            <input type="password" id="senha" placeholder="Digite uma senha" required>
                        </div>

                        <div class="form-group flex-1">
                            <label for="nivel">Nível</label>
                            <select id="nivel" required>
                                <option value="Usuário">Usuário</option>
                                <option value="Editor">Editor</option>
                                <option value="Administrador">Administrador</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="status">Status</label>
                        <select id="status" required>
                            <option value="Ativo">Ativo</option>
                            <option value="Inativo">Inativo</option>
                        </select>
                    </div>

                    <div class="form-actions">
                        <button type="submit" class="btn-save" id="btn-salvar">
                            <i class="fa-solid fa-floppy-disk"></i> Salvar Usuário
                        </button>

                        <button type="button" class="btn-cancel" onclick="limparCampos()">
                            Cancelar
                        </button>
                    </div>
                </form>
            </section>

            <br>

            <section class="card-form">
                <div class="form-header">
                    <h2><i class="fa-solid fa-users"></i> Usuários Salvos</h2>
                    <p>Lista de usuários cadastrados no LocalStorage.</p>
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
            </section>
        </main>

    </div>

    <?php include 'footer.php'; ?>
</div>

<script>
    const formUsuario = document.getElementById("form-usuario");
    const listaUsuarios = document.getElementById("lista-usuarios");
    const btnSalvar = document.getElementById("btn-salvar");

    let indiceEditando = null;

    formUsuario.addEventListener("submit", function(event) {
        event.preventDefault();

        const nome = document.getElementById("nome").value.trim();
        const email = document.getElementById("email").value.trim();
        const senha = document.getElementById("senha").value.trim();
        const nivel = document.getElementById("nivel").value;
        const status = document.getElementById("status").value;

        if (nome === "" || email === "" || senha === "") {
            alert("Preencha nome, e-mail e senha.");
            return;
        }

        let usuarios = JSON.parse(localStorage.getItem("usuarios")) || [];

        const emailJaExiste = usuarios.some(function(usuario, index) {
            return usuario.email.toLowerCase() === email.toLowerCase() && index !== indiceEditando;
        }); 

        if (emailJaExiste) {
            alert("Este e-mail já está cadastrado.");
            return;
        }

        const usuario = {
            nome: nome,
            email: email,
            senha: senha,
            nivel: nivel,
            status: status
        };

        if (indiceEditando === null) {
            usuarios.push(usuario);
            alert("Usuário salvo com sucesso!");
        } else {
            usuarios[indiceEditando] = usuario;
            indiceEditando = null;
            btnSalvar.innerHTML = '<i class="fa-solid fa-floppy-disk"></i> Salvar Usuário';
            alert("Usuário editado com sucesso!");
        }

        localStorage.setItem("usuarios", JSON.stringify(usuarios));

        limparCampos();
        carregarUsuarios();
    });

    function carregarUsuarios() {
        let usuarios = JSON.parse(localStorage.getItem("usuarios")) || [];

        listaUsuarios.innerHTML = "";

        if (usuarios.length === 0) {
            listaUsuarios.innerHTML = `
                <tr>
                    <td colspan="6">Nenhum usuário cadastrado.</td>
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
        let usuarios = JSON.parse(localStorage.getItem("usuarios")) || [];
        const usuario = usuarios[index];

        document.getElementById("nome").value = usuario.nome;
        document.getElementById("email").value = usuario.email;
        document.getElementById("senha").value = usuario.senha;
        document.getElementById("nivel").value = usuario.nivel;
        document.getElementById("status").value = usuario.status;

        indiceEditando = index;
        btnSalvar.innerHTML = '<i class="fa-solid fa-pen"></i> Atualizar Usuário';

        window.scrollTo({ top: 0, behavior: "smooth" });
    }

    function excluirUsuario(index) {
        let usuarios = JSON.parse(localStorage.getItem("usuarios")) || [];

        if (confirm("Tem certeza que deseja excluir este usuário?")) {
            usuarios.splice(index, 1);
            localStorage.setItem("usuarios", JSON.stringify(usuarios));
            carregarUsuarios();
            limparCampos();
        }
    }

    function limparCampos() {
        document.getElementById("nome").value = "";
        document.getElementById("email").value = "";
        document.getElementById("senha").value = "";
        document.getElementById("nivel").value = "Usuário";
        document.getElementById("status").value = "Ativo";

        indiceEditando = null;
        btnSalvar.innerHTML = '<i class="fa-solid fa-floppy-disk"></i> Salvar Usuário';
    }

    function carregarUsuarioParaEdicao() {
        const indexSalvo = localStorage.getItem("usuarioEditando");

        if (indexSalvo !== null) {
            editarUsuario(Number(indexSalvo));
            localStorage.removeItem("usuarioEditando");
        }
    }

    carregarUsuarios();
    carregarUsuarioParaEdicao();
</script>

</body>
</html>
