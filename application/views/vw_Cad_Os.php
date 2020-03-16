<!-- <!DOCTYPE html> -->
<div class="container container-fluid">
  <br><br>
  <div class="row">
    <div class="col-md-12">
      <h3>Nova Ordem de Serviço</h3>
    </div>
  </div>
  <!-- <br> -->
  <form class="form control " action="<?=base_url()?>Os/CadastraOs" method="post">
    <div class="row">
      <div class="col-md-6 ">
        <div class="form-group">
          <label for="cliente">Cliente:</label>
          <select class="form-control" id="cliente" name="cliente">
            <option selected>selecione</option>
            <?php foreach ($cliente as $nomecliente) {?>
            <option value="<?=$nomecliente->id_cliente;?>"> <?=$nomecliente->nome_cliente;?></option>
            <?php }?>
          </select>
        </div>
      </div>
      <div class="col-md-6">
        <div class="form-group">
          <label for="situacao">Situação:</label>
          <select class="form-control" id="situacao" name="situacao">
            <option selected> selecione</option>
            <option> Em Aberto</option>
            <option> Esperando Peças</option>
            <option disabled> Concluída</option>
          </select>
        </div>
      </div>
    </div>
    <!-- END ROW -->
    <div class="row">
      <div class="col-md-2">
        <label for="data_cheg">Data Entrada:</label>
        <input type="date"  value="<?php echo date("Y/m/d")?>" class="form-control" id="data_cheg" name="data_cheg" placeholder="Data de Entrada" required>
      </div>
      <div class="col-md-2">
        <label for="hora_cheg">Hora Entrada:</label>
        <input type="time" class="form-control" id="hora_cheg" name="hora_cheg" placeholder="Hora de Entrada" required>
      </div>

      <div class="col-md-2">
        <label for="data_prev">Data Prevista:</label>
        <input type="date" class="form-control" id="data_prev" name="data_prev" placeholder="Data prevista para entrega"
          required>

      </div>
      <div class="col-md-4">
        <label for="veiculo">Veículo:</label>
        <input type="text" class="form-control" id="veiculo" name="veiculo" placeholder="Nome do Veiculo" required>
      </div>
      <div class="col-md-2">
        <label for="placa">Placa:</label>
        <input type="text" class="form-control" id="placa" name="placa" placeholder="Placa do Veículo" required>
      </div>
    </div>
    <!-- END ROW -->
    <div class="row">
      <div class="col-md-6 ">
        <br>
        <label for="descricao">Descrição do Serviço </label>
        <textarea rows="3" cols="50" class="form-control" name="descricao" value="descricao"></textarea>
      </div>

      <div class="col-md-6 ">
        <br>
        <label for="idfuncionario">Responsável pelo Serviço:</label>
        <select class="form-control" id="idfuncionario" name="idfuncionario">
          <option selected>selecione</option>
          <?php foreach ($funcionario as $nomefuncionario) {?>
          <option value="<?=$nomefuncionario->id_funcionario;?>"> <?=$nomefuncionario->nome_funcionario;?>
          </option>
          <?php }?>
        </select>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12  ">
        <br><button type="submit" class="btn btn-success" name="salvar"> Salvar</button>
        <button type="reset" class=" btn btn-warning" name="limpar"> Limpar</button>
      </div>
    </div>
  </form>
</div>
</body>