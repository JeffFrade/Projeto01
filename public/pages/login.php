<?php
    //Head odo HTML:
    require_once 'head.php';
?>
<body id="app" class="login-bg">
<div class="container">
    <div class="row vertical-offset-100">
        <div class="col-md-4 col-md-offset-4">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h3 class="panel-title"><i class="fa fa-user"></i> Identifique-Se</h3>
                </div>
                <div class="panel-body">
                    <form id="frmLogin" name="frmLogin" method="post" action="">
                        <fieldset>
                            <div class="form-group">
                                <div class="input-group">
                                    <span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>
                                    <input class="form-control" placeholder="Usuário" id="txtUsuario" name="txtUsuario" type="text">
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="input-group">
                                    <span class="input-group-addon"><span class="glyphicon glyphicon-lock"></span></span>
                                    <input class="form-control" placeholder="Senha" id="txtSenha" name="txtSenha" type="password">
                                </div>
                            </div>

                            <button type="submit" id="btnLogin" name="btnLogin" class="btn btn-success btn-lg btn-block">Login</button>
                        </fieldset>
                        <br/>
                        <?php
                            if (isset($_POST['btnLogin'])) {
                                $funcionario->setUsuario($_POST['txtUsuario']);
                                $funcionario->setMd5Senha($_POST['txtSenha']);

                                echo $sFuncionario->login();
                            }
                        ?>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
<?php
    require_once 'scripts.php';
?>
