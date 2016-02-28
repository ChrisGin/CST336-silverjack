<?php
    function getPoints($p1, $p2, $p3, $p4, $winner){
        $players=array($p1, $p2, $p3, $p4);
        $losers=array();
        $points=0;

        foreach( $players as $p ){
            if( $p['name'] != $winner['name'] )
                array_push($losers, $p);
        }
 
        foreach( $losers as $p ){
            $points+=$p['score'];
        }

        return $points;
    }
?>
