<html>
<head>
<title>Rest Web Services</title>
</head>
<body>
<?php
if (isset ($_POST['nama'])) {
$url = 'http://berliansiwi.000webhostapp.com/ecommerce.php';
//$data = "[{\"nim\":\".$_POST['nim'].\",\"nama\":\".$_POST['nama'].\",\"prodi\":\".$_POST['progdi'].\"}]";//
$data="{\"id\":\"".rand(1,9999)."\",\"nama\":\"".$_POST['nama']."\",\"produk\":\"".$_POST['produk']."\",\"harga\":\"".$_POST['harga']."\"}";
echo "datanya ".$data;
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
$response = curl_exec($ch);
echo "response ".$response;
curl_close($ch);
}
?>
<form method="POST" action="tambahecommerce.php">
<table>

<tr>
<td>Nama</td>
<td><input type="text" name="nama" id="nama"></td>
</tr>
<tr>
<td>Produk</td>
<td><input type="text" name="produk" id="produk"></td>
</tr>
<tr>
<td>Harga</td>
<td><input type="text" name="harga" id="harga"></td>
</tr>
<tr>
<tr>
<td><input type="submit" name="submit" id="submit" value="Tambah"></td>
<td></td>
</tr>
</table>
</form>
</body>
</html>