<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title><?php echo $evento->nome; ?></title>
    </head>
    <body>
        <h1><?php echo $evento->nome; ?></h1>
        <div>
            <span class="label">Número de Vagas:</span>
            <?php echo $evento->numero; ?>
        </div>
    </body>
</html>