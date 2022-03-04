<?php

namespace App;

class Exercice2
{
  public function andTheWinnerIs($board)
  {
    $exo1 = new Exercice1;
    if (is_array($board)) return $exo1->andTheWinnerIs($board);
    if (is_string($board)) {
      $matrixBoard = array_chunk(str_split($board, 1), 3, false);
      return $exo1->andTheWinnerIs($matrixBoard);
    }
  }
}
