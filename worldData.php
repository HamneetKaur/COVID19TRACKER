<?php
$data = file_get_contents('http://api.covid19api.com/summary');
$coronadata = json_decode($data);

echo "<pre>";
print_r($coronadata);
