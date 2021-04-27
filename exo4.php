<?php
$a=rand(1,50);
$b=rand(1,50);
$c=rand(1,500);
while($a!=$b && $a!=$c && $b!=$c){

    if($a<$b&&$b<$c){
        echo "Dans l'ordre croissant on a : $a,$b,$c <br>";
    }elseif($c<$b&&$b<$a){
        echo "Dans l'ordre croissant on a :$c,$b,$a <br>";
    }else{
        echo "Dans l'ordre croissant on a :$b,$a,$c <br>";
    }



    if($a<$b&& $b<$c){
        echo "Dans l'ordre decroissant on a : $c,$b,$a <br>";
    }elseif($c<$b&& $b<$a){
        echo "Dans l'ordre decroissant on a :$a,$b,$c <br>";
    }else{
        echo "Dans l'ordre decroissant on a :$c,$a,$b <br>";
    }

    return "egalite";
     
}


?>