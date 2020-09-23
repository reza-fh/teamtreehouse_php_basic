<?php

$number=1; //integer

$float=1.2; //float

$int_float=(int)$float; //integer

$str_float=(string)$float; //string

$str_boolean=(bool)$float; //boolean

var_dump($str_boolean);

function kali(int $satu,int $dua):int
{
    return $satu*$dua;
}

/**
 * operator
 * substract (-)
 * addition (+)
 * multiply (*)
 * divide (/)
 * modulus (%)
 * increment (++)
 * decrement (--)
 * 
 */

 echo 4/2; //2
 echo PHP_EOL;
 $angka=1;
 $angka++;
 $angka--;
 $angka+=9;
 $angka/=5;
 $angka.="tujuh";


 echo PHP_EOL;

 $a=5;

 var_dump(--$a);


