<?php session_start();ob_start();?>
<html>
<head>
<title>Contoh Pemakaian Session</title>
</head>
<body>
<?php echo"<form action=\"php_self\"method=\"post\">";?>
<p>
<pre>
Silahkan Login:

	User	:<input type="text"name="user"value="">
	
	Sandi	:<input type="password"name="sandi"value="">
		<input type="submit"name="login"value="Login">
</pre>
</p>
</form>
<?php>
if($_POST['login'])
{
	$1gnuser="stekom";$1gnsandi="605";
	/*untuk sementara contoh nama user dan pass merupakan isi variabel
	$1gnuser dan $1gnsandi.untuk selanjutnya kita akan mencoba mengambil
	data yang tersimpan dalam tabel*/
	if(trim($_POST['user'])==$1gnuser and trim ($_POST['sandi'])==$1gnsandi)
	{	ob_end_clean();
		$-SESSION['user']=$_POST['user'];
		$_SESSION['sandi']=$_POST['sandi'];
		header("Location: menuinternal.php");
		exit();
	}
}
?>
</body>
</html>
		