<?php

namespace App;

use Exception;

class TicTacToe
{

  private $winner;

  public function andTheWinnerIs($board, array $players = ['X', '0']): string
  {
    // init winner parameter
    $this->winner = '';
    if (is_array($board)) {
      $matrixBoard = $board;
    }
    if (is_string($board)) {
      $matrixBoard = array_chunk(str_split($board, 1), sqrt(strlen($board)), false);
    }
    if (!isset($matrixBoard)) throw new Exception('No board to play');
    if (count($matrixBoard) < 3) throw new Exception('Board should be 3x3 at least');
    if ($this->errorInBoard($matrixBoard, $players)) throw new Exception('Wrong character');
    // set the winner parameter
    $this->hasPlayerWon($matrixBoard, $players);
    // if the winner parameter has been filled
    if (strlen($this->winner)) return $this->winner;
    // if the game is not done
    if (!$this->gameDone($matrixBoard)) return 'In progress';
    // if no winner and the game is done
    return 'Tie';
  }

  private function gameDone(array $board): bool
  {
    for ($i = 0; $i < count($board); $i++) {
      for ($j = 0; $j < count($board[$i]); $j++) {
        if ($board[$i][$j] == ' ') return false;
      }
    }
    return true;
  }

  // find any wrong character in board
  private function errorInBoard(array $board, array $players): bool
  {
    $goodCharacters = array_merge([' '], $players);
    for ($i = 0; $i < count($board); $i++) {
      for ($j = 0; $j < count($board[$i]); $j++) {
        if (!in_array($board[$i][$j], $goodCharacters)) return true;
      }
    }
    return false;
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
