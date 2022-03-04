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
    $this->assertSame('X', $exo1->andTheWinnerIs([
      ['X', 'X', 'X'],
      ['0', '0', '0'],
      ['0', '0', 'X'],
    ]));
    // X wins second horizontal line
    $this->assertSame('X', $exo1->andTheWinnerIs([
      ['X', '0', '0'],
      ['X', 'X', 'X'],
      ['0', '0', 'X'],
    ]));
    // X wins last horizontal line
    $this->assertSame('X', $exo1->andTheWinnerIs([
      ['0', '0', 'X'],
      ['X', '0', '0'],
      ['X', 'X', 'X'],
    ]));
  }

  /** @test */
  public function should_return_x_when_x_make_vertical_line()
  {
    $exo1 = new Exercice1;
    // X wins first vertical line
    $this->assertSame('X', $exo1->andTheWinnerIs([
      ['X', '0', '0'],
      ['X', 'X', '0'],
      ['X', '0', 'X']
    ]));
    // X wins second vertical line
    $this->assertSame('X', $exo1->andTheWinnerIs([
      ['X', 'X', '0'],
      ['0', 'X', '0'],
      ['0', 'X', 'X']
    ]));
    // X wins last vertical line
    $this->assertSame('X', $exo1->andTheWinnerIs([
      ['0', '0', 'X'],
      ['0', 'X', 'X'],
      ['X', '0', 'X']
    ]));
  }

  /** @test */
  public function should_return_x_when_x_make_diagonal_line()
  {
    $exo1 = new Exercice1;
    // X wins left top to right bottom line
    $this->assertSame('X', $exo1->andTheWinnerIs([
      ['X', '0', '0'],
      ['X', 'X', '0'],
      ['0', '0', 'X']
    ]));
    // X wins left bottom to right top line
    $this->assertSame('X', $exo1->andTheWinnerIs([
      ['0', '0', 'X'],
      ['X', 'X', '0'],
      ['X', '0', '0']
    ]));
  }


  /** @test */
  public function should_return_0_when_0_make_horizontal_line()
  {
    $exo1 = new Exercice1;
    // 0 wins first horizontal line
    $this->assertSame('0', $exo1->andTheWinnerIs([
      ['0', '0', '0'],
      ['X', 'X', '0'],
      ['X', '0', 'X'],
    ]));
    // 0 wins second horizontal line
    $this->assertSame('0', $exo1->andTheWinnerIs([
      ['X', '0', 'X'],
      ['0', '0', '0'],
      ['X', 'X', '0'],
    ]));
    // 0 wins last horizontal line
    $this->assertSame('0', $exo1->andTheWinnerIs([
      ['X', '0', 'X'],
      ['X', 'X', '0'],
      ['0', '0', '0'],
    ]));
  }

  /** @test */
  public function should_return_0_when_0_make_vertical_line()
  {
    $exo1 = new Exercice1;
    // 0 wins first vertical line
    $this->assertSame('0', $exo1->andTheWinnerIs([
      ['0', 'X', 'X'],
      ['0', '0', 'X'],
      ['0', 'X', '0']
    ]));
    // 0 wins second vertical line
    $this->assertSame('0', $exo1->andTheWinnerIs([
      ['X', '0', 'X'],
      ['0', '0', 'X'],
      ['X', '0', '0']
    ]));
    // 0 wins last vertical line
    $this->assertSame('0', $exo1->andTheWinnerIs([
      ['X', 'X', '0'],
      ['X', '0', '0'],
      ['0', 'X', '0']
    ]));
  }


  /** @test */
  public function should_return_0_when_0_make_diagonal_line()
  {
    $exo1 = new Exercice1;
    // 0 wins left top to right bottom line
    $this->assertSame('0', $exo1->andTheWinnerIs([
      ['0', 'X', 'X'],
      ['0', '0', 'X'],
      ['X', 'X', '0']
    ]));
    // 0 wins left bottom to right top line
    $this->assertSame('0', $exo1->andTheWinnerIs([
      ['X', 'X', '0'],
      ['0', '0', 'X'],
      ['0', 'X', 'X']
    ]));
  }
}
