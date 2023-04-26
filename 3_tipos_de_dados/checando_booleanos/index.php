<?php

$a = true;

if (is_bool($a)) {
    echo " Variável $a é booleano <br>";
}

if (is_bool(0)) {
    echo "0 é booleano <br>";
}

if (is_bool(false)) {
    echo " False é booleano <br>";
}

if (0 == false) {
    echo "0 é considerado falso <br>";
}
