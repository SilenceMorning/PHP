<?php
//$a=openssl_get_cipher_methods();
//print_r($a);
$data="wo shi mu ke wang de lao shi , wo jiao Brown!";
$key=uniqid();
$method="DES-CBC";
$a=openssl_encrypt($data,$method,$key,OPENSSL_RAW_DATA,"123tru78");
var_dump($a);

$b=openssl_decrypt($a,$method,$key,OPENSSL_RAW_DATA,"123tru78");
print_r($b);