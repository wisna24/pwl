<?php $this->load->view('header'); ?>
		
<div class="utama">
	<div class="kiri">
		<h3>Pendaftaran Akun</h3>
		<p>Silakan Lengkapi Formulir Di Bawah:</p>

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
			<input type="submit" value="Buat Akun">
		</p>
			

		<?php if (validation_errors()): ?>
			<h3>Ada yang salah, lengkapi ulang data anda</h3>
		<?php endif?>

		</form>
		
	</div>
	<?php $this->load->view('kanan'); ?>
</div>
	
<?php $this->load->view('footer'); ?>

