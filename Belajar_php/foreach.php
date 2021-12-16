<?php

$buah = ['apel','jeruk','anggur','mangga'];

#echo var_dump($buah);

foreach ($buah as $key => $value) {
    echo $value . $key . '<br/>';
}