<?php

namespace App;

class Exercice1
{
  public function andTheWinnerIs(array $board): string
  {
    for ($h = 0; $h < 3; $h++) {
      $countValues = array_count_values($board[$h]);
      if (array_key_exists('X', $countValues) && $countValues['X'] == count($board[$h])) {
        return 'X';
      }
      if (array_key_exists('0', $countValues) && $countValues['0'] == count($board[$h])) {
        return '0';
      }
    }
    for ($v = 0; $v < 3; $v++) {
      $line = '';
      for ($h = 0; $h < 3; $h++) $line .= $board[$h][$v];
      if (strcmp($line, str_repeat('X', 3)) == 0) return 'X';
      if (strcmp($line, str_repeat('0', 3)) == 0) return '0';
    }
    $diagonaleTL2BR = '';
    $diagonaleBL2TR = '';
    for ($d = 0; $d < 3; $d++) {
      $diagonaleTL2BR .= $board[$d][$d];
      $diagonaleBL2TR .= $board[$d][2 - $d];
    }
    if (strcmp($diagonaleTL2BR, str_repeat('X', 3)) == 0) return 'X';
    if (strcmp($diagonaleBL2TR, str_repeat('X', 3)) == 0) return 'X';
    if (strcmp($diagonaleTL2BR, str_repeat('0', 3)) == 0) return '0';
    if (strcmp($diagonaleBL2TR, str_repeat('0', 3)) == 0) return '0';
    return 'Tie';
  }
}
