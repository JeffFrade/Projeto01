<?php
//Arquivo com Instância de Classes e o Topo do HTML:
require_once 'head.php';
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
                        Consulta de Produtos
                    </h1>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title"><i class="fa fa-table fa-fw"></i> Produtos Cadastrados</h3>
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-bordered table-hover table-striped">
                                    <thead>
                                        <tr>
                                            <th class="text-center"><i class="fa fa-barcode"></i> Código</th>
                                            <th class="text-center"><i class="fa fa-tags"></i> Item</th>
                                            <th class="text-center"><i class="fa fa-tag"></i> Categoria</th>
                                            <th class="text-center"><i class="fa fa-money"></i> Preço</th>
                                            <th class="text-center"><i class="fa fa-asterisk"></i> Quantidade</th>
                                            <th class="text-center"><i class="fa fa-search"></i> Visualizar</th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                        <?= $sProduto->selectProduto(); ?>
                                    </tbody>
                                </table>
                            </div>
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

