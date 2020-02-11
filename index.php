<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página inicial</title>
    <!--Link do BOOTSTRAP-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <h1>Formulário para teste requisição AJAX</h1>
        <form action="salvaDados.php" method="POST">
            <label for="nome">Nome:</label>
            <input type="text" class="form-control" id="nome" name="nome" required>
            <label for="email">E-mail:</label>
            <input type="text" class="form-control" id="email" name="email" required>
            <label for="nome">Telefone:</label>
            <input type="text" class="form-control" id="telefone" name="telefone" required>

            <input type="submit" value="Cadastrar" class="btn btn-success" style="margin-top: 10px;">
            <input type="reset" value="Resetar" class="btn btn-warning" style="margin-top: 10px;">
        </form>
        <button type="button" class="btn btn-primary" id="consulta" style="margin-top: 10px;">Consultar</button>
        <hr>
        <span id="resultado"></span>
    </div>
    <!--Script do BOOTSTRAP-->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

    <script src="script.js"></script>
</body>
</html>