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
                        <button type="button" id="sidebarCollapse" class="btn btn-info" style="width: 100px;"" data-toggle="modal" data-target="#login_modal">Login</button>
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
                                <div class="inlineinput">
                                    <input type="password" id="newUserPsw1" class="form-control" placeholder="Digite sua senha">
                                    <input type="password" id="newUserPsw2" class="form-control" placeholder="Confirmar senha" style="width: 45%;">
                                </div>
                            </div>
                            <input type="submit" id="cadastrar_btn" value="Cadastrar" class="btn btn-info cadastrarBtn"> 
                            <small class="form-text text-muted">Nós em hipótese alguma compartilharemos suas informações.</small>
                        </form> 
                    </div>
                    
                </div>                
            </div>
        </div>
        <footer class="page-footer font-small blue pt-4">

    <!-- Footer Links -->
    <div class="container-fluid text-center text-md-left">

      <!-- Grid row -->
      <div class="row">

        <!-- Grid column -->
        <div class="col-md-6 mt-md-0 mt-3">

          <!-- Content -->
          <h5 class="text-uppercase">Kanban-do</h5>
          <p>Kanban-do é um projeto realizado por Kaique Futemma e Matheus Castro. Trabalho dedicado a disciplina de desenvolvimento WEB dada pelo Instituto Federal de São Paulo - Campus Campinas pelos professores André Bordignon e Henrique.</p>

        </div>
        <!-- Grid column -->

        <hr class="clearfix w-100 d-md-none pb-3">

        <!-- Grid column -->
        <div class="col-md-3 mb-md-0 mb-3">

            <!-- Links -->
            <h5 class="text-uppercase">Links úteis</h5>

            <ul class="list-unstyled">
              <li>
                <a href="https://www.cmp.ifsp.edu.br/">IFSP</a>
              </li>
            </ul>

          </div>
          <!-- Grid column -->

          <!-- Grid column -->
          <div class="col-md-3 mb-md-0 mb-3">

            <!-- Links -->
            <h5 class="text-uppercase">Social media</h5>

            <ul class="list-unstyled">
              <li>
                <a href="#!">Link 1</a>
              </li>
            </ul>

          </div>
          <!-- Grid column -->

      </div>
      <!-- Grid row -->

    </div>
    <!-- Footer Links -->

    <!-- Copyright -->
    <div class="footer-copyright text-center py-3">© 2018 Copyright:
      <a href="#">Kaique Futemma</a>
    </div>
    <!-- Copyright -->

  </footer>

  <!-- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -->

  <!-- Modal -->
    <div class="modal fade" id="login_modal" role="dialog">
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
                    <div class="modal-header">
                    <span class="close" data-dismiss="modal" style="color: red;">&times;</span>
                    <h3 class="modal-title">Já sou cadastrado</h3>
                </div>
                <div class="modal-body">
                    <form class="form-horizontal" action="/verificar.php" method="POST" id="form_login">
                            <div class="form-group">
                                <label class="col-form-label col-sm-2" for="nome">Usuário:</label>
                                <div class="col-xs-12">
                                    <input name="user" id="userID" class="form-control" type="text">
                                </div>
                            </div>
                                    
                            <div class="form-group">
                                <label class="col-form-label col-sm-2" for="nome">Senha:</label>
                                <div class="col-xs-12">
                                    <input name="psw" id="pswID" class="form-control" type="password">
                                </div>
                            </div>
                            <div class="modal-footer">
                                <input type="submit" name="submit1" value="Entrar" class="btn btn-info cadastrarBtn">
                            </div>
                        </form>
                </div>
            </div>              
        </div>
    </div>
</body>
</html>