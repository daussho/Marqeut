<?php
// Generated by curl-to-PHP: http://incarnate.github.io/curl-to-php/
$ch = curl_init();

curl_setopt($ch, CURLOPT_URL, "localhost/wp/wp-json/wc/v2/orders/727");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "GET");

curl_setopt($ch, CURLOPT_USERPWD, "ck_3393779284b2c604e30177bf87b21caa8dfcf49b:cs_a3737ec702c729776f0036bb9234515b43e3b382");

$result = curl_exec($ch);
if (curl_errno($ch)) {
    echo 'Error:' . curl_error($ch);
}
curl_close ($ch);
print $result;
?>
curl https://localhost/wp/wp-json/wc/v2/products/ -u ck_252e1db8081052e7ddbea2cd720bc746e7404608:cs_b4650067069c883a9d44e5813d6cc8034899f2cb
curl http://localhost/wp/wp-json/wc/v2/orders -u ck_3393779284b2c604e30177bf87b21caa8dfcf49b:cs_a3737ec702c729776f0036bb9234515b43e3b382