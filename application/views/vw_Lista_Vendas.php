<br>
<br>
<div class="container">
    <div class="col-md-12"><br>
    <caption> Listando Vendas</caption>
    <table class=" table table-striped table-dark table-bordered table-hover ">         
            <thead>
                <tr>
                    <th> Código</th>
                    <th> Cliente</th>
                    <th> Funcionário</th>
                    <th> Tipo Venda</th>
                    <th> Data</th>
                    <th> Valor Total</th>
                    <th> Situação</th>
                </tr>
            </thead>
            <tbody>
            <?php foreach ($resultado as $obj) { ?>
                <tr align=left>
                    <td><?= $obj->id_venda; ?></td>
                    <td><?= $obj->nome_cliente; ?></td>
                    <td><?= $obj->nome_funcionario; ?></td>
                    <td><?= $obj->tipo_venda; ?></td>
                    <td><?= date('d/m/Y H:i', strtotime($obj->data_venda)); ?></td>
                    <td><?=  number_format( $obj->valor_tot_venda, 2, ',', '.');   ?></td>
                    <td><?= $obj->situacao_venda; ?></td>
                    <td align=right>
                        <!-- <a href="<?= base_url('Vendas/ListProdServ/' . $obj->id_venda) ?>" class="btn btn-success btn-group">Ver </a> -->
                        <a href="<?= base_url('Vendas/ListProdServ/' . $obj->id_venda) ?>" class="btn btn-success btn-group"><i class="fa fa-eye" aria-hidden="true"></i> </a>
                        <a href="<?= base_url('Vendas/FormEditVendas/' . $obj->id_venda) ?>" class="btn btn-info btn-group"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> </a>                       
                        <a href="<?= base_url('Vendas/ExcVendas/' . $obj->id_venda) ?>" class="btn btn-danger btn-group"onclick="return confirm('Deseja realmente excluir a Vendas?');"><i class="fa fa-trash" aria-hidden="true"></i>
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