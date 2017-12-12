<div class="container">
    <div class="row">
        <div class="col-md-12 col-xs-12 text-center main-logo all-g">
            <img src="img/logo125.png" alt="Workless">
        </div>
    </div>
    <div class="row">
        <form class="col-md-12 col-xs-12" id="frmlog">
            <div class="form-group">
                <label>Login</label>
                <input type="text" name="login" class="form-control" placeholder="Login" maxlength="50" required autofocus>
            </div>
            <div class="form-group">
                <label>Senha</label>
                <input type="password" name="senha" class="form-control" placeholder="Senha" maxlength="50" required>
            </div>
            <div class="form-group">
                <label>Cargo</label>
                <select class="form-control">
                    <option value="4">Aluno</option>
                    <option value="3">Orientador</option>
                    <option value="2">Coordenador</option>
                    <option value="1">Instituição</option>
                </select>
            </div>
            <button class="btn btn-lg btn-primary btn-block top-m" type="submit">Acessar <i class="fa fa-lock" aria-hidden="true"></i></button>
            <button class="btn btn-md btn-default btn-block top-m" type="button" id="solicitarAcesso">Solicitar acesso <i class="fa fa-user-plus" aria-hidden="true"></i></button>
        </form>
    </div>
</div>