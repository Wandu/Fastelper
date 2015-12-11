<?php
namespace Wandu\Fastelper;

use Closure;
use Ubench;

class Bench
{
    protected $startTime;

    protected $endTime;

    protected $startMemory;

    protected $maxMemory;

    public function __construct()
    {
        $this->bench = new Ubench();
    }

    public function run(Closure $closure, $times = 1000)
    {
        $this->bench->start();
        $result = null;
        for ($i = 0; $i < $times; $i++) {
            $result = $closure();
        }
        $this->bench->end();

        echo "Memory Usage : ", $this->bench->getMemoryUsage(), "\n";
        echo "Memory Peak : ", $this->bench->getMemoryPeak(), "\n";
        echo "Run Time : ", $this->bench->getTime(false, "%d%s"), "\n";
        echo "Result\n";
        print_r($result);
        echo "\n\n";
    }
}
