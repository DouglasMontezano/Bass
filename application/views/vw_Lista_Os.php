<!-- <div class="container container-fluid"> -->
  <div class="col-md-12">
    <br>
    <caption> Listando Ordens de serviço</caption>
    <br>
    <table class=" table table-striped table-dark table-bordered table-hover ">
      <thead>
        <tr>
          <th> Código</th>
          <th> Veículo</th>
          <th> Placa</th>
          <th> Data Inicial</th>
          <th> Cliente</th>
          <th> Instalador</th>
          <th> Situação</th>
        </tr>
      </thead>
      <tbody>
        <?php foreach ($resultado as $obj) {?>
        <tr align=left>
          <td><?=$obj->id_os;?></td>
          <td><?=$obj->veiculo;?></td>
          <td><?=$obj->placa;?></td>
          <td><?=date('d/m/Y', strtotime($obj->data_cheg));?></td>
          <td><?=$obj->nome_cliente;?></td>
          <td><?=$obj->nome_funcionario;?></td>
          <td><?=$obj->situacao;?></td>
          <td align=center>
            <a href="<?=base_url('Os/ListProdServ/' . $obj->id_os)?>" class="btn btn-success btn-group"><i
                class="fa fa-eye" aria-hidden="true"></i></a>
            <a href="<?=base_url('Os/FormEditOs/' . $obj->id_os)?>" class="btn btn-info btn-group"><i
                class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
            <a href="<?=base_url('Os/ExcOs/' . $obj->id_os)?>" class="btn btn-danger btn-group"
              onclick="return confirm('Deseja realmente excluir a OS?');"><i class="fa fa-trash"
                aria-hidden="true"></i></a>
          </td>
        </tr>
        <?php }?>
      </tbody>
    </table>
  <!-- </div> -->
</div>
</body>
</html>