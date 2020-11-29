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
                            <li><a href="view.php">Inicio</a></li>
                            <li><a href="#">Criar Novo Imóvel</a></li>
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
                <div class="content" id="contato">
                    <h1 class="section-title">Cadastrar Imóvel</h1>
                    <?php if( isset($_GET['insert']) && $_GET['insert'] == 'sucess') { ?>
                        <script>
                            alert("Imóvel cadastrado com sucesso!");
                        </script>
                    <?php } ?>
                    <form method="post" action="immobile.controller.php?action=insert">
                        <fieldset>
                            <div class="field">
                                <label for="title">Titulo</label>
                                <input type="text" name="title" required>
                            </div>
                            <div class="field-group">
                                <div class="field">
                                    <label for="image1">Link Imagem 1</label>
                                    <input type="url" name="image1" required>
                                </div>
                                <div class="field">
                                    <label for="image2">Link Imagem 2</label>
                                    <input type="url" name="image2" required>
                                </div>
                            </div>
                            <div class="field-group">
                                <div class="field">
                                    <label for="state">Estado</label>
                                    <select name="uf" required="required">
                                        <option value="">Selecione o estado</option>
                                    </select>  
                                    <input type="hidden" name="state">              
                                </div>
                                <div class="field">
                                    <label for="city">Cidade</label>
                                    <select name="city" disabled="disabled" required="required">
                                        <option value="">Selecione a cidade</option>
                                    </select>
                                </div>
                            </div>
                            <div class="field-group">
                                <div class="field">
                                    <label for="value_daily">Valor da diária (R$)</label>
                                    <input type="number" name="value_daily" required>
                                </div>
                                <div class="field">
                                    <label for="phone">Telefone para contato</label>
                                    <input type="number" name="phone" required>
                                </div>
                            </div>
                            <div class="field">
                                <label for="description">Descrição do Imóvel</label>
                                <textarea placeholder="Digite sua mensagem..." name="description" required></textarea>
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
        <script src="scripts/ibge-api.js"></script>
        <script src="scripts/switch-color.js"></script>
        <script src="scripts/validate.js"></script>
    </body>
</html>