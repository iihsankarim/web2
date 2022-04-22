<?php
$tims = ['heru', 'jaki', 'ali', 'udin'];
array_shift($tims);
foreach ($tims as $index => $value) {
    echo $value;
    echo '<br>';
}
?>