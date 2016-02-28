<?php

    function createPlayer($name, $pic)
    {
        $player=array('name' => $name, 'hand' => array_fill(0, 52, 0), 'score' => 0, 'pic' => $pic);
        return $player;
    }
?>