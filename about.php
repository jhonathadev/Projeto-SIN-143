<!DOCTYPE html>
<html lang="pt_br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Tem vaga aí?</title>
        <link rel="stylesheet" href="styles/index.css">
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
                            <li><a href="#">SOBRE</a></li>
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
                <div class="content" id="sobre">
                    <h1 class="section-title">Sobre</h1>
                    <div class="cards">
                        <div class="card">
                            <img src="imgs/logo.svg" alt="imagem-sobre">
                        </div>
                        <div class="card">
                            <p>
                                Tem vaga ai? é um projeto proposto pelo professor Clausius Duque Reis da disciplina de Laboratório de Programação SIN 143 da Universidade Federal de Viçosa Campus Rio Paranaíba (UFV-CRP). E tem por objetivo oferecer vagas em republicas, apartamentos ou casas para serem alugadas de maneira rápida e simples.
                                <br><br>
                                Os alunos que desenvolveram este projeto são:
                                <br>
                                - Jhonatha Cordeiro Gomes 5984 <br>
                                - Viviane Renizia Mendes Silva 5209
                            </p>
                        </div>
                        <br>
                        <br>
                    </div>
                </div>
            </main>
            <footer>
                <div class="footer-div">   
                    <p>Developed with <span>♥</span> by Jhonatha and Viviane</p>
                    <div style="display: inline;">
                        <a href="https://github.com/jhonathahandz/Projeto-SIN-143" target="_blank"><img src="imgs/git-logo.svg" alt="Facebook"></a>
                    </div>
                </div>
            </footer>
        </div>
    </body>
    <script src="scripts/switch-color.js"></script>
</html>