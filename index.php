<?php
if(isset($_POST["submit1"]))
{
	$value =  $_POST["text1"];
	$action= $_POST["method"];
 
//remove special Characters
function RemoveSpecialChar($str)
{
    $res = preg_replace('/[\@\.\;\" "\%\^\$\&\#\!\( )\*\|]+/', '', $str);
    return $res;
}

$rscVal = RemoveSpecialChar($value);
//remove spaces at both ends
$srscVal = trim($rscVal);

?>
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<title>Php Encryption</title>

<!-- Fonts -->
<link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

<!-- Styles -->
<!-- Font Awesome -->
<link
href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css"
rel="stylesheet"
/>
<!-- Google Fonts -->
<link
href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap"
rel="stylesheet"
/>
<!-- MDB -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.10.2/mdb.min.css"
rel="stylesheet"/>
<style>
body {
background-image : url("bg.png");
background-position: center; /* Center the image */
background-repeat: no-repeat; /* Do not repeat the image */
background-size: cover;
font-family: 'Nunito', sans-serif;
color: #fff;
height: 500px;
padding-top: 10px;
}
</style>
<!-- MDB -->
<script
type="text/javascript"
src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.10.2/mdb.min.js">
</script>
<script src="https://code.iconify.design/2/2.1.2/iconify.min.js"></script>
</head>

<body class="antialiased">
	<div class="text-center" style="color:#000;"><h3><b>Encryption Form</b></h3></div>	
	<div class="container-xxl text-center" style="background-color : rgba(0,0,0, 0.3) !Important; border-radius: 8px;width: 98% !Important;  padding-bottom : 10px !Important;">
<div class="row" style="padding-left: 20px;padding-right: 20px; padding-top: 10px; padding-bottom: 10px; color: #fff; ">
<div class="container">
  <div class="row">
    <div class="col-md">
      #
    </div>
    <div class="col-md">
   <form method = "post">
 <div class="col-12">
    <input class="form-control" type="text" id="text" tabindex="22" name="text1" placeholder="Input Text/Number" required>
  </div>
  <br>
 
  <!-- Default checked radio -->
<div class="">
  <input class="form-check-input" type="radio" value="encrypt" name="method" id="flexRadioDefault2" checked/>Encrypt
</div>
  <div class="">
  <input class="form-check-input" type="radio"value="decrypt" name="method" id="flexRadioDefault1" />Decrypt
</div>
 <br>
     <button type="submit" name="submit1" id="submit" class="btn btn-primary">Submit</button>
     </form>
     <h3>Encrypted/Decrypted Output:</h3>
    <?php
    if($action == 'encrypt'){
	//split characters to array
$outputs = str_split($rscVal);

    foreach ($outputs as $value) {
switch ($value) {
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
  case "p" || "q":
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
    case "u" || "v":
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
    $enc = '<Unknown character>';
}

echo $enc;
}
?>
  <h3>Array:</h3>
<?php
print_r($outputs);
?>
<?php
}
else{
	//split numbers in pairs to array
$outputsw = str_split($rscVal,2);
foreach ($outputsw as $value) {

switch ($value) {
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
    $enc = 'p' || 'q';
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
    $enc = 'u' || 'v';
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
    $enc = '<Unknown character>';
}

echo $enc;
}
?>
  <h3>Array:</h3>
<?php
print_r($outputsw);
?>
<h3>Multiples</h3>
<?php
$outputswr = str_split($rscVal,3);
foreach($outputswr as $mult){
	$ans = $mult * 17;
	echo $ans."</br>";
	$multip = str_split($ans);
	if(count($multip) == 4){
		echo "Arranged in 3142: ".$multip[2].$multip[0].$multip[3].$multip[1]."</br>";
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
    </div>

    <div class="col-md">
      #
    </div>
  </div>
</div>
</div>
</div>

