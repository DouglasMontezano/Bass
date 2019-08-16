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
                    <h2 >Editar Cliente</h2><br>
                     <caption>* Campos Obrigatórios</caption><br><br>
                </div>
            </div>
            <div class="row">
                <div class= "col-md-12 ">
                     <form class="form control " action="<?=base_url()?>Clientes/SalvarEditClientes" method="post" >
                                <input type="hidden" name="id_cliente" id="id_cliente" value="<?=$clientes[0]->id_cliente;?>"></input>
                        <div class="row">
                            <div class="col-md-6">
                                <label for="nome">Nome: *</label>
                                <input type="text" class="form-control" id="nome_cliente" name="nome_cliente"  placeholder="Informe o nome do cliente" required value="<?=$clientes[0]->nome_cliente;?>" ></input>
                            </div>
                            <div class="col-md-3">
                                <label for="fone">Telefone: *</label>
                                <input type="tel" class="form-control" id="fone_cliente" name="fone_cliente"  placeholder="Telefone do cliente" required value="<?=$clientes[0]->fone_cliente;?>"></input>
                            </div>
                            <div class="col-md-3">
                                <label for="fone2">Telefone 2:</label>
                                <input type="tel" class="form-control" id="fone2_cliente" name="fone2_cliente"  placeholder="Telefone 2 do cliente"  value="<?=$clientes[0]->fone2_cliente;?>"></input>
                            </div>
                            </div>
                        <br>
                        <div class="row">
                            <div class="col-md-4">
                                <label for="email">E-mail: *</label>
                                <input type="email" class="form-control" id="email_cliente" name="email_cliente"  placeholder="E-mail do cliente" value="<?=$clientes[0]->email_cliente;?>" required></input>
                            </div>
                            <div class="col-md-2">
                                <label for="cpf">CPF:</label>
                                <input type="text" class="form-control" id="cpf_cliente" name="cpf_cliente"  placeholder="CPF do cliente" value="<?=$clientes[0]->cpf_cliente;?>" ></input>
                            </div>
                            <div class="col-md-2">
                                <label for="rg">RG:</label>
                                <input type="text" class="form-control" id="rg_cliente" name="rg_cliente"  placeholder="RG do cliente" value="<?=$clientes[0]->rg_cliente;?>"></input>
                            </div>
                            <div class="col-md-4">
                                <label for="endereco">Endereço:</label>
                                <input type="text" class="form-control" id="endereco_cliente" name="endereco_cliente"  placeholder="Endereço do cliente" value="<?=$clientes[0]->endereco_cliente;?>" ></input>
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-md-2">
                                <label for="numero">Número:</label>
                                <input type="number" class="form-control" id="numero_casa_cliente" name="numero_casa_cliente"  placeholder="Número da Residência" value="<?=$clientes[0]->numero_casa_cliente;?>"></input>
                            </div>
                            <div class="col-md-4">
                                <label for="bairro">Bairro:</label>
                                <input type="text" class="form-control" id="bairro_cliente" name="bairro_cliente"  placeholder="bairro do cliente" value="<?=$clientes[0]->bairro_cliente;?>" ></input>
                            </div>
                            <div class="col-md-3">
                                <label for="cidade">Cidade: *</label>
                                <input type="text" class="form-control" id="cidade_cliente" name="cidade_cliente"  placeholder="cidade do cliente" value="<?=$clientes[0]->cidade_cliente;?>" requered></input>
                            </div>
                            <div class="col-md-3">
                                <label for="estado">Estado:</label>
                                <input type="text" class="form-control" id="estado_cliente" name="estado_cliente"  placeholder="estado do cliente" value="<?=$clientes[0]->estado_cliente;?>" ></input>
                            </div>
                        </div>
                        <br>
                    </div>
                    <br>
                    <div clas="row">
                        <div class="col-md-4" text-center>
                            <?php
                            if ($clientes[0]->desativado == '' or $clientes[0]->desativado == '0') {
                                echo "<label class='checkbox-inline'> <input type='checkbox' name='desativado' value='1'unchecked> Desativado </label>";
                            } else {
                                echo "<label class='checkbox-inline'> <input type='checkbox' name='desativado' value='1' checked> Desativado </label>";
                            }
                            ?>
                        </div>
                    </div>
                       <span>
                            <div class="col-md-12  ">
                                <br>
                                <button type="submit" class="btn btn-success"   name="salvar"> Salvar </button>
                                <button type="reset"  class=" btn btn-warning"   name="limpar"> Limpar </button>
                            </div>
                        </span>
                    </div>
                    </form>
               </div>
        </div>
    </div>
</body>