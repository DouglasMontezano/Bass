<body>
<header class="section section-primary">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="col-md-4">
                    <h1 contenteditable="true">Vendas</h1>
                </div>
            </div>
            <div class="col-md-8">
                <div class="col-md-1">
                    <a href="<?= base_url() ?>Vendas/ListVendas"><i class="fa fa-3x fa-fw text-inverse -plus fa-list-ol"><h5>Listar</h5></i></a>
                </div>
                <div class="col-md-1">
                    <a href="<?= base_url() ?>Vendas/FormCadVendas"><i class="fa fa-3x fa-fw text-inverse -plus -times t-plus fa-plus-circle"><h5>Cadastrar</h5></i></a>
                </div>
                <div class="col-md-1">
                    <a href="<?= base_url() ?>Administrativo/PainelAdministrativo"><i class="fa fa-3x fa-fw text-inverse fa-sliders"><h5>Painel</h5></i></a>
                </div>
            </div>
            <div class="col-md-4">
                <form class="navbar-form pull-left" method="post" action="<?= base_url() ?>Vendas/GetForVendas">
                    <input type="text" class="form-control" id="busca" name="busca" data-toggle="tooltip" data-placement="top"
                           title="Aqui você pode fazer uma busca pelo código, situação, nome cliente ou data da venda !  ">
                    <button border="0" type="submit" class="btn btn-default"><i class="fa fa-search" aria-hidden="true"></i><strong>Buscar</strong></button>
                </form>
            </div>
        </div>
    </div>
</header>
<div class="navbar navbar-default navbar-static-top"></div>