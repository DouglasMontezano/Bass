<!-- <!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/jquery/jquery.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/script_os.js"></script>
    <link type="text/css" rel="stylesheet" href="<?php echo base_url(); ?>assets/css/pingendo.bootstrep.css" >
    <link type="text/css" rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap_3.3.4_js_bootstrap.min.css" >
    <link type="text/css" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.min.css"
          rel="stylesheet">
</head> -->
<body>
<footer class="section section-primary">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="col-md-4">
                    <h1 contenteditable="true">Lançamentos</h1>
                </div>
            </div>       
            
            <div class="col-md-8">
                <div class="col-md-1">
                    <a href="<?= base_url() ?>Lancamentos/ListLancamentos"><i class="fa fa-3x fa-fw text-inverse -plus fa-list-ol"><h5>Listar</h5></i></a>
                </div>
                <div class="col-md-1">
                    <a href="<?= base_url() ?>Lancamentos/FormCadLancamentos"><i class="fa fa-3x fa-fw text-inverse -plus -times t-plus fa-plus-circle"><h5>Cadastrar</h5></i></a>
                </div>
                <div class="col-md-1">
                    <a href="<?= base_url() ?>Administrativo/PainelAdministrativo"><i class="fa fa-3x fa-fw text-inverse fa-sliders"><h5>Painel</h5></i></a>
                </div>
            </div>
            <div class="col-md-4">
                <form class="navbar-form pull-left" method="post" action="<?= base_url() ?>Lancamentos/GetForLancamentos">
                    <input type="text" class="form-control" id="busca" name="busca" data-toggle="tooltip" data-placement="top"
                           title="Aqui você pode fazer uma busca pelo código, data-vencimento, status, tipo ou sub-tipo de lançamentos!  ">
                    <button border="0" type="submit" class="btn btn-default" ><i class="fa fa-search" aria-hidden="true"></i><strong>Buscar</strong></button>
                </form>
            </div>
        </div>
    </div>
</footer>
<div class="navbar navbar-default navbar-static-top"></div>