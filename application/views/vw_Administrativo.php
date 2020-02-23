<body onload="chartdataload()">
    
        <nav class="nav">
        <!-- <div class="container container-fluid "> -->
            <div class="title-nav">
                <h3>Administrativo</h3>
            </div>
            <ul>
                <li>
                    <a href="<?= base_url() ?>Clientes/PainelClientes">
                        <i class="fa fa-3x fa-fw fa-user"></i>
                        <p>Clientes</p>
                    </a>
                </li>
                <li>
                    <a href="<?= base_url() ?>Produtos_Servicos/PainelProdutos">
                        <i class="fa fa-3x fa-fw  fa fa-product-hunt"></i>
                        <p>Produtos</p>
                    </a>
                </li>
                <li>
                    <a href="<?= base_url() ?>produtos_Servicos/PainelServicos">
                        <i class="fa fa-3x fa-fw fa-wrench"></i>
                        <p>Serviços</p>
                    </a>
                </li>
                <li>
                    <a href="<?= base_url() ?>Os/PainelOs">
                        <i class="fa fa-3x fa-fw fa fa-book"></i>
                        <p>O.S</p>
                    </a>
                </li>
                <li>
                    <a href="<?= base_url() ?>Funcionarios/PainelFuncionarios">
                        <i class="fa fa-3x fa-fw fa fa-street-view"></i>
                        <p>Funcionários</p>
                    </a>
                </li>

                <li>
                    <a href="<?= base_url() ?>Fornecedores/PainelFornecedores">
                        <i class="fa fa-3x fa-fw fa fa-user-circle-o"></i>
                        <p>Fornecedores</p>
                    </a>
                </li>
                <li>
                    <a href="<?= base_url() ?>Vendas/PainelVendas">
                        <i class="fa fa-3x fa-fw fa fa-shopping-cart"></i>
                        <p>Vendas</p>
                    </a>
                </li>
                <li>
                    <a href="<?= base_url() ?>Lancamentos/PainelLancamentos">
                        <i class="fa fa-3x fa-fw fa fa-leanpub"></i>
                        <p>Lançamentos</p>
                    </a>
                </li>
                <li>
                    <a href="<?= base_url() ?>Fluxo/PainelFluxo">
                        <i class="fa fa-3x fa-fw fa fa-usd"></i>
                        <p>Fluxo.C</p>
                    </a>
                </li>
                <li>
                    <a href="<?= base_url() ?>Relatorios/PainelRelatorios">
                        <i class="fa fa-3x fa-fw fa fa-file-text"></i>
                        <p>Relatórios</p>
                    </a>
                </li>
                <li>
                    <a href="<?= base_url() ?>Login/Logout">
                        <i class="fa fa-3x fa-fw fa fa-sign-out" aria-hidden="true"></i>
                        <p>Logout</p>
                    </a>
                </li>
            </ul>
        </nav>
        <div class="row">
            <div class="col-md-12">
                <div class="col-md-12">
                    <div id="chart_div"></div>
                </div>
                <div class="col-md-12">
                    <div id="chart_div2"></div>   
                    <//?php phpinfo();?>                
                </div>
            </div>
        </div>
    </div>
</body>
</html>