
<div class="container fluid ">
    <div class="row">
        <div class="col-md-12 ">
            <h2>Novo Funcionário</h2><br>
            <caption>* Campos Obrigatórios</caption>
            <br><br>
        </div>
    </div>
    <?php echo validation_errors(); ?>
    <form class="form control " action="<?= base_url() ?>Funcionarios/CadastraFuncionarios" method="post" rule="form">
        <div class="row">
            <div class="col-md-6 ">
                <label for="nome">Nome: *</label>
                <input type="text" class="form-control" id="nome_funcionario" name="nome_funcionario"
                       placeholder="Informe o nome do funcionário" required="Campo Obrigatório" required></input>
            </div>
            <div class="col-md-3">
                <label for="fone">Telefone: *</label>
                <input type="text" class="form-control" id="fone_funcionario" name="fone_funcionario"
                       placeholder="Telefone do funcionário" required="Campo Obrigatório"required></input>
            </div>
            <div class="col-md-3">
                <label for="email">E-mail: *</label>
                <input type="email" class="form-control" id="email_funcionario" name="email_funcionario"
                       placeholder="E-mail do funcionário" required="Campo Obrigatório"required></input>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-md-3">
                <label for="fone2">Senha:</label>
                <input type="text" class="form-control" id="senha_funcionario" name="senha_funcionario"
                       placeholder="Senha do funcionário"></input>
            </div>

            <div class="col-md-3">
                <label for="cpf">CPF: *</label>
                <input type="text" class="form-control" id="cpf_funcionario" name="cpf_funcionario"
                       placeholder="CPF do funcionário"required></input>
            </div>
            <div class="col-md-3">
                <label for="rg">RG: *</label>
                <input type="text" class="form-control" id="rg_funcionario" name="rg_funcionario"
                       placeholder="RG do funcionário"required></input>
            </div>
            <div class="col-md-3">
                <label for="endereco">PIS: *</label>
                <input type="text" class="form-control" id="pis_funcionario" name="pis_funcionario"
                       placeholder="PIS funcionário"required></input>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-md-6">
                <label for="endereco">Endereço:</label>
                <input type="text" class="form-control" id="endereco_funcionario" name="endereco_funcionario"
                       placeholder="Endereço do funcionário"></input>
            </div>

            <div class="col-md-2">
                <label for="numero">Número:</label>
                <input type="number" class="form-control" id="numero_casa_funcionario" name="numero_casa_funcionario"
                       placeholder="Número da Residência"></input>
            </div>
            <div class="col-md-4">
                <label for="bairro">Bairro:</label>
                <input type="text" class="form-control" id="bairro_funcionario" name="bairro_funcionario"
                       placeholder="Bairro do funcionário"></input>
            </div>
        </div>

        <br>

        <div class="row">
            <div class="col-md-4">
                <label for="cidade">Cidade: *</label>
                <input type="text" class="form-control" id="cidade_funcionario" name="cidade_funcionario"
                       placeholder="Cidade do funcionário" required="Campo Obrigatório"></input>
            </div>
            <div class="col-md-2">
                <label for="estado">Estado:</label>
                <input type="text" class="form-control" id="estado_funcionario" name="estado_funcionario"
                       placeholder="Estado do funcionário"></input>
            </div>
            <div class="col-md-3">
                <label for="data_entrada_funcionario">Data início do contrato</label>
                <input type="date" class="form-control" id="data_inicio_funcionario" name="data_inicio_funcionario"
                       placeholder="Início do Contrato"></input>
            </div>
            <div class="col-md-3">
                <label for="salario_funcionario">Salário do funcionário</label>
                <input type="text" class="form-control" id="salario_funcionario" name="salario_funcionario"
                       placeholder="Salário funcionário"></input>
            </div>
        </div>

        <div class="row">
        <span>
            <div class="col-md-12  ">
                <br>
                <button type="submit" class="btn btn-success" name="salvar"> Salvar </button>
                <button type="reset" class=" btn btn-warning" name="limpar"> Limpar </button>
            </div>
        </span>
        </div>
    </form>
</div>
</body>