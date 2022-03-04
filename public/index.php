<?php

define('__ROOT__', dirname(__DIR__));
require_once  __ROOT__ . '/vendor/autoload.php';

use App\TicTacToe;
use Twig\Loader\FilesystemLoader;
use Twig\Environment;

$loader = new FilesystemLoader(__ROOT__ . '/tpl');
$twig = new Environment($loader);

$ttt = new TicTacToe;

switch (filter_input(INPUT_SERVER, 'REQUEST_METHOD')) {
  case 'POST':
    try {
      echo json_encode([
        'result' => $ttt->andTheWinnerIs(filter_input(INPUT_POST, 'board'))
      ]);
    } catch (Exception $ex) {
      echo json_encode([
        'error' => $ex->getMessage()
      ]);
    }
    break;

  default:
    $size = filter_input(INPUT_GET, 'size', FILTER_VALIDATE_INT);
    if (!is_int($size)) $size = 3;
    echo $twig->render('tictactoe.html.twig', ['size' => $size]);
    break;
}
