<!DOCTYPE html>
<html>
<body>

<?php  
function htngDenda($tgl1, $tgl2){
    
    // memecah tanggal untuk mendapatkan bagian tanggal, bulan dan tahun
    // dari tanggal pertama
    
    $tanggalharuskembali = explode("-", $tgl1);
    $date1 = $tanggalharuskembali[2];
    $month1 = $tanggalharuskembali[1];
    $year1 = $tanggalharuskembali[0];
    
    // memecah tanggal untuk mendapatkan bagian tanggal, bulan dan tahun
    // dari tanggal kedua
    
    $tanggaldikembalikan = explode("-", $tgl2);
    $date2 = $tanggaldikembalikan[2];
    $month2 = $tanggaldikembalikan[1];
    $year2 =  $tanggaldikembalikan[0];
    
    // menghitung JDN dari masing-masing tanggal
    
    $tanggalharuskembali = GregorianToJD($month1, $date1, $year1);
    $tanggaldikembalikan = GregorianToJD($month2, $date2, $year2);
    
    // hitung selisih hari kedua tanggal
    
    $selisih = $tanggaldikembalikan - $tanggalharuskembali;

    // hitung total denda
    $totaldenda = $selisih * 3000;
    return $totaldenda;
}

// Cara masukkan tanggal (tanggalharuskembali, tanggal kembali)
// dengan format tanggal (YYYY-MM-DD)
echo "Total denda yang harus dibayarkan sebesar : Rp ".htngDenda("2021-01-03", "2021-01-05");

?>  

</body>
</html>