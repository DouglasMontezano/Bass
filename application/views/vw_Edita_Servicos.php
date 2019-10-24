<div class="container fluid ">
  <br><br>
  <div class="row">
    <h3>Editar Servicos</h3><br>
  </div>
  <div class="row">
    <form class="form control " action="<?= base_url() ?>Produtos_Servicos/SalvarEditServicos" method="post">
      <input type="hidden" name="id_prod_serv" id="id_prod_serv" value="<?= $servicos[0]->id_prod_serv; ?>">
      <div class="row">
        <div class="col-md-6">
          <label for="nome_prod">Nome do Serviço:</label>
          <input type="text" class="form-control" id="nome_prod_serv" name="nome_prod_serv"
            placeholder="Informe o nome do servico" value="<?= $servicos[0]->nome_prod_serv; ?>" required>
        </div>
        <div class="col-md-3">
          <label for="tipo_prod">Tipo do Serviço:</label>
          <input type="text" class="form-control" id="tipo_prod_serv" name="tipo_prod_serv"
            placeholder="Tipo de servico" value="<?= $servicos[0]->tipo_prod_serv; ?>" required>
        </div>
        <div class="col-md-3">
          <label for="valor_prod">Valor do Serviço:</label>
          <input type="text" class="form-control" id="valor_venda_prod_serv" name="valor_venda_prod_serv"
            placeholder="Valor de venda do servico" value="<?= $servicos[0]->valor_venda_prod_serv; ?>"
            required>
        </div>
        <br>
        <div class="col-md-6 ">
          <label for="descricao_prod_serv">Descrição </label>
          <textarea rows="3" cols="50" class="form-control"
            name="descricao_prod_serv"> <?= $servicos[0]->descricao_prod_serv; ?> </textarea>
        </div>
        <div class="col-md-12  ">
          <br>
          <button type="submit" class="btn btn-success" name="salvar"> Salvar</button>
          <button type="reset" class=" btn btn-warning" name="limpar"> Limpar</button>
        </div>
    </form>
  </div>  
</div>
</body>