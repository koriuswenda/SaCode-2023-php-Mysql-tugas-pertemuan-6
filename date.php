<?php

// date
// untuk menampilkan tanggal tertentu
// echo date("l,d-M-Y");


// Time
// Unix Timestamp / EPOCH time
// detik yang sudah berlalu sejak 1 januari 1970
// echo date("d M Y" , time () -60*60*24*100);

// mktime
// membuat sendiri detik
// mktime (0,0,0,0,0,0)
// jam, menit, detik, bulan, tanggal, tahun
echo date("l",mktime(0,0,0,9,28,1985));

// strtotime
echo date("l", strtotime ("28 aug 1985"));
?>