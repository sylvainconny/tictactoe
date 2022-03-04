<?php

namespace App\Tests;

use App\Exercice2;
use PHPUnit\Framework\TestCase;

class Exercice4Test extends TestCase
{
  /** @test */
  public function should_not_accept_small_boards()
  {
    $exo2 = new Exercice2;
    $this->expectException('Exception');
    $exo2->andTheWinnerIs('X0X0');
    $exo2->andTheWinnerIs('X0');
    $exo2->andTheWinnerIs([
      ['X', '0'],
      ['0', 'X']
    ]);
  }
}
