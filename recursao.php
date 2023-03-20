<?php
function somaArray(array $arr): int {
    if (count($arr) == 0) {
        return 0;
    } else {
        return $arr[0] + somaArray(array_slice($arr, 1));
    }
}
?>