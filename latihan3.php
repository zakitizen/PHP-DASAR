<?php
    //nama pegawai
    $pegawai[1]="BUDI";
    $pegawai[2]="ASEP";
    $pegawai[3]="DEWI";
    //jam kerja
    $jam[1]=8;
    $jam[2]=10;
    $jam[3]=6;
    //upah perjam
    $upah[1]=30000;
    $upah[2]=40000;
    $upah[3]=25000;
    //gaji
    $Gaji[1]=$jam[1] *$upah[1];
    $Gaji[2]=$jam[2] *$upah[2];
    $Gaji[3]=$jam[3] *$upah[3];
    //lembur
    $lebih[1]=$lebih[2] = $lebih[3]=0;
    $upahlembur[1] = $upahlembur[2] = $upahlembur[3] = 0;
    
    if($jam[1]>5)
    {
        $lebih[1]=$jam[1]-5;
        $upahlembur[1]=$lebih[1] * (2*$upah[1]);
    }
    if($jam[2]>5)
    {
        $lebih[2]=$jam[2]-5;
        $upahlembur[2]=$lebih[2] * (2*$upah[2]);
    }
    if($jam[3]> 5)
    {
        $lebih[3]=$jam[3]-5;
        $upahlembur[3]=$lebih[3] * (2*$upah[3]);
    }
    $total=$Gaji[1] + $Gaji[2] + $Gaji[3] + $upahlembur[1] + $upahlembur[2] + $upahlembur[3];
    
    echo "<pre><h1>PT.UNIKOM BANDUNG<br>";
    echo "=====================================================<br>";
    echo "NAMA PEGAWAI | JAM KERJA | UPAH PERJAM | GAJI PERHARI | GAJI LEMBUR<br>";
    echo "====================================================================<br>";
    echo " $pegawai[1]	     |   $jam[1]   	 |  $upah[1]   | $Gaji[1]  | $upahlembur[1] <br>";
    echo " $pegawai[2]        |   $jam[2]      |  $upah[2]  | $Gaji[2]  |  $upahlembur[2]  <br>";
    echo " $pegawai[3]       |   $jam[3]     	|$upah[3]    | $Gaji[3] |  $upahlembur[3]   <br>";
    echo "=====================================================<br>";
    echo "TOTAL GAJI PER HARI =$total<br>";
?>