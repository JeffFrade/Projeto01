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
                        Cadastro de Produto
                    </h1>
                </div>
            </div>

            <div id="app" class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title"><i class="fa fa-plus fa-fw"></i> Cadastrar Produto</h3>
                        </div>
                        <div class="panel-body">
                            <form id="frmCadProduto" name="frmCadProduto" method="post" action="">
                                <div class="form-group">
                                    <label for="txtItem">Item:</label>
                                    <input type="text" id="txtItem" name="txtItem" class="form-control" placeholder="Item">
                                </div>

                                <div class="form-group">
                                    <label for="cmbCategoria">Categoria:</label>
                                    <select id="cmbCategoria" name="cmbCategoria" class="form-control">
                                        <?= $sCategoria->options(); ?>
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label for="txtDescricao">Descrição:</label>
                                    <textarea id="txtDescricao" name="txtDescricao" rows="5" class="form-control" placeholder="Descrição"></textarea>
                                </div>

                                <div class="form-group">
                                    <label for="txtPreco">Preço:</label>
                                    <input type="text" id="txtPreco" name="txtPreco" class="form-control" placeholder="Preço">
                                </div>

                                <div class="form-group">
                                    <label for="cmbVitrine">Vitrine:</label>
                                    <select id="cmbVitrine" name="cmbVitrine" class="form-control">
                                        <option value="S">Sim</option>
                                        <option value="N">Não</option>
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label for="txtQtde">Quantidade:</label>
                                    <input type="text" id="txtQtde" name="txtQtde" class="form-control" placeholder="Quantidade">
                                </div>

                                <div class="form-group">
                                    <label for="txtImg">Imagem:</label>
                                    <input type="text" id="txtImg" name="txtImg" class="form-control" placeholder="Imagem" v-model="img">
                                </div>

                                <div class="form-group">
                                    <a href="{{ img }}" data-lightbox="view"><img src="{{ img }}" class="img-responsive img-rounded viewImg"></a>
                                </div>

                                <button type="submit" id="btnCadastrar" name="btnCadastrar" class="btn btn-success">Cadastrar</button>
                            </form>

                            <div>
                                <br/>
                                <?php
                                    if (isset($_POST['btnCadastrar'])) {
                                        $produto->setItem($_POST['txtItem']);
                                        $produto->setCategoria($_POST['cmbCategoria']);
                                        $produto->setDescricao($_POST['txtDescricao']);
                                        $produto->setPreco($_POST['txtPreco']);
                                        $produto->setVitrine($_POST['cmbVitrine']);
                                        $produto->setQtde($_POST['txtQtde']);
                                        $produto->setImagem($_POST['txtImg']);

                                        echo $sProduto->insertProduto();
                                    }
                                ?>
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

