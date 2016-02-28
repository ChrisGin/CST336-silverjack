<?php
    $names=array(''=>0);

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

    function createPlayer($name)
    {
        $player=array('name' => $name, 'hand' => array_fill(0, 52, 0), 'score' => 0, 'pic' => $pic);
        return $player;
    }
?>
