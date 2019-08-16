<div class="container">
    <br>
    <br>
    <div class="col-md-12">
        <table class=" table table-striped ">
            <caption>Listando Lançamentos</caption>
            <thead>
            <tr>
                <th> Código          </th>
                <th> Tipo            </th>
                <th> Sub-Tipo        </th>
                <th> Data            </th>
                <th> Data-Vencimento </th>
                <th>Status           </th>
                <th>Forma-Pag        </th>
                <th>Valor-Lançamento </th>
            </tr>
            </thead>
            <tbody>
            <?php foreach ($resultado as $obj) { ?>
                <tr>
                    <td><?= $obj->id_lancamento;                                  ?></td>
                    <td ><font color='<?=$obj->tipo_lancamento=="Receita"?"#40e0d0":"red";?>'> <?= $obj->tipo_lancamento;?></font> </td>
                    <td><?= $obj->subtipo_lancamento;                             ?></td>
                    <td><?= date('d/m/Y', strtotime($obj->data_lancamento)); ?></td>
                    <td><?= date('d/m/Y', strtotime($obj->data_vencimento_lancamento)); ?></td>
                    <td><?= $obj->status_lancamento;                              ?></td>
                    <td><?= $obj->forma_pagamento_lancamento;                     ?></td>
                    <td><?=  number_format($obj->valor_lancamento, 2, ',', '.');  ?></td>
                    <td>
                        <a href="<?= base_url('Lancamentos/EditLancamentos/' . $obj->id_lancamento) ?>"class="btn btn-info btn-group"><i class="fa fa-pencil" aria-hidden="true"></i> </a>
                        <a href="<?= base_url('Lancamentos/ExcLancamentos/' . $obj->id_lancamento) ?>" class="btn btn-danger btn-group" onclick="return confirm('Deseja realmente excluir o Lançamento? ');"><i class="fa fa-trash-o" aria-hidden="true"></i>
                        </a>
                    </td>
                </tr>
            <?php } ?>
            </tbody>
        </table>
        
    </div>
</div>
</body>
</html>
