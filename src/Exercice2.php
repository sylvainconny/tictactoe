<?php

namespace App;

use Exception;

class Exercice2
{
  public function andTheWinnerIs($board)
  {
    $exo1 = new Exercice1;
    if (is_array($board)) {
      $matrixBoard = $board;
    }
    if (is_string($board)) {
      $matrixBoard = array_chunk(str_split($board, 1), sqrt(strlen($board)), false);
    }
    if (!isset($matrixBoard)) throw new Exception('No board to play');
    if (count($matrixBoard) < 3) throw new Exception('Board should be 3x3 at least');
    return $exo1->andTheWinnerIs($matrixBoard);
  }
}
