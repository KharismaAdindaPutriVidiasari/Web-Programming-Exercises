<!DOCTYPE html>
<html>
<head>
<title> DATA LENGKAP MAHASISWA </title>
</head>
<body>
<p> DATA LENGKAP MAHASISWA </P>
<table border="1">
  <th>NIM</th>
  <th>NAMA</th>
  <th>TANGGAL LAHIR</th>
  <th>TEMPAT LAHIR</th>
  <th>USIA</th>
<?php  
$file_handle = fopen("datamhs.dat", "rb");

function htngUMUR($tanggallhr, $tanggalskrng){
    
  // memecah tanggal untuk mendapatkan bagian tanggal, bulan dan tahun
  // dari tanggal pertama
  
  $tanggallahir = explode("-", $tanggallhr);
  $date1 = $tanggallahir[2];
  $month1 = $tanggallahir[1];
  $year1 = $tanggallahir[0];
  
  // memecah tanggal untuk mendapatkan bagian tanggal, bulan dan tahun
  // dari tanggal kedua
  
  $tanggalsekarang = explode("-", $tanggalskrng);
  $date2 = $tanggalsekarang[2];
  $month2 = $tanggalsekarang[1];
  $year2 =  $tanggalsekarang[0];
  
  // menghitung JDN dari masing-masing tanggal
  
  $lahir = GregorianToJD($month1, $date1, $year1);
  $sekarang = GregorianToJD($month2, $date2, $year2);
  
  // hitung selisih tahun kedua tanggal
  
  $USIA = ceil(($sekarang - $lahir) / 365);
  return $USIA;
}
$i=0;
while (!feof($file_handle) ) {
    $line_of_text = fgets($file_handle);
    $parts = explode('|', $line_of_text);
    htngUMUR($parts[2], "2021-04-16");
    echo "<tr><td height='119'>$parts[0]</td>
    <td>$parts[1]</td>
    <td>$parts[2]</td>
    <td>$parts[3]</td>
    <td>".htngUMUR($parts[2], date("Y-m-d"));"</td>
    </tr>";
    $i++;
}
fclose($file_handle);



?>  

</table>
<?php
echo "<br>";
echo "Jumlah Data Yang di Tampilkan :" .$i;
?>

</body>
</html>