<?php

$csv = array();
$file = fopen('test.csv', 'r');
while (($line = fgetcsv($file)) !== FALSE) {
  //$line is an array of the csv elements
  $csv[] = $line;
}
fclose($file);

//echo"<pre>"; print_r($csv);

foreach($csv as $data){
    
   print_r($data[4]."<br/>");
}

?>