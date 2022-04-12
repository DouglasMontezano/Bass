<!-- <div class="container"> -->
  <br>
  <br>
  <div class="col-md-12">
    <caption>Listando Fornecedores</caption>
    <table class=" table table-striped table-dark table-bordered table-hover ">
      <thead>
        <tr>
          <th> Código</th>
          <th> Nome</th>
          <th> Telefone</th>
          <th> Cidade</th>
          <th> Estado</th>
          <th> CPF</th>
          <th> CNPJ</th>
          <th> Nome Vendedor</th>
          <th> Fone Vendedor</th>
        </tr>
      </thead>
      <tbody>
        <?php foreach ($resultado as $obj) { ?>
        <tr>
          <td align="center"><?= $obj->id_fornecedor;         ?></td>
          <td> <?= $obj->nome_fornecedor;       ?></td>
          <td> <?= $obj->fone_fornecedor;       ?></td>
          <td> <?= $obj->cidade_fornecedor;     ?></td>
          <td align="center"><?= $obj->estado_fornecedor;     ?></td>
          <td> <?= $obj->cpf_fornecedor;        ?></td>
          <td> <?= $obj->cnpj_fornecedor;       ?></td>
          <td> <?= $obj->nome_vendedor;         ?></td>
          <td> <?= $obj->fone_vendedor;         ?></td>
          <td align= "center">
            <a href="<?= base_url('Fornecedores/EditFornecedores/' . $obj->id_fornecedor) ?>"
              class="btn btn-info btn-group"><i class="fa fa-pencil" aria-hidden="true"></i>
            </a>
            <a href="<?= base_url('Fornecedores/ExcFornecedores/' . $obj->id_fornecedor) ?>"
              class="btn btn-danger btn-group" onclick="return confirm('Deseja realmente excluir o fornecedor');">
              <i class="fa fa-trash-o" aria-hidden="true"></i>
            </a>
          </td>
        </tr>
        <?php } ?>
      </tbody>
    </table>
  </div>
<!-- </div> -->
</body>

</html>