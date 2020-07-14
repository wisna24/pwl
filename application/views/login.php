<?php $this->load->view('header'); ?>
		
<div class="utama">
	<div class="kiri">
		<h3>Halaman Login</h3>
		<p>Silakan Login menggunakan akun anda, jika belum memiliki akun silakan daftar melalui halaman pendaftaran</p>

		<?php if($this->session->flashdata('pesan')): ?>
		<?php echo $this->session->flashdata('pesan');?>
	    <?php endif ?>


		<form action="" method="POST">

		<p>
			<label for="email">Email</label>
			<input type="text" name="email">
		</p>

		<p>
			<label for="password">Password</label>
			<input type="text" name="password">
		</p>

		<p>
			<input type="submit" value="Login">
		</p>
			<?php if (validation_errors()): ?>
			<h3>Ada yang salah, lengkapi ulang data anda</h3>
		<?php endif?>


		</form>
		
	</div>
	<?php $this->load->view('kanan'); ?>
</div>
	
<?php $this->load->view('footer'); ?>

