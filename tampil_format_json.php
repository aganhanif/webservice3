<?php

//Koneksi ke database MySQL
$koneksi = mysqli_connect("localhost","root","","akademik") or die ("Error".mysqli_error($koneksi));

//Mengambil data pada tabel dari database MySQL
$sql = "Select * from mahasiswa";
$result = mysqli_query($koneksi, $sql) or die ("Error in Selecting".mysqli_error($koneksi));

//Membuat Array
$identitas = array ();
while ($row = mysqli_fetch_assoc($result)) 
{
	$identitas[] = $row;
}

//Menampilkan konversi data pada tabel identitas ke format JSON
echo json_encode($identitas);

//Close koneksi database
mysqli_close($koneksi);

?>