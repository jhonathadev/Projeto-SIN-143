<!DOCTYPE html>
<html lang="pt_br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Tem vaga aí?</title>
        <link rel="stylesheet" href="styles/index.css">
        <link rel="stylesheet" href="styles/carousel.css">
        <link rel="stylesheet" href="styles/search-result.css">
        <link rel="stylesheet" href="styles/responsive.css">
        <link rel="shortcut icon"  href="imgs/casa.svg">
        <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@700&display=swap" rel="stylesheet">
    </head>
    <body>
        <div id="page-result">
            <div class="content">
                <header>
                    <nav>
                        <ul>
                            <li class="align-left"><img src="imgs/logo.svg" alt="logotipo"></li>
                            <li><a href="index.php">INICIO</a></li>
                            <li><a href="about.php">SOBRE</a></li>
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

                <main>
                    <!-- Slideshow container -->                    
                    <div class="content">
                        <?php 
                            $action = 'readId';
                            require "immobile.controller.php"; 
                        ?> 
                        <?php foreach ($return as $indice => $value): ?> 

                        <h1 class="section-title"><?php echo $value->state;?>-><?php echo $value->city;?></h1>
                        <div class="cards">
                            <div class="card">
                                <div class="mySlides fade">
                                    <img class="img-fix2" src="<?php echo $value->image1; ?>" alt="imagem carousel">
                                </div>
                                <div class="mySlides fade">
                                    <img class="img-fix2" src="<?php echo $value->image2; ?>" alt="imagem carousel">
                                </div>
                                
                            </div>
        
                            <div class="card">
                                <h1><?php echo $value->title; ?></h1>
                                <p>Diária: R$ <?php echo $value->value_daily; ?></p>
                                <div class="card-group">
                                    <p>Nº quartos:</p>

                                    <select name="quartos" id="quartos">
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                    </select>
                                </div>
                                <p>Telefone:<?php echo $value->phone; ?></p>
                                <div style="margin: 50px 0; text-align: center;">
                                    <a class="button" onclick="redireciona()">Alugar</a>
                                </div>
                            </div>
                        </div>
                        <div class="content">
                            <h3>Descrição do imóvel:</h3> 
                            <p><?php echo $value->description; ?></p>
                        </div>
                        <br>
                        <?php endforeach; ?>

                    </div>
                </main>
            </div>
            <footer>
                <div class="footer-div">   
                    <p>Developed with <span>♥</span> by Jhonatha and Viviane</p>
                    <div style="display: inline;">
                        <a href="https://github.com/jhonathadev/Projeto-SIN-143" target="_blank"><img src="imgs/git-logo.svg" alt="github"></a>
                    </div>
                </div>
            </footer>
        </div>
        <script>
            function redireciona () {
                showConfirmButton: false
                alert("Imóvel reservado com sucesso!" + "\n" + "Você será redirecionado para a página inicial.")
                setTimeout(() => {
                    window.location ="index.php"
                } , 1500)
            }
        </script>
        <script src="scripts/carousel.js"></script>
        <script src="scripts/switch-color.js"></script>
    </body>
</html>