<?php

namespace App;

class Exercice1
{

  private $winner = '';

  public function andTheWinnerIs(array $board): string
  {
    $this->hasPlayerWon($board, ['X', '0']);
    if (strlen($this->winner)) return $this->winner;
    return 'Tie';
  }

  private function hasPlayerWon(array $board, array $players): void
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
      if ($this->hasPlayerDrawALine($players, $size, $horizontal)) return;

      // VERTICAL
      $vertical = '';
      for ($j = 0; $j < $size; $j++) $vertical .= $board[$j][$i];
      // compare line string with the expected string
      if ($this->hasPlayerDrawALine($players, $size, $vertical)) return;

      // DIAGONAL
      // making diagonal strings
      $diagonaleTL2BR .= $board[$i][$i];
      $diagonaleBL2TR .= $board[$i][$size - 1 - $i];
    }
    // compare top bottom diagonal string with the expected string
    if ($this->hasPlayerDrawALine($players, $size, $diagonaleTL2BR)) return;
    // compare bottom top diagonal string with the expected string
    if ($this->hasPlayerDrawALine($players, $size, $diagonaleBL2TR)) return;
  }

  private function hasPlayerDrawALine(array $players, int $size, string $line): bool
  {
    // expected line, X or 0 * board size
    foreach ($players as $player) {
      $expected = str_repeat($player, $size);
      if (strcmp($expected, $line) == 0) {
        $this->winner = $player;
        return true;
      }
    }
    return false;
  }
}
