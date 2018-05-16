<!DOCTYPE html>
       <div class="container fluid ">
              <div class="row">
                <div class= "col-md-12 ">
                    <h2 >Editar Produto</h2><br>
                </div>
            </div>

            <div class="row">
                <div class= "col-md-12 ">
                    <form class="form control " action="<?= base_url()?>Produtos_Servicos/SalvarEditProdutos" method="post" >
                        <input type="hidden" name="id_prod_serv" id="id_prod_serv" value="<?=$produtos[0]->id_prod_serv;?>"></input>
                        <div class="row">
                        <div class="col-md-2">
                        <label for="numero_prod">Código:</label>
                            <input disabled="true" type="text" class="form-control" id="numero_prod" name="numero_prod"  placeholder="código da OS" value="<?=$produtos[0]->id_prod_serv;?>"></input>
                        </div>

                        <div class="col-md-4 ">
                            <label for="nome_prod">Nome:</label>
                            <input type="text" class="form-control" id="nome_prod_serv" name="nome_prod_serv"  placeholder="Informe o nome do produto" required value="<?=$produtos[0]->nome_prod_serv;?>"required ></input>
                        </div>
                        <div class="col-md-3">
                            <label for="tipo_prod">Tipo:</label>
                            <input type="text" class="form-control" id="tipo_prod_serv" name="tipo_prod_serv"  placeholder="Tipo de Produto" value="<?=$produtos[0]->tipo_prod_serv;?>" required></input>
                        </div>
                        <div class="col-md-3">
                            <label for="text">Marca:</label>
                            <input type="text" class="form-control" id="marca_prod_serv" name="marca_prod_serv"  placeholder="Marca do Produto" value="<?=$produtos[0]->marca_prod_serv;?>" required></input>
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-md-2">
                            <label for="quant_prod">Quantidade em Estoque:</label>
                            <input type="text" class="form-control" id="qtd_estoque_prod_serv" name="qtd_estoque_prod_serv"  placeholder="Quantidade " value="<?=$produtos[0]->qtd_estoque_prod_serv;?>" required> </input>
                        </div>

                        <div class="col-md-2">
                            <label for="valor_prod">Valor de Venda:</label>
                            <input type="text" class="form-control" id="valor_venda_prod_serv" name="valor_venda_prod_serv"  placeholder="Valor de venda do produto" value="<?=$produtos[0]->valor_venda_prod_serv;?>" required> </input>
                        </div>


                        <div class="col-md-2">
                            <label for="data_compra_prod_serv">Data da Compra:</label>
                            <input type="text" class="form-control" id="data_compra_prod_serv" name="data_compra_prod_serv" value="<?=date('d/m/Y',strtotime($produtos[0]->data_compra_prod_serv));?>">  </input>
                        </div>
                        <div class="col-md-6 ">
                            <label for="descricao_prod_serv">Descrição </label>
                            <textarea rows="3" cols="50"  class="form-control" name="descricao_prod_serv" > <?=$produtos[0]->descricao_prod_serv;?> </textarea>
                        </div>

                    <div class="row">
                        <div class="col-md-12  ">
                            <br>
                            <button type="submit" class="btn btn-success"   name="salvar"> Salvar</button>
                            <button type="reset" class=" btn btn-warning"   name="limpar"> Limpar</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>