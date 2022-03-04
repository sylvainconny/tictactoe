<?php

namespace App;

class Exercice1
{
  public function andTheWinnerIs(array $board): string
  {
    // if x win in horizontal
    if ($this->hasPlayerWon($board, 'X')) return 'X';
    // if 0 win in horizontal
    if ($this->hasPlayerWon($board, '0')) return '0';
    return 'Tie';
  }

  private function hasPlayerWon(array $board, string $player): bool
  {
    // size of board
    $size = count($board);
    // expected vertical line, X or 0 * board size
    $expected = str_repeat($player, $size);
    // top left to bottom right diagonal as string
    $diagonaleTL2BR = '';
    // bottom left to top right diagonal as string
    $diagonaleBL2TR = '';
    // for each line
    for ($i = 0; $i < $size; $i++) {
      // HORIZONTAL
      $horizontal = implode('', $board[$i]);
      if (strcmp($horizontal, $expected) == 0) return true;

      // VERTICAL
      $vertical = '';
      for ($j = 0; $j < $size; $j++) $vertical .= $board[$j][$i];
      // compare line string with the expected string
      if (strcmp($vertical, $expected) == 0) return true;

      // DIAGONAL
      // making diagonal strings
      $diagonaleTL2BR .= $board[$i][$i];
      $diagonaleBL2TR .= $board[$i][$size - 1 - $i];
    }
    // compare top bottom diagonal string with the expected string
    if (strcmp($diagonaleTL2BR, $expected) == 0) return true;
    // compare bottom top diagonal string with the expected string
    if (strcmp($diagonaleBL2TR, $expected) == 0) return true;
    return false;
  }
}
