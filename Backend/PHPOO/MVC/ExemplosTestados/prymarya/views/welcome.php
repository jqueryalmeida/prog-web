<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE-edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <meta http-equiv="imagetoolbar" content="no" />
        <title>Prymarya framework | Welcome</title>
        <link rel="shortcut icon" type="image/x-icon" href="<?php echo BASEURL; ?>assets/img/icon.png">
        <link rel="stylesheet" type="text/css" href="<?php echo BASEURL; ?>assets/css/template.css">
        <link href="<?php echo BASEURL; ?>assets/css/bootstrap.min.css" rel="stylesheet" />
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.1/css/all.css" integrity="sha384-O8whS3fhG2OnA5Kas0Y9l3cfpmYjapjI0E4theH4iuMD+pLhbf6JI0jIMfYcK3yZ" crossorigin="anonymous">
    </head>
    <body oncontextmenu="return false">
        <div class="container">
            <div class="logo_text" id="logo_welcome" style="display:none;">
                <h1>prymarya</h1>
                <p>a simple php framework</p>
            </div>
            <div class="logo_links" id="logo_links" style="display:none;">
                <a href="https://github.com/danerscode" target="_blank" title="Github"><i class="fab fa-github"></i> Github</a>
                <a href="https://danerscode.com" target="_blank" title="Site oficial"><i class="fas fa-globe"></i> Site oficial</a>
                <a href="<?php echo BASEURL; ?>login" title="Login de acesso"><span class="glyphicon glyphicon-user"></span> Login</a>
            </div>
        </div>
        <script type="text/javascript" src="<?php echo BASEURL; ?>assets/js/jquery-3.1.1.min.js"></script>
        <script type="text/javascript" src="<?php echo BASEURL; ?>assets/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="<?php echo BASEURL; ?>assets/js/script.js"></script>
    </body>
</html>
