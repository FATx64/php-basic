<?php

function halo(){
    echo 'halo dunia';
}

function saynama($nama = 'anonymus'){
    echo 'selamat datang, ' . $nama . '<br/>';
}

function angka($a , $b)
{
    $hasil = $a + $b;
    echo $hasil . '<br/>';
}

saynama('Fharid');

angka(12 , 10);
halo();