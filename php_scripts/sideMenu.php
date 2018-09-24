<nav id="sidebar">
    <div class="sidebar-header">
        <span class="glyphicon glyphicon-menu-hamburger"></span>
        <h3>Menu</h3>
        <br>
        <h4>Boards</h4>
    </div>

    <ul class="list-unstyled components">
        <li class="active">
            
            
        </li>

        <?php 
            require 'php_scripts/db.php';

            //var_dump($connection);

            $query = 'SELECT * FROM boards;';

            $result = mysqli_query($connection, $query);            

            while($row = mysqli_fetch_assoc($result)) {
                echo "<li id='boardID{$row['ID']}'><a href='index.php?ID={$row['ID']}'>{$row['name']}</a></li>";
            }
        ?>

    </ul>

    <div class="sidebar-header">
        <button type="button" id="newBoard" class="btn btn-info" data-toggle="modal" data-target="#modalAddBoard">
            <span class="glyphicon glyphicon-plus"></span> New board
        </button>
    </div>

</nav>

 <!-- ADD NEW BOARD MODAL -->

    <div class="modal fade newCards" id="modalAddBoard" role="dialog">
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
                    <div class="modal-header">
                    <span class="close" data-dismiss="modal">&times;</span>
                    <h3 class="modal-title">New Board</h3>
                </div>
                <div class="modal-body">
                        <form class="form-horizontal" action="/new_board.php" method="get">
                            <div class="form-group">
                                <label class="col-form-label col-sm-2" for="title1">Title:</label>
                                <div class="col-xs-12">
                                    <input name="title_board" id="title1" class="form-control" type="text">
                                </div>
                            </div>
                                    
                            <div class="form-group">
                                <label class="col-form-label col-md-12" for="content1">Primeira coluna:</label>
                                <div class="col-sm-5">
                                    <textarea class="form-control col-md-6 col-xs-12" id="coluna1" name='coluna1'></textarea>
                                </div>

                                <label class="col-form-label col-md-12" for="content1">Segunda coluna:</label>
                                <div class="col-sm-5">
                                    <textarea class="form-control col-md-6 col-xs-12" id="coluna2" name='coluna2'></textarea>
                                </div>

                                <label class="col-form-label col-md-12" for="content1">Terceira coluna:</label>
                                <div class="col-sm-5">
                                    <textarea class="form-control col-md-6 col-xs-12" id="coluna3" name='coluna3'></textarea>
                                </div>
                            </div>
                            <input type="submit" name="add1" id='add1' value="Adicionar" class="btn btn-primary">
                        </form>
                </div>
                <div class="modal-footer">
                    
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
                </div>
            </div>              
        </div>
    </div>
