<div class="container">
    <br>
    <br>
    <div class="col-md-12">
        <table class=" table table-striped ">
            <caption>Listando Funcionários</caption>
            <thead>
            <tr>
                <th> Código</th>
                <th> Nome</th>
                <th> E_Mail</th>
                <th> Fone</th>
                <th> Salário</th>
                <th> PIS </th>
            </tr>
            </thead>
            <tbody>
            <?php foreach ($resultado as $obj) { ?>
                <tr>
                    <td><?= $obj->id_funcionario;      ?></td>
                    <td><?= $obj->nome_funcionario;    ?></td>
                    <td><?= $obj->email_funcionario;   ?></td>
                    <td><?= $obj->fone_funcionario;    ?></td>
                    <td><?=  number_format($obj->salario_funcionario, 2, ',', '.');   ?></td>
                    <td><?= $obj->pis_funcionario;     ?></td>
                    <td>
                        <a href="<?= base_url('Funcionarios/EditFuncionarios/' . $obj->id_funcionario) ?>"class="btn btn-info btn-group"><i class="fa fa-pencil" aria-hidden="true"></i> </a>
                        <a href="<?= base_url('Funcionarios/ExcFuncionarios/' . $obj->id_funcionario) ?>" class="btn btn-danger btn-group" onclick="return confirm('Deseja realmente excluir o funcionário? ');"><i class="fa fa-trash-o" aria-hidden="true"></i>
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
