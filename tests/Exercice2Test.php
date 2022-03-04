<?php

namespace App\Tests;

use App\Exercice2;
use PHPUnit\Framework\TestCase;

class Exercice2Test extends TestCase
{
  /** @test */
  public function should_return_x_when_x_make_horizontal_line()
  {
    $exo2 = new Exercice2;
    // X wins first horizontal line
    $this->assertSame('X', $exo2->andTheWinnerIs([
      ['X', 'X', 'X'],
      ['0', 'X', '0'],
      ['0', '0', 'X'],
    ]));
    $this->assertSame('X', $exo2->andTheWinnerIs('XXX0X000X'));
    // X wins second horizontal line
    $this->assertSame('X', $exo2->andTheWinnerIs('00XXXX0X0'));
    // X wins last horizontal line
    $this->assertSame('X', $exo2->andTheWinnerIs('00X0X0XXX'));
  }

  /** @test */
  public function should_return_x_when_x_make_vertical_line()
  {
    $exo2 = new Exercice2;
    // X wins first vertical line
    $this->assertSame('X', $exo2->andTheWinnerIs('X00XX0X0X'));
    // X wins second vertical line
    $this->assertSame('X', $exo2->andTheWinnerIs('0X00XXXX0'));
    // X wins last vertical line
    $this->assertSame('X', $exo2->andTheWinnerIs('00X0XXX0X'));
  }

  /** @test */
  public function should_return_x_when_x_make_diagonal_line()
  {
    $exo2 = new Exercice2;
    // X wins left top to right bottom line
    $this->assertSame('X', $exo2->andTheWinnerIs('X00XX000X'));
    // X wins left bottom to right top line
    $this->assertSame('X', $exo2->andTheWinnerIs('00XXX0X00'));
  }

  /** @test */
  public function should_return_0_when_0_make_horizontal_line()
  {
    $exo2 = new Exercice2;
    // 0 wins first horizontal line
    $this->assertSame('0', $exo2->andTheWinnerIs('000X0XXX0'));
    // 0 wins second horizontal line
    $this->assertSame('0', $exo2->andTheWinnerIs('XX0000X0X'));
    // 0 wins last horizontal line
    $this->assertSame('0', $exo2->andTheWinnerIs('XX0X0X000'));
  }

  /** @test */
  public function should_return_0_when_0_make_vertical_line()
  {
    $exo2 = new Exercice2;
    // X wins first vertical line
    $this->assertSame('0', $exo2->andTheWinnerIs('0XX00X0X0'));
    // X wins second vertical line
    $this->assertSame('0', $exo2->andTheWinnerIs('X0XX0000X'));
    // X wins last vertical line
    $this->assertSame('0', $exo2->andTheWinnerIs('XX0X000X0'));
  }

  /** @test */
  public function should_return_0_when_0_make_diagonal_line()
  {
    $exo2 = new Exercice2;
    // X wins left top to right bottom line
    $this->assertSame('0', $exo2->andTheWinnerIs('0XX00XXX0'));
    // X wins left bottom to right top line
    $this->assertSame('0', $exo2->andTheWinnerIs('XX000X0XX'));
  }
}
