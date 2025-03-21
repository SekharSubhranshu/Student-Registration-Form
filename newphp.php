<?php
echo "this is my first program<br><br>";
$myarray = array('Maruti','Toyota','BMW');
echo 'my array has'. count($myarray) .' elements. The first element is ' .$myarray[0];

$cars=array(
    array('Maruti','Alto','Dezire','Baleno')
    ,array('Toyota','innova')
    ,array('BMW','series 5','series 3')
);



echo '<pre>';var_dump($cars); print_r($cars);

$array_count= count($myarray);
for($for_index=0;$for_index < $array_count; $for_index++){
    echo '<br>The value in '. $for_index. ' postion is ' .$myarray[$for_index];
}
echo $_SERVER['SCRIPT_NAME'];
echo '<br><br>';
$var1='this is my string';
print strrev($var1);
echo '<br><br>';
print strpos($var1,'my')
?>