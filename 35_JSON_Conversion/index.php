<?php

$arr= ["name" => "Yaseen Jabir", "age" =>20, "email" => "yaseenjabir@gmail.com"];
$arrEncoded = json_encode($arr);
echo $arrEncoded;

echo "<br />";
echo "<br />";

$arrDecoded = json_decode($arrEncoded);
print_r( $arrDecoded);

?>