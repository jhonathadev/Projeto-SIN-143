<!DOCTYPE html>
<html lang="pt_br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Tem vaga aí?</title>
        <link rel="stylesheet" href="styles/index.css">
        <link rel="stylesheet" href="styles/search.css">
        <link rel="stylesheet" href="styles/modal.css">
        <link rel="stylesheet" href="styles/responsive.css">
        <link rel="shortcut icon"  href="imgs/casa.svg">
        <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@700&display=swap" rel="stylesheet">
    </head>

    <body>
        <div id="page-search">
            <div class="content">
                <header>
                    <nav>
                        <ul>
                            <li class="align-left"><img src="imgs/logo.svg" alt="logotipo"></li>
                            <li><a href="view.php">Inicio</a></li>
                            <li><a href="register.php">Criar Novo Imóvel</a></li>
                            <li><a href="register-image.php">Banner Inicial</a></li>
                            <li>
                                <label class="switch">
                                    <input id="color-checked" type="checkbox" checked>
                                    <span class="slider round"></span>
                                </label>
                            </li>
                        </ul>
                    </nav>
                </header>
            </div>
            <main>
                <div class="content">
                    <h1 class="section-title">Imóveis cadastrados</h1>
                </div>
                <div class="content">
                    <div class="cards">
                        <?php 
                            $action = 'read';
                            require "immobile.controller.php";
                            foreach ($return as $indice => $value): ?> 
                                <div class="card">
                                    <img src="<?php echo $value->image1; ?>" alt="casa">
                                    <div class="card-body">
                                        <h1><?php echo $value->title; ?></h1>
                                        <h3><strong>R$<?php echo $value->value_daily ?></strong></h3>
                                        <p>
                                            <?php echo $value->description ?>
                                        </p>
                                    </div>
                                    <div class="card-footer">
                                        <a href="edit.php?action=update" style="color: #f5bf42;">Editar</a>
                                        <a href="view.php?action=delete" style="color: red;">Remover</a>
                                    </div>
                                </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </main>
            <footer>
                <div class="footer-div">   
                    <p>Developed with <span>♥</span> by Jhonatha and Viviane</p>
                    <div style="display: inline;">
                        <a href="https://github.com/jhonathadev/Projeto-SIN-143" target="_blank"><img src="imgs/git-logo.svg" alt="Facebook"></a>
                    </div>
                </div>
            </footer>
            <div id="modal" class="hide">
                <div class="content-modal">
                    <div class="header">
                        <h1>Buscar Vaga</h1>
                        <a href="#">Fechar</a>
                    </div>
                    <form action="search.php">
                        <label for="search">Cidade</label>
                        <div class="search field">
                            <input type="text" name="search" placeholder="Digite a cidade">
                            <button>
                                <img src="imgs/search.svg" alt="Buscar">
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </body>
    <script>
        function remove() {
            alert("Removido com sucesso!");
        }
    </script>
    <script src="scripts/modal.js"></script>
    <script src="scripts/switch-color.js"></script>
</html>