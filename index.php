<!DOCTYPE html>
<html>
<head></head>
<body>
<p>
<?php
/**
 * Created by PhpStorm.
 * User: Finlay
 * Date: 17/11/2015
 * Time: 23:44
 */

/*$myname = "Frodo Baggins";
$myage = 111;
echo "My name is" . $myname . " and I am " . $myage;

$name = "Edgar";
if($name == "Simon"){
    print "I know you!";
}else{
    print "who are you?";
}
$wantedgood = "mugs";
switch($wantedgood){
    case "specs":
        echo "you must be 8 years old to buy specs";
        break;
    case "mugs":
        echo "you have to be 18 to buy mugs";
        break;
    case "sausage rolls":
        echo "you must be 6 months old to buy sausage rolls";
        break;
    default:
}

$provisionedActivities = array("specs", "drugs", "rock and roll");
foreach($provisionedActivities as $x){
    print "<p>$x</p>";
}

foreach($provisionedActivities as $y){
    if($y == "drugs"){
        //$provisionedActivities[$y] = "hugs";
        print "<p>hugs</p>";
    }else{
        print "<p>$y</p>";
    }
}*/
$montharray = array([30]);
$a = 1;
for($i = 1; $i < 31; $i++){
    $montharray[$i] = $a;
    $a++;
    echo "Day " . $montharray[$i];
}

for($j = 1; $j < 31; $j++){
    echo "<p>on day" . $j . " the following products are available: ";
    if($montharray[$j] % 2 != 0){
        echo "Sausage rolls ";
    }
    elseif($montharray[$j] %3 != 0){
        echo "Mugs ";
    }
    elseif($montharray[$j] % 4 != 0){
        echo "Specs ";
    }else{
        echo "NONE";
    }
    echo "</p>";
}
?>
</p>
</body>
</html>