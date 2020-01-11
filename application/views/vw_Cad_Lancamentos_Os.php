<div class="container container fluid ">
  <div class="row">
    <div class="col-md-12 ">
      <br>
      <h3>Lancamento da O.S Nº: <?php echo $cod_os;?></h3><br>
      <caption>* Campos Obrigatórios</caption><br><br>
    </div>
  </div>
  <form class="form control " action="<?= base_url()?>Lancamentos/CadastraLancamento" method="post">
    <div class="row">
      <input type="hidden" name="situacao_os" id="situacao_os" value="<?php echo $situacao?>"></input>
      <div class="col-md-2">
        <label for="id_os">Codigo O.S:</label>
        <input type="text" class="form-control" id="id_os" name="id_os" value="<?= $cod_os;?>"
          placeholder="Código da O.S"></input>
      </div>
      <div class="col-md-2">
        <label for="id_venda">Codigo Venda:</label>
        <input disabled type="text" class="form-control" id="id_venda" name="id_venda" placeholder="Código da venda">
        </inputdisabled>
      </div>
      <div class="col-md-4">
        <div class="form-group">
          <label for="id_fornecedor">Fornecedor:</label>
          <select disabled class="form-control" id="id_fornecedor" value="" name="id_fornecedor">
            <option selected>selecione</option>
            <?php foreach ($fornecedores as $data){?>
            <option value="<?=$data-> id_fornecedor ;?>"> <?=$data-> nome_fornecedor ;?></option>
            <?php }?>
          </select>
        </div>
      </div>
      <div class="col-md-3">
        <label for="numero_doc_lancamento">Número Documento:</label>
        <input disabled type="text" class="form-control" id="numero_doc_lancamento" name="numero_doc_lancamento"
          placeholder="Número Documento"></input>
      </div>
    </div>
    <div class="row">
      <br>
      <div class="col-md-2">
        <label for="data_lancamento">Data Lançamento: *</label>
        <input type="text" class="form-control" id="data_lancamento" name="data_lancamento" value="<?= date('d/m/Y');?>"
          placeholder="00/00/0000" required>
        </input>
      </div>
      <div class="col-md-2">
        <label for="data_vencimento_lancamento">Data Vencimento: *</label>
        <input type="date" class="form-control" id="data_vencimento_lancamento" name="data_vencimento_lancamento"
          placeholder="00/00/0000" required></input>
      </div>
      <div class="col-md-4">
        <label for="valor_lancamento">Valor:</label>
        <div class="input-group">
          <div class="input-group-prepend">
            <span class="input-group-text">R$</span>
          </div>
          <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)" name="valor_lancamento"
            id="valor_lancamento" placeholder="Valor Lançamento" value="<?=$valor_tot_os;?>" required>
        </div>
      </div>

      <div class="col-md-3">
        <div class="form-group">
          <label for="forma_pagamento_lancamento">Forma de Pagamento: *</label>
          <select required class="form-control" id="forma_pagamento_lancamento" name="forma_pagamento_lancamento">
            <option selected> selecione </option>
            <option> Dinheiro </option>
            <option> Cartão Débito </option>
            <option> Cartão Crédito </option>
            <option> Boleto </option>
            <option> Débito em Conta </option>
          </select>
        </div>
      </div>
    </div>
    <div class="row">
      <br>
      <div class="col-md-4">
        <label for="descricao_lancamento">Descrição: </label>
        <textarea rows="3" cols="50" class="form-control" name="descricao_lancamento"
          value="descricao_lancamento"></textarea>
      </div>
      <div class="col-md-2">
        <div class="form-group">
          <label for="status_lancamento">Status: *</label>
          <select required class="form-control" id="status_lancamento" name="status_lancamento">
            <option selected> selecione </option>
            <option> Aberto </option>
            <option> Concluido </option>
          </select>
        </div>
      </div>
      <div class="col-md-2">
        <label for="tipo_lancamento">Tipo Lançamento:</label>
        <div class="radio">
          <div class="custom-control custom-radio custom-control-inline">
            <input disabled type="radio" name="tipo_lancamento" value="Despesa" class="custom-control-input">
            <label class="custom-control-label" for="customRadioInline1">Despesa</label>
          </div>

          <div class="custom-control custom-radio custom-control-inline">
            <input type="radio" name="tipo_lancamento" value="Receita"
              <?php echo ($tipo_lancamento == "Receita") ? "checked" : null; ?> class="custom-control-input">
            <label class="custom-control-label" for="customRadioInline1">Receita</label>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <label for="subtipo_lancamento">Sub-Tipo Lançamento:</label>
        <div class="radio">
          <div class="custom-control custom-radio custom-control-inline">
            <input type="radio" name="subtipo_lancamento" value="O.S"
              <?php echo ($subtipo_lancamnto == "O.S") ? "checked" : null; ?> class="custom-control-input">
            <label class="custom-control-label" for="customRadioInline1">O.S</label>
          </div>
          <div class="custom-control custom-radio custom-control-inline">
            <input disabled type="radio" name="subtipo_lancamento" value="Venda" class="custom-control-input">
            <label class="custom-control-label" for="customRadioInline1">Vendas</label>
          </div>
          <div class="custom-control custom-radio custom-control-inline">
            <input disabled type="radio" name="subtipo_lancamento" value="Fornecedor" class="custom-control-input">
            <label class="custom-control-label" for="customRadioInline1">Fornecedores</label>
          </div>
        </div>
      </div>
    </div>
    <br>
    <div class="row">
      <div class="col-md-12">
        <button type="submit" class="btn btn-success" name="salvar"> Salvar</button>
        <button type="reset" class=" btn btn-warning" name="limpar"> Limpar</button>
      </div>
    </div>
</div>
</form>
</div>
</body>