<!DOCTYPE html>
<html lang="pt-br" dir="ltr">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE-edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>CRUD PHP</title>
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo BASEURL; ?>media/icon.png">
    <link href="<?php echo BASEURL; ?>assets/css/jquery.dataTables.min.css" rel="stylesheet" />
    <link href="<?php echo BASEURL; ?>assets/css/bootstrap.min.css" rel="stylesheet" />
    <link href="<?php echo BASEURL; ?>assets/css/dataTables.bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="<?php echo BASEURL; ?>assets/css/template.css">
    <script type="text/javascript" src="<?php echo BASEURL; ?>assets/js/jquery-3.1.1.min.js"></script>
    <script type="text/javascript" src="<?php echo BASEURL; ?>assets/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="<?php echo BASEURL; ?>assets/js/dataTables.bootstrap.min.js"></script>
    <script type="text/javascript" src="<?php echo BASEURL; ?>assets/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="<?php echo BASEURL; ?>assets/js/script.js"></script>
  </head>
  <body>
    <nav class="navbar navbar-inverse">
        <div class="container">
            <div id="navbar">
                <ul class="nav navbar-nav navbar-left">
                    <li>
                         <a href="<?php echo BASEURL; ?>">
                            CRUD PHP
                         </a>
                     </li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <div class="dropdown">
                        <button class="dropbtn">
                            Opções
                            <span class="caret"></span>
                        </button>
                        <div class="dropdown-content">
                            <a href="<?php echo BASEURL; ?>home/logout">Sair do sistema</a>
                        </div>

                    </div>
                </ul>
            </div>
        </div>
    </nav>
    <div class="container">
      <?php $this->loadViewer($viewName, $viewData_set); ?>
    </div>
  </body>
</html>
