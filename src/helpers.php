<?php
if (!function_exists('array_unique_intersect')) {
    function array_unique_intersect(array $array1, array $array2)
    {
        return array_keys(array_intersect_key(array_flip($array1), array_flip($array2)));
    }
}
