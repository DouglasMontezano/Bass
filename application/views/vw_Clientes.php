
    <body>
        <nav class="section section-primary ">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="col-md-4">
                            <h1 contenteditable="true">Clientes</h1>
                        </div>
                    </div>                 
                    <div class="col-md-8">
                        <div class="col-md-1">
                            <a href="<?= base_url() ?>Clientes/ListClientes"><i class="fa fa-3x fa-fw text-inverse -plus fa-list-ol"><h5>Listar</h5></i></a>
                        </div>
                        <div class="col-md-1">
                            <a href="<?= base_url() ?>Clientes/FormCadClientes"><i class="fa fa-3x fa-fw text-inverse fa-user-plus"><h5>Cadastrar</h5></i></a>
                        </div>
                        <div class="col-md-1">
                            <a href="<?= base_url() ?>Administrativo/PainelAdministrativo"><i class="fa fa-3x fa-fw text-inverse fa-sliders"><h5>Painel</h5></i></a><br>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <form class="navbar-form pull-left" method="post"action="<?= base_url() ?>Clientes/GetForCli">
                            <input type="text" class="form-control" id="busca" name="busca"data-toggle="tooltip" data-placement="top"
                                   title="Aqui você pode buscar pelo nome do cliente!  ">
                            <button border="0" type="submit" class="btn btn-default" ><strong>Buscar</strong></button>
                        </form>
                    </div>
                </div>
            </div>
        </nav>

    </body>
