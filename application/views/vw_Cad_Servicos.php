<div class="container container-fluid ">
  <br>
  <div class="row">
    <div class="col-md-12">      
      <h3>Novo Serviço</h3>
    </div>
  </div>
  <br>
  <form class="form control " action="<?= base_url()?>Produtos_Servicos/CadastraServicos" method="post">
    <div class="row">
      <div class="col-md-6">
        <label for="nome_prod">Nome do Serviço:</label>
        <input type="text" class="form-control" id="nome_prod_serv" name="nome_prod_serv"
          placeholder="Informe o nome do servico" required></input>
      </div>
      <div class="col-md-3">
        <label for="tipo_prod">Tipo do Serviço:</label>
        <input type="text" class="form-control" id="tipo_prod_serv" name="tipo_prod_serv" placeholder="Tipo de servico"
          required></input>
      </div>
      <div class="col-md-3">
        <label for="valor_prod">R$ Valor do Serviço:</label>
        <input type="text" class="form-control" id="valor_venda_prod_serv" name="valor_venda_prod_serv"
          placeholder="Ex: R$ 1560.80" required></input>
      </div>
    </div>
    <br>
    <div class="row">
      <div class="col-md-12">
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