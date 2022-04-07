<?php
  $array = [
    [
        1 => 'Январь',
        2 => 'Февраль',
        3 => 'Март'
    ],
    [
        1 => 'Апрель',
        2 => 'Май',
        3 => 'Июнь'
    ]
  ];
  foreach($array as $items){
      foreach($items as $key=>$value){
          print "<ul>";
          print"<li>$value</li>";
          print "</ul>";
      }
  }
?>