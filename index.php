<?php

    $names=array('Jacqui' => 0, 'Kenshi' => 0, 'LiuKang' => 0, 'Raiden' => 0, 'Scorpion' => 0, 'SubZero' => 0,
                 'Johnny' => 0, 'Kitana' => 0, 'Mileena' => 0, 'Reptile' => 0, 'Sonya' => 0, 'Tanya' => 0);

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
        $player=array('name' => $name, 'hand' => array_fill(0, 52, 0), 'score' => 0, 'pic' => 'img/' . $name . '.png');
        return $player;
    }
        
    getHand($p4,$p4Score);
    
    $weener = getWeener($p1,$p2,$p3,$p4);
    
    
    function getHand(&$player){
        while($player["score"] < 42)
        {
            while($player["score"] < 35){
                getCard($player);
                setSum($player);
            }
            if(rand(0,3) <= 1){
                getCard($player);
                setSum($player);
            }
            else{
                break;
            }
        }
    }
    
    
    function setSum(& $player){
        $handSum = 0;
        for($i = 0 ; count($player["hand"]); $i++){
            if($player["hand"][$i]== 1){
                $handSum = $i % 13;
            }
            
        }
        $player["score"] = $handSum;
    }
    
    function getCard(& $player){
        while(true){
            $draw = rand(0,52);
            if($player["hand"]["draw"]== 0){
                $player["hand"]["draw"] = 1;
                return;
            }
        }
    }
    
    function getWeener($p1,$p2,$p3,$p4){
        $scores = array($p1["score"],$p2["score"],$p3["score"],$p4["score"]);
        for($i = 0; $i < 4; $i++){
            if($scores[$i]> 42){
                unset($player["scores"][$i]);
            }
        }
            rsort($scores);
            return $scores[0];
    }

?>

<!DOCTYPE>
<hmtml>
    <head>
        <meta charset="utf-8">
        
         <link rel="stylesheet" href="css/styles.css" type="text/css" />
         
        <title>
            SJ
        </title>
        
        <style type="text/css">
			@import url(https://cst366-kayweena.c9users.io/Labs/Lab3/silverjack/css/styles.css);
		</style>
       
    </head>
    
    <body class = "bodyImage" style = "background-image: url(img/mortal.jpg);">
        
        <main>
            <h1 class = "title">
                Silver Jack
            </h1>
            <br />
            <br />
            <br />
            <div class = "boxed">
              
            </div>
              
            
        </main>
        
        
    </body>
    
    <footer>
    
        &copy; Christian Kombat, 2016.<br />
        Disclamer: Some of the the contents of this page are not accurate.
        
        <br />
        <img src="img/csumb-logo.png" alt="CSUMB Logo" />
    </footer>
    
</hmtml>