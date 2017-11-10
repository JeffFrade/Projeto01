<div class="alert alert-warning"><strong>Aviso:</strong> * = Preenchimento Obrigatório</div>

<div class="form-group">
    <label for="txtNome">* Nome:</label>
    <input type="text" id="txtNome" name="txtNome" class="form-control" placeholder="Nome" value="<?= $cliente->getNome();?>">
</div>

<div class="form-group">
    <label for="txtEmail">* E-mail:</label>
    <input type="email" id="txtEmail" name="txtEmail" class="form-control" placeholder="E-mail" value="<?= $cliente->getEmail();?>">
</div>

<div class="form-group">
    <label for="txtDataNasc">* Data de Nascimento:</label>
    <input type="date" id="txtDataNasc" name="txtDataNasc" class="form-control" value="<?= $cliente->getDataNasc();?>">
</div>

<div class="form-group">
    <input type="hidden" id="txtCpf" name="txtCpf" class="form-control" value="<?= $cliente->getCpf();?>">
</div>

<div class="form-group">
    <label for="txtCPF">* CPF:</label>
    <input type="text" id="txtViewCpf" name="txtViewCpf" class="form-control" placeholder="CPF" disabled="disabled" value="<?= $cliente->getCpf();?>">
</div>

<div class="form-group">
    <label for="txtTelefone">Telefone:</label>
    <input type="text" id="txtTelefone" name="txtTelefone" class="form-control" placeholder="Telefone" value="<?= $cliente->getTelefone();?>">
</div>

<div class="form-group">
    <label for="txtCelular">* Celular:</label>
    <input type="text" id="txtCelular" name="txtCelular" class="form-control" placeholder="Celular" value="<?= $cliente->getCelular();?>">
</div>

<div class="form-group">
    <label for="txtCep">* CEP:</label>
    <input type="text" id="txtCep" name="txtCep" class="form-control" maxlength="8" v-model="cep" placeholder="CEP" value="<?= $cliente->getCep();?>">
</div>

<div class="form-group">
    <label for="txtEndereco">* Endereço:</label>
    <input type="text" id="txtEndereco" name="txtEndereco" class="form-control" v-model="endereco" placeholder="Endereço">
</div>

<div class="form-group">
    <label for="txtBairro">* Bairro:</label>
    <input type="text" id="txtBairro" name="txtBairro" class="form-control" v-model="bairro" placeholder="Bairro">
</div>

<div class="form-group">
    <input type="hidden" id="txtCidade" name="txtCidade" class="form-control" v-model="cidade">
</div>

<div class="form-group">
    <label for="txtViewCidade">* Cidade:</label>
    <input type="text" id="txtViewCidade" name="txtViewCidade" class="form-control" v-model="cidade" placeholder="Cidade" disabled="disabled">
</div>

<div class="form-group">
    <input type="hidden" id="txtEstado" name="txtEstado" class="form-control" v-model="estado">
</div>

<div class="form-group">
    <label for="txtViewEstado">* Estado:</label>
    <input type="text" id="txtViewEstado" name="txtViewEstado" class="form-control" v-model="estado" placeholder="Estado" disabled="disabled">
</div>

<div class="form-group">
    <label for="txtNumero">* Número:</label>
    <input type="text" id="txtNumero" name="txtNumero" class="form-control" placeholder="Número" value="<?= $cliente->getNumero();?>">
</div>

<div class="form-group">
    <label for="txtComp">Complemento:</label>
    <input type="text" id="txtComp" name="txtComp" class="form-control" placeholder="Complemento" value="<?= $cliente->getComplemento();?>">
</div>

<p>Para Alterar a Senha, <a href="#">Clique Aqui</a></p>

<button type="submit" class="btn btn-warning" id="btnEditar" name="btnEditar">Editar Dados</button>
<button type="submit" class="btn btn-danger" id="btnDeletar" name="btnDeletar">Excluir Dados</button>

<div>
    <br/>

</div>