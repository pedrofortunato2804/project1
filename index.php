<DOCTYPE html>
    <html lang = "pt-br">
        <head>
            <meta charset = "utf-8">
            <title>CRUD - Cadastrar</title>
        </head>
        <body>
            <h1>Cadastrar Usuário</h1>
            <form method = "POST" action="newForm.php">
                <label>Nome: </label>
                <input type="text" name="nome" placeholder="Digite o nome completo"><br><br>

                <label>Email: </label>
                <input type="text" name="email" placeholder="Digite o e-mail"><br><br>

                <input type="submit" value="Cadastrar">
            </form>
        </body>
