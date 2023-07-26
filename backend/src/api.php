<?php 

echo json_encode([
    "container" => gethostname(),
    "time" => time(),
    "md5" => md5((string)time()),
]);

