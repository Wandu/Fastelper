<?php
if (!function_exists('array_unique_intersect')) {
    function array_unique_intersect(array $array1, array $array2)
    {
        return array_keys(array_intersect_key(array_flip($array1), array_flip($array2)));
    }

    function array_unique_intersect_candidate(array $array1, array $array2)
    {
        $index = array_flip($array1);
        foreach ($array2 as $val) {
            if (isset($index[$val])) unset($index[$val]);
        }
        foreach ($index as $value => $key) {
            unset($array1[$key]);
        }
        return $array1;
    }
}

if (!function_exists('array_unique_union')) {
    function array_unique_union(array $array1, array $array2)
    {
        $arrayToReturn = [];
        foreach ($array1 as $item) {
            $arrayToReturn[$item] = true;
        }
        foreach ($array2 as $item) {
            $arrayToReturn[$item] = true;
        }
        return array_keys($arrayToReturn);
    }
}
