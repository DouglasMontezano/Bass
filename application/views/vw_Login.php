<html xmlns="http://www.w3.org/1999/html">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <script type="text/javascript" src="<?php echo base_url(); ?>assets/jquery/jquery.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/script_os.js"></script>
        <link type="text/css" rel="stylesheet" href="<?php echo base_url(); ?>assets/css/pingendo.bootstrep.css" >
        <link type="text/css" rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap_3.3.4_js_bootstrap.min.css" >
        <link type="text/css" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.min.css"
              rel="stylesheet">
        
    </head>

    <body>
        <footer class="section section-primary text-left">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6">
                        <h1>Login</h1>
                        <p>Faça seu Login</p>
                    </div>
                </div>
            </div>
        </footer>


        <div class="section">
            <div class="container">
                <br>
                <br>
                <br>
                <br>
                <div class="col-md-12">
                    <form class="form-horizontal" role="form" action="<?= base_url() ?>faca-login" method="post">
                        <div class="form-group">
                            <div class="row">
                                <div class="col-md-6">
                                    <?php if($this->session->flashdata('sessao-encerrada')==TRUE):?>
                                        <div class= "alert alert-success"> <?=$this->session->flashdata('sessao-encerrada');?> </div>
                                    <?php endif;?>
                                    <?php if($this->session->flashdata('errologin')==TRUE):?>
                                        <div class= "alert alert-danger"> <?=$this->session->flashdata('errologin');?> </div>
                                    <?php endif;?>
                                </div>
                            </div>
                            <br>
                            <br>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="input-group ">
                                        <span class="input-group-addon"><i class="fa fa-envelope-o fa-fw" aria-hidden="true"></i></span>
                                        <input class="form-control" type="email" placeholder="Email " name="email"></input>
                                    </div>
                                </div>
                                <br>
                                <br>
                                <br>
                                <div class="col-md-6">
                                    <div class="input-group ">
                                        <span class="input-group-addon"><i class="fa fa-key fa-fw" aria-hidden="true"></i></span>
                                        <input class="form-control" type="password" placeholder="Senha" name="senha"> </input>
                                    </div>
                                </div>
                                <br>
                                <br>
                                <br>
                                <div class="col-md-2">
                                    <button type="submit" value="enviar" action="submit" class="btn btn-large btn-block btn-success" type="button">Entrar</button>
                                </div>
                            </div>
                        </div>
                    </form>
                    <div class="row">
                        <label>
                            <?php if(isset($data)==true){echo $data ;} ;?></label>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>