<?php
$f_json = 'years.json';
$json = file_get_contents($f_json);
$obj = json_decode($json);
$array = $obj->years;
foreach($array as $item){
    print "$item ";
}
?>