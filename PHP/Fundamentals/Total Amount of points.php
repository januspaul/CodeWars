<?php
function points(array $games): int
{
    $points = 0;
    foreach ($games as $game) {
        $gameScore = explode(':', $game);
        if ($gameScore[0] > $gameScore[1]) {
            $points += 3;
        } else if ($gameScore[0] === $gameScore[1]) {
            $points += 1;
        }
    }
    return $points;
}
