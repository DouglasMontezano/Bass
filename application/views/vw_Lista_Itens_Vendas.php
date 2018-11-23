
    <div class="container container-fluid">
        <div class="row">
            <div class="col-md-12">

                <table class=" table table-striped ">
                    <thead>
                    <tr><caption> Listando Produtos e Serviços da Venda Nº: <?= $resultado[0]->id_venda; ?>  </caption> </tr>
                    <tr>
                        <th> Item Nº</th>
                        <th> Produto/Serviço</th>
                        <th> Quantidade</th>
                        <th> Desconto</th>
                        <th> Valor Unitario</th>
                        <th> Valor Total do Item</th>
                        <th> Sub Total </th>
                        <th><a id="btn" href="<?= base_url('Vendas/FormCadItensVendas/' . $resultado[0]->id_venda) ?>" class="btn btn-info btn-group"> <i class="fa fa-plus" aria-hidden="true"></i> </a></th>
                    </tr>
                    </thead>
                    <tbody >
                    <?php $tot_venda=0;?>
                    <?php $item=0;?>

                    <?php foreach ($resultado as $obj) { ?>
                        <tr>
                            <?php $item = $item+1; ?>
                            <td><?= $item;         ?></td>
                            <td><?= $obj->nome_prod_serv;  ?></td>
                            <td><?=  number_format($obj->quant_item_venda, 2, ',', '.');   ?></td>
                            <td><?=  number_format($obj->desconto_item_venda, 2, ',', '.');   ?></td>
                            <td><?=  number_format($obj->valor_unit_item_venda, 2, ',', '.');   ?></td>
                            <td><?=  number_format( $obj->valor_tot_item_venda, 2, ',', '.');   ?></td>
                            <?php $tot_venda = $tot_venda + $obj->valor_tot_item_venda; ?>
                            <td><strong><?= number_format($tot_venda, 2, ',', '.')  ;?></td>
                            <td>
                                <a id="botoes" href="<?= base_url('Vendas/ExcItensVendas/' . $obj->id_item_venda . '/' . $resultado[0]->id_venda.'/'.$obj->valor_tot_item_venda) ?>" class="btn btn-danger btn-group"
                                   onclick="return confirm('Deseja realmente excluir este ítem');"> <i class="fa fa-trash" aria-hidden="true"></i>
                                </a>
                            </td>
                        </tr>
                    <?php } ?>
                    </tbody>
                </table>
                <div class="col-md-4">
                    <h2><strong> Valor Total: <?php  echo ' R$ ' . number_format($tot_venda, 2, ',', '.');?> </strong></h2>

                </div>
                <br>
                <div class="col-md-4">
                    <!-- verifica se a situação da venda esta concluida..  -->


                    <?php if($resultado[0]->situacao_venda =='Concluída'): ?>
                         <h3 ><strong><font color="#40e0d0" >Venda Finalizada</font></strong></h3>
                         <script type="text/javascript" src="<?= base_url();?>assets/js/js_Venda.js"></script>

                    <?php elseif ($resultado[0]->situacao_venda !='Concluída' AND $existvenda==0 OR $existvenda == NULL): ?>
                        <a href="<?= base_url('Vendas/Lancar_Vendas/' . $obj->id_venda.'/'.$tot_venda.'/'.$resultado[0]->data_venda) ?>"
                           class="btn btn-success btn-group">Finalizar Venda
                        </a>

                    <?php elseif($existvenda>=1 AND $resultado[0]->situacao_venda !='Concluída' ):?>
                        <a href="<?= base_url('Lancamentos/EditLancamentos'.'/'.$cod_lancamento[0]->id_lancamento.'/'.$tot_venda) ?>"
                           class="btn btn-success btn-group"> Finalizar Venda e Atualizar Lançamento
                        </a>
                        
                    <?php endif;?>
                </div>
            </div>
        </div>
    </div>
</body>
</html>