<?php 
//	masukkan data angka ke array
$bilangan=array(-4, 8, 4, 2, 5, 3, 7, 8, -3, -1, 0, 10, 9, 14, 21);

//menghapus nilai duplikat dengan array_unique
$bilangan=array_unique($bilangan);

foreach( $bilangan as $i ) {
    echo $i;
}

 ?>