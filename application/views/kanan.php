<div class="kanan">
	<?php if($this->session->userdata('islogin') == TRUE): ?>
		<p>Selamat datang, </p>
		<a href="<?php echo site_url('home/biodata') ?>">Lengkapi Biodata Anda</a><br>
		<a href="<?php echo site_url('home/cetak') ?>">Cetak Bukti Daftar</a>
		<hr>
	<?php endif; ?>

	<a href="https://www.instagram.com/himafortika_stkip/">
		<img src="<?php echo base_url('public/gambar/banner1.jpg') ?>">	
	</a>
</div>