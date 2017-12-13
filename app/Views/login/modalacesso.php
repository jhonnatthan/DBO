<div class="modal-content">
    <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Solicitar acesso</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
    <div class="modal-body">
        <div class="container">
            <div class="row">
                <div class="col">
                    <form id="frmSolicitaAcesso">
                        <div class="form-group">
                            <input type="text" name="nome" class="form-control" placeholder="Nome" maxlength="50" required autofocus>
                        </div>
                        <div class="form-group">
                            <input type="password" name="email" class="form-control" placeholder="E-mail" maxlength="50" required>
                        </div>
                        <div class="form-group">
                            <input type="text" name="curso" class="form-control" placeholder="Curso" maxlength="50" required>
                        </div>
                        <button class="btn btn btn-primary btn-block" type="submit" id="enviaSolicita">Solicitar <i class="fa fa-send" aria-hidden="true"></i></button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>