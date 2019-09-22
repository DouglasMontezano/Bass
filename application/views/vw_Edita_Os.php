<!DOCTYPE html>

<div class="container">
    <div class="row">
        <div class="col-md-12 ">
            <h2>Editar Ordem de Serviço</h2><br>
        </div>
    </div>
    <br>
    <form class="form control " action="<?=base_url()?>Os/SalvarEditOs" method="post">
        <div class="row">
            <input type="hidden" name="id_os" id="id_os" value="<?=$os[0]->id_os;?>"></input>
            <div class="col-md-2">
                <label for="numero_os">Código:</label>
                <input disabled="true" type="text" class="form-control" id="numero_os" name="numero_os" placeholder="código da OS" value="<?=$os[0]->id_os;?>"></input>
            </div>
            <div class="form-group col-xs-12 col-sm-12 col-md-7 col-lg-7">
                <label for="">Clientes</label>
                <select class="form-control" name="clientes" id="clientes" required="required">
                    <option value=""> Selecione um Cliente</option>
                    <?php foreach ($clientes as $d): ?>
                        <option value="<?php echo $d->id_cliente ?>" <?php echo $d->id_cliente == $os[0]->id_cliente ? 'selected' : ''; ?>>
                            <?php echo $d->nome_cliente ?>
                        </option>
                    <?php endforeach;?>
                </select>
            </div>

            <div class="col-md-3">
                <div class="form-group">
                    <label for="situacao">Situação:</label>
                    <select class="form-control" id="situacao" name="situacao">
                        <option selected> <?=$os[0]->situacao;?></option>
                        <option> Em Aberto </option>
                        <option> Esperando Peças </option>

                    </select>
                </div>
            </div>
            <br>
            <br>
            <br>
            <div class="col-md-2">
                <label for="data_cheg">Data Entrada:</label>
                <input type="text" class="form-control" id="data_cheg" name="data_cheg" value="<?=date('d/m/Y', strtotime($os[0]->data_cheg));?>" placeholder="Data de Chegada" required></input>
            </div>
            <div class="col-md-2">
                <label for="hora_cheg">Hora Entrada:</label>
                <input type="text" class="form-control" id="hora_cheg" name="hora_cheg" value="<?=date('H:i', strtotime($os[0]->data_cheg));?>" placeholder="Hora de Entrada" required></input>
            </div>
            <div class="col-md-2">
                <label for="data_prev">Data Prevista:</label>
                <input type="text" class="form-control" id="data_prev" name="data_prev" value="<?=date('d/m/Y', strtotime($os[0]->data_prev));?>" placeholder="Data prevista para entrega" required></input>
            </div>
            <div class="col-md-2">
                <label for="data_fim">Data Entrega:</label>
                <input tYpe="date" class="form-control" id="data_fim" name="data_fim" value="<?=date('d/m/Y', strtotime($os[0]->data_entre));?>" placeholder="Data de Entrega"></input>
            </div>

            <div class="col-md-2">
                <label for="veiculo">Veículo:</label>
                <input type="text" class="form-control" id="veiculo" name="veiculo" value="<?=$os[0]->veiculo;?>" placeholder="Nome do Veiculo" required></input>
            </div>

            <div class="col-md-2">
                <label for="placa">Placa:</label>
                <input type="text" class="form-control" id="placa" name="placa" value="<?=$os[0]->placa;?>" placeholder="Placa do Veículo" required></input>
            </div>

            <div class="col-md-6 ">
                <br>
                <label for="descricao">Descrição do Serviço </label>
                <textarea rows="3" cols="50" class="form-control" name="descricao"><?=$os[0]->descricao_os;?></textarea>
            </div>

            <div class="form-group col-xs-12 col-sm-12 col-md-6 col-lg-6">
                <br>
                <label for="">Responsável pelo Serviço:</label>
                <select class="form-control" name="idfuncionario" id="idfuncionario" required="required">
                    <option value="">Selecione o Responsável Pelo Serviço</option>
                    <?php foreach ($funcionarios as $d): ?>
                        <option value="<?php echo $d->id_funcionario ?>" <?php echo $d->id_funcionario == $os[0]->id_funcionario ? 'selected' : ''; ?>>
                            <?php echo $d->nome_funcionario ?>
                        </option>
                    <?php endforeach;?>
                </select>
            </div>
        </div>
        <div class="col-md-12  ">
            <br>
            <br>
            <button type="submit" class="btn btn-success" name="salvar"> Salvar</button>
            <button type="reset" class=" btn btn-warning" name="limpar"> Limpar</button>
        </div>
    </form>
</div>
</body>