<?php
//Topo:
require_once 'topo.php';
?>
        <div class="container">
            <div class="col-lg-8">
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
                                <input type="text" id="txtCpf" name="txtCpf" class="form-control" placeholder="CPF" maxlength="14">
                            </div>

                            <div class="form-group">
                                <label for="txtTelefone">Telefone:</label>
                                <input type="text" id="txtTelefone" name="txtTelefone" class="form-control" placeholder="Telefone">
                            </div>

                            <div class="form-group">
                                <label for="txtCelular">* Celular:</label>
                                <input type="text" id="txtCelular" name="txtCelular" class="form-control" placeholder="Celular" maxlength="14">
                            </div>

                            <div class="form-group">
                                <label for="txtCep">* CEP:</label>
                                <input type="text" id="txtCep" name="txtCep" class="form-control" placeholder="CEP" maxlength="8" v-model="cep" value="01514000">
                            </div>

                            <div class="form-group">
                                <label for="txtEndereco">* Endereço:</label>
                                <input type="text" id="txtEndereco" name="txtEndereco" class="form-control" placeholder="Endereço" v-model="endereco">
                            </div>

                            <div class="form-group">
                                <label for="txtBairro">* Bairro:</label>
                                <input type="text" id="txtBairro" name="txtBairro" class="form-control" placeholder="Bairro" v-model="bairro">
                            </div>

                            <div class="form-group">
                                <label for="txtViewCidade">* Cidade:</label>
                                <input type="text" id="txtViewCidade" name="txtViewCidade" class="form-control" placeholder="Cidade" disabled="disabled" v-model="cidade">
                            </div>

                            <div class="form-group">
                                <input type="hidden" id="txtCidade" name="txtCidade" class="form-control" placeholder="Cidade" value="{{ cidade }}">
                            </div>

                            <div class="form-group">
                                <label for="txtViewEstado">* Estado:</label>
                                <input type="text" id="txtViewEstado" name="txtViewEstado" class="form-control" placeholder="Estado" disabled="disabled" v-model="estado">
                            </div>

                            <div class="form-group">
                                <input type="hidden" id="txtEstado" name="txtEstado" class="form-control" placeholder="Estado" value="{{ estado }}">
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

                            <button type="submit" class="btn btn-success" id="btnCadastrar" name="btnCadastrar">Cadastrar</button>

                            <div>
                                <br/>
                                <?php
                                    if (isset($_POST['btnCadastrar'])) {
                                        $cliente->setNome($_POST['txtNome']);
                                        $cliente->setEmail($_POST['txtEmail']);
                                        $cliente->setDataNasc($_POST['txtDataNasc']);
                                        $cliente->setCpf($_POST['txtCpf']);
                                        $cliente->setTelefone($_POST['txtTelefone']);
                                        $cliente->setCelular($_POST['txtCelular']);
                                        $cliente->setCep($_POST['txtCep']);
                                        $cliente->setEndereco($_POST['txtEndereco']);
                                        $cliente->setBairro($_POST['txtBairro']);
                                        $cliente->setCidade($_POST['txtCidade']);
                                        $cliente->setEstado($_POST['txtEstado']);
                                        $cliente->setNumero($_POST['txtNumero']);
                                        $cliente->setComplemento($_POST['txtComp']);
                                        $cliente->setSenha($_POST['txtSenha']);

                                        echo $sCliente->insertCliente();
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