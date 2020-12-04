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
                    <div class="cards">
                        <?php 
                            $action = 'read';
                            require "immobile.controller.php";
                            foreach ($return as $indice => $value): ?> 
                                <div class="card" id="<?php echo $value->id; ?>">
                                    <img src="<?php echo $value->image1; ?>" alt="casa">
                                    <div class="card-body">
                                        <div class="card-content">
                                            <h1><?php echo $value->title; ?></h1>
                                            <h4><?php echo $value->state; ?>, <?php echo $value->city; ?></h4>
                                            <h3><strong>R$<?php echo $value->value_daily ?></strong></h3>
                                            <p>
                                                <?php echo $value->description ?>
                                            </p>
                                        </div>
                                    </div>
                                    <div class="card-footer">
                                        <a href="search-result.php?id=<?php echo $value->id; ?>" style="color: #00a308;">Visualizar</a>
                                        <a href="edit.php?id=<?php echo $value->id; ?>" style="color: #f5bf42;">Editar</a>
                                        <a onclick="confirmation(<?php echo $value->id; ?>)" style="color: red;">Remover</a>
                                    </div>
                                </div>
                            <?php endforeach; 
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
        <script>
            function confirmation(id) {

                confirm = confirm("Tem certeza que deseja apagar esse registro permanentemente?")
                if(confirm == true) {
                    window.location.href = "view.php?action=delete&id="+id
                } else {
                    console.log("error");
                }
            }
        </script>
        <script src="scripts/switch-color.js"></script>
    </body>
</html>