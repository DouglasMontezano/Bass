<body>
        <nav class="nav">
            <div class="title-nav">
                <h3>Ordem de Serviço</h3>
            </div>
            <ul>
                <li>
                    <a href="<?=base_url()?>Os/ListOs">
                        <i class="fa fa-3x fa-fw text-inverse -plus fa-list-ol"></i>
                        <p>Listar</p>
                    </a>
                </li>
                <li>
                    <a href="<?=base_url()?>Os/FormCadOs">
                        <i class="fa fa-3x fa-fw text-inverse -plus -times t-plus fa-plus-circle"></i>
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
                <form class="form-inline" method="post" action="<?=base_url()?>Os/GetForOs">
                    <input class="form-control mr-sm-2" name="busca" title="Aqui você pode fazer uma busca pela placa, situação, nome cliente ou por  data inicial da O.S !" type="search" placeholder="Pesquisar" aria-label="Pesquisar">
                    <button class="btn btn-outline-light my-2 my-sm-0 " type="submit">Buscar</button>
                </form>
            </div>
        </nav>


