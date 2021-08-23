<!DOCTYPE html>
<html lang="fr">
  <head>
    <title>Premier programme PHP !</title>
<body>
<?php
echo "<strong>Hello world!</strong>" ."<br><br>";

//exercice 1 
echo "<strong*- exercice 1 <br><br></strong>";
$note_maths = 15;
$note_francais = 12;
$note_histoire_geo = 9;
//(note1 + note2 + note3)/nombre de note
$moyenne = ($note_maths + $note_francais +$note_histoire_geo) /3;
echo 'La moyenne est de '.$moyenne.' / 20. ';

?>
<br><br>

<?php
// exercice 2 
echo "<strong>*- exercice 2 <br><br></strong>";
$prix_ht = 50;
$tva = 20;
$prix_ttc = 0;
//(prixHt * tauxTVA/100) + prixHT
//priHT * (1 + TVA /100)
$prix_ttc = $prix_ht * (1+ $tva /100);
echo 'Le prix TTC du produit est de
'.$prix_ttc.' €. <br><br>';

?>
<br/>
<?php
//exercice 3 
echo "<strong>*- exercice 3 <br><br></strong>";

$test = 42;
var_dump ("$test");

?>
<br><br>

<?php
//exercice 4 
echo "<strong>*- exercice 4 <br><br></strong>";

$sexe = "18";

    if ($sexe >= "15"){
    echo 'le sexe est bon pour la santé';
}
    elseif ($sexe <= "10"){
  echo "Le sexe n'est pas ta tasse de thé";
}
    else{
    echo 'Le sexe n\'est pas la solution ';
}
  
?>
<br><br>
<?php
//exercice 5 
echo "<strong>*- exercice 5 <br><br></strong>";

$budget = 1553.89;
$achats = 1554.76;

    if ($budget >= $achats){
    echo 'je ne peut pas acheter les courses';
}
    else {
    echo 'je dois ajouter de l\'argent pour pouvoir acheter';
}
?>
<br><br>
<?php
//exercice 6 
echo "<strong>*- exercice 6 <br><br></strong>";

$age = 15;

    if ($age >= 18) // si la personne à un âge supérieur ou égal à 18 ans
{
    echo "super, tu es majeur et vacciner, tu peux renter.<br>";
    $autorisation_entrer = "Oui";
}
    else //SINON
    {
        echo "Ici c'est un lieu pour les adultes, trop jeune, tu ne peux pas renter<br>";
    $autorisation_entrer = "Non";
    }
    if ($autorisation_entrer == "Oui") //Si on a l'autorisatipn de rentrer
    {
        echo "T'es majeure, tu peux renter <br>";
    }
    elseif ($autorisation_entrer == "Non") {
        echo "T'es mineure, tu peux pas renter <br>";
    }

    else 
    {
        echo "Tu peux me rappeler de ton âge";
    }
?> 
<br>

<?php
//exercice 7 
echo "<strong>*- exercice 7 <br><br></strong>";
$heure = 20;
if($heure > 0 && $heure < 12){
    echo "C'est le matin.";
}
elseif ($heure < 12 && $heure < 18){
    echo "cest l'aprés-midi";
}
elseif ($heure > 19 && $heure < 24){
    echo "C'est le soir";
}
?>
<br><br>
<?php
//exercice 8 
echo "<strong>*- exercice 8 <br><br></strong>";
// Boucle générant la table de multiplication du 5
for($i=0; $i<=10; $i++)
{
  echo '5 x ', $i ,' = ', (5*$i) ,'<br/>';
}
?>
<br><br>

<?php
//exercice 9 
echo "<strong>*- exercice 9 <br><br></strong>";

   $note = 0;
   while($note <= 20) {
   if($note == 10) {
  echo '<strong>'.$note.'</strong>';	  
      } 
   else {
         echo  $note;    
          }
      echo ' <br />';
      $note = $note + 2;
   }
?> <br>
<?php
//exercice 10 
echo "<strong>*- exercice 10 <br><br></strong>";

$tableau = array(
    'France' => 'Paris',
    'Allemagne' => 'Berlin',
    'Italie' => 'Rome'
 );
 foreach($tableau as $t) {
    echo $t.' ';	   
 }
?>
<br/><br/>
<?php
//exercice 11 
echo "<strong>*- exercice 11 <br><br></strong>";

$table = array();
$tableau1 = array();
$tableau2 = array();
$i = 0;
while($i < 10) {
   $table[] = rand(0, 50);
   $i++;	  
}
foreach($table as $t) {
   if($t < 50) {
      $tableau1[] = $t;
   } else {
      $tableau2[] = $t;		  
   }
}

echo 'Tableau 1 : ';
foreach($tableau1 as $t1) {
   echo $t1.' ';
}

echo '<br />Tableau 2 : ';
foreach($tableau2 as $t2) {
   echo $t2.' ';
}
?>
<br><br>
<?php
//exercice 12 
echo "<strong>*- exercice 12<br><br></strong>";

$pays_population = array(
    'France' => 67595000,
    'Suede' => 9998000,
    'Suisse' => 8417000,
    'Kosovo' => 1820631,
    'Malte' => 434403,
    'Mexique' => 122273500,
    'Allemagne' => 82800000,
 );
 echo '<p>Les pays suivants ont une population supérieure à 20 millions d\'habitants.</p><ul>';
 foreach($pays_population as $pays => $population) {
    if($population >= 20000000) {
       echo '<li>'.$pays.'</li>';
    }
 }
 echo '</ul>';
?><br><br>

<?php
//exercice 13 
echo "<strong>*- exercice 13<br><br></strong>";
$cocktails = array('Mojito', 'Long Island
Iced Tea', 'Gin Fizz', 'Moscow mule');{
echo "le résultat est: $cocktails[1].";
}
?>
<br><br>

<?php
//exercice 14 
echo "<strong>*- exercice 14<br><br></strong>";
function HelloWorld(){
    $string = 'Hello World!';
    
    return $string;  
}
var_dump(HelloWorld());

?>
<br><br>
<?php
//exercice 15 
echo "<strong>*- exercice 15<br><br></strong>";
$Arg1 = "abc"; //==> Return abc
$Arg2 = 123; //==> Return 123
echo "$Arg1 <br>";
echo "$Arg2 <br>";

?>

<br><br>

<?php
//exercice 16 
echo "<strong>*- exercice 16<br><br></strong></strong>";
//Exemple : argument 1 = Antoine Argument 2 = Griezmann;
// Resultat : AntoineGriezmann
$argument1 = "Antoine";
$argument2 = "Griezmann";

echo "je m'appelle $argument1 $argument2.";
?>
<br><br>
<?php

//exercice 17 
echo "<strong>*- exercice 17<br><br></strong>";
// Fonction addition
$argumentA = 5;
$argumentB = 5;
$Result = ($argumentA + $argumentB);

echo "Le résultat est: $Result";
?><br><br>
<?php
//exercice 18
echo "<strong>*- exercice 18<br><br></strong>";
// fonction soustraction
$argumentA = 5;
$argumentB = 5;
$Result = ($argumentA - $argumentB);

echo "Le résultat est: $Result";

?><br><br>
<?php
//exercice 19
echo "<strong>*- exercice 19<br><br></strong>";
// fonction Multiplication
$argumentA = 5;
$argumentB = 5;
$Result = ($argumentA * $argumentB);

echo "Le résultat est: $Result";

?>
<br><br>
<?php
//exercice 20
echo "<strong>*- exercice 20<br><br></strong>";
// fonction de Division
$argumentA = 5;
$argumentB = 5;
$Result = ($argumentA / $argumentB);

echo "Le résultat est: $Result";

?>
<br><br>

<?php
//exercice 21 
echo "<strong>*- exercice 21<br><br></strong>";
function estIlMajeure($age, $age1){
$age = TRUE;
$age1 = 20;

 if ($age1 >= 18){
    return (TRUE);
  
}
  else{
       return (FALSE);
}
}
var_dump (estIlMajeure($age,$age1));
 
      
?>
<br><br>

<?php
//exercice 22 
echo "<strong>*- exercice 22<br><br></strong>";
function premierElementTableau(){
    $tableau = array('pierre', 'paul', 'Jacque', 'Emeline');
    return var_dump($tableau[0]);

}
    echo premierElementTableau();
?>
<br><br>

<?php
//exercice 23
echo "<strong>*- exercice 23<br><br></strong>";
function plusGrand(){
$nombre = array(10, 20, 30, 40, 50, 60, 70, 100, 500);

while($nombre > 50){
    echo max($nombre);
    return;
}

}
    echo plusGrand(). 'est le chiffre le plus grand';
?>
<br><br>

<?php
//exercice 24
echo "<strong>*- exercice 24<br><br></strong>";

function verificationPassword($password){
    $password = TRUE;
    $mdp = '123654';
    if (strlen($mdp) >=8){
return $password;
    }
    else{
        return FALSE;
    }
}

    var_dump(verificationPassword($password));
?>

<br><br>

<?php
//exercice 25 - verificationPassword()
echo "<strong>*- exercice 25<br><br></strong>";

   $passw01 = "12Gerard";
   $hashp02 = "12Gerard";

   $test02 = password_verify($passw01,$hashp02);
   
   if($test02 == TRUE) {
      echo "VALID password for the informed HASH!<br>"; 
      var_dump($test02);
 } else {
      echo "INVALID password for the informed HASH!<br>";     
      var_dump($test02);    
}
?>
<?php
    function pwdVerify($pwd, $hashAndSalt)
 {
     if (password_verify($pwd, $hashAndSalt)) {
         return true;
     }
     return false;
 }
 ?>
 <br><br>

 <?php
 //exercice 26 Fonction capitale()
 echo "<strong>*- exercice 26<br><br></strong>";

function capitale(){
$pays = 'France';
 switch ($pays){

    case 0 :'France';
    return 'paris';
    break;
    case 1:'Allemagne';
    return 'Berlin';
    break;
    case 2:'Italie';
     return 'Rome';
     break;
    case 3:'Maroc';
     return 'Rabat';
    break;
    case 4:'Espagne';
    return 'Madrid';
    break;
    case 5:'Portugal';
    return 'Lisbonne';
    break;
    case 6:'Angleterre';
    return 'Londre';
    break;
    default:
    return 'Inconnue';
    break;
}
}

var_dump(capitale());

?>

<br><br>
<?php
//exercice 27 capital()
 echo "<strong>*- exercice 27<br><br></strong>";

 function listhtml(){
 $list = ['Gérard', 'johnny', 'Alexandre', 'Franck', 'Enzo', 'chuck', 'norris'];
 $c = 0;
 $LIMIT = 3;
 echo "<ul>"; 
 foreach($list as $current) {
     echo "<li>$current</li>";
     $c += 1;
     if($c == $LIMIT) {
    echo "</ul><ul> <br><br>";
    } 
  }
}
 echo listhtml();
 ?>

<br><br>
<?php
//exercice 28 replace
 echo "<strong>*- exercice 28<br><br></strong>";
function remplacerLesLettres($replace){
    $replace = strtr($replace, 'e,i,o', '3,1,0');
return $replace;

}
echo remplacerLesLettres("Bonjour les amis. Les cours de programmation Web sont trops cools.");


 ?>
 <br><br>
<?php
//exercice 29 capital()
 echo "<strong>*- exercice 29<br><br></strong>";

// Enregistrons les informations de date dans des variables
    function quelleDate(){
        date_default_timezone_set('Indian/Reunion'); 
        $date = setlocale(LC_ALL, 'fr_FR.UTF8', 'fr_FR','fr','fr','fra','fr_FR@euro');
     
    return strftime('%I:%M:%S'). '<br>';

}
  echo quelleDate()


?>