<!DOCTYPE html>
<html lang="fr">
  <head>
    <title>Premier programme PHP !</title>
<body>
<?php
echo "<strong>Hello world!</strong>" ."<br><br>";

//exercice 1 ------------------------------------
echo "*- exercice 1 <br><br>";
$note_maths = 15;
$note_francais = 12;
$note_histoire_geo = 9;
//(note1 + note2 + note3)/nombre de note
$moyenne = ($note_maths + $note_francais +$note_histoire_geo) /3;
echo 'La moyenne est de '.$moyenne.' / 20. ';

?>
<br><br>

<?php
// exercice 2 ------------------------------------
echo "*- exercice 2 <br><br>";
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
//exercice 3 --------------------------------------
echo "*- exercice 3 <br><br>";

$test = 42;
var_dump ("Le visiteur à '$test' ans.");

?>
<br><br>

<?php
//exercice 4 --------------------------------------
echo "*- exercice 4 <br><br>";

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
//exercice 5 --------------------------------------
echo "*- exercice 5 <br><br>";

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
//exercice 6 --------------------------------------
echo "*- exercice 6 <br><br>";

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
//exercice 7 --------------------------------------
echo "*- exercice 7 <br><br>";
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
//exercice 8 --------------------------------------
echo "*- exercice 8 <br><br>";
// Boucle générant la table de multiplication du 5
for($i=0; $i<=10; $i++)
{
  echo '5 x ', $i ,' = ', (5*$i) ,'<br/>';
}
?>
<br><br>

<?php
//exercice 9 --------------------------------------
echo "*- exercice 9 <br><br>";

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
//exercice 10 --------------------------------------
echo "*- exercice 10 <br><br>";

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
//exercice 11 --------------------------------------
echo "*- exercice 11 <br><br>";

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
//exercice 12 --------------------------------------
echo "*- exercice 12<br><br>";

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
//exercice 13 --------------------------------------
echo "*- exercice 13<br><br>";
$cocktails = array('Mojito', 'Long Island
Iced Tea', 'Gin Fizz', 'Moscow mule');{
echo "le résultat est .$cocktails[1].";
}
?><br>

<?php
//exercice 14 --------------------------------------
echo "*- exercice 14<br><br>";



?>
<br><br>

<?php
//exercice 15 --------------------------------------
echo "*- exercice 15<br><br>";
//Exemple : argument 1 = Antoine Argument 2 = Griezmann;
// Resultat : AntoineGriezmann
$argument1 = "Antoine";
$argument2 = "Griezmann";

echo "je m'appelle $argument1 $argument2.";
?>
<br><br>
<?php
//exercice 16 --------------------------------------
echo "*- exercice 16<br><br>";

?>



