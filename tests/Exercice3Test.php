<?php

namespace App\Tests;

use App\Exercice2;
use PHPUnit\Framework\TestCase;

class Exercice3Test extends TestCase
{
  /** @test */
  public function should_work_with_4x4_game()
  {
    $exo2 = new Exercice2;
    // X wins first horizontal line
    $this->assertSame('X', $exo2->andTheWinnerIs([
      ['X', 'X', 'X', 'X'],
      ['0', 'X', '0', '0'],
      ['0', '0', 'X', '0'],
      ['0', '0', 'X', '0'],
    ]));
    $this->assertSame('X', $exo2->andTheWinnerIs('XXXX0X0000X000X0'));
    // 0 wins second horizontal line
    $this->assertSame('0', $exo2->andTheWinnerIs([
      ['X', '0', 'X', 'X'],
      ['0', '0', '0', '0'],
      ['X', 'X', '0', 'X'],
      ['0', '0', 'X', '0'],
    ]));
    // 0 wins third horizontal line
    $this->assertSame('0', $exo2->andTheWinnerIs('X0XXXX0X000000X0'));
    // 0 wins second vertical line
    $this->assertSame('0', $exo2->andTheWinnerIs([
      ['X', '0', 'X', 'X'],
      ['0', '0', '0', 'X'],
      ['X', '0', '0', 'X'],
      ['0', '0', 'X', '0'],
    ]));
    // 0 wins top bottom diagonal line
    $this->assertSame('0', $exo2->andTheWinnerIs([
      ['0', '0', 'X', 'X'],
      ['0', '0', 'X', '0'],
      ['X', 'X', '0', 'X'],
      ['0', '0', 'X', '0'],
    ]));
    // X wins bottom top diagonal line
    $this->assertSame('X', $exo2->andTheWinnerIs([
      ['X', '0', 'X', 'X'],
      ['0', '0', 'X', '0'],
      ['X', 'X', '0', 'X'],
      ['X', '0', 'X', '0'],
    ]));
  }
  /** @test */
  public function should_work_with_5x5_game()
  {
    $exo2 = new Exercice2;
    // X wins first horizontal line
    $this->assertSame('X', $exo2->andTheWinnerIs([
      ['X', 'X', 'X', 'X', 'X'],
      ['0', 'X', '0', '0', 'X'],
      ['0', '0', 'X', '0', '0'],
      ['0', '0', 'X', '0', 'X'],
      ['0', '0', 'X', '0', '0'],
    ]));
    $this->assertSame('X', $exo2->andTheWinnerIs('XXXXX0X00X00X0000X0X00X00'));
    // 0 wins second horizontal line
    $this->assertSame('0', $exo2->andTheWinnerIs([
      ['X', '0', 'X', 'X', 'X'],
      ['0', '0', '0', '0', '0'],
      ['X', 'X', '0', 'X', '0'],
      ['0', '0', 'X', '0', 'X'],
      ['0', '0', 'X', '0', 'X'],
    ]));
    // 0 wins second horizontal line
    $this->assertSame('0', $exo2->andTheWinnerIs('X0XXXXX0X00000000X0X00X0X'));
    // 0 wins second vertical line
    $this->assertSame('0', $exo2->andTheWinnerIs([
      ['X', '0', 'X', 'X', 'X'],
      ['0', '0', '0', '0', 'X'],
      ['X', '0', '0', 'X', '0'],
      ['0', '0', 'X', '0', '0'],
      ['0', '0', 'X', '0', 'X'],
    ]));
    // 0 wins top bottom diagonal line
    $this->assertSame('0', $exo2->andTheWinnerIs([
      ['0', '0', 'X', 'X', '0'],
      ['0', '0', 'X', '0', '0'],
      ['X', 'X', '0', 'X', 'X'],
      ['0', '0', 'X', '0', 'X'],
      ['0', '0', 'X', '0', '0'],
    ]));
    // X wins bottom top diagonal line
    $this->assertSame('X', $exo2->andTheWinnerIs([
      ['X', '0', 'X', 'X', 'X'],
      ['0', '0', 'X', 'X', 'X'],
      ['X', 'X', 'X', 'X', '0'],
      ['X', 'X', '0', '0', '0'],
      ['X', '0', 'X', '0', 'X'],
    ]));
  }
}
