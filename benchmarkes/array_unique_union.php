<?php
use Wandu\Fastelper\Bench;

require __DIR__ . '/../vendor/autoload.php';

$x = [];
$y = [];
for ($i = 0; $i < 1000; $i++) {
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
    return array_unique(array_merge($x, $y));
});

$bench->run(function () use (&$x, &$y) {
    return array_unique_union($x, $y);
});
