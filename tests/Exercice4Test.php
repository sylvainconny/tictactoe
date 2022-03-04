<?php

namespace App\Tests;

use App\TicTacToe;
use PHPUnit\Framework\TestCase;

class Exercice4Test extends TestCase
{
  /** @test */
  public function should_not_accept_small_boards()
  {
    $ttt = new TicTacToe;
    // all the calls should throw exceptions
    $this->expectException('Exception');
    $ttt->andTheWinnerIs('X0X0');
    $ttt->andTheWinnerIs('X0');
    $ttt->andTheWinnerIs(3);
    $ttt->andTheWinnerIs([
      ['X', '0'],
      ['0', 'X']
    ]);
  }

  /** @test */
  public function should_send_inprogress_if_game_not_done()
  {
    $ttt = new TicTacToe;
    $this->assertSame('In progress', $ttt->andTheWinnerIs([
      ['X', ' ', 'X', '0'],
      ['X', '0', 'X', '0'],
      ['0', '0', 'X', 'X'],
      ['0', 'X', '0', '0'],
    ]));
    $this->assertSame('In progress', $ttt->andTheWinnerIs('X X0X0X000XX0X00'));
    $this->assertSame('In progress', $ttt->andTheWinnerIs([
      ['X', '0', 'X'],
      ['X', '0', 'X',],
      ['0', 'X', ' ',],
    ]));
    $this->assertSame('In progress', $ttt->andTheWinnerIs('X0XX0X0X '));
    $this->assertSame('X', $ttt->andTheWinnerIs([
      ['X', '0', 'X'],
      ['X', 'X', 'X',],
      ['0', 'X', ' ',],
    ]));
  }
}
