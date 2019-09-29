<nav class="nav">
  <div class="title-nav">
    <h3>Lançamentos</h3>
  </div>
  <ul>
    <li>
      <a href="<?=base_url()?>Lancamentos/ListLancamentos">
        <i class="fa fa-3x fa-fw text-inverse -plus fa-list-ol"></i>
        <p>Listar</p>
      </a>
    </li>
    <li>
      <a href="<?=base_url()?>Lancamentos/FormCadLancamentos">
        <i class="fa fa-3x fa-fw text-inverse -plus -times t-plus fa-plus-circle"></i>
        <p>Cadastrar</p>
      </a>
    </li>
    <li>
      <a href="<?=base_url()?>adm">
        <i class="fa fa-2x fa-fw text-inverse fa-sliders"></i>
        <p>Painel</p>
      </a>
    </li>
  </ul>
  <div class="search form">
    <form class="form-inline" method="post" action="<?=base_url()?>Lancamentos/GetForLancamentos">
      <input class="form-control mr-sm-2" name="busca"
        title="Aqui você pode fazer uma busca pelo código, data-vencimento, status, tipo ou sub-tipo de lançamentos! "
        type="search" placeholder="Pesquisar" aria-label="Pesquisar">
      <button class="btn btn-outline-light my-2 my-sm-0 " type="submit">Buscar</button>
    </form>
  </div>
</nav>