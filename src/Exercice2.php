<?php

namespace App;

use Exception;

class Exercice2
{
  public function andTheWinnerIs($board)
  {
    $exo1 = new Exercice1;
    if (is_array($board)) {
      if (count($board) < 3) throw new Exception('Board should be 3x3 at least');
      return $exo1->andTheWinnerIs($board);
    }
    if (is_string($board)) {
      $size = sqrt(strlen($board));
      if ($size < 3) throw new Exception('Board should be 3x3 at least');
      $matrixBoard = array_chunk(str_split($board, 1), $size, false);
      return $exo1->andTheWinnerIs($matrixBoard);
    }
  }
}
