<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Edit Data</title>

		<style type="text/css">

	::selection{ background-color: #E13300; color: white; }
	::moz-selection{ background-color: #E13300; color: white; }
	::webkit-selection{ background-color: #E13300; color: white; }

	body {
		background-color: #fff;
		margin: 50px;
		font: 13px/20px normal Helvetica, Arial, sans-serif;
		color: #4F5155;
	}

	a {
		color: #fff;
		background-color: transparent;
		
		line-height : 30px;
		font-weight : 30px;
	}
	a.sundaboy:visited {color:#fff;}
	a.sundaboy:hover {color:#B0C4DE;}

	h1 {
		color: #444;
		background-color: transparent;
		font-size: 40px;
		font-weight: normal;
	}

	code {
		font-family: Consolas, Monaco, Courier New, Courier, monospace;
		font-size: 12px;
		background-color: #f9f9f9;
		border: 1px solid #D0D0D0;
		color: #002166;
		display: block;
		margin: 14px 0 14px 0;
		padding: 12px 10px 12px 10px;
	}

	#body{
		margin: 0 50px 0 50px;
	}
	
	.footer {
  text-align: right;
		font-size: 11px;
		border-top: 1px solid #D0D0D0;
		line-height: 32px;
		padding: 0 10px 0 10px;
		margin: 20px 0 0 0;
		position: fixed;
    left: 0;
    bottom: 0;
		width : 100%;
		 background-color:black;
    color: white;
}
	
	#container{
		border: #D0D0D0;
	}
	</style>
</head>
<body>

	<h1><b><center>Edit Your Data Here!!</center></b></h1>
	<a class="sundaboy" href="<?php echo site_url('welcome/index')?>"><div style="background:black"><b>Back to page  </b></div></a><br>
	

	<?php if($dataEdit){
		$id=$dataEdit->id_alumni;
		$nama=$dataEdit->nama_alumni;
		$angkatan=$dataEdit->angkatan;
		$alamat=$dataEdit->alamat_alumni;
	} else{
		$nama="";
		$angkatan="";
		$alamat="";
	} ?><center>
	<form action="<?php echo site_url('welcome/update/'.$id) ?>" method="POST">
	<br>
		<font size="4"><b>Nama</b></font> <br>
		<input type="text" name="nama" size="40" value="<?php echo $nama?>"/><br><br>
		<font size="4"><b>Angkatan</b></font> <br>
		<input type="text" name="angkatan" size="40" value="<?php echo $angkatan?>"/><br><br>
		<font size="4"><b>Alamat</b></font> <br>
		<input type="text" size="40" name="alamat" value="<?php echo $alamat?>"/><br><br>
		<input type="submit" name="save" value="Save"/></center>
		</form><br>
	<a href="<?php echo site_url('welcome/index')?>">Back to page</a>


	<div class="footer">
        <center><b>Copyright &copy; 2018
        Salsa Khairina</b></center>
    </div>
</body>
</html>