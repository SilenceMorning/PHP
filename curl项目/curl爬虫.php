<?php
$curl=curl_init("https://www.imooc.com/");
//curl_setopt($curl, CURLOPT_URL, "https://www.imooc.com/");  // 设置要抓取的页面地址
//curl_setopt($curl, CURLOPT_RETURNTRANSFER, 0);              // 抓取结果直接返回（如果为0，则直接输出内容到页面） // 不需要页面的HTTP头
curl_exec($curl);
curl_close($curl);
/*phpinfo();*/
?>