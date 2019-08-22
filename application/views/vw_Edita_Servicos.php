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
                    <h2 >Editar Servicos</h2><br>
                </div>
            </div>

            <div class="row">
                <div class= "col-md-12 ">
                    <form class="form control " action="<?= base_url()?>Produtos_Servicos/SalvarEditServicos" method="post" >
                        <input type="hidden" name="id_prod_serv" id="id_prod_serv" value="<?=$servicos[0]->id_prod_serv;?>"></input>
                        <div class="row">

                    <div class="col-md-4 ">
                        <label for="nome_prod">Nome do Serviço:</label>
                        <input type="text" class="form-control" id="nome_prod_serv" name="nome_prod_serv"  placeholder="Informe o nome do servico"  value="<?=$servicos[0]->nome_prod_serv;?>" required ></input>
                    </div>
                    <div class="col-md-3">
                        <label for="tipo_prod">Tipo do Serviço:</label>
                        <input type="text" class="form-control" id="tipo_prod_serv" name="tipo_prod_serv"  placeholder="Tipo de servico" value="<?=$servicos[0]->tipo_prod_serv;?>" required></input>
                    </div>
                    <div class="col-md-2">
                        <label for="valor_prod">Valor do Serviço:</label>
                        <input type="text" class="form-control" id="valor_venda_prod_serv" name="valor_venda_prod_serv"  placeholder="Valor de venda do servico" value="<?=$servicos[0]->valor_venda_prod_serv;?>" required></input>
                    </div>
                            <div class="col-md-6 ">
                                <label for="descricao_prod_serv">Descrição </label>
                                <textarea rows="3" cols="50"  class="form-control" name="descricao_prod_serv" > <?=$servicos[0]->descricao_prod_serv;?> </textarea>
                            </div>
                    <div class="col-md-12  ">
                    <br>
                        <button type="submit" class="btn btn-success"   name="salvar"> Salvar</button>
                         <button type="reset" class=" btn btn-warning"   name="limpar"> Limpar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>