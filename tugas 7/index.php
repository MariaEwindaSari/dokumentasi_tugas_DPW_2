<style type="text/css">
.share{
position: fixed;
height: 45px;
width: 42px;
left: 1px;
bottom: 300px;
z-index: 9999;
}
</style>
<?php 
 session_start(); 
include 'koneksi.php';
?>
<?php
$datakategori=array();
$ambil= $koneksi->query("SELECT * FROM kategori");
while($tiap=$ambil->fetch_assoc())
{
	$datakategori[]=$tiap;
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>TOKO SEPATU</title>
	<link rel="stylesheet" type="text/css" href="admin/assets/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>


<section class="konten">
	<?php include 'menu.php'; ?><br><br><br>
	<div class="share">
	    <i class="fa fa-share fa-lg"></i>                     
	    <div class="a2a_kit a2a_kit_size_32 a2a_default_style" data-a2a-url="http://localhost/toko" data-a2a-title="Toko sepatu">
	    <a class="a2a_dd" href="https://www.addtoany.com/share"></a><br> 
	    <a class="a2a_button_facebook"></a><br> 
	    <a class="a2a_button_whatsapp"></a><br> 
	    <a class="a2a_button_telegram"></a>
	    </div>
	    <script>
	    var a2a_config = a2a_config || {};
	    a2a_config.onclick = 1;
	    </script>
	    <script async src="https://static.addtoany.com/menu/page.js"></script>
	    
	</div>
	 <?php include 'buttonup.php'; ?>
	<div class="container"><br>
		
		<?php include 'slider.php'; ?><br>
		<form action="pencarian.php" method="get" class="navbar-form navbar-right">
			<input type="text" class="form-control" name="keyword" placeholder="Cari Produk">
			<button class="btn btn-primary"><i class="fas fa-search"></i></button>
		</form>
		<form action="pencarian.php" method="get" class="navbar-form navbar-right">
				<input type="text" class="form-control" name="keyword" placeholder="filter produk">
				 <td> <input type="submit" class="btn btn-primary" name="filter" value="filter"></td>
		</form>
			
		<?php 
		if (empty($_SESSION['keranjang']) OR !isset($_SESSION["keranjang"])):?>
				
		<?php else: ?>
			<?php include 'modal.php'; ?><br>
		<?php endif ?>
		<?php include 'produk.php'; ?><br>

	    
	</div>
	<?php include 'footer.php'; ?>
	
</section>

</body>
</html>