<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Postagens</title>
    <link rel="stylesheet" href="dashboard.css?v=5">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
</head>
<body>

<div class="pagina">
    <div class="dashboard-container">
        <?php include 'menu.php'; ?>

        <main>
            <!-- TOPO -->
            <div class="header-content">
                <div>
                    <h2><i class="fa-solid fa-newspaper"></i> Postagens</h2>
                    <p>Crie, edite e gerencie todas as notícias do Fortnite News Brasil.</p>
                </div>

            
            </div>

            <!-- FORM -->
            <section class="card-form">
                <div class="form-header">
                    <h2><i class="fa-solid fa-pen"></i> Criar Postagem</h2>
                    <p>Adicione uma nova notícia ao site</p>
                </div>

                <form action="#" method="POST">
                    <div class="form-group">
                        <label>Título</label>
                        <input type="text" placeholder="Digite o título da notícia">
                    </div>

                    <div class="form-group">
                        <label>Imagem (URL)</label>
                        <input type="text" placeholder="img/exemplo.jpg">
                    </div>

                    <div class="form-group">
                        <label>Categoria</label>
                        <select>
                            <option>Notícias</option>
                            <option>Dicas</option>
                            <option>Eventos</option>
                            <option>Competitivo</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label>Conteúdo</label>
                        <textarea rows="5" placeholder="Digite o conteúdo da postagem..."></textarea>
                    </div>

                    <div class="form-actions">
                        <button class="btn-save">
                            <i class="fa-solid fa-floppy-disk"></i> Publicar
                        </button>

                        <button type="reset" class="btn-cancel">
                            Limpar
                        </button>
                    </div>
                </form>
            </section>

            <br>

            <!-- LISTA -->
            <div class="table-responsive">
                <table>
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Imagem</th>
                            <th>Título</th>
                            <th>Categoria</th>
                            <th>Status</th>
                            <th>Data</th>
                            <th>Ações</th>
                        </tr>
                    </thead>

                    <tbody>
                        <tr>
                            <td>01</td>
                            <td><img src="img/fortnite1.jpg" class="thumb"></td>
                            <td>Nova temporada chegou!</td>
                            <td>Notícias</td>
                            <td><span class="badge ativo">Publicado</span></td>
                            <td>27/03</td>
                            <td>
                                <button class="btn-icon"><i class="fa-solid fa-pen"></i></button>
                                <button class="btn-icon delete"><i class="fa-solid fa-trash"></i></button>
                            </td>
                        </tr>

                        <tr>
                            <td>02</td>
                            <td><img src="img/fortnite2.jpg" class="thumb"></td>
                            <td>Dicas para build rápida</td>
                            <td>Dicas</td>
                            <td><span class="badge ativo">Publicado</span></td>
                            <td>26/03</td>
                            <td>
                                <button class="btn-icon"><i class="fa-solid fa-pen"></i></button>
                                <button class="btn-icon delete"><i class="fa-solid fa-trash"></i></button>
                            </td>
                        </tr>

                        <tr>
                            <td>03</td>
                            <td><img src="img/fortnite3.jpg" class="thumb"></td>
                            <td>Eventos da semana</td>
                            <td>Eventos</td>
                            <td><span class="badge inativo">Rascunho</span></td>
                            <td>25/03</td>
                            <td>
                                <button class="btn-icon"><i class="fa-solid fa-pen"></i></button>
                                <button class="btn-icon delete"><i class="fa-solid fa-trash"></i></button>
                            </td>
                        </tr>

                        <tr>
                            <td>04</td>
                            <td><img src="img/fortnite5.jpg" class="thumb"></td>
                            <td>Reload Elite Series</td>
                            <td>Competitivo</td>
                            <td><span class="badge ativo">Publicado</span></td>
                            <td>24/03</td>
                            <td>
                                <button class="btn-icon"><i class="fa-solid fa-pen"></i></button>
                                <button class="btn-icon delete"><i class="fa-solid fa-trash"></i></button>
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