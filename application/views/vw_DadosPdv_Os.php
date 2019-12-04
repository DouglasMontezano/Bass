<div class="container container-fluid">
  <br><br>
  <div class="row">
    <div class="col-md-12 ">
      <h3>Ordem de Serviço</h3>
    </div>
  </div>
  <form class="form control" action="<?= base_url()?>Os/SalvarEditOs" method="post">
    <div class="row">
      <input type="hidden" name="id_os" id="id_os" value="<?=$os[0]->id_os;?>">
      <div class="col-md-2">
        <label for="numero_os">Código:</label>
        <input disabled="true" type="text" class="form-control" id="numero_os" name="numero_os"
          placeholder="código da OS" value="<?=$os[0]->id_os;?>">
      </div>
      <div class="form-group col-xs-12 col-sm-12 col-md-7 col-lg-7">
        <label for="">Clientes</label>
        <select disabled class="form-control" name="clientes" id="clientes" required="required">
          <option disabled value=""> Selecione um Cliente</option>
          <?php foreach ($clientes as $d) : ?>
          <option disabled value="<?php echo $d->id_cliente ?>"
            <?php echo $d->id_cliente==$os[0]->id_cliente ?'selected':'';?>>
            <?php echo $d->nome_cliente ?>
          </option>
          <?php endforeach; ?>
        </select>
      </div>
      <div class="col-md-3">
        <div class="form-group">
          <label for="situacao">Situação:</label>
          <select disabled class="form-control" id="situacao" name="situacao">
            <option disabled selected> <?=$os[0]->situacao;?></option>
          </select>
        </div>
      </div>
    </div>
    <!-- END ROW -->
    <div class="row">
      <br><br><br>
      <div class="col-md-2">
        <label for="data_cheg">Data Entrada:</label>
        <input disabled type="text" class="form-control" id="data_cheg" name="data_cheg"
          value="<?=date('d/m/Y',strtotime($os[0]->data_cheg));?>" placeholder="Data de Chegada" required>
      </div>
      <div class="col-md-2">
        <label for="hora_cheg">Hora Entrada:</label>
        <input disabled type="text" class="form-control" id="hora_cheg" name="hora_cheg"
          value="<?=date('H:i',strtotime($os[0]->data_cheg));?>" placeholder="Hora de Entrada" required>
      </div>

      <div class="col-md-2">
        <label for="data_prev">Data Prevista:</label>
        <input disabled type="text" class="form-control" id="data_prev" name="data_prev"
          value="<?=date('d/m/Y',strtotime($os[0]->data_prev));?>" placeholder="Data prevista para entrega" required>
      </div>
      <div class="col-md-2">
        <label for="data_fim">Data Entrega:</label>
        <input disabled tYpe="text" class="form-control" id="data_fim" name="data_fim"
          value="<?=date('d/m/Y',strtotime($os[0]->data_entre));?>" placeholder="Data de Entrega">
      </div>
      <div class="col-md-2">
        <label for="veiculo">Veículo:</label>
        <input disabled type="text" class="form-control" id="veiculo" name="veiculo" value="<?=$os[0]->veiculo;?>"
          placeholder="Nome do Veiculo" required>
      </div>
      <div class="col-md-2">
        <label for="placa">Placa:</label>
        <input disabled type="text" class="form-control" id="placa" name="placa" value="<?=$os[0]->placa;?>"
          placeholder="Placa do Veículo" required>
      </div>
    </div>
    <!-- END ROW -->
    <div class="row">
      <div class="col-md-6 ">
        <br>
        <label for="descricao">Descrição do Serviço </label>
        <textarea disabled rows="3" cols="50" class="form-control"
          name="descricao"><?=$os[0]->descricao_os;?></textarea>
      </div>
      <div class="form-group col-xs-12 col-sm-12 col-md-6 col-lg-6">
        <br>
        <label for="">Responsável pelo Serviço:</label>
        <select disabled class="form-control" name="idfuncionario" id="idfuncionario" required="required">
          <option value="">Selecione o Responsável Pelo Serviço</option>
          <?php foreach ($funcionarios as $d) : ?>
          <option value="<?php echo $d->id_funcionario ?>"
            <?php echo $d->id_funcionario==$os[0]->id_funcionario ?'selected':'';?>>
            <?php echo $d->nome_funcionario ?>
          </option>
          <?php endforeach; ?>
        </select>
      </div>
    </div>
  </form>
</div>
</body>