<?php
class Aritmatika{

    function penjumlahan($a,$b){
        try{
            if(is_numeric($a) && is_numeric($b)){
                return $a+$b;
            }
        }catch(\Exception){
            return '';
        }
    }

    function pengurangan($a,$b){
        try{
            if(is_numeric($a) && is_numeric($b)){
                return $a-$b;
            }
        }catch(\Exception){

        }
    }

    function perkalian($a,$b){
        try{
            if(is_numeric($a) && is_numeric($b)){
                return $a*$b;
            }
        }catch(\Exception){

        }
    }

    function pembagian($a,$b){
        try{
            if(is_numeric($a) && is_numeric($b)){
                return $a/$b;
            }
        }catch(\Exception){

        }
    }

}
