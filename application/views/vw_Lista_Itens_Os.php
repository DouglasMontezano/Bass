        <br>
        <br>
            <div class="container container-fluid">            
                <div class="col-md-12">
                    <caption> Listando Produtos e Serviços da Ordem de Serviço Nº: <?=$resultado[0]->id_os;?> </caption>
                    <table class=" table table-striped">
                        <thead>
                            <tr>
                                <th> Item Nº</th>
                                <th> Produto/Serviço</th>
                                <th> Quantidade</th>
                                <th> Desconto</th>
                                <th> Valor Unitario</th>
                                <th> Valor Total do Item</th>
                                <th> Sub Total </th>
                                <th> <a href="<?=base_url('Os/FormCadItensOs/' . $resultado[0]->id_os)?>" class="btn btn-info btn-group">
                                        <i class="fa fa-plus" aria-hidden="true"></i>
                                    </a>
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $tot_os = 0;?>
                            <?php $item = 0;?>
                            <?php foreach ($resultado as $obj) {?>
                                <tr>
                                    <?php $item = $item + 1;?>
                                    <td><?=$item;?></td>
                                    <td><?=$obj->nome_prod_serv;?></td>
                                    <td><?=number_format($obj->quant_item, 2, ',', '.');?></td>
                                    <td><?=number_format($obj->desconto_item, 2, ',', '.');?></td>
                                    <td><?=number_format($obj->valor_unit_item, 2, ',', '.');?></td>
                                    <td><?=number_format($obj->valor_tot_item, 2, ',', '.');?></td>
                                    <?php $tot_os = $tot_os + $obj->valor_tot_item;?>
                                    <td><strong><?=number_format($tot_os, 2, ',', '.');?></td>
                                    <td>
                                        <a href="<?=base_url('Os/ExcItensOs/' . $obj->id_item . '/' . $resultado[0]->id_os) . '/' . $obj->valor_tot_item?>" class="btn btn-danger btn-group"
                                        onclick="return confirm('Deseja realmente excluir este ítem');"> <i class="fa fa-trash" aria-hidden="true"></i>
                                        </a>
                                    </td>
                                </tr>
                            <?php }?>
                        </tbody>
                    </table>                    
                    <div class="row">
                        <div class="col-md-7">
                            <?php if ($resultado[0]->situacao == 'Concluída'): ?>
                                <h3 ><strong><font color="#008888" >Ordem de Serviço Finalizada</font></strong></h3>
                                <script type="text/javascript" src="<?=base_url();?>assets/js/js_Venda.js"></script>

                                <?php elseif ($resultado[0]->situacao != 'Concluída' and $existos == 0 or $existos == null): ?>
                                <a href="<?=base_url('Os/Lancar_Os/' . $obj->id_os . '/' . $tot_os . '/' . $resultado[0]->data_entre)?>"
                                class="btn btn-success btn-group">Finalizar O.S
                                </a>

                                <?php elseif ($existos >= 1 and $resultado[0]->situacao != 'Concluída'): ?>
                                <a href="<?=base_url('Lancamentos/EditLancamentos' . '/' . $cod_lancamento[0]->id_lancamento . '/' . $tot_os)?>"
                                class="btn btn-success btn-group"> Finalizar O.S e Atualizar Lançamento
                                </a>
                            <?php endif;?>
                        </div>
                        <div class="col-md-5">
                            <h2><strong>Valor Total: <?php echo ' R$ ' . number_format($tot_os, 2, ',', '.'); ?> </strong></h2>
                        </div>
                    </div>
                </div>
            </div>
        <br>
        <br>
        <br>
    </body>
</html>