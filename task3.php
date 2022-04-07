<?php
$arrayInfo = [
    'name'=>'Ivan',
    'surname'=>'Ivanov',
    'address'=>'Petrovsk',
    'telephone'=>'8 (985) 222-33-444'
];
print "<table>\n";
foreach($arrayInfo as $key => $value){
    print "<tr><td>$key</td><td>$value</td></tr>";
}
print "</table>";
?>