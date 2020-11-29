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
                            <li class="align-left"> <a href="#"><img src="imgs/logo.svg" alt="logotipo"></a></li>
                            <li><a href="view.php">Inicio</a></li>
                            <li><a href="register.php">Criar Novo Imóvel</a></li>
                            <li><a href="#">Banner Inicial</a></li>
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
                <div class="content" id="contato">
                    <h1 class="section-title">Cadastrar Imagens</h1>
                    <?php if( isset($_GET['update']) && $_GET['update'] == 1) { ?>
                        <h5 align="center">Imagens inseridas com sucesso!</h5>
                    <?php } ?>
                    <form method="post" action="image.controller.php?action=update">
                        <fieldset>
                            <div class="field">
                                <label for="image1">Link Imagem 1</label>
                                <input type="url" name="image1" required>
                            </div>
                            <div class="field">
                                <label for="image2">Link Imagem 2</label>
                                <input type="url" name="image2" required>
                            </div>
                            <div class="field">
                                <label for="image3">Link Imagem 3</label>
                                <input type="url" name="image3" required>
                            </div>
                            <div style="text-align: center;">
                                <input class="button" type="submit" value="Cadastrar">
                            </div>
                        </fieldset>
                    </form>
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
        </div>
        <script src="scripts/switch-color.js"></script>
        <script src="scripts/validate.js"></script>
    </body>
</html>