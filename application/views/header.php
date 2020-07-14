<html>

<head>
	<title>Penerimaan Mahasiswa Baru</title>
	<link rel="stylesheet" href="<?php echo base_url('public/css/desain.css') ?>">
</head>

<body>
	
	<div class="header">
		<img src="<?php echo base_url('public/gambar/logo.png') ?>">
	</div>

	<div class="menu">
			<ul>
				<li>
					<a href="<?php echo site_url('') ?>">
						<img src="<?php echo base_url('public/gambar/house.png') ?>">
					</a>
				</li>
				<li><a href="<?php echo site_url('') ?>">Depan</a></li>
				<li><a href="<?php echo site_url('home/profil') ?>">Profil Lulusan</a></li>
				<li><a href="<?php echo site_url('home/daftar') ?>">Buat Akun</a></li>
				

				<?php if($this->session->userdata('islogin') == TRUE): ?>
					<li><a href="<?php echo site_url('home/logout') ?>">Logout</a></li>
				<?php else: ?>
				<li><a href="<?php echo site_url('home/login') ?>">Login</a></li>
			<?php endif; ?>
			

			</ul>
	</div>