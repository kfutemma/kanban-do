<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>Kanban-do - Your board, your way.</title>

    <!-- Bootstrap CSS CDN -->

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <!-- Our Custom CSS -->
    <link rel="stylesheet" href="style/login_style.css">

    <!-- Font Awesome JS -->
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous"></script>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <!-- Popper.JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>

    <!-- Bootstrap JS -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <!-- CUSTOM JS -->
    <script type="text/javascript" src="javascript/script.js"></script>
</head>
<body>
    <div class="wrapper">
        <div id="content">
            <nav class="navbar navbar-expand-lg navbar-light bg-light list-inline">
                <div class="container-fluid">
                    <div style="float: left;">
                        <a class="navbar-brand" href="#" style="color: #6d7fcc">Kanban-do</a>
                    </div>
                    <div style="float: right; padding-top: 8px;">
                        <label style="padding-right: 10px;" for="sidebarCollapse">Já sou cadastrado </label>
                        <button type="button" id="sidebarCollapse" class="btn btn-info" style="width: 100px;">
                                Login
                        </button>
                    </div>
                </div>
            </nav>

        <div class="container">
            <div class="row">
                <div class="col-md-6 col-xs-12" id="img_div">
                    <h2 class="h2">Kanban-do</h2>
                    <img src="images/login_kanban_image.png" class="img-responsive center-block" alt="kanban board">
                    <p class="lead">Kanban-do é sua mais nova ferramenta para organização pessoal e profissional. "Your board, your way!"; aqui você terá controle de tudo que você colocar em seu board.</p>
                </div>

                <div class="col-md-6 col-xs-12" id="cadastro_div">
                    
                    <h1>Abrir uma conta</h1>

                    <div>
                        <form>
                            <div class="form-group">
                                <label for="userName">Nome de usuário</label>
                                <input type="email" id="userName" class="form-control" placeholder="Usuário">
                            </div>
                            <div class="form-group">
                                <label for="newUserEmail">Email</label>
                                <input type="email" class="form-control" id="newUserEmail" placeholder="Digite seu email">
                            </div>
                            <div class="form-group">
                                <label for="newUserPsw1">Senha</label>
                                <div class="form-inline ">
                                    <input type="password" id="newUserPsw1" class="form-control" placeholder="Digite sua senha" style="width: 49.7%">
                                    <input type="password" id="newUserPsw2" class="form-control" placeholder="Confirmar senha" style="width: 49.6%">
                                    <small class="form-text text-muted">Nós em hipótese alguma compartilharemos suas informações.</small>
                                </div>
                            </div>
                            <input type="submit" id="cadastrarBtn" value="Cadastrar" class="btn btn-info"> 
                        </form> 
                    </div>
                    
                </div>                
            </div>
        </div>
    </body>
</html>





<?php
    
    $servername = 'root';
    $user_db = 'beyonce';
    $password_db = 'teste';
    $db_name = 'users';

    $con = mysqli_connect($servername, $user_db, $password_db, $db_name);

    // Check connection
    if (mysqli_connect_errno()) {
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }
?>
