<!--Modal-->
<div class="modal fade" id="login" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel"><i class="fa fa-user"></i> Efetue Login</h4>
            </div>
            <div class="modal-body">
                <form id="frmLogin" name="" method="post" action="">
                    <div class="form-group">
                        <label for="txtEmail">E-mail:</label>
                        <div class="input-group">
                            <span class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span></span>
                            <input type="email" id="txtEmail" name="txtEmail" class="form-control" placeholder="E-mail">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="txtSenha">Senha:</label>
                        <div class="input-group">
                            <span class="input-group-addon"><span class="glyphicon glyphicon-lock"></span></span>
                            <input type="password" id="txtSenha" name="txtSenha" class="form-control" placeholder="Senha">
                        </div>
                    </div>

                    <div class="form-group">
                        <a href="#">Esqueci Minha Senha</a><br/>
                    </div>

                    <button type="submit" id="btnLogin" name="btnLogin" class="btn btn-success">Login</button>
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
                </form>
            </div>
        </div>
    </div>
</div>
<!--Fim Modal-->
