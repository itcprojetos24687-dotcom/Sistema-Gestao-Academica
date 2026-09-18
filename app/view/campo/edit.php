<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <a href="<?= BASE_URL ?>/campo">< Voltar</a>
    <h2>Editar campo</h2>
    <form action="<?= BASE_URL ?>/campo/update/<?= $campo['codigo'] ?>" method="post">
        <label for="nome">Nome</label>
        <input type="text" name="codigo" value=<?= $campo['codigo'] ?> >
        <input type="text" name="nome" value=<?= $campo['nome'] ?> >
        <button type="submit">Submit</button>

    </form>
</body>
</html>