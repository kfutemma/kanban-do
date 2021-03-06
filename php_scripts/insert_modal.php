<!-- ADD MODAL - FIRST COLUMN -->

 <div class="modal fade newCards" id="modalAddCard1" role="dialog">
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
                    <div class="modal-header">
                    <span class="close" onclick='closeModal("modalAddCard1");'>&times;</span>
                    <h3 class="modal-title">New card</h3>
                </div>
                <div class="modal-body">
                        <form class="form-horizontal" id="target1" method='POST' action='new_card_1.php'>
                            <div class="form-group">
                                <label class="col-form-label col-sm-2" for="title1">Titulo:</label>
                                <div class="col-xs-12">
                                    <input name="title1" id="title1" class="form-control" type="text">
                                </div>
                            </div>
                                    
                            <div class="form-group">
                                <label class="col-form-label col-md-12" for="content1">Conteúdo:</label>
                                <div class="col-sm-5">
                                    <textarea class="form-control col-md-6 col-xs-12" id="content1" name='content1'></textarea>
                                </div>
                            </div>
                            <input type="submit" name="add1" id='add1' value="Adicionar" class="btn btn-primary">
                        </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" onclick='closeModal("modalAddCard1");'>Cancelar</button>
                </div>
            </div>              
        </div>
    </div>

<!-- ADD MODAL - SECOND COLUMN  -->
    <div class="modal fade newCards" id="modalAddCard2" role="dialog">
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
                    <div class="modal-header">
                    <span class="close" onclick='closeModal("modalAddCard1");'>&times;</span>
                    <h3 class="modal-title">New card</h3>
                </div>
                <div class="modal-body">
                        <form class="form-horizontal" method='POST' action='new_card_2.php'>
                            <div class="form-group">
                                <label class="col-form-label col-sm-2" for="title2">Titulo:</label>
                                <div class="col-xs-12">
                                    <input name="title2" id="title2" class="form-control" type="text">
                                </div>
                            </div>
                                    
                            <div class="form-group">
                                <label class="col-form-label col-md-12" for="content2">Conteúdo:</label>
                                <div class="col-sm-5">
                                    <textarea class="form-control col-md-6 col-xs-12" id="content2" name='content2'></textarea>
                                </div>
                            </div>
                            <input type="submit" name="add2" id='add1' value="Adicionar" class="btn btn-primary">
                        </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" onclick='closeModal("modalAddCard2");'>Cancelar</button>
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
                    <span class="close" onclick='closeModal("modalAddCard1");'>&times;</span>
                    <h3 class="modal-title">New card</h3>
                </div>
                <div class="modal-body">
                        <form class="form-horizontal" method='POST' action='new_card_3.php'>
                            <div class="form-group">
                                <label class="col-form-label col-sm-2" for="title3">Titulo:</label>
                                <div class="col-xs-12">
                                    <input name="title3" id="title3" class="form-control" type="text">
                                </div>
                            </div>
                                    
                            <div class="form-group">
                                <label class="col-form-label col-md-12" for="content3">Conteúdo:</label>
                                <div class="col-sm-5">
                                    <textarea class="form-control col-md-6 col-xs-12" id="content3" name='content3'></textarea>
                                </div>
                            </div>
                            <input type="submit" name="add3" id='add3' value="Adicionar" class="btn btn-primary">
                        </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" onclick='closeModal("modalAddCard3");'>Cancelar</button>
                </div>
            </div>              
        </div>
    </div>