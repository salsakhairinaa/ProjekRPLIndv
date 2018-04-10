<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>ALSKI</title>

	<style type="text/css">

	::selection{ background-color: #E13300; color: white; }
	::moz-selection{ background-color: #E13300; color: white; }
	::webkit-selection{ background-color: #E13300; color: white; }

	body {
		background-color: #fff;
		margin: 10px;
		font: 13px/20px normal Helvetica, Arial, sans-serif;
		color: #4F5155;
	}

	a {
		color: #fff;
		background-color: blcak;
		font-weight: 30px;
		line-height: 30px;
	}
	a.sundaboy:visited {color:#fff;}
	a.sundaboy:hover {color:#B0C4DE;}

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
	
	</style>
</head>
<body>
<div id="container"><br>
	<h1><center><b><font color=" #000000",size="7">[ MONO CLUB ]</font></b></center></h1><br>
	<font size="4"><center>Haloha!! Kamu suka warna monochorome?? Gabung yuk di "MONO CLUB" dan isi datanya...</center></font><br><br>
<div id="container">
	<table width="100%"  bgcolor="#fff" border="1" cellspacing="0">
		<a align="right" class="sundaboy" href="<?php echo site_url('welcome/form_input')?>"><div style="background:black"><b>Input Your Data!!  </b></div></a><br>
		<tr height="50px" style="background-color:#000000;">
			<th width="30px"><center><b><p style="color:white">No</p></b></center></th>
			<th width="200px"><center><b><p style="color:white">Nama</p></b></center></th>
			<th width="90px"><center><b><p style="color:white">Angkatan</p></b></center></th>
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
			<td style="background-color: black;">
				<a class="sundaboy" href="<?php echo site_url('welcome/form_edit/'.$r['id_alumni'])?>"><b>Edit</b></a><br>
				<a class="sundaboy" href="<?php echo site_url('welcome/delete/'.$r['id_alumni'])?>" onclick="return confirm('Are you sure?!')"><b>Delete</b></a>
			</td>
			</tr>
			<?php }?>
	</table></div>
<br>
<br>
	<div class="footer">
        <center>Copyright &copy; 2018
        Salsa Khairina</center>
    </div>
</body>
</html>