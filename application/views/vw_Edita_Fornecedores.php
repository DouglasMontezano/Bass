<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script type="text/javascript" src="http://cdnjs.cloudflare.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
    <script type="text/javascript" src="http://netdna.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
    <link href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="http://pingendo.github.io/pingendo-bootstrap/themes/default/bootstrap.css" rel="stylesheet" type="text/css">
</head>

<body>
    <div class="container fluid ">
        <div class="row">
            <div class= "col-md-12 ">
                <h2 >Editar Fornecedores</h2><br>
                <caption>* Campos Obrigatórios</caption><br><br>
            </div>
        </div>

        <div class="row">
            <div class= "col-md-12 ">
                <form class="form control " action="<?= base_url()?>Fornecedores/SalvarEditFornecedores" method="post" >

                    <input type="hidden" name="id_fornecedor" id="id_fornecedor" value="<?=$fornecedores[0]->id_fornecedor;?>"></input>
                    <div class="row">
                            <div class="col-md-6 ">
                                <label for="nome">Nome: *</label>
                                <input type="text" class="form-control" id="nome_fornecedor" name="nome_fornecedor"  placeholder="Informe o nome do fornecedor" required="Campo Obrigatório" value="<?=$fornecedores[0]->nome_fornecedor;?>"></input>
                            </div>
                            <div class="col-md-3">
                                <label for="fone">Telefone: *</label>
                                <input type="tel" class="form-control" id="fone_fornecedor"  name="fone_fornecedor"  placeholder="Telefone do fornecedor" required="Campo Obrigatório" value="<?=$fornecedores[0]->fone_fornecedor;?>"></input>
                            </div>
                            <div class="col-md-3">
                                <label for="fone2">Telefone 2:</label>
                                <input type="tel" class="form-control" id="fone2_fornecedor" name="fone2_fornecedor"  placeholder="Telefone 2 do fornecedor"value="<?=$fornecedores[0]->fone2_fornecedor;?>"></input>
                            </div>
                    </div>
                    <br>
                    <div class="row">
                            <div class="col-md-4">
                                <label for="email">E-mail: *</label>
                                <input type="email" class="form-control" id="email_fornecedor" name="email_fornecedor"  placeholder="E-mail do fornecedor" required="Campo Obrigatório"value="<?=$fornecedores[0]->email_fornecedor;?>"></input>
                            </div>
                            <div class="col-md-2">
                                <label for="cpf">CPF:</label>
                                <input type="text" class="form-control"  id="cpf_fornecedor" name="cpf_fornecedor"  placeholder="CPF do fornecedor" value="<?=$fornecedores[0]->cpf_fornecedor;?>"></input>
                            </div>
                            <div class="col-md-2">
                                <label for="rg">CNPJ:</label>
                                <input type="text" class="form-control" id="cnpj_fornecedor" name="cnpj_fornecedor"  placeholder="CNPJ do fornecedor" required="Campo Obrigatório"value="value="<?=$fornecedores[0]->cnpj_fornecedor;?>"></input>
                            </div>
                            <div class="col-md-4">
                                <label for="endereco">Endereço:</label>
                                <input type="text" class="form-control" id="endereco_fornecedor" name="endereco_fornecedor"  placeholder="Endereço do fornecedor"value="<?=$fornecedores[0]->endereco_fornecedor;?>"></input>
                            </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-md-2">
                            <label for="numero">Número:</label>
                            <input type="number" class="form-control" id="numero_casa_fornecedor" name="numero_casa_fornecedor"  placeholder="Número da Residência"value="<?=$fornecedores[0]->numero_casa_fornecedor;?>"></input>
                        </div>
                        <div class="col-md-4">
                            <label for="bairro">Bairro:</label>
                            <input type="text" class="form-control" id="bairro_fornecedor" name="bairro_fornecedor"  placeholder="bairro do fornecedor" value="<?=$fornecedores[0]->bairro_fornecedor;?>"></input>
                        </div>
                        <div class="col-md-3">
                            <label for="cidade">Cidade: *</label>
                            <input type="text" class="form-control" id="cidade_fornecedor" name="cidade_fornecedor"  placeholder="cidade do fornecedor" required="Campo Obrigatório" value="<?=$fornecedores[0]->cidade_fornecedor;?>"></input>
                        </div>
                        <div class="col-md-3">
                            <label for="estado">Estado:</label>
                            <input type="text" class="form-control" id="estado_fornecedor" name="estado_fornecedor"  placeholder="estado do fornecedor" value="<?=$fornecedores[0]->estado_fornecedor;?>"></input>
                        </div>
                        <br>
                    </div>
                    <div class="row">
                        <div class="col-md-6 ">
                            <label for="nome">Nome Vendedor: *</label>
                            <input type="text" class="form-control" id="nome_vendedor" name="nome_vendedor"  placeholder="Informe o nome do vendedor" required="Campo Obrigatório" value="<?=$fornecedores[0]->nome_vendedor;?>"></input>
                        </div>
                        <div class="col-md-6">
                            <label for="fone">Telefone Vendedor: *</label>
                            <input type="tel" class="form-control" id="fone_vendedor"  name="fone_vendedor"  placeholder="Telefone do vendedor" required="Campo Obrigatório" value="<?=$fornecedores[0]->fone_vendedor;?>"></input>
                        </div>
                    </div>
                    <br>
                    <br>
                    <span>
                        <div class="col-md-12  ">
                            <br>
                            <button type="submit" class="btn btn-success"   name="salvar"> Salvar </button>
                            <button type="reset"  class=" btn btn-warning"   name="limpar"> Limpar </button>
                        </div>
                    </span>
                </form>
            </div>
        </div>
    </div>
</body>