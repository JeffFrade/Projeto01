<?php
//Topo:
require_once 'topo.php';

$produto->setCod($_GET['cod']);
?>
    <div class="container">
        <div class="col-lg-8">
            <?= $sProduto->mountVisualizacao(); ?>

            <?php
                if (isset($_POST['btnCarrinho'])) {
                    if (!isset($_SESSION['nome'])) {

                    }
                }
            ?>
        </div>

        <?php
        //Div da Direita:
        require_once 'direita.php'
        ?>
    </div>
<?php
//Rodapé + Modal + Scripts:
require_once 'fullRodape.php';