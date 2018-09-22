<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>Kanban-Do - yourr board, your way.</title>

    <!-- Bootstrap CSS CDN -->

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <!-- Our Custom CSS -->
    <link rel="stylesheet" href="style/style.css">

    <!-- Font Awesome JS -->
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous"></script>

    <script src="https://code.jquery.com/jquery-3.3.1.js" integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>

    <!-- Bootstrap JS -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <!-- CUSTOM JS -->
    <script type="text/javascript" src="javascript/script.js"></script>
</head>
<body>
    <div class="wrapper">
        <?php
             require 'php_scripts/sideMenu.php';
        ?>

        <div id="content">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="container-fluid">
                    <button type="button" id="sidebarCollapse" class="btn btn-info" style="width: 100px;">
                            <span class="glyphicon glyphicon-menu-hamburger"></span> Menu
                    </button>

                    <div style="float: right;">
                            <a class="navbar-brand" href="index.php" style="color: #6d7fcc">Kanban-Do</a>
                    </div>
                </div>  
            </nav>

        <div class="container">
            <div class="row">

                <div class="col-md-2 col-xs-12 header_coluna">
                    <h1><?php require 'php_scripts/load_name_board.php'; ?></h1>
                </div>
                <div class="col-md-3 col-xs-12 header_coluna">
                    <div class="titulo_coluna">
                        <h1>
                            <?php require 'php_scripts/load_name_column_1.php'; ?>
                        </h1>
                        <button type="button" class="btn btn-default btn-lg addButton" data-toggle="modal" data-target="#modalAddCard1">
                            <i class="fas fa-plus"></i>
                        </button>
                    </div>    
                    <div class="corpo_coluna" style="border: 2px solid rgb(255, 109, 85); background-color: rgb(255, 109, 85);">
                        <ul id="lista1">   
                            <?php require 'php_scripts/load_1_colomn.php'; ?>
                        </ul>
                    </div>
                </div>
                <div class="col-md-3 col-xs-12 header_coluna">
                    <div class="titulo_coluna">
                        <h1><?php require 'php_scripts/load_name_column_2.php';?></h1>
                        <button type="button" class="btn btn-default btn-lg addButton" data-toggle="modal" data-target="#modalAddCard2">
                            <i class="fas fa-plus"></i>
                        </button>
                    </div>  
                    <div class="corpo_coluna" style="border: 2px solid rgb(0, 193, 236); background-color: rgb(0, 193, 236);">
                        <ul id="lista2">
                            <?php require 'php_scripts/load_2_colomn.php' ;?>
                        </ul>
                    </div>
                </div>
                <div class="col-md-3 col-xs-12 header_coluna">
                    <div class="titulo_coluna">

                        <h1><?php require 'php_scripts/load_name_column_3.php';?></h1>

                        <button type="button" class="btn btn-default btn-lg addButton" data-toggle="modal" data-target="#modalAddCard3">
                            <i class="fas fa-plus"></i>
                        </button>
                    </div>  
                    <div class="corpo_coluna" style="border: 2px solid rgb(0, 222, 62); background-color: rgb(0, 222, 62);">
                        <ul id="lista3">
                            <?php require 'php_scripts/load_3_colomn.php'; ?> 
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php require 'php_scripts/insert_modal.php';?>

</body>
</html>



<!-- 

    <div class="modal fade newCards" id="myModal" role="dialog">
        <div class="modal-dialog">
          
            
                    <div class="modal-header">
                    <span class="close" data-dismiss="modal">&times;</span>
                    <h3 class="modal-title" contenteditable="true">Teste</h3>
                </div>
                <div class="modal-body">
                    <p contenteditable="true">teste</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Excluir</button>
                    <button type="button" class="btn btn-warning" data-dismiss="modal">Mover</button>
                    <button type="button" class="btn btn-info" data-dismiss="modal">Salvar</button>
                </div>
            </div>              
        </div>
    </div>

    
    <div class="modal fade newCards" id="myModal2" role="dialog">
        <div class="modal-dialog">
            
            <div class="modal-content">
                    <div class="modal-header">
                    <span class="close">&times;</span>
                    <h3 class="modal-title" contenteditable="true">Teste</h3>
                </div>
                <div class="modal-body">
                    <p contenteditable="true">teste</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Excluir</button>
                    <button type="button" class="btn btn-warning" data-dismiss="modal">Voltar</button>
                    <button type="button" class="btn btn-warning" data-dismiss="modal">Mover</button>
                    <button type="button" class="btn btn-info" data-dismiss="modal">Salvar</button>
                </div>
            </div>              
        </div>
    </div>


    
    <div class="modal fade newCards" id="myModal3" role="dialog">
        <div class="modal-dialog">
            
            <div class="modal-content">
                    <div class="modal-header">
                    <span class="close">&times;</span>
                    <h3 class="modal-title" contenteditable="true">Teste</h3>
                </div>
                <div class="modal-body" contenteditable="true">
                    <p contenteditable="true">teste</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Excluir</button>
                    <button type="button" class="btn btn-warning" data-dismiss="modal">Voltar</button>
                    <button type="button" class="btn btn-info" data-dismiss="modal">Salvar</button>
                </div>
            </div>              
        </div>
    </div>




-->


