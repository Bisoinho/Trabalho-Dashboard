<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Categorias</title>
    <link rel="stylesheet" href="dashboard.css?v=3">
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

                <form action="processa-categoria.php" method="POST">
                    <div class="form-group">
                        <label for="nome">Nome da Categoria</label>
                        <input type="text" id="nome" name="nome" placeholder="Ex: Competitivo" required>
                    </div>

                    <div class="form-group">
                        <label for="slug">Slug</label>
                        <input type="text" id="slug" name="slug" placeholder="Ex: competitivo" required>
                    </div>

                    <div class="form-group">
                        <label for="descricao">Descrição</label>
                        <input type="text" id="descricao" name="descricao" placeholder="Ex: Notícias sobre campeonatos, rankings e torneios">
                    </div>

                    <div class="form-actions">
                        <button type="submit" class="btn-save">
                            <i class="fa-solid fa-floppy-disk"></i> Salvar Categoria
                        </button>
                        <a href="inicio.php" class="btn-cancel">Cancelar</a>
                    </div>
                </form>
            </section>

            <br>

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
                    <tbody>
                        <tr>
                            <td>01</td>
                            <td>Notícias</td>
                            <td>noticias</td>
                            <td>Atualizações e novidades do Fortnite</td>
                            <td><span class="badge ativo">Ativa</span></td>
                            <td>
                                <button class="btn-icon"><i class="fa-solid fa-pen"></i></button>
                            </td>
                        </tr>
                        <tr>
                            <td>02</td>
                            <td>Dicas</td>
                            <td>dicas</td>
                            <td>Guias, estratégias e tutoriais</td>
                            <td><span class="badge ativo">Ativa</span></td>
                            <td>
                                <button class="btn-icon"><i class="fa-solid fa-pen"></i></button>
                            </td>
                        </tr>
                        <tr>
                            <td>03</td>
                            <td>Competitivo</td>
                            <td>competitivo</td>
                            <td>Campeonatos, rankings e cenário competitivo</td>
                            <td><span class="badge ativo">Ativa</span></td>
                            <td>
                                <button class="btn-icon"><i class="fa-solid fa-pen"></i></button>
                            </td>
                        </tr>
                        <tr>
                            <td>04</td>
                            <td>Eventos</td>
                            <td>eventos</td>
                            <td>Eventos ao vivo e conteúdos especiais</td>
                            <td><span class="badge inativo">Inativa</span></td>
                            <td>
                                <button class="btn-icon"><i class="fa-solid fa-pen"></i></button>
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