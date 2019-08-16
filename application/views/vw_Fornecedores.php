<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script type="text/javascript" src="<?php echo base_url();?>assets/jquery/jquery.js"></script>
    <script type="text/javascript" src="http://netdna.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
    <link href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="http://pingendo.github.io/pingendo-bootstrap/themes/default/bootstrap.css" rel="stylesheet" type="text/css">
</head>

<body>
<footer class="section section-primary">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="col-md-4">
                    <h1 contenteditable="true">Fornecedores</h1>
                </div>
            </div>
            <div class="col-md-8">
                <div class="col-md-1">
                    <a href="<?= base_url()?>Fornecedores/ListFornecedores"><i class="fa fa-3x fa-fw text-inverse -plus fa-list-ol"><h5>Listar</h5></i></a>
                </div>
                <div class="col-md-1">
                    <a href="<?= base_url()?>Fornecedores/FormCadFornecedores"><i class="fa fa-3x fa-fw text-inverse fa-user-plus"><h5>Cadastrar</h5></i></a>
                </div>
                <div class="col-md-1">
                    <a href="<?= base_url()?>Administrativo/PainelAdministrativo"><i class="fa fa-3x fa-fw text-inverse fa-sliders"><h5>Painel</h5></i></a><br>
                </div>
            </div>
            <div class="col-md-4">
                <form class="navbar-form pull-left" method="post"action="<?= base_url()?>Fornecedores/GetForFornecedores">
                    <input type="text" class="form-control" id="busca" name="busca" data-toggle="tooltip" data-placement="top"
                           title="Aqui você pode fazer uma busca pelo nome do fornecedor!  ">
                    <button border="0" type="submit" class="btn btn-default" ><strong>Buscar</strong></button>
                </form>
            </div>
        </div>
    </div>
</footer>
<div class="navbar navbar-default navbar-static-top">
    <div class="container">
        <div class="navbar-header">
        </div>
    </div>
</div>
</body>
