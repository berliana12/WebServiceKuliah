<?php
 
$konek = mysqli_connect("localhost", "id12804351_crud_akademik", "12345678","id12804351_crud_akademik");
 
$query = "SELECT * from ecommerce ";
$result = mysqli_query($konek,$query);
 
$arr = array();
while ($row = mysqli_fetch_assoc($result)) {
    $temp = array(
    "nama" => $row["nama"],
    "produk" => $row["produk"], 
    "harga" => $row["harga"]);
   
    array_push($arr, $temp);
}
 
$data = json_encode($arr);
 
echo "{\"MENAMPILKAN DATA USER ECOMMERCE\":" . $data . "}";
?>