<?php
$min = 59;
if ($min >= 0 && $min <= 14) {
    echo('В первую четверть.');
}

if ($min >= 15 && $min <= 30) {
    echo('Во вторую четверть.');
}

if ($min >= 31 && $min <= 45) {
    echo('В третью четверть.');
}

if ($min >= 46 && $min <= 59) {
    echo('В четвертую четверть.');
}

$num = rand(1, 4);
if ($num === 1) {
    echo "Зима";
} elseif ($num === 2) {
    echo "Лето";
} elseif ($num == 3) {
    echo "Весна";
} else {
    echo "Осень";
}


