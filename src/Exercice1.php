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
      if ($board[0][$v] == 'X' && $board[1][$v] == 'X' && $board[2][$v] == 'X') {
        return 'X';
      }
      if ($board[0][$v] == '0' && $board[1][$v] == '0' && $board[2][$v] == '0') {
        return '0';
      }
    }
    if ($board[0][0] == 'X' && $board[1][1] == 'X' && $board[2][2] == 'X') {
      return 'X';
    }
    if ($board[0][2] == 'X' && $board[1][1] == 'X' && $board[2][0] == 'X') {
      return 'X';
    }
    return '';
  }
}
