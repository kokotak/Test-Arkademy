// $tanggal1 = "2019-06-03";   
// $tanggal1 = strtotime($tanggal1);  
// $tanggal2 = "2019-06-10";  
// $tanggal2 = strtotime($tanggal2); 
// for ($i=$tanggal1; $i<=$tanggal2; $i+=86400) {  
//     echo date("Y-m-d", $i).'<br />';  
// } 
<?php
print_r(strarr('2019-10-10','2019-10-12'));
function strarr($tgl1,$tgl2)
{
  $j=0;
  for ($i=strtotime($tgl1); $i<=strtotime($tgl2); $i+=86400) {  
       $array[$j]=date("Y-m-d", $i);  
       $j++;
  }  
  return $array;
}
