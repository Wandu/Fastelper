<?php
if (!function_exists('array_unique_intersect')) {
    function array_unique_intersect(array $array1, array $array2)
    {
        $countMap = [];
        foreach ($array1 as $item) {
            @$countMap[$item]++;
        }
        foreach ($array2 as $item) {
            @$countMap[$item]++;
        }
        $result = [];
        foreach ($countMap as $key => $item) {
            if ($item >= 2) {
                $result[] = $key;
            }
        }
        return $result;
    }
}
