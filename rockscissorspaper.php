<?php

    function rockscissorspaper(...$plays): string {
        $unique_plays = array_unique($plays);
        sort($unique_plays);
        if (count($unique_plays) !== 2) {
            return 'tie';
        }
        $winning_play = match ($unique_plays) {
          ['rock', 'scissors'] => 'rock',
          ['paper', 'rock'] => 'paper',
          ['paper', 'scissors'] => 'scissors',
        };
        $winners = array_map(function($k) {
            return 'player ' . $k + 1;
        }, array_keys($plays, $winning_play));
        return implode(', ', $winners);

    }
