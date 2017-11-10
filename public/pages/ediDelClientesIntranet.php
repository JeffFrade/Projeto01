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
                            <form id="frmEdiDelProduto" name="frmEdiDelProduto" method="post" action="">
                                <div class="form-group">
                                    <input type="hidden" id="txtCod" name="txtCod" value="<?= $produto->getCod(); ?>">
                                </div>

                                <div class="form-group">
                                    <label for="txtItem">Item:</label>
                                    <input type="text" id="txtItem" name="txtItem" class="form-control" placeholder="Item" value="<?= $produto->getItem(); ?>">
                                </div>

                                <div class="form-group">
                                    <label for="cmbCategoria">Categoria:</label>
                                    <select id="cmbCategoria" name="cmbCategoria" class="form-control">
                                        <?= $sCategoria->options(); ?>
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label for="txtDescricao">Descrição:</label>
                                    <textarea id="txtDescricao" name="txtDescricao" rows="5" class="form-control" placeholder="Descrição"><?= $produto->getDescricao(); ?></textarea>
                                </div>

                                <div class="form-group">
                                    <label for="txtPreco">Preço:</label>
                                    <input type="text" id="txtPreco" name="txtPreco" class="form-control" placeholder="Preço" value="<?= $produto->getPreco(); ?>">
                                </div>

                                <div class="form-group">
                                    <label for="cmbVitrine">Vitrine:</label>
                                    <select id="cmbVitrine" name="cmbVitrine" class="form-control">
                                        <option value="Sim" <?= ($produto->getVitrine() == "Sim"?'selected="selected"':'')?>>Sim</option>
                                        <option value="Não" <?= ($produto->getVitrine() == "Não"?'selected="selected"':'')?>>Não</option>
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label for="txtQtde">Quantidade:</label>
                                    <input type="text" id="txtQtde" name="txtQtde" class="form-control" placeholder="Quantidade" value="<?= $produto->getQtde(); ?>">
                                </div>

                                <div class="form-group">
                                    <label for="txtImagem">Imagem:</label>
                                    <input type="text" id="txtImagem" name="txtImagem" class="form-control" placeholder="Imagem" v-model="img" value="<?= $produto->getImagem(); ?>">
                                </div>

                                <div class="form-group">
                                    <a href="{{ img }}" data-lightbox="view"><img src="{{ img }}" class="img-responsive img-rounded viewImg"></a>
                                </div>

                                <button type="submit" id="btnEditar" name="btnEditar" class="btn btn-warning">Editar</button>
                                <button type="submit" id="btnDeletar" name="btnDeletar" class="btn btn-danger">Deletar</button>
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

