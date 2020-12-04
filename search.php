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
                    <div class="search-bar">
                        <form method="post" action="src/immobile.controller.php?action=search">
                            <fieldset>
                                <input id="city" type="search" name="city" placeholder="Digite uma cidade" required>
                                <input id="min" type="number" placeholder="Min (R$)" name="min" min="1" required>
                                <input id="max" type="number" placeholder="Max (R$)" name="max" min="2" required>
                                <input onclick="getFields()" type="submit" value="Buscar">
                            </fieldset>
                        </form>
                    </div>
                </div>


                <div class="content">
                    <div class="cards">
                        <?php 
                            $action = ' ';
                            require "src/immobile.controller.php";
                            $city = $_GET['city'];
                            $min = $_GET['min'];
                            $max = $_GET['max'];
                            $immobile = new Immobile();
                            $connect =  new Conection();
                            $list = new taskImmobile($connect, $immobile);
                            $return = $list->search($city, $min, $max);

                            if(empty($return)) { ?>
                                <h2 style="text-align:center;">Nenhum registro foi encontrado :(</h2>
                            <?php
                            } else {
                                foreach ($return as $indice => $value): ?> 
                                    <div class="card" id="<?php echo $value->id; ?>">
                                        <img src="<?php echo $value->image1; ?>" alt="casa">
                                        <div class="card-body">
                                            <div class="card-content">
                                                <h1><?php echo $value->title; ?></h1>
                                                <h4><?php echo $value->state; ?>, <?php echo $value->city; ?></h4>
                                                <h3><strong>R$<?php echo $value->value_daily ?></strong></h3>
                                                <div class="description">
                                                    <p>
                                                        <?php echo $value->description ?>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-footer-center">
                                            <a href="search-result.php?id=<?php echo $value->id; ?>">Ver mais</a>
                                        </div>
                                    </div>
                                <?php endforeach;
                            }
                        ?>
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
        <script src="scripts/switch-color.js"></script>
        <script src="scripts/validate.js"></script>
    </body>
</html>