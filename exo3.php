<?php
$a=rand(1,50);
$b=rand(1,50);

while($a!=$b){
    if($a<$b){
        echo "Dans l'ordre croissant on a : $a,$b <br>";
    }else{
        echo "Dans l'ordre croissant on a :$b,$a";
    }
    if($a<$b){
        echo "Dans l'ordre decroissant on a : $b,$a <br>";
    }else{
        echo "Dans l'ordre croissant on a :$a,$b";
    }

    return "egalite";
     
}


?>