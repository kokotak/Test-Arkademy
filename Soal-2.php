<?php
$tanggal1 = "2019-06-03";   
$tanggal1 = strtotime($tanggal1);  
$tanggal2 = "2019-06-10";  
$tanggal2 = strtotime($tanggal2); 
for ($i=$tanggal1; $i<=$tanggal2; $i+=86400) {  
    echo date("Y-m-d", $i).'<br />';  
}  
