
        <nav class="nav">
            <div class="title-nav">
                <h3>Funcionários</h3>
            </div>
            <ul>
                <li>
                    <a href="<?=base_url()?>Funcionarios/ListFuncionarios">
                        <i class="fa fa-3x fa-fw text-inverse -plus fa-list-ol"></i>
                        <p>Listar</p>
                    </a>
                </li>
                <li>
                    <a href="<?=base_url()?>Funcionarios/FormCadFuncionarios">
                        <i class="fa fa-3x fa-fw text-inverse fa-user-plus"></i>
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
                <form class="form-inline" method="post" action="<?=base_url()?>Funcionarios/GetForFunc">
                    <input class="form-control mr-sm-2" name="busca" title="Aqui você pode fazer uma busca pelo nome do funcionário!" type="search" placeholder="Pesquisar" aria-label="Pesquisar">
                    <button class="btn btn-outline-light my-2 my-sm-0 " type="submit">Buscar</button>
                </form>
            </div>
        </nav>

