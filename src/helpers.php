<?php
if (!function_exists('array_unique_intersect')) {
    function array_unique_intersect(array $array1, array $array2)
    {
        $keyArray1 = [];
        $keyArray2 = [];
        foreach ($array1 as $item) {
            $keyArray1[$item] = 0;
        }
        foreach ($array2 as $item) {
            $keyArray2[$item] = 0;
        }
        return array_keys(array_intersect_key($keyArray1, $keyArray2));
    }
}
