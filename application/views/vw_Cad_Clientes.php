  <div class="container container-fluid ">
    <br><br>
    <div class="row">
      <div class="col-md-12 ">
        <h2>Novo Cliente</h2><br>
        <caption>* Campos Obrigatórios</caption>
      </div>
    </div>
    <form class="form control" action="<?=base_url()?>Clientes/CadastraClientes" method="post" rule="form">
      <div class="row">
        <div class="col-md-12 ">
          <?php echo validation_errors(); ?>
          <!-- <form class="form control " action="<?=base_url()?>Clientes/CadastraClientes" method="post" rule="form"> -->
          <div class="row">
            <div class="col-md-6 ">
              <label for="nome">Nome: *</label>
              <input type="text" class="form-control" id="nome_cliente_cliente_cliente" name="nome_cliente"
                placeholder="Informe o nome do cliente" required="Campo Obrigatório"></input>
            </div>
            <div class="col-md-3">
              <label for="fone">Telefone: *</label>
              <input type="tel" class="form-control" id="fone_cliente_cliente" name="fone_cliente"
                placeholder="Telefone do cliente" required="Campo Obrigatório"></input>
            </div>
            <div class="col-md-3">
              <label for="fone2">Telefone 2:</label>
              <input type="tel" class="form-control" id="fone2_cliente" name="fone2_cliente"
                placeholder="Telefone 2 do cliente"></input>
            </div>
          </div>
          <br>
          <div class="row">
            <div class="col-md-4">
              <label for="email">E-mail: *</label>
              <input type="email" class="form-control" id="email_cliente" name="email_cliente"
                placeholder="E-mail do cliente" required="Campo Obrigatório"></input>
            </div>
            <div class="col-md-2">
              <label for="cpf">CPF:</label>
              <input type="text" class="form-control" id="cpf_cliente" name="cpf_cliente"
                placeholder="CPF do cliente"></input>
            </div>
            <div class="col-md-2">
              <label for="rg">RG:</label>
              <input type="text" class="form-control" id="rg_cliente" name="rg_cliente"
                placeholder="RG do cliente"></input>
            </div>
            <div class="col-md-4">
              <label for="endereco">Endereço:</label>
              <input type="text" class="form-control" id="endereco_cliente" name="endereco_cliente"
                placeholder="Endereço do cliente"></input>
            </div>
          </div>
          <br>
          <div class="row">
            <div class="col-md-2">
              <label for="numero">Número:</label>
              <input type="number" class="form-control" id="numero_casa_cliente" name="numero_casa_cliente"
                placeholder="Número da Residência"></input>
            </div>
            <div class="col-md-4">
              <label for="bairro">Bairro:</label>
              <input type="text" class="form-control" id="bairro_cliente" name="bairro_cliente"
                placeholder="bairro do cliente"></input>
            </div>
            <div class="col-md-3">
              <label for="cidade">Cidade: *</label>
              <input type="text" class="form-control" id="cidade_cliente" name="cidade_cliente"
                placeholder="cidade do cliente" required="Campo Obrigatório"></input>
            </div>
            <div class="col-md-3">
              <label for="estado">Estado:</label>
              <input type="text" class="form-control" id="estado_cliente" name="estado_cliente"
                placeholder="estado do cliente"></input>
            </div>
          </div>
          <br>
        </div>
      </div>
      <br>			      
        <div class="col-md-4 form-check">
          <input class="form-check-input" name="desativado" type="checkbox" value="1" unchecked>
          <label class="form-check-label">Desativado </label>
        </div>     
        <br>
        <button type="submit" class="btn btn-success" name="salvar"> Salvar </button>
        <button type="reset" class=" btn btn-warning" name="limpar"> Limpar </button>      
    </form>
</body>