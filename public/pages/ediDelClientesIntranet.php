<?php
    //Arquivo com Instância de Classes e o Topo do HTML:
    require_once 'head.php';

    $cliente->setCpf($_GET['cpf']);
    $sCliente->findCliente();
?>

<body>
<div id="wrapper">
    <?php
        //Arquivo com o Menu:
        require_once 'menuIntranet.php';
    ?>

    <div id="page-wrapper">

        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">
                        Edição/Exclusão do Produto
                    </h1>
                </div>
            </div>

            <div id="app" class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title"><i class="fa fa-tags fa-fw"></i> Dados do Produto</h3>
                        </div>
                        <div class="panel-body">
                            <?php
                                //Formulário de Edição e Exclusão de Dados do Cliente:
                                require_once 'frmEdiDelCliente.php';
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
require_once 'scripts.php';
?>
</body>
</html>

