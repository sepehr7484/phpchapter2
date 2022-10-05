<?php
$c=20;


$n1=0;
$n2=0;
$n3=0;
$n4=0;
$n5=0;
$n6=0;
for ($i=0;$i<$c;$i++){
    $r= rand(1,6);
    switch ($r){
    case 1: $n1++;break;
     case 2: $n2++;break;
      case 3: $n3++;break;
       case 4: $n4++;break;
        case 5: $n5++;break;
         case 6: $n6++;break;
   }

}
//ghesmat pain etemal hastesh
$p1=$n1/$c;
$p2=$n2/$c;
$p3=$n3/$c;
$p4=$n4/$c;
$p5=$n5/$c;
$p6=$n6/$c;
echo 'Etenmal tas:'.'<br>'.'<hr>';

echo 'p1=:'.$p1.'<br>';
echo 'p2=:'.$p2.'<br>';
echo 'p3=:'.$p3.'<br>';
echo 'p4=:'.$p4.'<br>';
echo 'p5=:'.$p5.'<br>';
echo 'p6=:'.$p6.'<br>';