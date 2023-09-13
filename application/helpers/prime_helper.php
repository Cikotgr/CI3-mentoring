<?php

function cekPrime($angka){
    $hasil    =true;
    for($i=2;$i<$angka; $i++){
        if ($angka % $i == 0)
        $hasil    =false;
    }

    return $hasil;
}
