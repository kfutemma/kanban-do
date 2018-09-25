    <div class="modal fade newCards" id="edit_modal_1" role="dialog">
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
                    <div class="modal-header">
                    <span class="close" onclick='closeModal("edit_modal_1");'>&times;</span>
                    <h3 class="modal-title">Editar Card</h3>
                </div>
                <div class="modal-body">
                        <form class="form-horizontal" method='POST' action='new_card_2.php'>
                            <div class="form-group">
                                <label class="col-form-label col-sm-2" for="title2">Titulo:</label>
                                <div class="col-xs-12 col-ms-2">
                                <input type='text' id='edit_card_title_1' name='edit_card_title_1' class='form-control'>
                                </div>
                            </div>
                                    
                            <div class="form-group">
                                <label class="col-form-label col-sm-2" for="content2">Conteúdo:</label>
                                <div class="col-xs-12 col-ms-2">
                                    <input type='text' id='edit_card_content_1' name='edit_card_content_1' class='form-control'>
                                </div>
                            </div>
                        </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" onclick='closeModal("edit_modal_1");'>Cancelar</button>
                </div>
            </div>              
        </div>
    </div>