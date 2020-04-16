<?php
//$a=openssl_get_cipher_methods();
//print_r($a);
$data="wo shi mu ke wang de lao shi , wo jiao Brown!";
$key=uniqid();
$method="AES-128-CBC";
$a=openssl_encrypt($data,$method,$key,OPENSSL_RAW_DATA,"54erw121021wqe12");
var_dump($a);

$b=openssl_decrypt($a,$method,$key,OPENSSL_RAW_DATA,"54erw121021wqe12");
print_r($b);