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
    // top left to bottom right diagonal as string
    $diagonaleTL2BR = '';
    // bottom left to top right diagonal as string
    $diagonaleBL2TR = '';
    // for each line
    for ($i = 0; $i < $size; $i++) {
      // HORIZONTAL
      $horizontal = implode('', $board[$i]);
      if ($this->hasPlayerDrawALine($player, $size, $horizontal)) return true;

      // VERTICAL
      $vertical = '';
      for ($j = 0; $j < $size; $j++) $vertical .= $board[$j][$i];
      // compare line string with the expected string
      if ($this->hasPlayerDrawALine($player, $size, $vertical)) return true;

      // DIAGONAL
      // making diagonal strings
      $diagonaleTL2BR .= $board[$i][$i];
      $diagonaleBL2TR .= $board[$i][$size - 1 - $i];
    }
    // compare top bottom diagonal string with the expected string
    if ($this->hasPlayerDrawALine($player, $size, $diagonaleTL2BR)) return true;
    // compare bottom top diagonal string with the expected string
    if ($this->hasPlayerDrawALine($player, $size, $diagonaleBL2TR)) return true;
    return false;
  }

  private function hasPlayerDrawALine(string $player, int $size, string $line)
  {
    // expected line, X or 0 * board size
    $expected = str_repeat($player, $size);
    return strcmp($expected, $line) == 0;
  }
}
