<?php

namespace App;

class Exercice1
{
  public function andTheWinnerIs(array $board): string
  {
    // if x win in horizontal
    if ($this->winHorizontal($board, 'X')) return 'X';
    // if 0 win in horizontal
    if ($this->winHorizontal($board, '0')) return '0';
    // if x win in vertical
    if ($this->winVertical($board, 'X')) return 'X';
    // if 0 win in vertical
    if ($this->winVertical($board, '0')) return '0';
    // if x win in diagonal
    if ($this->winDiagonal($board, 'X')) return 'X';
    // if 0 win in diagonal
    if ($this->winDiagonal($board, '0')) return '0';
    return 'Tie';
  }

  private function winHorizontal(array $board, string $player): bool
  {
    // size of board
    $size = count($board);
    // for each horizontal line
    for ($h = 0; $h < $size; $h++) {
      // count all values
      $countValues = array_count_values($board[$h]);
      // if the player value equals the board size, player wins
      if (array_key_exists($player, $countValues) && $countValues[$player] == $size) {
        return true;
      }
    }
    return false;
  }

  private function winVertical(array $board, string $player): bool
  {
    $size = count($board);
    // expected vertical line, X or 0 * board size
    $expected = str_repeat($player, $size);
    // for each vertical line
    for ($v = 0; $v < $size; $v++) {
      // create the line as a string
      $line = '';
      for ($h = 0; $h < $size; $h++) $line .= $board[$h][$v];
      // compare line string with the expected string
      if (strcmp($line, $expected) == 0) return true;
    }
    return false;
  }

  private function winDiagonal(array $board, string $player): bool
  {
    $size = count($board);
    $expected = str_repeat($player, $size);
    // top left to bottom right diagonal as string
    $diagonaleTL2BR = '';
    // bottom left to top right diagonal as string
    $diagonaleBL2TR = '';
    // making the diagonal strings
    for ($d = 0; $d < $size; $d++) {
      $diagonaleTL2BR .= $board[$d][$d];
      $diagonaleBL2TR .= $board[$d][$size - 1 - $d];
    }
    // compare top bottom diagonal string with the expected string
    if (strcmp($diagonaleTL2BR, $expected) == 0) return true;
    // compare bottom top diagonal string with the expected string
    if (strcmp($diagonaleBL2TR, $expected) == 0) return true;
    return false;
  }
}
