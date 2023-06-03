<?php
	include"inc/config.php"; 
	include"layout/header.php";	
?>
<div class="col-md-9">
	<div class="row">
		<?php
			$q = mysqli_query($con,"Select * from info_pembayaran limit 1");
			$data = mysqli_fetch_object($q);
		?>
		<pre><?php echo $data->info; ?></pre>
	</div>
</div>
<?php
	include "layout/footer.php";
?>