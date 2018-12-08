
        
        <nav class="navbar navbar-expand-lg navbar-light  section-primary">
            <div class="container">   
            <a class="navbar-brand" href="#"><h2>Clientes</h2></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav col-md-12">
                    <li class="nav-item active">
                        <a class="nav-link" href="<?= base_url() ?>Clientes/ListClientes"><i class="nav-link active fa fa-2x fa-fw text-inverse -plus fa-list-ol"><h5>Listar</h5></i></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url() ?>Clientes/FormCadClientes"><i class="nav-link active fa fa-2x fa-fw text-inverse fa-user-plus"><h5>Cadastrar</h5></i></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url() ?>Administrativo/PainelAdministrativo"><i class="nav-link active fa fa-2x fa-fw text-inverse fa-sliders"><h5>Painel</h5></i></a><br>
                    </li>
                    <li class="nav-item search">
                        <div class="form ">     
                            <form class="form-inline "method="post"action="<?= base_url() ?>Clientes/GetForCli" >
                                <input class="form-control mr-sm-2  " name="busca"  title="Aqui você pode buscar pelo nome do cliente!"type="search" placeholder="Pesquisar" aria-label="Pesquisar">
                                <button class="btn btn-outline-light my-2 my-sm-0 " type="submit">Buscar</button>
                            </form>
                        </div>        
                    </li>
                </ul>
            </div>
        </nav>



        
