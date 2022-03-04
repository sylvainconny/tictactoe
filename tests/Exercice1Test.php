<?php

namespace App\Tests;

use App\Exercice1;
use PHPUnit\Framework\TestCase;

class Exercice1Test extends TestCase
{
  /** @test */
  public function must_return_x_when_x_make_horizontal_line()
  {
    $exo1 = new Exercice1;
    // X win first horizontal line
    $this->assertEquals("X", $exo1->andTheWinnerIs([
      ['X', 'X', 'X'],
      ['0', '0', 'X'],
      ['0', '0', ''],
    ]));
    // X win second horizontal line
    $this->assertEquals("X", $exo1->andTheWinnerIs([
      ['0', '0', 'X'],
      ['X', 'X', 'X'],
      ['0', '0', ''],
    ]));
    // X win last horizontal line
    $this->assertEquals("X", $exo1->andTheWinnerIs([
      ['0', '0', 'X'],
      ['0', '0', ''],
      ['X', 'X', 'X'],
    ]));
  }
}
