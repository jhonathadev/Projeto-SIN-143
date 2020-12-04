<!DOCTYPE html>
<html lang="pt_br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Tem vaga aí?</title>
        <link rel="stylesheet" href="styles/index.css">
        <link rel="stylesheet" href="styles/carousel.css">
        <link rel="stylesheet" href="styles/responsive.css">
        <link rel="shortcut icon"  href="imgs/casa.svg">
        <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@500&display=swap" rel="stylesheet">
    </head>
    <body>
        <div id="page-home">
            <div class="content">
                <header>
                    <nav>
                        <ul>
                            <li class="align-left"> <img src="imgs/logo.svg" alt="logotipo"></li>
                            <li><a href="#">INICIO</a></li>
                            <li><a href="about.php">SOBRE</a></li>
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
                    <?php $action = 'read';
                        require "src/image.controller.php";
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

                    <div class="search-bar">
                        <form method="post" action="src/immobile.controller.php?action=search">
                            <fieldset>
                                <input type="search" name="city" placeholder="Digite uma cidade" required>
                                <input type="number" placeholder="Min (R$)" name="min" min="1" required>
                                <input type="number" placeholder="Max (R$)" name="max" min="2" required>
                                <input type="submit" value="Buscar">
                            </fieldset>
                        </form>
                    </div>
                </div>
            </main>
            <footer>
                <div class="footer-div">   
                    <p>Developed with <span>♥</span> by Jhonatha and Viviane</p>
                    <div style="display: inline;">
                        <a href="https://github.com/jhonathadev/Projeto-SIN-143" target="_blank"><img src="imgs/git-logo.svg" alt="github"></a>
                    </div>
                </div>
            </footer>
        </div>
        <script src="scripts/validate.js"></script>
        <script src="scripts/carousel.js"></script>
        <script src="scripts/switch-color.js"></script>
    </body>
</html>