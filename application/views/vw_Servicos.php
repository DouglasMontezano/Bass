
 <body>
        <nav class="nav">
            <div class="title-nav">
                <h3>Serviços</h3>
            </div>
            <ul>
                <li>
                    <a href="<?=base_url()?>Produtos_Servicos/ListServicos">
                        <i class="fa fa-3x fa-fw text-inverse -plus fa-list-ol"></i>
                        <p>Listar</p>
                    </a>
                </li>
                <li>
                    <a href="<?=base_url()?>Produtos_Servicos/FormCadServicos">
                        <i class="fa fa-3x fa-fw text-inverse -plus -times fa fa-plus"></i>
                        <p>Cadastrar</p>
                    </a>
                </li>
                <li>
                    <a href="<?=base_url()?>Administrativo/PainelAdministrativo">
                        <i class="fa fa-2x fa-fw text-inverse fa-sliders"></i>
                        <p>Painel</p>
                    </a>
                </li>
            </ul>
            <div class="search form">
                <form class="form-inline" method="post" action="<?=base_url()?>Produtos_Servicos/GetForServ">
                    <input class="form-control mr-sm-2" name="busca" title="Aqui você pode fazer uma busca pelo nome do serviço!" type="search" placeholder="Pesquisar" aria-label="Pesquisar">
                    <button class="btn btn-outline-light my-2 my-sm-0 " type="submit">Buscar</button>
                </form>
            </div>
        </nav>

