<?php

$url = "http://service-backend:9999/api.php";
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($ch, CURLOPT_TIMEOUT, 5);
$res =  curl_exec($ch);
$json = json_decode($res, true);
curl_close($ch);

$name = "frontend";

?>


<html>
<head>
    <title>kube</title>
</head>
<body>
<div>
<h1><?php echo $name; ?></h1>
<h3>From backend service api below.</h3>
<pre><?php var_dump($json); ?></pre>
</div>
</body>
</html>

