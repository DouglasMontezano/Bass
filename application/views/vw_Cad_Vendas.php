<!DOCTYPE html>

    <div class="container container-fluid">
        <div class="row">
            <div class= "col-md-12 ">
                <h2 >Nova Venda </h2><br>
            </div>
        </div>
        <br>
        <form class="form control " action="<?= base_url() ?>Vendas/CadastraVendas" method="post">           
            <div class="row">
                <div class="col-md-6 ">
                    <div class="form-group">
                        <label for="cliente">Cliente:</label>
                        <select required class="form-control" id="cliente" name="cliente" >
                            <option selected>selecione</option>
                            <?php foreach ($cliente as $nomecliente) { ?>
                                <option value="<?= $nomecliente->id_cliente; ?>"> <?= $nomecliente->nome_cliente; ?></option>
                            <?php 
                        } ?>
                        </select>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <label for="situacao">Situação:</label>
                        <select required class="form-control" id="situacao_venda"name="situacao_venda">
                            <option selected> selecione</option>
                            <option>          Em Aberto</option>
                            <option>    Esperando Produto</option>
                            <option disabled> Concluída</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <label for="situacao">Tipo de Venda:</label>
                        <select required class="form-control" id="tipo_venda"name="tipo_venda">
                            <option selected> selecione </option>
                            <option>          Balcão    </option>
                            <option>          Outros    </option>

                        </select>
                    </div>
                </div>
                <br>
                <div class="col-md-3">
                    <label for="data_cheg">Data Venda:</label>
                    <input type="date" class="form-control" id="data_venda" name="data_venda"  placeholder="Data da Venda" required></input>
                </div>
                <div class="col-md-3">
                    <label for="hora_cheg">Hora Venda:</label>
                    <input type="time" class="form-control" id="hora_venda" name="hora_venda"  placeholder="Hora da Venda" required></input>
                </div>
                <div class="col-md-6 ">
                    <label for="idfuncionario">Responsável pela venda:</label>
                    <select required class="form-control" id="funcionario" name="funcionario">
                        <option selected>selecione</option>
                        <?php foreach ($funcionario as $nomefuncionario) { ?>
                            <option value="<?= $nomefuncionario->id_funcionario; ?>"> <?= $nomefuncionario->nome_funcionario; ?></option>
                        <?php 
                    } ?>
                    </select>
                </div>
            </div>
            <br>
            <br>
            <div class="row">
                <div class="col-md-12  ">
                    <button type="submit" class="btn btn-success"   name="salvar"> Salvar</button>
                    <button type="reset" class=" btn btn-warning"   name="limpar"> Limpar</button>
                </div>
            </div>
