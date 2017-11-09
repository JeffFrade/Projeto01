<?php
//Topo:
require_once 'topo.php';

//Verificando se o Usuário Está Logado:
if (isset($_SESSION['nome'])) {
    echo '<script type="text/javascript">location.href="../index.php";</script>';
}
?>
    <div class="container">
        <div class="col-lg-8">
            <h2 class="text-left">Esqueci Minha Senha</h2>
            <hr/>
            <form id="frmCadastro" name="frmCadastro" method="post" action="">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <i class="fa fa-user"></i> Dados Pessoais
                    </div>

                    <div class="panel-body">
                        <div class="alert alert-warning"><strong>Aviso:</strong> * = Preenchimento Obrigatório</div>

                        <div class="form-group">
                            <label for="txtCPF">* CPF:</label>
                            <input type="text" id="txtCPF" name="txtCPF" class="form-control" placeholder="CPF">
                        </div>

                        <div class="form-group">
                            <label for="txtEmail">* E-mail:</label>
                            <input type="email" id="txtEmail" name="txtEmail" class="form-control" placeholder="E-mail">
                        </div>

                        <button type="submit" class="btn btn-success" id="btnGerar" name="btnGerar">Gerar Nova Senha</button>

                        <div>
                            <br/>
                            <?php
                            if (isset($_POST['btnGerar'])) {

                            }
                            ?>
                        </div>
                    </div>
                </div>
            </form>
        </div>

        <?php
        //Div da Direita:
        require_once 'direita.php'
        ?>
    </div>
<?php
//Rodapé + Modal + Scripts:
require_once 'fullRodape.php';