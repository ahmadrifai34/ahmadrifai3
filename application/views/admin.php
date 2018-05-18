<html>
	<head>
			<title>Pendaftaran Mahasiswa</title>

			<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
			 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
			 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	</head>

	<body>
		<nav class="navbar navbar-inverse">
			<div class="container-fluid">
				<div class="navbar-header">
				  <a class="navbar-brand" href="#">Pendaftaran Mahasiswa Baru</a>
				</div>

				<ul class="nav navbar-nav">
				  <li class="active"><a href="<?php echo base_url('index.php/fakultas') ?>>">Fakultas</a></li>
				  <li><a href="<?php echo base_url('index.php/jurusan')?>">Jurusan</a></li>
				  <li><a href="<?php echo base_url('index.php/mahasiswa')?>">Mahasiswa</a></li>
				</ul>
			</div>
		</nav>


		<div class="container-fluid">
			<?php $this->load->view($content) ?>
		</div>


	</body>
</html>
