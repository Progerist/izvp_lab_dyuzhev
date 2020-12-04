<?php
while(list($name, $value)=each($_COOKIE)){
$array["password#1"] = "f9ia8cod";
$array["password#2"] = "f7kgv5z";
$array["password#3"] = "vkgmz2lv";
$array["password#4"] = "4k5mnvkf";
}
echo "Паролі: <br/>";
foreach($array as $k=>$val){
echo "<label>".$k."</label><input type='text' name='' value='".$val."'> <br/>";
}
?>