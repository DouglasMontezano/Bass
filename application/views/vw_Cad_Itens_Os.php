    <div class="container fluid">
      <br><br>
      <div class="row">
        <div class="col-md-12 ">
          <h3> Novo Item _ Ordem de Serviço N°: <?php echo $id_os;?> </h3>
          <br>
        </div>
      </div>
      <form class="form control " action="<?= base_url()?>Os/CadastraItensOs" method="post">
        <div class="row">
          <input type="hidden" name="id_os" id="id_os" value="<?php echo $id_os;?>">
          <div class="col-md-6 ">
            <div class="form-group">
              <label for="prodserv">Produtos / Serviços:</label>
              <select class="form-control" id="prodserv" name="prodserv" onchange='busca_valor_os($(this).val())'>
                <option selected>selecione</option>
                <?php foreach ($prodserv as $obj){?>
                <option value="<?=$obj-> id_prod_serv ;?>"> <?=$obj-> nome_prod_serv ;?></option>
                <?php }?>
              </select>
            </div>
          </div>
          <div class="col-md-2">
            <label for="qtd">Quantidade:</label>
            <input type="text" class="form-control soma" id="qtd" name="qtd" placeholder="Quantidade" required>
          </div>
          <div class="col-md-2">
            <label for="valorunit">Valor Unitário:</label>
            <input type="text" class="form-control soma" id="valorunit" name="valorunit" value=""
              placeholder="Valor Unitário" required>
          </div>
          <div class="col-md-2">
            <label for="desc">Desconto:</label>
            <input type="text" class="form-control soma" id="desc" name="desc" placeholder="Desconto Unitário" required>
          </div>
        </div>
        <br>
        <div class="row">
          <div class="col-md-3">
            <label for="valortot">Valor Total:</label>
            <div class="input-group">
              <div class="input-group-prepend">
                <span class="input-group-text">R$</span>
                <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)" name="valortot"
                  id="valortot" value="">
              </div>
            </div>
            <div class="col-md-8">
              <br>
              <button type="submit" class="btn btn-success" name="salvar">Adicionar</button>
              <button type="reset" class=" btn btn-warning" name="limpar"> Limpar</button>
            </div>
          </div>
      </form>
    </div>
    </body>