<br>
<br>
<div class="container">
    <div class="col-md-12">
    <caption> Listando Produtos</caption>
    <table class=" table table-striped table-dark table-bordered table-hover ">
            
            <thead>
            <tr>
                <th> Código</th>
                <th> Produto</th>
                <th> Tipo</th>
                <th> Marca</th>
                <th> Quat.Estoque</th>
                <th> Valor de Venda</th>
                <th> Data da Compra</th>

            </tr>
            </thead>
            <tbody>
            <?php foreach ($resultado as $obj) { ?>
                <tr>
                    <td ><?= $obj->id_prod_serv; ?></td>
                    <td><?= $obj->nome_prod_serv; ?></td>
                    <td><?= $obj->tipo_prod_serv; ?></td>
                    <td><?= $obj->marca_prod_serv; ?></td>
                    <td><?=  number_format($obj->qtd_estoque_prod_serv, 2, ',', '.');   ?></td>
                    <td><?=  number_format($obj->valor_venda_prod_serv, 2, ',', '.');   ?></td>
                    <td><?= date('d/m/Y', strtotime($obj->data_compra_prod_serv)); ?></td>
                    <td>
                        <a href="<?= base_url('Produtos_Servicos/EditProdutos/' . $obj->id_prod_serv) ?>"
                           class="btn btn-info btn-group"><i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                        </a>
                        <a href="<?= base_url('Produtos_Servicos/ExcProdutos/' . $obj->id_prod_serv) ?>"
                           class="btn btn-danger btn-group"
                           onclick="return confirm('Deseja realmente excluir o produto');"><i class="fa fa-trash-o"
                                                                                              aria-hidden="true"></i>
                        </a>
                    </td>
                </tr>
                </tr>
            <?php } ?>
            </tbody>
        </table>
    </div>
</div>
</body>
</html>