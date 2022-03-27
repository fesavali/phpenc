
<!DOCTYPE html>
<html>
<head>
<title>Number and Text Encryption</title>
<style>
.city {
  background-color: tomato;
  color: white;
  border: 2px solid black;
  margin: 20px;
  padding: 20px;
}
</style>
</head>
<body>

<div class="city">
<h2>PHP Encryption</h2>
<form method = "post">
 <div class="col-12">
    <input class="form-control" type="text" id="text" tabindex="22" name="input" placeholder="Input Text/Number" required>
  </div>
  <br>
 
  <!-- Default checked radio -->
<div class="">
  <input class="form-check-input" type="radio" value="encrypt" name="do" id="flexRadioDefault2" checked/>Encrypt
</div>
  <div class="">
  <input class="form-check-input" type="radio"value="decrypt" name="do" id="flexRadioDefault1" />Decrypt
</div>
 <br>
     <button type="submit" name="submit" id="submit" class="btn btn-primary">Submit</button>
     </form>
     <?php
if(isset($_POST["submit"]))
{
	$input =  $_POST["input"];
	$do= $_POST["do"]; 
 
//remove special Characters
function SpecialChar($str)
{
    $res = preg_replace('/[\( )\*\+\@\.\;\" "\%\^\$\&\#\!|]+/', '', $str);
    return $res;
}

$Val = SpecialChar($input);
//remove spaces at both ends
$tVal = trim($Val);
if($do == 'encrypt'){
$result = str_split($tVal);
foreach ($result as $char) {
switch ($char) {
  case "a":
    $enc = 11;
    break;
  case "b":
    $enc = 12;
    break;
    case "c":
    $enc = 13;
    break;
    case "d":
    $enc = 14;
    break;
    case "e":
    $enc = 15;
    break;
    case "f":
    $enc = 21;
    break;
    case "g":
    $enc = 22;
    break;
    case "h":
    $enc = 23;
    break;
    case "i":
    $enc = 24;
    break;
    case "j":
    $enc = 25;
    break;
    case "k":
    $enc = 31;
    break;
    case "l":
    $enc = 32;
    break;
    case "m":
    $enc = 33;
    break;
    case "n":
    $enc = 34;
    break;
    case "o":
    $enc = 35;
    break;
  case "p":
    $enc = 41;
    break;
    case "q":
      $enc = 41;
      break;
    case "r":
    $enc = 42;
    break;
    case "s":
    $enc = 43;
    break;
    case "t":
    $enc = 44;
    break;
    case "u":
    $enc = 45;
    break;
    case "v":
      $enc = 45;
      break;
    case "w":
    $enc = 51;
    break;
    case "x":
    $enc = 52;
    break;
    case "y":
    $enc = 53;
    break;
    case "z":
    $enc = 54;
    break;
    case " ":
    $enc = 55;
    break;
  default:
    $enc = '<Unknown>';
}

echo $enc;
}
}
else{
	//split numbers in pairs to array
$numberOut = str_split($tVal,2);
foreach ($numberOut as $num) {

switch ($num) {
  case "11":
    $enc = 'a';
    break;
  case "12":
    $enc = 'b';
    break;
    case "13":
    $enc = 'c';
    break;
    case "14":
    $enc = 'd';
    break;
    case "15":
    $enc = 'e';
    break;
    case "21":
    $enc = 'f';
    break;
    case "22":
    $enc = 'g';
    break;
    case "23":
    $enc = 'h';
    break;
    case "24":
    $enc = 'i';
    break;
    case "25":
    $enc = 'j';
    break;
    case "31":
    $enc = 'k';
    break;
    case "32":
    $enc = 'l';
    break;
    case "33":
    $enc = 'm';
    break;
    case "34":
    $enc = 'n';
    break;
    case "35":
    $enc = 'o';
    break;
  case "41":
    $enc = 'p';
    break;
    case "41":
      $enc = 'q';
      break;
    case "42":
    $enc = 'r';
    break;
    case "43":
    $enc = 's';
    break;
    case "44":
    $enc = 't';
    break;
    case "45":
    $enc = 'u';
    break;
    case "45":
      $enc = 'v';
      break;
    case "51":
    $enc = 'w';
    break;
    case "52":
    $enc = 'x';
    break;
    case "53":
    $enc = 'y';
    break;
    case "54":
    $enc = 'z';
    break;
    case "55":
    $enc = " ";
    break;
  default:
    $enc = '<Unknown>';
}

echo $enc;
}

$outputswr = str_split($tVal,3);
foreach($outputswr as $mult){
	$ans = $mult * 17;
	$multiple = str_split($ans);
	if(count($multiple) == 4){
		echo "</br>Arranged in 3142: ".$multiple[2].$multiple[0].$multiple[3].$multiple[1]."</br>";
	}
	}
echo "Combined String:"; 
foreach($outputswr as $mult){
	$ans = $mult * 17;
	echo  $ans;
}
}
?>

<?php

}
?>


</body>
</html>