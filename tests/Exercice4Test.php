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
    // all the calls should throw exceptions
    $this->expectException('Exception');
    $exo2->andTheWinnerIs('X0X0');
    $exo2->andTheWinnerIs('X0');
    $exo2->andTheWinnerIs(3);
    $exo2->andTheWinnerIs([
      ['X', '0'],
      ['0', 'X']
    ]);
  }

  /** @test */
  public function should_send_inprogress_if_game_not_done()
  {
    $exo2 = new Exercice2;
    $this->assertSame('In progress', $exo2->andTheWinnerIs([
      ['X', ' ', 'X', '0'],
      ['X', '0', 'X', '0'],
      ['0', '0', 'X', 'X'],
      ['0', 'X', '0', '0'],
    ]));
    $this->assertSame('In progress', $exo2->andTheWinnerIs('X X0X0X000XX0X00'));
    $this->assertSame('In progress', $exo2->andTheWinnerIs([
      ['X', '0', 'X'],
      ['X', '0', 'X',],
      ['0', 'X', ' ',],
    ]));
    $this->assertSame('In progress', $exo2->andTheWinnerIs('X0XX0X0X '));
    $this->assertSame('X', $exo2->andTheWinnerIs([
      ['X', '0', 'X'],
      ['X', 'X', 'X',],
      ['0', 'X', ' ',],
    ]));
  }
}
