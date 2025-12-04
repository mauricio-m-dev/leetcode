<?php

class Solution {

      function romanToInt($s) {
      $hash_table = [
          'I' => 1,
          'V' => 5,
          'X' => 10,
          'L' => 50,
          'C' => 100,
          'D' => 500,
          'M' => 1000,
      ];

      $sum = 0;

      for($i = 0; $i < strlen($s); $i++) {
          $atual = $hash_table[$s[$i]];
        
          if ($i + 1 < strlen($s)) {
              $next = $hash_table[$s[$i + 1]];
              if($atual < $next) {
                  $sum += $next - $atual;
                  $i++;
                  continue;
              }
          }   
          $sum += $atual;
      }
      return $sum;
  }
}
