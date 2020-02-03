<?php
$ary = array("Sjonnie de Wiel", "Herman Kaal", "Henk de Steen", "Inge Kerkhoven", "Gert Kruiswijk");

$a = count($ary);

for($i = 0; $i<=$a-1; $i++){
    print_r($ary[$i] . PHP_EOL);
}
?>