<!DOCTYPE html>
<html lang="pt_br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Tem vaga aí?</title>
        <link rel="stylesheet" href="styles/index.css">
        <link rel="stylesheet" href="styles/admin.css">
        <link rel="stylesheet" href="styles/modal.css">
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
                            <li><a href="index.php">INICIO</a></li>
                            <li><a href="about.php">SOBRE</a></li>
                            <li><a id="search" href="#">BUSCAR</a></li>
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
                    <h1 class="section-title">ADMIN</h1>
                    <div class="admin-links">
                        <a href="register.php"><h2>Cadastrar Imóvel</h2></a>
                        <a>|</a>
                        <a href="view.php"><h2>Visualizar imóveis cadastrados</h2></a>
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
    <script src="scripts/modal.js"></script>
    <script src="scripts/switch-color.js"></script>
</html>