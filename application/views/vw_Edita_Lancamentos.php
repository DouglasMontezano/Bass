<div class="container container fluid ">
  <br><br>
  <div class="row">
    <div class="col-md-12 ">
      <h2>Editar Lançamento N° <?php echo ($lancamento[0]->id_lancamento)?> </h2><br>
      <caption>* Campos Obrigatórios</caption><br>
    </div>
  </div>
  <form class="form control " action="<?= base_url()?>Lancamentos/SalvarEditLancamentos" method="post">
    <div class="row">
      <div class="col-md-2">
        <label for="id_os">Codigo O.S:</label>   
<!-- Busca no array se existe uma OS caso exista é mostrado na caixa caso não exista não mostra nada e desabilita a caixa de texto // E SIM, isso deveria estar em outra camada -->
        <input type="text" class="form-control" id="id_os" name="id_os" <?php echo (!empty($lancamento[0]->id_os)? : null."disabled" );?> value= "<?=$lancamento[0]->id_os;?>" > 
      </div>
      <div class="col-md-2">
        <label for="id_venda">Codigo Venda:</label>   
<!-- Busca no array se existe uma Vendacaso exista é mostrado na caixa caso não exista não mostra nada e desabilita a caixa de texto // E SIM, isso deveria estar em outra camada -->     
        <input type="text" class="form-control" id="id_venda" name="id_venda" <?php echo (!empty($lancamento[0]->id_venda)? : null."disabled" );?> value="<?=$lancamento[0]->id_venda;?>">
        </input>
      </div>
      <div class="col-md-4">
        <div class="form-group">
          <label for="id_fornecedor">Fornecedor:</label>
          <select class="form-control" id="id_fornecedor" value="" name="id_fornecedor">
            <option value=""> Selecione o Fornecedor</option>
            <?php foreach ($fornecedores as $data):?>
            <option value="<?php echo $data-> id_fornecedor ?>"
              <?php echo $data-> id_fornecedor ==$lancamento[0]->id_fornecedor ?'selected':'';?>>
              <?php echo $data->nome_fornecedor?>
            </option>
            <?php endforeach;?>
          </select>
        </div>
      </div>
      <div class="col-md-3">
        <label for="numero_doc_lancamento">Número Documento:</label>
        <input type="text" class="form-control" id="numero_doc_lancamento" name="numero_doc_lancamento"
          value="<?=$lancamento[0]->numero_doc_lancamento;?>" placeholder="Número Documento"></input>
      </div>
    </div>
    <br>
    <div class="row">
      <div class="col-md-2">
        <label for="data_lancamento">Data Lançamento: *</label>
        <input type="text" class="form-control" id="data_lancamento" name="data_lancamento"
          value="<?=date('d/m/Y',strtotime($lancamento[0]->data_lancamento));?>" placeholder="00/00/0000"
          requered></input>
      </div>
      <div class="col-md-2">
        <label for="data_vencimento_lancamento">Data Vencimento: *</label>
        <input type="text" class="form-control" id="data_vencimento_lancamento" name="data_vencimento_lancamento"
          value="<?=date('d/m/Y',strtotime($lancamento[0]->data_vencimento_lancamento));?>" placeholder="00/00/0000"
          requered></input>
      </div>
      <div class="col-md-4">
        <label for="valor_lancamento">Valor:</label>
        <div class="input-group">
          <div class="input-group-prepend">
            <span class="input-group-text">R$</span>
          </div>
          <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)" name="valor_lancamento"
            id="valor_lancamento" placeholder="Valor Lançamento"
            value="<?php  if($this->uri->segment(4)) {  print $this->uri->segment(4) ;} else {print $lancamento[0]->valor_lancamento ;};?>">
        </div>
      </div>
      <div class="col-md-3">
        <div class="form-group">
          <label for="forma_pagamento_lancamento">Forma de Pagamento: *</label>
          <select class="form-control" id="forma_pagamento_lancamento" name="forma_pagamento_lancamento">
            <option selected> <?=$lancamento[0]->forma_pagamento_lancamento;?> </option>
            <option> Dinheiro </option>
            <option> Cartão Débito </option>
            <option> Cartão Crédito </option>
            <option> Boleto </option>
            <option> Débito em Conta </option>
          </select>
        </div>
      </div>
    </div>
    <br>
    <div class="row">
      <div class="col-md-4">
        <label for="descricao_lancamento">Descrição: </label>
        <textarea rows="3" cols="50" class="form-control"
          name="descricao_lancamento"><?=$lancamento[0]->descricao_lancamento;?></textarea>
      </div>
      <div class="col-md-2">
        <div class="form-group">
          <label for="status_lancamento">Status: *</label>
          <select class="form-control" id="status_lancamento" name="status_lancamento">
            <option selected> <?=$lancamento[0]->status_lancamento;?> </option>
            <option> Aberto </option>
            <option> Concluido </option>
          </select>
        </div>
      </div>
      <!--recebe o id_lancamento e envia para o update-->
      <div class="col-md-2">
        <input type="hidden" name="id_lancamento" value="<?php echo ($lancamento[0]->id_lancamento); ?>" />
        <label for="tipo_lancamento">Tipo Lançamento:</label>

        <div class="radio">
          <div class="custom-control custom-radio custom-control-inline">
            <input type="radio"  value="Despesa" <?php echo ($lancamento[0]->tipo_lancamento == "Despesa") ? "checked " : null."disabled" ;?>id="customRadioInline1"
              name="customRadioInline1" class="custom-control-input">
            <label class="custom-control-label" for="customRadioInline1">Despesa</label>
          </div>

          <div class="custom-control custom-radio custom-control-inline">
            <input type="radio" value="Receita" <?php echo ($lancamento[0]->tipo_lancamento == "Receita") ? "checked " : null."disabled" ;?>id="customRadioInline2"
              name="customRadioInline1" class="custom-control-input">
            <label class="custom-control-label" for="customRadioInline2">Receita</label>
          </div>
        </div>
      </div>      
      <div class="col-md-4">
        <label for="subtipo_lancamento">Sub-Tipo Lançamento: </label>
        <div class="radio">
          <div class="custom-control custom-radio custom-control-inline">
            <input type="radio"  value="O.S" <?php echo ($lancamento[0]->subtipo_lancamento == "O.S") ? "checked " : null."disabled" ;?>id="customRadioInline3"
              name="customRadioInline2" class="custom-control-input">
            <label class="custom-control-label" for="customRadioInline3">O.S</label>
          </div>
          <div class="custom-control custom-radio custom-control-inline">
            <input type="radio"  value="Venda" <?php echo ($lancamento[0]->subtipo_lancamento == "Venda") ? "checked " : null."disabled" ;?>id="customRadioInline4"
              name="customRadioInline2" class="custom-control-input">
            <label class="custom-control-label" for="customRadioInline4">Venda</label>
          </div>
          <div class="custom-control custom-radio custom-control-inline">
            <input type="radio"  value="Fornecedor" <?php echo ($lancamento[0]->subtipo_lancamento == "Fornecedor") ? "checked " : null."disabled" ;?>id="customRadioInline5"
              name="customRadioInline2" class="custom-control-input">
            <label class="custom-control-label" for="customRadioInline5">Fornecedor</label>
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
  </form>
</div>
</body>