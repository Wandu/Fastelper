<?php
use Wandu\Fastelper\Bench;

require __DIR__ . '/../vendor/autoload.php';

$x = [];
$y = [];
for ($i = 0; $i < 100000; $i++) {
    if (rand(0, 100) === 0) {
        $x[] = $i;
    }
    if (rand(0, 100) === 0) {
        $y[] = $i;
    }
}

echo "x : ", count($x), "\n";
echo "y : ", count($y), "\n";

shuffle($x);
shuffle($y);

$bench = new Bench();

$bench->run(function () use (&$x, &$y) {
    return array_values(array_intersect($x, $y));
});

$bench->run(function () use (&$x, &$y) {
    return array_unique_intersect($x, $y);
});
