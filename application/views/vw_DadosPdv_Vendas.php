<!-- <!DOCTYPE html> -->
<div class="container container-fluid">
    <br><br>
  <div class="row">
    <div class="col-md-12 ">
      <h3>Venda</h3>
    </div> 
   </div>
  <form class="form control" action="<?=base_url()?>vendas/SalvarEditvendas" method="post">
    <input type="hidden" name="id_venda" id="id_venda" value="<?=$vendas[0]->id_venda;?>"></input>
    <div class="row">
      <div class="col-md-2">
        <label for="numero_venda">Código:</label>
        <input disabled="true" type="text" class="form-control" id="numero_venda" name="numero_venda"
          placeholder="código da venda" value="<?=$vendas[0]->id_venda;?>"></input>
      </div>
      <div class="col-md-2">
        <label for="situacao">Tipo de Venda:</label>
        <input disabled="true" type="text" class="form-control" id="tipo_venda" name="tipo_venda"
          value="<?=$vendas[0]->tipo_venda;?>"></input>
      </div>

      <div class="col-md-2">
        <label for="situacao">Situação:</label>
        <input disabled="true" type="text" class="form-control" id="situacao_venda" name="situacao_venda"
          value="<?=$vendas[0]->situacao_venda;?>"></input>
      </div>
      <div class="col-md-3">
        <label for="data_venda">Data Venda:</label>
        <input disabled="true" type="text" class="form-control" id="data_venda" name="data_venda"
          placeholder="Data da Venda" value="<?=date('d/m/Y', strtotime($vendas[0]->data_venda));?>" required></input>
      </div>
      <div class="col-md-3">
        <label for="hora_venda">Hora Venda:</label>
        <input disabled="true" type="text" class="form-control" id="hora_venda" name="hora_venda"
          placeholder="Hora da Venda" value="<?=date('H:i', strtotime($vendas[0]->data_venda));?>" required></input>
        <br>
      </div>

      <div class="col-md-6 ">
        <label for="cliente">Cliente:</label>
        <input disabled="true" type="text" class="form-control" id="nome_cliente" name="nome_cliente"
          placeholder="nome_cliente" value="<?=$vendas[0]->nome_cliente;?>"></input>
      </div>
      <div class="col-md-6 ">
        <label for="idfuncionario">Responsável pela venda:</label>
        <input disabled="true" type="text" class="form-control" id="funcionario" name="funcionario"
          placeholder="funcionario" value="<?=$vendas[0]->nome_funcionario;?>"></input>
        <br>
      </div>
      </div>
  </form>
</div>