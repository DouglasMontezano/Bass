<!-- <div class="container container-fluid"> -->
  <div class="col-md-12">
    <br>
    <caption> Listando Receitas e Despesas </caption>
    <br>
    <table class=" table table-striped table-dark table-bordered table-hover">
      <thead>
        <tr>
          <th> Código </th>
          <th> Tipo </th>
          <th> Sub-Tipo </th>
          <th> Data.Lanc </th>
          <th> Data.Venc </th>
          <th>Status </th>
          <th>Forma-Pag </th>
          <th>Valor-Lançamento </th>
        </tr>
      </thead>
      <tbody>
        <?php $valtot_receitas= 0;?>
        <?php $valtot_despesas= 0;?>
        <?php foreach ($resultado as $obj) { ?>
        <tr>
          <td><?= $obj->id_lancamento;?></td>
          <td>
            <font color='<?=$obj->tipo_lancamento=="Receita"?"#40e0d0":"red";?>'> <?= $obj->tipo_lancamento;?></font>
          </td>
          <td><?= $obj->subtipo_lancamento;?> </td>
          <td><?= date('d/m/Y', strtotime($obj->data_lancamento));?> </td>
          <td><?= date('d/m/Y', strtotime($obj->data_vencimento_lancamento));?> </td>
          <td><?=                         $obj->status_lancamento;?> </td>
          <td><?=                         $obj->forma_pagamento_lancamento;?> </td>
          <td><?=           number_format($obj->valor_lancamento, 2, ',', '.');?></td>
          <?php $valtot_receitas=$valtot_receitas+$obj->valor_lancamento;?>
        </tr>
        <?php } ?>
      </tbody>
      <tbody>
        <tr>
          <th></th>
          <th></th>
          <th></th>
          <th></th>
          <th></th>
          <th></th>
          <th></th>
          <th> Total de Receitas R$ <?=number_format($valtot_receitas, 2, ',', '.');?></th>
        </tr>
      </tbody>

      <tbody>
        <?php foreach ($resultado2 as $obj) { ?>
        <tr>
          <td><?= $obj->id_lancamento;                                        ?></td>
          <td>
            <font color='<?=$obj->tipo_lancamento=="Receita"?"#40e0d0":"red";?>'> <?= $obj->tipo_lancamento;?></font>
          </td>
          <td><?= $obj->subtipo_lancamento;                                   ?></td>
          <td><?= date('d/m/Y', strtotime($obj->data_lancamento));            ?></td>
          <td><?= date('d/m/Y', strtotime($obj->data_vencimento_lancamento)); ?></td>
          <td><?= $obj->status_lancamento;                                    ?></td>
          <td><?= $obj->forma_pagamento_lancamento;                           ?></td>
          <td><?=  number_format($obj->valor_lancamento, 2, ',', '.');        ?></td>
          <?php $valtot_despesas=$valtot_despesas+$obj->valor_lancamento;?>
        </tr>
        <?php }?>
      </tbody>
      <tbody>
        <tr>
          <th></th>
          <th></th>
          <th></th>
          <th></th>
          <th></th>
          <th></th>
          <th> Saldo Inicial R$ <?=number_format($valtot_receitas-$valtot_despesas, 2, ',', '.');?></th>
          <th> Total de Despesas R$ <?=number_format($valtot_despesas, 2, ',', '.');?></th>
        </tr>
      </tbody>
    </table>
  </div>
<!-- </div> -->
</body>

</html>