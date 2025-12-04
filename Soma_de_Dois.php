<?php

class Solution {
    function twoSum($nums, $target) {

        $map = [];

        // Converte os valores para inteiros
        $target = intval($target);
        $nums = array_map('intval', $nums);

        // Percorre o array de números
        for ($i = 0; $i < count($nums); $i++) {

            $complement = $target - $nums[$i];

            // Verifica se o complemento já está no mapa
            if (isset($map[$complement])) {
                return [$map[$complement], $i];
            }
            
            $map[$nums[$i]] = $i;
        }
    }
}
