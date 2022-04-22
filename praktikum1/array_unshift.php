<?php
$tims = ['heru', 'jaki', 'ali'];
array_unshift($tims, 'joko', 'wati', 'siti', 'ardan');
foreach ($tims as $index => $value) {
    echo $index . ' ' . $value;
    echo '<br>';
}
?>