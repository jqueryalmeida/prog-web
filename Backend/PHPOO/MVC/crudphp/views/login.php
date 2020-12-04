<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE-edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <title>CRUD PHP</title>
        <link rel="shortcut icon" type="image/x-icon" href="<?php echo BASEURL; ?>media/icon.png">
        <link rel="stylesheet" type="text/css" href="<?php echo BASEURL; ?>assets/css/template.css">
        <link href="<?php echo BASEURL; ?>assets/css/bootstrap.min.css" rel="stylesheet" />
    </head>
    <body>
        <nav class="navbar navbar-default">
            <div class="container">
                <div id="navbar">
                    <ul class="nav navbar-nav navbar-left">
                        <li>
                            <a href="#" style="width:400px;">
                                CRUD PHP > LOGIN
                            </a>
                        </li>
                    </ul>
                    <div class="nav navbar-nav navbar-right">
                        <form method="post" class="navbar-form navbar-right" onsubmit="return submitLock();">
                            Nome:
                            <div class="form-group">
                                <input type="text" name="username" id="username" class="form-control" required="required" />
                            </div>
                            Senha:
                            <div class="form-group">
                                <input type="password" name="pass" id="pass" class="form-control" required="required" />
                            </div>
                            <button type="submit" id="login_form" name="login_form" class="btn btn-primary">Entrar</button>
                        </form>
                    </div>
                </div>
            </div>
        </nav>

        <div class="container">
            <?php if(!empty($erro)): ?>
            <div class="alert alert-danger" id="error_messager" style="position: absolute">
            <?php echo $erro . " "; ?> <button id="error_messager_btn" class="btn btn-danger">Ok!</button>
                </div>
            <?php endif; ?>
            <div class="row">
                <div class="col-sm-4">

                </div>
                <div class="col-sm-4">

                </div>
                <div class="col-sm-4">
                </div>
            </div>
        </div>
        <script type="text/javascript" src="<?php echo BASEURL; ?>assets/js/jquery-3.1.1.min.js"></script>
        <script type="text/javascript" src="<?php echo BASEURL; ?>assets/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="<?php echo BASEURL; ?>assets/js/script.js"></script>
    </body>
</html>
