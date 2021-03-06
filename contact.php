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
                            <li><a href="about.php">SOBRE</a></li>
                            <li><a href="#">CONTATO</a></li>
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
                    <h1 class="section-title">Contato</h1>
                    <div class="contact-div">
                        <form action="#">
                            <fieldset>
                                <div class="field">
                                    <label for="name">Nome</label>
                                    <input type="text" name="name" required>
                                </div>
        
                                <div class="field">
                                    <label for="email">Email</label>
                                    <input type="email" name="email" required>
                                </div>
        
                                <div class="field">
                                    <label for="telefone">Telefone</label>
                                    <input type="number" name="telefone" required>
                                </div>
        
                                <div class="field">
                                    <label for="telefone" >Mensagem</label>
                                    <textarea placeholder="Digite sua mensagem..." required></textarea>
                                </div>
        
                                <div class="field">
                                    <label for="send_mail">Receber notificações por email?</label>
                                    <input type="checkbox" name="send_mail" checked>
                                </div>
                                
                                <div style="text-align: center;">
                                    <input class="button" type="submit" value="Enviar">
                                </div>
                                
                            </fieldset>
                        </form>
                        <div class="address">
                            <h1>Endereço</h1>
                            <div>
                                <img src="imgs/location.svg" alt="localização">
                                <p>Marechal Teodoro da Fonseca Nº 360 <br> Rio do Sul - Santa Catarina - Brasil</p>
                            </div>

                            <div>
                                <img src="imgs/telephone.svg" alt="telefone">
                                <p>(34) 99123-4567</p>
                            </div>

                            <div id="map">
                                <iframe src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d10657.119330947738!2d-46.23992726690638!3d-19.201286807949813!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1sMAPS!5e0!3m2!1spt-BR!2sbr!4v1603550818637!5m2!1spt-BR!2sbr" width="400" height="300" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                            </div> 

                        </div>
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
        <script src="scripts/switch-color.js"></script>
        <script src="scripts/validate.js"></script>
    </body>
</html>