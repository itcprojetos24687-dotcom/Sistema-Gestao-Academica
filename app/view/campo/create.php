<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <a href="<?= BASE_URL ?>/campo">< Voltar</a>
    <h1>Cadastrar campo</h1>
    <form action="<?= BASE_URL ?>/campo/store" method="post">
        <label for="nome">Nome</label>
        <input type="text" name="nome">
        <button type="submit">Cadastrar</button>
    </form>
</body>
</html>