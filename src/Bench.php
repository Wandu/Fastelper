<?php
namespace Wandu\Fastelper;

use Closure;

class Bench
{
    protected $startTime;

    protected $endTime;

    protected $startMemory;

    protected $maxMemory;

    public function start()
    {
        $this->startMemory = $this->maxMemory = memory_get_usage(true);
        $this->startTime = explode(' ', microtime());

        register_tick_function([$this, "tick"]);
    }

    public function end()
    {
        $this->tick();
        unregister_tick_function([$this, 'tick']);
        $this->endTime = explode(' ', microtime());
    }

    public function getMemoryUsage()
    {
        return $this->maxMemory - $this->startMemory;
    }

    public function getTime()
    {
        $isec = $this->endTime[1] - $this->startTime[1];
        $fsec = $this->endTime[0] - $this->startTime[0];
        return ($fsec < 0) ? [
            $fsec + 1, $isec - 1
        ] : [
            $fsec, $isec
        ];
    }

    public function run(Closure $closure, $times = 1000)
    {
        $this->start();
        $result = null;
        for ($i = 0; $i < $times; $i++) {
            $result = $closure();
        }
        $this->end();

        return [
            'memory_usage' => $this->getMemoryUsage(),
            'runtime' => $this->gettime(),
            'result' => $result,
        ];
    }

    public function printResult($result)
    {
        echo "Memory Usage : ", $result['memory_usage'], "\n";
        echo "Run Time : ";
        $runtime = $result['runtime'];
        echo $runtime[1], "(sec) ", $runtime[0], "\n\n";

        echo "Result\n";
        print_r($result['result']);
        echo "\n\n";
    }

    protected function tick()
    {
        $this->maxMemory = max($this->maxMemory, memory_get_usage(true));
    }
}
