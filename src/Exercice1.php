<?php

namespace App;

class Exercice1
{
  public function andTheWinnerIs(array $board): string
  {
    for ($h = 0; $h < 3; $h++) {
      if ($board[$h][0] == 'X' && $board[$h][1] == 'X' && $board[$h][2] == 'X') {
        return 'X';
      }
    }
    for ($v = 0; $v < 3; $v++) {
      if ($board[0][$v] == 'X' && $board[1][$v] == 'X' && $board[2][$v] == 'X') {
        return 'X';
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
