

<body>
    <div class="container fluid ">
        <div class="row">
            <div class= "col-md-12 ">
                <h2 >Novo Fornecedor</h2><br>
                <caption>* Campos Obrigatórios</caption><br><br>
            </div>
        </div>
        <div class="row">
            <div class= "col-md-12 ">
                <?php echo validation_errors(); ?>
                <form class="form control " action="<?= base_url()?>Fornecedores/CadastraFornecedores" method="post" rule="form">
                    <div class="row">
                        <div class="col-md-6 ">
                            <label for="nome">Nome: *</label>
                            <input type="text" class="form-control" id="nome_fornecedor" name="nome_fornecedor"  placeholder="Informe o nome do fornecedor" required="Campo Obrigatório"></input>
                        </div>
                        <div class="col-md-3">
                            <label for="fone">Telefone: *</label>
                            <input type="tel" class="form-control" id="fone_fornecedor"  name="fone_fornecedor"  placeholder="Telefone do fornecedor" required="Campo Obrigatório"></input>
                        </div>
                        <div class="col-md-3">
                            <label for="fone2">Telefone 2:</label>
                            <input type="tel" class="form-control" id="fone2_fornecedor" name="fone2_fornecedor"  placeholder="Telefone 2 do fornecedor" ></input>
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-md-4">
                            <label for="email">E-mail: *</label>
                            <input type="email" class="form-control" id="email_fornecedor" name="email_fornecedor"  placeholder="E-mail do fornecedor" required="Campo Obrigatório"></input>
                        </div>
                        <div class="col-md-2">
                            <label for="cpf">CPF:</label>
                            <input type="text" class="form-control"  id="cpf_fornecedor" name="cpf_fornecedor"  placeholder="CPF do fornecedor"></input>
                        </div>
                        <div class="col-md-2">
                            <label for="rg">CNPJ: *</label>
                            <input type="text" class="form-control" id="cnpj_fornecedor" name="cnpj_fornecedor"  placeholder="CNPJ do fornecedor" required="Campo Obrigatório"></input>
                        </div>
                        <div class="col-md-4">
                            <label for="endereco">Endereço:</label>
                            <input type="text" class="form-control" id="endereco_fornecedor" name="endereco_fornecedor"  placeholder="Endereço do fornecedor"></input>
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-md-2">
                            <label for="numero">Número:</label>
                            <input type="number" class="form-control" id="numero_casa_fornecedor" name="numero_casa_fornecedor"  placeholder="Número da Residência"></input>
                        </div>
                        <div class="col-md-4">
                            <label for="bairro">Bairro:</label>
                            <input type="text" class="form-control" id="bairro_fornecedor" name="bairro_fornecedor"  placeholder="bairro do fornecedor" ></input>
                        </div>
                        <div class="col-md-3">
                            <label for="cidade">Cidade: *</label>
                            <input type="text" class="form-control" id="cidade_fornecedor" name="cidade_fornecedor"  placeholder="cidade do fornecedor" required="Campo Obrigatório" ></input>
                        </div>
                        <div class="col-md-3">
                            <label for="estado">Estado:</label>
                            <input type="text" class="form-control" id="estado_fornecedor" name="estado_fornecedor"  placeholder="estado do fornecedor" ></input>
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-md-6 ">
                            <label for="nome">Nome Vendedor: *</label>
                            <input type="text" class="form-control" id="nome_vendedor" name="nome_vendedor"  placeholder="Informe o nome do vendedor" required="Campo Obrigatório"></input>
                        </div>
                        <div class="col-md-6">
                            <label for="fone">Telefone Vendedor: *</label>
                            <input type="tel" class="form-control" id="fone_vendedor"  name="fone_vendedor"  placeholder="Telefone do vendedor" required="Campo Obrigatório"></input>
                        </div>
                    </div>
                    <br>
                    </div>
                    <br>
                    <div clas="row">
                         <span>
                            <div class="col-md-12  ">
                                <br>
                                <button type="submit" class="btn btn-success"   name="salvar"> Salvar </button>
                                <button type="reset"  class=" btn btn-warning"  name="limpar"> Limpar </button>
                            </div>
                        </span>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>