<?php
$private='-----BEGIN PRIVATE KEY-----
MIIEvwIBADANBgkqhkiG9w0BAQEFAASCBKkwggSlAgEAAoIBAQCz5BgZvW35G/zC
ag6waNdNR5Ac740gb6DKxNJCy5sR3wfJYZUs4gaSEzsIjjoG1VoMx1MOAJG4FAHE
taHbYftjbayZG70BCV/u3IjE8NCtEw1aqwFa9p0LGQQn9oFO+ngaZ05cEAToCbGZ
527GIik9TZM0E9ePVLLY/cX3Hu2uMl6czCXYKrOW+Rd6JmtZidkPtgh9Z54AkDLn
Vx+hZYlkTIkziJ3MqrG1OmEgCGcfJJKF8pELQ52QPJTPQwQmuvHfDhDu42HFHZ1W
ed5kjADxQFGBhh4vbirAMNy7/gF/qqbspeZhua5GSfj0C1nbiQL832DZZ2vaE2R9
5jJBz6J5AgMBAAECggEBAJ27SkaHin36xE3ToL2dr+ra7MnyYdQnDN2+Zn6a+IVb
AgDZx2trZEeBBSojS03ilOrPe0uzxBGbuVE50YoDB+HOsKAvajIWfj96r5G/dbnM
EtGFT9Lqmhi4/qPryMXvaI/+NP8ULLkohslj3AVuvqo58vCe1UugAJGzMnnUbKNn
nQaqcze623QG8ZimDmp3wGevMDLnsHxQlh0XFobvILVj6iyHVt0H1Nr6mg2v6G61
Ka7ISJza/gKFGXM8hsP0ghtTzE9Rgqpl2RhtfIemfY1ZbSghEBtujeGwVaFxSWTu
J+oHdUPw/ZBLuyrs5h8G9jZMdMIFH3O0CQl05asXemECgYEA640UY6TTrcIIIhnC
Ol5ftyV7zJ1H6Z968OsfD7Q/JAbmvFAs9J0LXovjZ4r6gvqeDCCOAgjLpDmlRxQb
Gy1MNbljhrPuuNS/1d5+2bLK3PTJsmKDqX9S2B+Yxr1Cz/LHJRfgDrbjYyUqCLKn
FXf2KX2inqRPUQuir6mbyJs6j2cCgYEAw4IERMZTn3GjasaJS+MCT2TLUtqQhlm8
iip95mEYrR+BrCs8kWUWdcFPU1t8xlGDdU6cOwUExhBU0WH1b3DYvG7YBJFI50Ff
goyWK+kpJlJAsAHmXuRcScB/47wyXC7xxu+KgWdzPni4rMKDlvv7ZKWJwy0se+vB
ll5VG8crcx8CgYEA6xZiwxA+M6zzcRVEQ/zsil1esVhH7WK90LTYy1OZsNsybb+X
HoueTT5QN4b9fruiAXh8QouEsuLVkZr/cqBC71uXeVkbaFztGQZ2k89dqCinJOIt
hX0NsaXXVIKPq/shxmONuyHMz6bHzOaA22xewgohwzM59ikmtSsRz6UdTQECgYAW
i/n+DHk8XBiiib7vt4Bes5sXNQmR1Ot/a6MVXIFCBe4octwLUIMklWSWkmhzXpcw
gh5WWB/Sz7NYalmpvnPgV1AmRrMHqGxhW+E9sygBuV6oba+ppeBWyRJ2qw+LvgY4
EQwCHHIX9Egn9E7ErM6zLrwSfDUzHV83/i0GhROntQKBgQCiUdeywkFEeZkivwlk
Hley+GO0mv6jdknp3Nt3tenoZiCZBgfdOaFDwZnDA49jx6xxDTiRcPCpNxFyWCdn
sKI7w9yNXXFSnIymgywlemNOQ8/+8+8ztPu+yj6oxzVG27IUpAqO/Obue+mwQPlU
GYpc+vG4zzi4Kz89FKvacMhKeA==
-----END PRIVATE KEY-----';
$public='-----BEGIN PUBLIC KEY-----
MIIBIjANBgkqhkiG9w0BAQEFAAOCAQ8AMIIBCgKCAQEAs+QYGb1t+Rv8wmoOsGjX
TUeQHO+NIG+gysTSQsubEd8HyWGVLOIGkhM7CI46BtVaDMdTDgCRuBQBxLWh22H7
Y22smRu9AQlf7tyIxPDQrRMNWqsBWvadCxkEJ/aBTvp4GmdOXBAE6AmxmeduxiIp
PU2TNBPXj1Sy2P3F9x7trjJenMwl2CqzlvkXeiZrWYnZD7YIfWeeAJAy51cfoWWJ
ZEyJM4idzKqxtTphIAhnHySShfKRC0OdkDyUz0MEJrrx3w4Q7uNhxR2dVnneZIwA
8UBRgYYeL24qwDDcu/4Bf6qm7KXmYbmuRkn49AtZ24kC/N9g2Wdr2hNkfeYyQc+i
eQIDAQAB
-----END PUBLIC KEY-----';
$data="wo shi mu ke wang de lao shi , wo jiao Brown!";
$text="";
openssl_public_encrypt($data,$text,$public);
//echo $text;
$a="";
openssl_private_decrypt($text,$a,$private);
echo $a;