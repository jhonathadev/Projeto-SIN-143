<!DOCTYPE html>
<html lang="pt_br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Tem vaga aí?</title>
        <link rel="stylesheet" href="styles/index.css">
        <link rel="stylesheet" href="styles/carousel.css">
        <link rel="stylesheet" href="styles/responsive.css">
        <link rel="stylesheet" href="styles/modal.css">
        <link rel="shortcut icon"  href="imgs/casa.svg">

        <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@500&display=swap" rel="stylesheet">
    </head>
    <body>
        <div id="page-home">
            <div class="content">
                <header>
                    <nav>
                        <ul>
                            <li class="align-left"> <a href="#"><img src="imgs/logo.svg" alt="logotipo"></a></li>
                            <li><a href="#">INICIO</a></li>
                            <li><a href="about.php">SOBRE</a></li>
                            <li><a id="search" href="#">BUSCAR</a></li>
                            <li><a href="contact.php">CONTATO</a></li>
                            <li><a href="login.php">LOGIN</a></li>
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
                    <div>
                    <?php 
                        $action = 'read';
                        require "image.controller.php";
                        foreach ($return as $indice => $value): ?> 
                        <div class="mySlides fade">
                            <img class="img-fix" src="<?php echo $value->image1; ?>" alt="imagem carousel">
                        </div>
                        <div class="mySlides fade">
                            <img class="img-fix" src="<?php echo $value->image2; ?>" alt="imagem carousel">
                        </div>
                        <div class="mySlides fade">
                            <img class="img-fix" src="<?php echo $value->image3; ?>" alt="imagem carousel">
                        </div>
                    <?php endforeach ?>
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
                    <form method="post" action="immobile.controller.php?action=search">
                        <label for="city">Cidade</label>
                        <div class="search field">
                            <input type="text" name="city" placeholder="Digite a cidade" required>
                            <button>
                                <img src="imgs/search.svg" alt="Buscar">
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <script src="scripts/carousel.js"></script>
        <script src="scripts/modal.js"></script>
    </body>
    <script src="scripts/switch-color.js"></script>
</html>