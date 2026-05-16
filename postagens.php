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

        

        </main>
    </div>

    <?php include 'footer.php'; ?>
</div>

</body>
</html>