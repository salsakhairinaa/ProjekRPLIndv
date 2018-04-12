<!DOCTYPE html>
<html lang="en">
<head>
   
	<meta charset="utf-8">
	<title>Monochorome Club</title>
	<meta name="theme-color" content="#4286f4"/>

	<style type="text/css">

	::selection{ background-color: #E13300; color: white; }
	::moz-selection{ background-color: #E13300; color: white; }
	::webkit-selection{ background-color: #E13300; color: white; }

	body {
		 background-image: url("application/views/1.jpg");
		margin: 10px;
		font: 13px/20px normal Helvetica, Arial, sans-serif;
		color: #4F5155;
	}

	a {
		color: #fff;
		background-color: blcak;
		font-weight: 50px;
		line-height: 30px;
	}
	a.sundaboy:visited {color:#fff;}
	a.sundaboy:hover {color:#000000;}

	h1 {
		color: #444;
		background-color: transparent;
		font-size: 50px;
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
		margin: 0 20px 0 10px;
	}
	
.footer {
    position: fixed;
    left: 0;
    bottom: 0;
    width: 100%;
    background-color:black;
    color: white;
    text-align: center;
	line-height: 25px;
}
	
	#container{

		border:#D0D0D0;
		-webkit-box-shadow: 0 0 8px #D0D0D0;
	}
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
    <nav>
    <ul>
       <li><a href="<?php echo site_url('welcome/index')?>">Home</a></li>
       <li><a href="<?php echo site_url('welcome/form_input')?>">Input Data</a></li>
    </ul>
</nav>
<div id="container"><br><br>
	<h1><b><font color=" #000000",size="7">[MONO CLUB]</font></b></h1><br><br>
<font size="3">	Haloha!!<br>
    Mono Club adalah suatu kelompok pecinta warna-warna monochorome.<br>
    Apakah kamu juga? Yuk langsung saja bergabung dengan cara "Input Data" kamu : )<br><br></font>
<div id="container">
    <a class="sundaboy" href="<?php echo site_url('welcome/form_input')?>"><div style="background:#A9A9A9"><b>Input Data</b></div></a><br>
	<table width="100%"  bgcolor="#fff" border="1" cellspacing="0">
	    
		<tr height="50px" style="background-color:#262323;">
			<th width="30px"><center><b><p style="color:white">No</p></b></center></th>
			<th width="200px"><center><b><p style="color:white">Nama</p></b></center></th>
			<th width="90px"><center><b><p style="color:white">Tahun Masuk</p></b></center></th>
			<th width="200px"><center><b><p style="color:white">Alamat</p></b></center></th>
			<th width="50px"><center><b><p style="color:white">Opsi</p></b></center></th>
			</tr>
			<?php 
			$no=1;
			foreach($hasil as $r){?>
		<tr height="100px">
			<td><center><?php echo $no++ ?></center></td>
			<td><?php echo $r['nama_alumni']?></td>
			<td><center><?php echo $r['angkatan']?></center></td>
			<td><?php echo $r['alamat_alumni']?></td>
			<td style="background-color: #696969;">
				<a class="sundaboy" href="<?php echo site_url('welcome/form_edit/'.$r['id_alumni'])?>"><b>Edit</b></a><br>
				<a class="sundaboy" href="<?php echo site_url('welcome/delete/'.$r['id_alumni'])?>" onclick="return confirm('Are you sure?!')"><b>Delete</b></a>
			</td>
			</tr>
			<?php }?>
	</table></div>
<br>
<br>
	<div class="footer">
        <marquee></matquee><center>Copyright &copy; 2018
        Salsa Khairina</center></marquee>
    </div>
</body>
</html>
