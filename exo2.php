<?php
$pointA=rand($abcisse=(1,100),$ordonne=(1,100));
$somme=$abcisse + $ordonne;
if($somme%2 = 0){
    $abcisse=$abcisse+1;
}else{
    $abcisse=$abcisse+0.5;
}
echo "$abcisse <br>";
?>