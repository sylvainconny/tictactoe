<?php

namespace App\Tests;

use App\Exercice1;
use PHPUnit\Framework\TestCase;

class Exercice1Test extends TestCase
{
  /** @test */
  public function should_return_x_when_x_make_horizontal_line()
  {
    $exo1 = new Exercice1;
    // X wins first horizontal line
    $this->assertEquals('X', $exo1->andTheWinnerIs([
      ['X', 'X', 'X'],
      ['0', '0', 'X'],
      ['0', '0', ''],
    ]));
    // X wins second horizontal line
    $this->assertEquals('X', $exo1->andTheWinnerIs([
      ['0', '0', 'X'],
      ['X', 'X', 'X'],
      ['0', '0', ''],
    ]));
    // X wins last horizontal line
    $this->assertEquals('X', $exo1->andTheWinnerIs([
      ['0', '0', 'X'],
      ['0', '0', ''],
      ['X', 'X', 'X'],
    ]));
  }

  /** @test */
  public function should_return_x_when_x_make_vertical_line()
  {
    $exo1 = new Exercice1;
    // X wins first vertical line
    $this->assertEquals('X', $exo1->andTheWinnerIs([
      ['X', '0', '0'],
      ['X', 'X', '0'],
      ['X', '0', '']
    ]));
    // X wins second vertical line
    $this->assertEquals('X', $exo1->andTheWinnerIs([
      ['0', 'X', '0'],
      ['0', 'X', '0'],
      ['X', 'X', '']
    ]));
    // X wins last vertical line
    $this->assertEquals('X', $exo1->andTheWinnerIs([
      ['0', '0', 'X'],
      ['0', '0', 'X'],
      ['X', '', 'X']
    ]));
  }
}
