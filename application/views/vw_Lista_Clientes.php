<div class="container">
        <br>
        <br>    
        <div class="col-md-12">
            <caption>Listando Clientes</caption>
                <table class=" table table-striped ">        
                <thead>
                    <tr>
                        <th> Código</th>
                        <th> Nome</th>
                        <th> Telefone</th>
                        <th> CPF</th>
                        <th> Endereço</th>
                        <th> Número</th>
                        <th> Bairro</th>
                        <th> Cidade</th>
                        <th> Estado</th>
                        <th> Desativado</th>
                        <th> </th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($resultado as $obj) { ?>
                        <tr>
                            <td align="center"><?= $obj->id_cliente; ?></td>
                            <td ><?= $obj->nome_cliente; ?></td>
                            <td><?= $obj->fone_cliente; ?></td>
                            <td><?= $obj->cpf_cliente; ?></td>
                            <td><?= $obj->endereco_cliente; ?></td>
                            <td align="center"><?= $obj->numero_casa_cliente; ?></td>
                            <td><?= $obj->bairro_cliente; ?></td>
                            <td><?= $obj->cidade_cliente; ?></td>
                            <td align="center"><?= $obj->estado_cliente; ?></td>
                            <td align="center"><?= $obj->desativado; ?></td>
                            <td>
                                <a href="<?= base_url('Clientes/EditClientes/' . $obj->id_cliente) ?>"
                                class="btn btn-info btn-group"><i class="fa fa-pencil" aria-hidden="true"></i> </a>
                                <a href="<?= base_url('Clientes/ExcClientes/' . $obj->id_cliente) ?>"
                                class="btn btn-danger btn-group"
                                onclick="return confirm('Deseja realmente excluir o cliente');"><i class="fa fa-trash-o"
                                                                                                    aria-hidden="true"></i>
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