<!DOCTYPE html>
<div class="container container-fluid">
<br><br>
  <div class="row">
    <div class="col-md-12 ">
      <h3>Editar Venda</h3><br>
    </div>
    <br>
  </div>
  <form class="form-group" action="<?= base_url()?>vendas/SalvarEditvendas" method="post">
    <input type="hidden" name="id_venda" id="id_venda" value="<?=$vendas[0]->id_venda;?>">
    <div class="row">
      <div class="col-md-2">
        <label for="numero_venda">Código:</label>
        <input disabled="true" type="text" class="form-control" id="numero_venda" name="numero_venda"
          placeholder="código da venda" value="<?=$vendas[0]->id_venda;?>">
      </div>
      <div class="col-md-6 ">
        <div class="form-group">
          <label for="cliente">Cliente:</label>
          <select required class="form-control" id="cliente" name="cliente">
            <option selected>selecione</option>
            <?php foreach ($clientes as $d){?>
            <option value="<?php echo $d->id_cliente ?>"
              <?php echo $d->id_cliente==$vendas[0]->id_cliente ?'selected':'';?>>
              <?php echo $d->nome_cliente ?> </option>
            <?php }?>
          </select>
        </div>
      </div>
      <div class="col-md-3">
        <div class="form-group">
          <label for="situacao">Situação:</label>
          <select required class="form-control" id="situacao_venda" name="situacao_venda">
            <option selected> <?=$vendas[0]->situacao_venda;?></option>
            <option> Em Aberto</option>
            <option> Esperando Produto</option>
          </select>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-4">
        <label for="situacao">Tipo de Venda:</label>
        <select required class="form-control" id="tipo_venda" name="tipo_venda">
          <option selected> <?=$vendas[0]->tipo_venda;?></option>
          <option> Balcão </option>
          <option> Outros </option>
        </select>
      </div>
      <br>
      <div class="col-md-4">
        <label for="data_venda">Data Venda:</label>
        <input type="text" class="form-control" id="data_venda" name="data_venda" placeholder="Data da Venda"
          value="<?=date('d/m/Y',strtotime($vendas[0]->data_venda));?>" required>
      </div>
      <div class="col-md-3">
        <label for="hora_venda">Hora Venda:</label>
        <input type="text" class="form-control" id="hora_venda" name="hora_venda" placeholder="Hora da Venda"
          value="<?=date('H:i',strtotime($vendas[0]->data_venda));?>" required>
      </div>
      <br>
    </div>
    <br>
    <div class="row">
      <div class="col-md-6 ">
        <label for="idfuncionario">Responsável pela venda:</label>
        <select required class="form-control" id="funcionario" name="funcionario">
          <option selected>selecione</option>
          <?php foreach ($funcionarios as $d) : ?>
          <option value="<?php echo $d->id_funcionario ?>"
            <?php echo $d->id_funcionario==$vendas[0]->id_funcionario ?'selected':'';?>>
            <?php echo $d->nome_funcionario ?>
          </option>
          <?php endforeach; ?>
        </select>
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