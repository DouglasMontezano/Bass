<nav class="nav">
  <div class="title-nav">
    <h3>Fluxo de Caixa</h3>
  </div>
  <ul>
    <li>
      <a href="<?=base_url()?>Fluxo/ListaFluxo">
        <i class="fa fa fa-3x fa-fw text-inverse -plus fa-list-ol"></i>      
        <p>Listar</p>
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
    <form class="form-inline" method="post" action="<?=base_url()?>Fluxo/GetForFluxo">
      <input class="form-control mr-sm-2" name="busca"
        title="Aqui você pode fazer uma busca por código, tipo, sub-tipo, data, status, forma de pagamento e valor do lancamento !  " type="search"
        placeholder="Pesquisar" aria-label="Pesquisar">
      <button class="btn btn-outline-light my-2 my-sm-0 " type="submit">Buscar</button>
    </form>
  </div>
</nav>
