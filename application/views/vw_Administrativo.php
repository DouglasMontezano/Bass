
<body onload="chartdataload()">
<div class=" section section-primary ">
    <div class="container container-fluid ">
        <div class="row">
            <div class="col-md-12">
                <div class="col-md-4">
                    <h3>Administrativo </h3>
                 </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="nav nav-collapse">
                    <div class="col-md-1">
                        <a href="<?= base_url() ?>Clientes/PainelClientes"><i
                                    class="fa fa-3x fa-fw text-inverse fa-user  text-left "><h5>Clientes</h5></i></a>
                    </div>
                    <div class="col-md-1">
                        <a href="<?= base_url() ?>Produtos_Servicos/PainelProdutos"><i
                                    class="fa fa-3x fa-fw text-inverse fa fa-product-hunt  text-left"><h5>Produtos</h5>
                            </i></a>
                    </div>
                    <div class="col-md-1">
                        <a href="<?= base_url() ?>produtos_Servicos/PainelServicos"><i
                                    class="fa fa-3x fa-fw text-inverse text-left fa-wrench"><h5>Serviços</h5></i></a>
                    </div>
                    <div class="col-md-1">
                        <a href="<?= base_url() ?>Os/PainelOs"><i
                                    class="fa fa-3x fa-fw text-inverse fa text-left fa-book"><h5>O.S</h5></i></a>
                    </div>
                    <div class="col-md-1">
                        <a href="<?= base_url() ?>Funcionarios/PainelFuncionarios"><i
                                    class="fa fa-3x fa-fw text-inverse fa fa-street-view text-left"><h5>
                                    Funcionários</h5>
                            </i></a>
                    </div>
                    <div class="col-md-1">
                        <a href="<?= base_url() ?>Fornecedores/PainelFornecedores"><i
                                    class="fa fa-3x fa-fw text-inverse fa fa-user-circle-o"><h5>Fornecedores</h5>
                            </i></a>
                    </div>
                    <div class="col-md-1">
                        <a href="<?= base_url() ?>Vendas/PainelVendas"><i
                                    class="fa fa-3x fa-fw text-inverse fa fa-shopping-cart text-left"><h5>Vendas</h5>
                            </i></a>
                    </div>
                    <div class="col-md-1">
                        <a href="<?= base_url() ?>Lancamentos/PainelLancamentos"><i
                                    class="fa fa-3x fa-fw text-inverse fa fa-leanpub text-left"><h5>Lançamentos</h5></i></a>
                    </div>
                    <div class="col-md-1">
                        <a href="<?= base_url() ?>Fluxo/PainelFluxo"><i
                                    class="fa fa-3x fa-fw text-inverse fa fa-usd text-left"><h5>Fluxo de caixa</h5></i></a>
                    </div>
                    <div class="col-md-1">
                        <a href="<?= base_url() ?>Relatorios/PainelRelatorios"><i
                                    class="fa fa-3x fa-fw text-inverse fa fa-file-text text-left"><h5>Relatórios</h5>
                            </i></a>
                    </div>
                    <div class="col-md-1">
                        <a href="<?= base_url() ?>Login/Logout"><i class="fa fa-3x fa-fw text-inverse fa fa-sign-out"
                                                                   aria-hidden="true"><h5>Logout</h5></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="row"><br></div>
<div class="row">
    <div class="col-md-12">
        <div class="col-md-12">
            <div id="chart_div"></div>
        </div>
        <div class="col-md-12">
            <div id="chart_div2"></div>
        </div>
    </div>
</div>
</div>
</body>
</html>