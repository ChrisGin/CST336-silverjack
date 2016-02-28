<?php
        
    //getHand($p4,$p4Score);
    
    //$weener = getWeener($p1,$p2,$p3,$p4);
    include "player.php";

    function play(){
        $name=getName();    
        $p1=createPlayer($name);
        getHand($p1);

        $name=getName();
        $p2=createPlayer($name);
        getHand($p2);

        $name=getName();
        $p3=createPlayer($name);
        getHand($p3);

        $name=getName();
        $p4=createPlayer($name);
        getHand($p4);

    }
    
    function getHand(&$player){
        while($player["score"] < 42)
        {
            while($player["score"] < 35){
                getCard($player);
                setSum($player);
                echo $player['score'] . " ";
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
    
    function getCard(& $player){
        while(true){
            $draw = rand(0,51);
            if($player["hand"][$draw]== 0){
                $player["hand"][$draw] = 1;
                return;
            }
        }
    }
    
    function setSum(& $player){
        $handSum = 0;
        for($i = 0 ; $i < count($player["hand"]); $i++){
            if($player["hand"][$i]== 1){
                $handSum = $handSum + $i % 13;
            } 
        }
        $player["score"] = $handSum;
        return;
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
<html>
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

            <hr>

            <div class = "boxed">
                <?php play();?>
            </div>
              
            
        </main>
        
        
    </body>
    
    <footer>
    
        &copy; Christian Kombat, 2016.<br />
        Disclamer: Some of the the contents of this page are not accurate.
        
        <br />
        <img src="img/csumb-logo.png" alt="CSUMB Logo" />
    </footer>
    
</html>
