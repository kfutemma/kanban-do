<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>Kanban-Do - Your board, your way.</title>

    <!-- Bootstrap CSS CDN -->

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <!-- Our Custom CSS -->
    <link rel="stylesheet" href="style/style.css">

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

    <?php include 'db.php';?>

    <div class="wrapper">
        <nav id="sidebar">
            <div class="sidebar-header">
                <span class="glyphicon glyphicon-menu-hamburger"></span>
                <h3>Menu</h3>
            </div>

            <ul class="list-unstyled components">
                <li class="active">
                    <a href="#">Perfil</a>
                </li>
                <p>Boards</p>
                <li>
                    <a href="#">About</a>
                </li>
            </ul>

        </nav>

        <div id="content">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="container-fluid">
                    <button type="button" id="sidebarCollapse" class="btn btn-info" style="width: 100px;">
                            <span class="glyphicon glyphicon-menu-hamburger"></span> Menu
                    </button>

                    <div style="float: right;">
                            <a class="navbar-brand" href="#" style="color: #6d7fcc">Kanban-Do</a>
                    </div>
                </div>  
            </nav>

        <div class="container">
            <div class="row">

                <div class="col-md-2 col-xs-12 header_coluna">
                    <h1>BOARD</h1>
                    <h2>Creator</h2>
                    <h2>Kaique Futemma</h2>
                </div>
                <div class="col-md-3 col-xs-12 header_coluna">
                    <div class="titulo_coluna">
                        <h1>TO DO</h1>
                        <button type="button" class="btn btn-default btn-lg addButton" data-toggle="modal" data-target="#modalAddCard1">
                            <i class="fas fa-plus"></i>
                        </button>
                    </div>    
                    <div class="corpo_coluna" style="border: 2px solid rgb(255, 109, 85); background-color: rgb(255, 109, 85);">
                        <ul id="lista1">   
                        </ul>
                    </div>
                </div>
                <div class="col-md-3 col-xs-12 header_coluna">
                    <div class="titulo_coluna">
                        <h1>DOING</h1>
                        <button type="button" class="btn btn-default btn-lg addButton" data-toggle="modal" data-target="#modalAddCard2">
                            <i class="fas fa-plus"></i>
                        </button>
                    </div>  
                    <div class="corpo_coluna" style="border: 2px solid rgb(0, 193, 236); background-color: rgb(0, 193, 236);">
                        <ul id="lista2">
                               
                        </ul>
                    </div>
                </div>
                <div class="col-md-3 col-xs-12 header_coluna">
                    <div class="titulo_coluna">
                        <h1>DONE</h1>
                        <button type="button" class="btn btn-default btn-lg addButton" data-toggle="modal" data-target="#modalAddCard3">
                            <i class="fas fa-plus"></i>
                        </button>
                    </div>  
                    <div class="corpo_coluna" style="border: 2px solid rgb(0, 222, 62); background-color: rgb(0, 222, 62);">
                        <ul id="lista3">
                              
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Card click MODAL - first column -->
    <div class="modal fade newCards" id="myModal" role="dialog">
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
                    <div class="modal-header">
                    <span class="close">&times;</span>
                    <h3 class="modal-title" contenteditable="true">Teste</h3>
                </div>
                <div class="modal-body">
                    <p>teste</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
                </div>
            </div>              
        </div>
    </div>

    <!-- Card click MODAL - Second column -->
    <div class="modal fade newCards" id="myModal2" role="dialog">
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
                    <div class="modal-header">
                    <span class="close">&times;</span>
                    <h3 class="modal-title" contenteditable="true">Teste</h3>
                </div>
                <div class="modal-body">
                    <p>teste</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
                </div>
            </div>              
        </div>
    </div>


    <!-- Card click MODAL - Third column -->
    <div class="modal fade newCards" id="myModal3" role="dialog">
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
                    <div class="modal-header">
                    <span class="close">&times;</span>
                    <h3 class="modal-title" contenteditable="true">Teste</h3>
                </div>
                <div class="modal-body">
                    <p>teste</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
                </div>
            </div>              
        </div>
    </div>



    <!-- ADD MODAL - FIRST COLUMN -->

    <div class="modal fade newCards" id="modalAddCard1" role="dialog">
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
                    <div class="modal-header">
                    <span class="close" data-dismiss="modal">&times;</span>
                    <h3 class="modal-title">New card</h3>
                </div>
                <div class="modal-body">
                        <form class="form-horizontal">
                            <div class="form-group">
                                <label class="col-form-label col-sm-2" for="title1">Title:</label>
                                <div class="col-xs-12">
                                    <input name="title1" id="title1" class="form-control" type="text">
                                </div>
                            </div>
                                    
                            <div class="form-group">
                                <label class="col-form-label col-md-12" for="content1">Content:</label>
                                <div class="col-sm-5">
                                    <textarea class="form-control col-md-6 col-xs-12" id="content1"></textarea>
                                </div>
                            </div>
                        </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" id="add1">Add card</button>
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
                </div>
            </div>              
        </div>
    </div>

    <!-- ADD MODAL - SECOND COLUMN -->

    <div class="modal fade newCards" id="modalAddCard2" role="dialog">
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
                    <div class="modal-header">
                    <span class="close" data-dismiss="modal">&times;</span>
                    <h3 class="modal-title">New card</h3>
                </div>
                <div class="modal-body">
                        <form class="form-horizontal">
                            <div class="form-group">
                                <label class="col-form-label col-sm-2" for="title2">Title:</label>
                                <div class="col-xs-12">
                                    <input name="title2" id="title2" class="form-control" type="text">
                                </div>
                            </div>
                                    
                            <div class="form-group">
                                <label class="col-form-label col-md-12" for="content2">Content:</label>
                                <div class="col-sm-5">
                                    <textarea class="form-control col-md-6 col-xs-12" id="content2"></textarea>
                                </div>
                            </div>
                        </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" id="add2">Add card</button>
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
                </div>
            </div>              
        </div>
    </div>

    <!-- ADD MODAL - THIRD COLUMN -->

    <div class="modal fade newCards" id="modalAddCard3" role="dialog">
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
                    <div class="modal-header">
                    <span class="close" data-dismiss="modal">&times;</span>
                    <h3 class="modal-title">New card</h3>
                </div>
                <div class="modal-body">
                        <form class="form-horizontal">
                            <div class="form-group">
                                <label class="col-form-label col-sm-2" for="title3">Title:</label>
                                <div class="col-xs-12">
                                    <input name="title3 id="title3" class="form-control" type="text">
                                </div>
                            </div>
                                    
                            <div class="form-group">
                                <label class="col-form-label col-md-12" for="content3">Content:</label>
                                <div class="col-sm-5">
                                    <textarea class="form-control col-md-6 col-xs-12" id="content3"></textarea>
                                </div>
                            </div>
                        </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" id="add3">Add card</button>
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
                </div>
            </div>              
        </div>
    </div>
</body>
</html>






