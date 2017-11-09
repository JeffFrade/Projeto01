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
                        Consulta de Clientes
                    </h1>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title"><i class="fa fa-table fa-fw"></i> Clientes Cadastrados</h3>
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-bordered table-hover table-striped">
                                    <thead>
                                    <tr>
                                        <th class="text-center"><i class="fa fa-id-card"></i> CPF</th>
                                        <th class="text-center"><i class="fa fa-user"></i> Nome</th>
                                        <th class="text-center"><i class="fa fa-envelope-open"></i> E-mail</th>
                                        <th class="text-center"><i class="fa fa-phone"></i> Telefone</th>
                                        <th class="text-center"><i class="fa fa-mobile"></i> Celular</th>
                                        <th class="text-center"><i class="fa fa-search"></i> Visualizar</th>
                                    </tr>
                                    </thead>

                                    <tbody>
                                        <?= $sCliente->selectCliente(); ?>
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

