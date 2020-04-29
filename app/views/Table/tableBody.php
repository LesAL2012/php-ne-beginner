<?php
$out = '<tbody><tr>';

for ($i = 1; $i <= 5; $i++) {
    $out .= '<td>';
    for ($k = 1; $k <= 10; $k++) {
        $out .= $i . " &times; " . $k . " = " . $i*$k . "<br>";
    }
    $out .= '</td>';
}

    $out .= '</tr>';
$out .= '<tr>';

for ($i = 6; $i <= 10; $i++) {
    $out .= '<td>';
    for ($k = 1; $k <= 10; $k++) {
        $out .= $i . " &times; " . $k . " = " . $i*$k . "<br>";
    }
    $out .= '</td>';
}

$out .= '</tr></tbody>';
