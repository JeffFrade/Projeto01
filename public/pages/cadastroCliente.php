<?php
//Topo:
require_once 'topo.php';
?>
        <div class="container">
            <div class="col-md-8">
                <h2 class="text-left">Cadastre-Se</h2>
                <hr/>
                <form id="frmCadastro" name="frmCadastro" method="post" action="">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <i class="fa fa-user"></i> Dados Pessoais
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
                                <label for="txtDataNasc">* Data de Nascimento:</label>
                                <input type="date" id="txtDataNasc" name="txtDataNasc" class="form-control" value="<?= date('Y-m-d')?>">
                            </div>

                            <div class="form-group">
                                <label for="txtCpf">* CPF:</label>
                                <input type="text" id="txtCpf" name="txtCpf" class="form-control" placeholder="CPF">
                            </div>

                            <div class="form-group">
                                <label for="txtTelefone">Telefone:</label>
                                <input type="text" id="txtTelefone" name="txtTelefone" class="form-control" placeholder="Telefone">
                            </div>

                            <div class="form-group">
                                <label for="txtCelular">* Celular:</label>
                                <input type="text" id="txtCelular" name="txtCelular" class="form-control" placeholder="Celular">
                            </div>

                            <div class="form-group">
                                <label for="txtCep">* CEP:</label>
                                <input type="text" id="txtCep" name="txtCep" class="form-control" placeholder="CEP">
                            </div>

                            <div class="form-group">
                                <label for="txtEndereco">* Endereço:</label>
                                <input type="text" id="txtEndereco" name="txtEndereco" class="form-control" placeholder="Endereço">
                            </div>

                            <div class="form-group">
                                <label for="txtViewCidade">* Cidade:</label>
                                <input type="text" id="txtViewCidade" name="txtViewCidade" class="form-control" placeholder="Cidade" disabled="disabled">
                            </div>

                            <div class="form-group">
                                <input type="hidden" id="txtCidade" name="txtCidade" class="form-control" placeholder="Cidade">
                            </div>

                            <div class="form-group">
                                <label for="txtViewEstado">* Estado:</label>
                                <input type="text" id="txtViewEstado" name="txtViewEstado" class="form-control" placeholder="Estado" disabled="disabled">
                            </div>

                            <div class="form-group">
                                <input type="hidden" id="txtEstado" name="txtEstado" class="form-control" placeholder="Estado">
                            </div>

                            <div class="form-group">
                                <label for="txtNumero">* Número:</label>
                                <input type="text" id="txtNumero" name="txtNumero" class="form-control" placeholder="Número">
                            </div>

                            <div class="form-group">
                                <label for="txtComp">Complemento:</label>
                                <input type="text" id="txtComp" name="txtComp" class="form-control" placeholder="Complemento">
                            </div>

                            <div class="form-group">
                                <label for="txtSenha">* Senha:</label>
                                <input type="password" id="txtSenha" name="txtSenha" class="form-control" placeholder="Senha">
                            </div>

                            <button type="submit" class="btn btn-success btn-right" id="btnCadastrar" name="btnCadastrar">Cadastrar</button>
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