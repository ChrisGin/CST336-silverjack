<?php
    function displayHand($player){
        foreach( $player['hand'] as $c ){
            $s=$x / 13;
            $card=$x % 13 + 1;
            switch($s){
                case 0:
                   $suit='clubs'; 
                    break;
                case 1:
                    $suit='diamonds';
                    break;
                case 2:
                    $suit='hearts';
                    break;
                case 3:
                    $suit='spades';
                    break;
            }

            echo '<img src=\'cards/' . $suit . '/' . $card . '.png\'>';
    }
?>
