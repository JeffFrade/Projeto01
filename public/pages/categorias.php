<?php
//Arquivo com Instância de Classes e o Topo do HTML:
require_once 'head.php';

if (isset($_GET['id']) || !empty($_GET['id'])) {
    $categoria->setId($_GET['id']);
    $sCategoria->findCategoria();
}
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
                        Categorias
                    </h1>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-4">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title"><i class="fa fa-tag fa-fw"></i> Cadastrar Categoria</h3>
                        </div>

                        <div class="panel-body">
                            <form id="frmCadCategoria" name="frmCadCategoria" method="post" action="">
                                <div class="form-group">
                                    <label for="txtCategoria">Categoria:</label>
                                    <input type="text" id="txtCategoria" name="txtCategoria" class="form-control" placeholder="Categoria">
                                </div>

                                <button type="submit" id="btnCadastrar" name="btnCadastrar" class="btn btn-success">Cadastrar</button>

                                <div>
                                    <br/>
                                    <?php
                                        if (isset($_POST['btnCadastrar'])) {
                                            $categoria->setCategoria($_POST['txtCategoria']);

                                            echo $sCategoria->insertCategoria();
                                        }
                                    ?>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title"><i class="fa fa-table fa-fw"></i> Categorias Cadastradas</h3>
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-bordered table-hover table-striped">
                                    <thead>
                                    <tr>
                                        <th class="text-center"><i class="fa fa-tag"></i> Categoria</th>
                                        <th class="text-center"><i class="fa fa-search"></i> Visualizar</th>
                                    </tr>
                                    </thead>

                                    <tbody>
                                        <?= $sCategoria->selectCategoria(); ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title"><i class="fa fa-tag fa-fw"></i> Editar/Deletar Categoria</h3>
                        </div>

                        <div class="panel-body">
                            <form id="frmEdiDelCategoria" name="frmEdiDelCategoria" method="post" action="categorias.php?id=<?=$_GET['id']?>">
                                <div class="form-group">
                                    <input type="hidden" id="txtId" name="txtId" class="form-control" value="<?= (isset($_GET['id']) || !empty($_GET['id'])?$_GET['id']:""); ?>">
                                </div>

                                <div class="form-group">
                                    <label for="txtCategoria">Categoria:</label>
                                    <input type="text" id="txtCategoria" name="txtCategoria" class="form-control" placeholder="Categoria" <?= (!isset($_GET['id']) || empty($_GET['id'])?'disabled="disabled"':""); ?> value="<?= (isset($_GET['id']) || !empty($_GET['id'])?$categoria->getCategoria():""); ?>">
                                </div>

                                <button type="submit" id="btnEditar" name="btnEditar" class="btn btn-warning" <?= (!isset($_GET['id']) || empty($_GET['id'])?'disabled="disabled"':""); ?>>Editar</button>
                                <button type="submit" id="btnDeletar" name="btnDeletar" class="btn btn-danger" <?= (!isset($_GET['id']) || empty($_GET['id'])?'disabled="disabled"':""); ?>>Deletar</button>

                                <div>
                                    <br/>
                                    <?php
                                    if (isset($_POST['btnEditar'])) {
                                        $categoria->setCategoria($_POST['txtCategoria']);
                                        $categoria->setId($_POST['txtId']);

                                        echo $sCategoria->updateCategoria();
                                    }

                                    if (isset($_POST['btnDeletar'])) {
                                        $categoria->setId($_POST['txtId']);

                                        echo $sCategoria->deleteCategoria();
                                    }
                                    ?>
                                </div>
                            </form>
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

