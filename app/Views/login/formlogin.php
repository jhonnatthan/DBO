<div class="container-fluid h-100">
    <div class="row h-100 justify-content-center align-items-center">
        <div class="col-md-5 col-xs-12 p-4 mb-4 bg-white rounded shadow-xs animated fadeInLeft">
            <p class="h2 text-primary text-center">Entrar</p>
            <form id="frmlog">
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
                <button class="btn btn-lg btn-primary btn-block" type="submit">Acessar <i class="fa fa-check" aria-hidden="true"></i></button>
            </form>
        </div>
        <div class="col-md-4 col-xs-12 p-5 mb-4 bg-primary text-white rounded align-self-center shadow-xs animated fadeInRight">
            <p class="h2 text-center mb-4">Precisa de ajuda <i class="fa fa-question"></i></p>
            <button class="btn btn-md btn-light btn-block mt-2" type="button" id="solicitarAcesso">Solicitar acesso <i class="fa fa-user-plus" aria-hidden="true"></i></button>
            <button class="btn btn-md btn-light btn-block mt-2" type="button" >Reportar erro <i class="fa fa-bug" aria-hidden="true"></i></button>
            <button class="btn btn-md btn-light btn-block mt-2" type="button" >Enviar e-mail <i class="fa fa-envelope" aria-hidden="true"></i></button>
        </div>
    </div>
</div>