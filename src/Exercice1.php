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
    return '';
  }
}
