<!DOCTYPE html>
<html lang="pt_br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Tem vaga aí?</title>
        <link rel="stylesheet" href="styles/index.css">
        <link rel="stylesheet" href="styles/login.css">
        <link rel="stylesheet" href="styles/responsive.css">
        <link rel="shortcut icon" href="imgs/casa.svg">
        <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@500&display=swap" rel="stylesheet">
    </head>
    <body>
        <main>
            <div id="page-home-login">
                <div class="content" id="login">
                    <h1 class="section-title" style="color: white;">Login</h1>
                    <div class="login-div">
                        <div class="img-login">
                            <a href="index.php"><img src="imgs/logo.svg" alt="logo"></a>
                        </div>
                        <form action="src/admin/view.php">
                            <fieldset>
                                <div class="field">
                                    <label for="user" style="text-align: center;">Usuário</label>
                                    <input type="text" name="user" required>
                                </div>
                                <div class="field">
                                    <label for="password" style="text-align: center;">Senha</label>
                                    <input type="password" name="password" required>
                                </div>
                                <div style="text-align: center;">
                                    <input class="button" type="submit" value="Entrar">
                                </div>
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </main>
        <script src="scripts/validate.js"></script>
    </body>
</html>