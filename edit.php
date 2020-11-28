<!DOCTYPE html>
<html lang="pt_br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Tem vaga aí?</title>
        <link rel="stylesheet" href="styles/index.css">
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
                <div class="content" id="contato">
                    <h1 class="section-title">Editar Imóvel</h1>
                    <?php if( isset($_GET['update']) && $_GET['update'] == 1) { ?>
                        <h5 align="center">Imóvel atualizado com sucesso!</h5>
                    <?php } ?>
                    <form method="post" action="immobile.controller.php?action=update">
                        <fieldset>
                            <div class="field">
                                <label for="title">Titulo</label>
                                <input type="text" name="title" value="" required>
                            </div>
                            <div class="field-group">
                                <div class="field">
                                    <label for="image1">Imagem 1</label>
                                    <input type="text" name="image1" value="xdxdxd" required>
                                </div>
                                <div class="field">
                                    <label for="image2">Imagem 2</label>
                                    <input type="text" name="image2" value="xdxdxd" required>
                                </div>
                            </div>
                            <div class="field-group">
                                <div class="field">
                                    <label for="state">Estado</label>
                                    <select name="uf" required="required">
                                        <option value="">Seleciona o Estado</option>
                                    </select>
                                    <input type="hidden" name="state">
                                </div>
                                <div class="field">
                                    <label for="city">Cidade</label>
                                    <select name="city" disabled="disabled" value="" required="required">
                                        <option value="">Seleciona a Cidade</option>
                                    </select>
                                </div>
                            </div>
                            <div class="field">
                                <label for="value">Valor da diária (R$)</label>
                                <input type="number" name="value" value="500" required>
                            </div>
                            <div class="field">
                                <label for="phone">Telefone para contato</label>
                                <input type="number" name="phone" value="37991232233" required>
                            </div>
                            <div class="field">
                                <label for="description">Descrição do Imóvel</label>
                                <textarea name="description" required>Ainda assim, existem dúvidas a respeito de como o desafiador cenário globalizado assume importantes posições no estabelecimento das condições inegavelmente apropriadas. Ainda assim, existem dúvidas a respeito de como o desafiador cenário globalizado assume importantes posições no estabelecimento das condições inegavelmente apropriadas. Ainda assim, existem dúvidas a respeito de como o desafiador cenário globalizado assume importantes posições no estabelecimento das condições inegavelmente apropriadas.</textarea>
                            </div>
                            <div style="text-align: center;">
                                <input class="button" type="submit" value="Salvar">
                            </div>       
                        </fieldset>
                    </form>
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
    <script src="scripts/ibge-api.js"></script>
    <script src="scripts/modal.js"></script>
</html>