<?php

$pal= "Isaac no ronca asi";

function polindromo($str){

    if(strlen($str)<=2){
        echo "La palabra no es valida.";
    }
    else{
        $str=strtolower(str_replace([" ", ",", "."], "", $str));
        $arr_str=str_split($str);
        $inv_arr_str=array_reverse($arr_str);

        if($arr_str==$inv_arr_str){
        echo "La palabra es polindromo";
        }
        else{
        echo "La palabra NO es polindromo";
        }
    }
    
}

echo polindromo($pal);

?>