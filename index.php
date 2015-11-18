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
}*/
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
        echo "top kek";

}

?>
</p>
</body>
</html>