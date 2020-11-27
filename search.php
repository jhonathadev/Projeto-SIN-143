<!DOCTYPE html>
<html lang="pt_br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Tem vaga aí?</title>
        <link rel="stylesheet" href="styles/index.css">
        <link rel="stylesheet" href="styles/search.css">
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
                            <li><a href="index.php">INICIO</a></li>
                            <li><a href="about.php">SOBRE</a></li>
                            <li><a href="#">BUSCAR</a></li>
                            <li><a href="contact.php">CONTATO</a></li>
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
                    <h1 class="section-title">Buscar</h1>
                    <form action="#">
                        <fieldset>
                            <input type="search" name="query" placeholder="Digite uma cidade" required>
                            <input class="button" type="submit" value="Buscar">
                        </fieldsetv>
                    </form>
                </div>

                <div class="content">
                    <div class="cards">
                        <div class="card">
                            <img src="imgs/img1.jpeg" alt="casa">
                            <div class="card-body">
                                <h1>Apartamento 1 vaga</h1>
                                <h3> <strong>R$ 500,00</strong></h3>
                                <p>Ainda assim, existem dúvidas a respeito de como o desafiador cenário globalizado assume importantes posições no estabelecimento das condições inegavelmente apropriadas. Ainda assim, existem dúvidas a respeito de como o desafiador cenário globalizado assume importantes posições no estabelecimento das condições inegavelmente apropriadas. Ainda assim, existem dúvidas a respeito de como o desafiador cenário globalizado assume importantes posições no estabelecimento das condições inegavelmente apropriadas.
                                </p>
                            </div>
                            <div class="card-footer">
                                <a href="search-result.php">Ver mais</a>
                            </div>
                        </div>
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
        </div>
    </body>
    <script src="scripts/switch-color.js"></script>
</html>