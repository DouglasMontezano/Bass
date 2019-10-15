       <div class="container fluid ">
         <div class="row">
           <div class="col-md-12 ">
             <h2>Novo Produto</h2><br>
             <caption>* Campos Obrigatórios</caption><br><br>
           </div>
         </div>
         <form class="form control " action="<?= base_url()?>Produtos_Servicos/CadastraProdutos" method="post">
           <div class="row">
             <div class="col-md-4 ">
               <label for="nome_prod">Nome: *</label>
               <input type="text" class="form-control" id="nome_prod_serv" name="nome_prod_serv"
                 placeholder="Informe o nome do produto" required></input>
             </div>
             <div class="col-md-3">
               <label for="tipo_prod">Tipo:</label>
               <input type="text" class="form-control" id="tipo_prod_serv" name="tipo_prod_serv"
                 placeholder="Tipo de produto"></input>
             </div>
             <div class="col-md-3">
               <label for="text">Marca: *</label>
               <input type="text" class="form-control" id="marca_prod_serv" name="marca_prod_serv"
                 placeholder="Marca do produto" required></input>
             </div>
           </div>
           <br>
           <div class="row">
             <div class="col-md-2">
               <label for="quant_prod">Quantidade em Estoque: *</label>
               <input type="number" class="form-control" id="qtd_estoque_prod_serv" name="qtd_estoque_prod_serv"
                 placeholder="Quantidade " required></input>
             </div>
             <div class="col-md-2">
               <label for="valor_prod">Valor de Venda: </label>
               <input type="text" class="form-control" id="valor_venda_prod_serv" name="valor_venda_prod_serv"
                 placeholder="Ex: 1200.45"></input>
             </div>
             <div class="col-md-2">
               <label for="data_compra_prod_serv">Data da Compra: *</label>
               <input type="date" class="form-control" id="data_compra_prod_serv" name="data_compra_prod_serv"
                 placeholder="00/00/0000" requered></input>
             </div>
             <div class="col-md-6 ">
               <label for="descricao_prod_serv">Descrição </label>
               <textarea rows="3" cols="50" class="form-control" name="descricao_prod_serv"
                 value="descricao_prod_serv"></textarea>
             </div>
           </div>
           <br>
           <div class="row">
             <div class="col-md-12  ">
               <button type="submit" class="btn btn-success" name="salvar"> Salvar</button>
               <button type="reset" class=" btn btn-warning" name="limpar"> Limpar</button>
             </div>
           </div>
         </form>
       </div>
       </body>