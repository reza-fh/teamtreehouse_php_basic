<?php

$tanya=readline("pilih mana (yes/no/maybe)  ");

if($tanya=="yes")
{
    echo "benar sekali";
}
elseif($tanya=="no")
{
    echo "gakpapa";
}
elseif($tanya=="maybe")
{
    echo "yaudahiya";
}else{
    echo "syntax ERROR";
}

echo PHP_EOL;

$menu=1;

$menu=readline("pilih angka 1-3 !! ");

switch($menu)
{
    case 1:
          echo "anda memilih angka 1";
          break;
    case 2:
          echo "anda memilih angka 2";
          break;  
    case 3:
          echo "anda memilih angka 3";
          break;    
    default:
          echo "anda tidak memilih pilihan yang tersedia";
}