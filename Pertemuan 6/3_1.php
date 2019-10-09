<?php
$urut = array ("lanirne", "aduh", "qifuat", "anevi", "samid", "kifuat");
sort($urut);

$urutlength = count ($urut);
for ($n=0; $n < $urutlength; $n++){
echo $urut[$n];
echo ", ";
}
?>

