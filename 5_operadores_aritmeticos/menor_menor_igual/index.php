<?php

$a = 4;
$b = 5;
$c = 6;
$d = 6;

if ($a < $b) {
    echo "A é menor que B <br>";
} else {
    echo "A não é menor que B <br>";
}

if ($b < $a) {
    echo "B é menor que A <br>";
} else {
    echo "B não é menor que A <br>";
}

if ($d <= $c) {
    echo "D é menor ou igual que C <br>";
} else {
    echo "D não é menor ou igual a C <br>";
}

if ($d <= $a) {
    echo "D é menor ou igual que A <br>";
} else {
    echo "D não é menor ou igual a A <br>";
}
