<?php
    $names=array('Jacqui' => 0, 'Kenshi' => 0, 'LiuKang' => 0, 'Raiden' => 0, 'Scorpion' => 0, 'SubZero' => 0,
                 'Johnny' => 0, 'Kitana' => 0, 'Mileena' => 0, 'Reptile' => 0, 'Sonya' => 0, 'Tanya' => 0);

/*
 * Summary: Randomly select a name given that it has not already been
 * selected.
 */
    function getName()
    {
        global $names;
        while(true)
        {
            $counter=0;
            $random=rand(0, count($names));

            foreach( $names as $key => $value )
            {
                if( $counter == $random )
                {
                    if( $value == 0 )
                    {
                        $value=1;
                        return $key;
                    }

                    else
                        break;
                }

                $counter++;
            }
        }
    }

/*
 * Summary: Create a player with a given name and image file path. 
 */
    function createPlayer($name)
    {
        $player=array('name' => $name, 'hand' => array_fill(0, 52, 0), 
                      'score' => 0, 'pic' => 'img/' . $name . '.png');
        return $player;
    }
?>

