<body onload="chartdataload()">
    <!-- <div class="container container-fluid "> -->
    <nav class="nav">
        <div class="title-nav">
            <h3>Clientes</h3>
        </div>
        <ul>
            <li>
                <a href="<?= base_url() ?>Clientes/ListClientes">
                    <i class="fa fa-2x fa-fw -plus fa-list-ol"></i>
                    <p>Listar</p>
                </a>
            </li>
            <li>
                <a href="<?= base_url() ?>Clientes/FormCadClientes">
                    <i class="fa fa-2x fa-fw fa-user-plus"></i>
                    <p>Cadastrar</p>
                </a>
            </li>
            <li>
                <a href="<?= base_url() ?>Administrativo/PainelAdministrativo">
                    <i class="fa fa-2x fa-fw text-inverse fa-sliders"></i>
                    <p>Painel</p>
                </a>
            </li>            
    </ul>             
    <div class="search form">
        <form class="form-inline" method="post" action="<?=base_url()?>Clientes/GetForCli">
            <input class="form-control mr-sm-2" name="busca"
                title="Aqui você pode buscar pelo nome do cliente!" type="search" placeholder="Pesquisar"
                 aria-label="Pesquisar">
            <button class="btn btn-outline-light my-2 my-sm-0 " type="submit">Buscar</button>
        </form>
    </div> 
</nav>
  

    