<?php
//Topo:
require_once 'topo.php';

if (!isset($_SESSION['cpf'])) {
    echo '<script type="text/javascript">location.href="../index.php";</script>';
}

$cliente->setCpf($_SESSION['cpf']);
$sCliente->findCliente();
?>
    <div class="container">
        <div id="app" class="col-lg-8">
            <h2 class="text-left">Editar/Excluir Dados</h2>
            <hr/>
            <form id="frmCadastro" name="frmCadastro" method="post" action="">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <i class="fa fa-user"></i> Dados Pessoais
                    </div>

                    <div class="panel-body">
                        <?php
                            //Formulário de Edição e Exclusão de Dados do Cliente:
                            require_once 'frmEdiDelCliente.php';
                        ?>
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