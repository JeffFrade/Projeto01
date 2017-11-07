<?php
//Topo:
require_once 'topo.php';
?>
    <div class="container">
        <div class="col-lg-8">
            <h2 class="text-left">Fale Conosco</h2>
            <hr/>
            <form id="frmCadastro" name="frmCadastro" method="post" action="">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <i class="fa fa-envelope-open"></i> Deixe Sua Mensagem
                    </div>

                    <div class="panel-body">
                        <div class="alert alert-warning"><strong>Aviso:</strong> * = Preenchimento Obrigatório</div>

                        <div class="form-group">
                            <label for="txtNome">* Nome:</label>
                            <input type="text" id="txtNome" name="txtNome" class="form-control" placeholder="Nome">
                        </div>

                        <div class="form-group">
                            <label for="txtEmail">* E-mail:</label>
                            <input type="email" id="txtEmail" name="txtEmail" class="form-control" placeholder="E-mail">
                        </div>

                        <div class="form-group">
                            <label for="txtMsg">* Mensagem:</label>
                            <textarea id="txtMsg" name="txtMsg" rows="5" class="form-control" placeholder="Mensagem"></textarea>
                        </div>

                        <button type="submit" class="btn btn-success" id="btnCadastrar" name="btnCadastrar">Cadastrar</button>

                        <div>
                            <br/>
                            <?php
                            if (isset($_POST['btnCadastrar'])) {

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