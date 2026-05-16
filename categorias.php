<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Categorias</title>

    <link rel="stylesheet" href="dashboard.css?v=4">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
</head>

<body>
    <div class="pagina">
        <div class="dashboard-container">

            <?php include 'menu.php'; ?>

            <main>
                <div class="header-content">
                    <div>
                        <h2><i class="fa-solid fa-list"></i> Categorias</h2>
                        <p>Cadastre e gerencie as categorias das postagens do Fortnite News Brasil.</p>
                    </div>
                </div>

                <section class="card-form">
                    <div class="form-header">
                        <h2><i class="fa-solid fa-folder-plus"></i> Nova Categoria</h2>
                        <p>Preencha os dados abaixo para adicionar uma nova categoria.</p>
                    </div>

                    <form id="form-categoria">
                        <div class="form-group">
                            <label for="nome">Nome da Categoria</label>
                            <input type="text" id="nome" placeholder="Ex: Competitivo" required>
                        </div>

                        <div class="form-group">
                            <label for="slug">Slug</label>
                            <input type="text" id="slug" placeholder="Ex: competitivo" required>
                        </div>

                        <div class="form-group">
                            <label for="descricao">Descrição</label>
                            <input type="text" id="descricao" placeholder="Ex: Notícias sobre campeonatos, rankings e torneios">
                        </div>

                        <div class="form-actions">
                            <button type="submit" class="btn-save">
                                <i class="fa-solid fa-floppy-disk"></i> Salvar Categoria
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
                        <h2><i class="fa-solid fa-table"></i> Categorias Salvas</h2>
                        <p>Lista de categorias cadastradas no LocalStorage.</p>
                    </div>

                    <div class="table-responsive">
                        <table>
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Categoria</th>
                                    <th>Slug</th>
                                    <th>Descrição</th>
                                    <th>Status</th>
                                    <th>Ações</th>
                                </tr>
                            </thead>

                            <tbody id="lista-categorias"></tbody>
                        </table>
                    </div>
                </section>
            </main>
        </div>

        <?php include 'footer.php'; ?>
    </div>

    <script>
        const form = document.getElementById("form-categoria");
        const listaCategorias = document.getElementById("lista-categorias");

        let indiceEditando = null;

        form.addEventListener("submit", function(event) {
            event.preventDefault();

            const nome = document.getElementById("nome").value.trim();
            const slug = document.getElementById("slug").value.trim();
            const descricao = document.getElementById("descricao").value.trim();

            if (nome === "" || slug === "") {
                alert("Preencha o nome e o slug da categoria.");
                return;
            }

            let categorias = JSON.parse(localStorage.getItem("categorias")) || [];

            const categoria = {
                nome: nome,
                slug: slug,
                descricao: descricao,
                status: "Ativa"
            };

            if (indiceEditando === null) {
                categorias.push(categoria);
                alert("Categoria salva com sucesso!");
            } else {
                categorias[indiceEditando] = categoria;
                indiceEditando = null;
                alert("Categoria editada com sucesso!");
            }

            localStorage.setItem("categorias", JSON.stringify(categorias));

            limparCampos();
            carregarCategorias();
        });

        function carregarCategorias() {
            let categorias = JSON.parse(localStorage.getItem("categorias")) || [];

            listaCategorias.innerHTML = "";

            if (categorias.length === 0) {
                listaCategorias.innerHTML = `
                    <tr>
                        <td colspan="6">Nenhuma categoria cadastrada.</td>
                    </tr>
                `;
                return;
            }

            categorias.forEach(function(categoria, index) {
                listaCategorias.innerHTML += `
                    <tr>
                        <td>${index + 1}</td>
                        <td>${categoria.nome}</td>
                        <td>${categoria.slug}</td>
                        <td>${categoria.descricao}</td>
                        <td><span class="status ativo">${categoria.status}</span></td>
                        <td>
                            <button type="button" onclick="editarCategoria(${index})">
                                ✏️
                            </button>

                            <button type="button" onclick="excluirCategoria(${index})">
                                🗑️
                            </button>
                        </td>
                    </tr>
                `;
            });
        }

        function editarCategoria(index) {
            let categorias = JSON.parse(localStorage.getItem("categorias")) || [];

            document.getElementById("nome").value = categorias[index].nome;
            document.getElementById("slug").value = categorias[index].slug;
            document.getElementById("descricao").value = categorias[index].descricao;

            indiceEditando = index;
        }

        function excluirCategoria(index) {
            let categorias = JSON.parse(localStorage.getItem("categorias")) || [];

            if (confirm("Tem certeza que deseja excluir esta categoria?")) {
                categorias.splice(index, 1);
                localStorage.setItem("categorias", JSON.stringify(categorias));
                carregarCategorias();
            }
        }

        function limparCampos() {
            document.getElementById("nome").value = "";
            document.getElementById("slug").value = "";
            document.getElementById("descricao").value = "";
            indiceEditando = null;
        }

        carregarCategorias();
    </script>
</body>
</html>