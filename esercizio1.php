<?php
$arr=[1,2,3,4,5,6,7,8,9,10];
$totale=0;
$contatore=0;
for($i=0;$i<10;$i++){
   
    
if($arr[$i]%2==0){
    $totale=$totale+$arr[$i];
    $contatore+=1;
   
}

}
$media=$totale/$contatore;
echo "la media è $media";