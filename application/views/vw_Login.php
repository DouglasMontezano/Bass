<link type="text/css" href="<?php echo base_url(); ?>assets/css/Login.css" rel="stylesheet">
</head>
	<body>
	<div class="col-md-12">
		<header>
			<h1>Bass Auto Center</h1>
			<p>Projetos Automotivos</p>
		</header>
		<section class='login'>
			<form role="form" action="<?= base_url() ?>Login/Logar" method="post">
				<h2>Login</h2>
				<div class="input-group ">
					<span class="input-group-addon"><i class="fa fa-envelope-o fa-fw"></i></span>
					<input class="form-control" type="email" placeholder="Email " name="email">
				</div>
				<br>
				<div class="input-group">
					<span class="input-group-addon"><i class="fa fa-key fa-fw"></i></span>
					<input class="form-control" type="current-password" placeholder="Senha" name="senha">
				</div>
				<br>
				<button type="submit" value="enviar" action="submit" class="btn btn-primary btn-success">Entrar</button>
				<br>
				<br>
				<div>
					<?php if ($this->session->flashdata('sessao-encerrada') == true) : ?>
						<div class="alert ">
							<?= $this->session->flashdata('sessao-encerrada'); ?>
						</div>
					<?php endif; ?>
					<?php if ($this->session->flashdata('errologin') == true) : ?>
						<div class="alert">
							<?= $this->session->flashdata('errologin'); ?>
						</div>
					<?php endif; ?>
				</div>
			</form>
		</section class="row alert">
			<div class="row">
				<label>
					<?php if (isset($data) == true) {
						echo $data;
					}; ?>
				</label>
			</div>
		</section>
	</div>	
	</body>
</html>