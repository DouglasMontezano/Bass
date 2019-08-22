<div class="container">

    <div class="col-md-12">
        <table class=" table table-striped ">
            <caption><h3>Fluxo de Caixa</caption>
            <thead>
            <tr>
                <th> <h4>Receitas </th><th></th><th></th><th></th><th></th><th></th><th></th><th></th>
            </tr>
            <tr>
                <th> Código </th>
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
            <?php $valtot_receitas= 0;?>
            <?php $valtot_despesas= 0;?>
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
                    <?php $valtot_receitas=$valtot_receitas+$obj->valor_lancamento;?>
                </tr>
            <?php } ?>
            </tbody>
            <tbody>
                <tr>
                    <th><h4><strong>TOTAL DE RECEITAS  R$  <?=number_format($valtot_receitas, 2, ',', '.');?> </strong></h4></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th>
                </tr>
            </tbody>

            <thead>
            <tr>
                <th> <h4>Despesas </th><th></th><th></th><th></th><th></th><th></th><th></th><th></th>
            </tr>
            </thead>
            <tbody>
            <?php foreach ($resultado2 as $obj) { ?>
                <tr>
                    <td><?= $obj->id_lancamento;                                  ?></td>
                    <td ><font color='<?=$obj->tipo_lancamento=="Receita"?"#40e0d0":"red";?>'> <?= $obj->tipo_lancamento;?></font> </td>
                    <td><?= $obj->subtipo_lancamento;                             ?></td>
                    <td><?= date('d/m/Y', strtotime($obj->data_lancamento)); ?></td>
                    <td><?= date('d/m/Y', strtotime($obj->data_vencimento_lancamento)); ?></td>
                    <td><?= $obj->status_lancamento;                              ?></td>
                    <td><?= $obj->forma_pagamento_lancamento;                     ?></td>
                    <td><?=  number_format($obj->valor_lancamento, 2, ',', '.');  ?></td>
                    <?php $valtot_despesas=$valtot_despesas+$obj->valor_lancamento;?>
                </tr>
            <?php } ?>
            </tbody>
            <tbody>
                </tbody>
                    <tr>
                        <th><h4><strong>TOTAL DE DESPESAS  R$   <?=number_format($valtot_despesas, 2, ',', '.');?> </strong></h4></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th>
                    </tr>
                    <tr>
                        <th><h4><strong> SALDO INICIAL R$  <?=number_format($valtot_receitas-$valtot_despesas, 2, ',', '.');?> </strong></h4>
                    </tr>
            </tbody>
        </table>
    </div>
</div>
</body>
</html>
