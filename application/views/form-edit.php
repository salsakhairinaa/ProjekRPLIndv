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
	@import url(http://fonts.googleapis.com/css?family=Roboto);
/*--------------------------------Button starts--------------------------------*/
.button-container {
  text-align: center;
}
.button {
  position: relative;
  background: currentColor;
  border: 1px solid currentColor;
  font-size: 1.1rem;
  color:#5e586b;
  margin: 3rem 0;
  padding: 0.75rem 3rem;
  cursor: pointer;
  -webkit-transition: background-color 0.28s ease, color 0.28s ease, box-shadow 0.28s ease;
  transition: background-color 0.28s ease, color 0.28s ease, box-shadow 0.28s ease;
  overflow: hidden;
  box-shadow: 0 2px 2px 0 rgba(0, 0, 0, 0.14), 0 3px 1px -2px rgba(0, 0, 0, 0.2), 0 1px 5px 0 rgba(0, 0, 0, 0.12);
}
.button span {
  color: #fff;
  position: relative;
  z-index: 1;
}
.button::before {
  content: '';
  position: absolute;
  background: #071017;
  border: 50vh solid #1d4567;
  width: 30vh;
  height: 30vh;
  border-radius: 50%;
  display: block;
  top: 50%;
  left: 50%;
  z-index: 0;
  opacity: 1;
  -webkit-transform: translate(-50%, -50%) scale(0);
          transform: translate(-50%, -50%) scale(0);
}
.button:hover {
  color: #D81900;
  box-shadow: 0 6px 10px 0 rgba(0, 0, 0, 0.14), 0 1px 18px 0 rgba(0, 0, 0, 0.12), 0 3px 5px -1px rgba(0, 0, 0, 0.2);
}
.button:active::before, .button:focus::before {
  -webkit-transition: opacity 0.28s ease 0.364s, -webkit-transform 1.12s ease;
  transition: opacity 0.28s ease 0.364s, -webkit-transform 1.12s ease;
  transition: transform 1.12s ease, opacity 0.28s ease 0.364s;
  transition: transform 1.12s ease, opacity 0.28s ease 0.364s, -webkit-transform 1.12s ease;
  -webkit-transform: translate(-50%, -50%) scale(1);
          transform: translate(-50%, -50%) scale(1);
  opacity: 0;
}
.button:focus {
  outline: none;
}
/*--------------------------------Button ends--------------------------------*/
	* {margin:0; padding:0;}
 
 nav {
 margin:auto;
 text-align: center;
 width: 100%;
 font-family: arial;
 } 
 nav ul {
 background:#000f0c;
 padding: 0 20px;
 list-style: none;
 position: relative;
 display: inline-table;
 width: 100%;
 }
 nav ul li{
 float:left;
 }

 nav ul li:hover{
 background:#d8d0d1;
 }

 nav ul li:hover a{
 color:#000;
 }

 nav ul li a{
 display: block;
 padding: 25px;
 color: #fff;
 text-decoration: none;
	</style>
</head>
<body>

	<h1><b><center>Edit Your Data Here!!</center></b></h1><br>

	

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
		<font size="4"><b>Tahun Masuk</b></font> <br>
		<input type="text" name="angkatan" size="40" value="<?php echo $angkatan?>"/><br><br>
		<font size="4"><b>Alamat</b></font> <br>
		<input type="text" size="40" name="alamat" value="<?php echo $alamat?>"/><br><br>
		<div class="container">
    <div class="button-container">
    <button type="save" class="button"><span>Save</span></button>
       <button class="button"  href="<?php echo site_url('welcome/index')?>"><span>Back</span></button>
  </div> 
</div>
		</form><br>
	<a href="<?php echo site_url('welcome/index')?>">Back to page</a>


	<div class="footer">
        <center><b>Copyright &copy; 2018
        Salsa Khairina</b></center>
    </div>
</body>
</html>
