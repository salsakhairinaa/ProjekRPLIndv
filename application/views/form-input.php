<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Input Data</title>

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

<div id="container">
		<h1><b><center>Input Your Data Here!!</center></b></h1>
	<a class="sundaboy" href="<?php echo site_url('welcome/index')?>"><div style="background:black"><b>Back to page  </b></div></a><br>

	<div id="body">
	<form action="<?php echo site_url('welcome/insert') ?>" method="POST">
	<center><table>
<tr>
    <td><font size="4"><b>Nama</b></font></td>
    <td>:</td>
    <td><input type="text" size ="30" name="nama"/></td>
   </tr>

<tr>
		<td><font size="4"><b>Angkatan</b></font></td>
		<td>:</td>
		<td><input type="text" size="30" name="angkatan"/></td>
		</tr>
		<br><br>
		<td><font size="4"><b>Alamat</b></font> </td>
		<td>:</td>
		<td><input type="text"size="30" name="alamat"/></td></tr></center><table>
		<br><br>
		<input type="submit" name="save" value="Save"/>
		</form>
		</div>
</div>
	<div class="footer">
        <center><b>Copyright &copy; 2018
        Salsa Khairina</b></center>
    </div>
</body>
</html>