<?php

namespace App\Tests;

use App\TicTacToe;
use PHPUnit\Framework\TestCase;

class Exercice1Test extends TestCase
{
  /** @test */
  public function should_return_x_when_x_make_horizontal_line()
  {
    $ttt = new TicTacToe;
    // X wins first horizontal line
    $this->assertSame('X', $ttt->andTheWinnerIs([
      ['X', 'X', 'X'],
      ['0', '0', '0'],
      ['0', '0', 'X'],
    ]));
    // X wins second horizontal line
    $this->assertSame('X', $ttt->andTheWinnerIs([
      ['X', '0', '0'],
      ['X', 'X', 'X'],
      ['0', '0', 'X'],
    ]));
    // X wins last horizontal line
    $this->assertSame('X', $ttt->andTheWinnerIs([
      ['0', '0', 'X'],
      ['X', '0', '0'],
      ['X', 'X', 'X'],
    ]));
  }

  /** @test */
  public function should_return_x_when_x_make_vertical_line()
  {
    $ttt = new TicTacToe;
    // X wins first vertical line
    $this->assertSame('X', $ttt->andTheWinnerIs([
      ['X', '0', '0'],
      ['X', 'X', '0'],
      ['X', '0', 'X']
    ]));
    // X wins second vertical line
    $this->assertSame('X', $ttt->andTheWinnerIs([
      ['X', 'X', '0'],
      ['0', 'X', '0'],
      ['0', 'X', 'X']
    ]));
    // X wins last vertical line
    $this->assertSame('X', $ttt->andTheWinnerIs([
      ['0', '0', 'X'],
      ['0', 'X', 'X'],
      ['X', '0', 'X']
    ]));
  }

  /** @test */
  public function should_return_x_when_x_make_diagonal_line()
  {
    $ttt = new TicTacToe;
    // X wins left top to right bottom line
    $this->assertSame('X', $ttt->andTheWinnerIs([
      ['X', '0', '0'],
      ['X', 'X', '0'],
      ['0', '0', 'X']
    ]));
    // X wins left bottom to right top line
    $this->assertSame('X', $ttt->andTheWinnerIs([
      ['0', '0', 'X'],
      ['X', 'X', '0'],
      ['X', '0', '0']
    ]));
  }


  /** @test */
  public function should_return_0_when_0_make_horizontal_line()
  {
    $ttt = new TicTacToe;
    // 0 wins first horizontal line
    $this->assertSame('0', $ttt->andTheWinnerIs([
      ['0', '0', '0'],
      ['X', 'X', '0'],
      ['X', '0', 'X'],
    ]));
    // 0 wins second horizontal line
    $this->assertSame('0', $ttt->andTheWinnerIs([
      ['X', '0', 'X'],
      ['0', '0', '0'],
      ['X', 'X', '0'],
    ]));
    // 0 wins last horizontal line
    $this->assertSame('0', $ttt->andTheWinnerIs([
      ['X', '0', 'X'],
      ['X', 'X', '0'],
      ['0', '0', '0'],
    ]));
  }

  /** @test */
  public function should_return_0_when_0_make_vertical_line()
  {
    $ttt = new TicTacToe;
    // 0 wins first vertical line
    $this->assertSame('0', $ttt->andTheWinnerIs([
      ['0', 'X', 'X'],
      ['0', '0', 'X'],
      ['0', 'X', '0']
    ]));
    // 0 wins second vertical line
    $this->assertSame('0', $ttt->andTheWinnerIs([
      ['X', '0', 'X'],
      ['0', '0', 'X'],
      ['X', '0', '0']
    ]));
    // 0 wins last vertical line
    $this->assertSame('0', $ttt->andTheWinnerIs([
      ['X', 'X', '0'],
      ['X', '0', '0'],
      ['0', 'X', '0']
    ]));
  }


  /** @test */
  public function should_return_0_when_0_make_diagonal_line()
  {
    $ttt = new TicTacToe;
    // 0 wins left top to right bottom line
    $this->assertSame('0', $ttt->andTheWinnerIs([
      ['0', 'X', 'X'],
      ['0', '0', 'X'],
      ['X', 'X', '0']
    ]));
    // 0 wins left bottom to right top line
    $this->assertSame('0', $ttt->andTheWinnerIs([
      ['X', 'X', '0'],
      ['0', '0', 'X'],
      ['0', 'X', 'X']
    ]));
  }
}
