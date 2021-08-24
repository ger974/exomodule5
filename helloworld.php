<!DOCTYPE html>
<html lang="fr">
  <head>
  <meta chartset="uft-8">
    <title>Premier programme PHP !</title>
<body>
<?php
echo "<strong>Hello world!</strong>" ."<br><br>";

//exercice 1 //Modifier le code ci-dessous pour calculer la moyenne des
//notes.
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
// exercice 2 //Calculer le prix TTC du produit.
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
//exercice 3 // Déclarer une variable $test qui contient la valeur 42.
//En utilisant la fonction var_dump(), faire en sorte que le type
//de la variable $test soit string et que la valeur soit bien de
//42.
echo "<strong>*- exercice 3 <br><br></strong>";

$test = 42;
var_dump ("$test");

?>
<br><br>

<?php
//exercice 4 //Déclarer une variable $sexe qui contient une chaîne de
//caractères. Créer une condition qui affiche un message
//différent en fonction de la valeur de la variable.
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
//exercice 5 //Déclarer une variable $budget qui contient la somme de 1
//553,89 €. Déclarer une variable $achats qui contient la
//somme de 1 554,76 €. Afficher si le budget permet de payer
//les achats.
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
//exercice 6 //Déclarer une variable $age qui contient la valeur de type
//integer de votre choix. Réaliser une condition pour afficher
//si la personne est mineure ou majeure.
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
//exercice 7 //Déclarer une variable $heure qui contient la valeur de type
//integer de votre choix comprise entre 0 et 24. Créer une
//condition qui affiche un message si l'heure est le matin,
//l'après-midi ou la nuit
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
//exercice 8 //En utilisant la boucle for, afficher la table de multiplication
//du chiffre 5.
echo "<strong>*- exercice 8 <br><br></strong>";
// Boucle générant la table de multiplication du 5
for($i=0; $i<=10; $i++)
{
  echo '5 x ', $i ,' = ', (5*$i) ,'<br/>';
}
?>
<br><br>

<?php
//exercice 9 Déclarer une variable avec le nom de votre choix et avec la
//valeur 0. Tant que cette variable n'atteint pas 20, il faut :
//l'afficher ;
//incrémenter sa valeur de 2 ;
//Si la valeur de la variable est égale à 10, la mettre en valeur
//avec la balise HTML appropriée.
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
?> 
<br><br>
<?php
//exercice 10 //Déclarer une variable de type array qui stocke les
//informations suivantes :
    //● France : Paris
    //● Allemagne : Berlin
    //● Italie : Rome
    //Afficher les valeurs de tous les éléments du tableau en
    //utilisant la boucle foreach
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
//exercice 11 //En utilisant la fonction rand(), remplir un tableau avec 10
//nombres aléatoires.
//Puis, tester si le chiffre 42 est dans le tableau et afficher un
//message en conséquence.
//Enfin, afficher le contenu de votre tableau avec var_dump.
echo "<strong>*- exercice 11 <br><br></strong>";

   $tableau = array();
   $i = 0;
   while($i < 10) {
      $tableau[] = rand(0, 50);
      $i++;	  
   }
   if(in_array(42, $tableau))
      echo 'Le nombre 42 est bien dans le tableau.';
   else
      echo 'Le tableau ne contient pas la valeur 42.';
   echo '<br />';  
   var_dump($tableau);
?>

<br><br>

<?php
//exercice 12 //En utilisant la fonction rand(), remplir un tableau avec 10
//nombres aléatoires.
//Puis, trier les valeurs dans deux tableaux distincts.
//Le premier contiendra les valeurs inférieures à 50 et le
//second contiendra les valeurs supérieures ou égales à 50.
//Enfin, afficher le contenu des deux tableaux.
echo "<strong>*- exercice 12 <br><br></strong>";

$table = array(12,50,7,23,36,62,47,89,77,87);
$tableau1 = array();
$tableau2 = array();
$i = 0;
while($i < 50) {
   $table[] = rand(0, 80);
   $i++;	  
}
foreach($table as $t) {
   if($t < 50) {
      $tableau1[] = $t;
   } else {
      $tableau2[] = $t;		  
   }
}

echo 'Tableau 1 :' ;
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

//Exercice 13. En utilisant le tableau ci-dessous, compter le nombre d'éléments du
//tableau.
echo "<strong>*- exercice 13<br><br></strong>";

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
//exercice 14. Donnez la syntaxe qui permet d'afficher le deuxième
//élément du tableau $cocktails ?
echo "<strong>*- exercice 14<br><br></strong>";
$cocktails = array('Mojito', 'Long Island
Iced Tea', 'Gin Fizz', 'Moscow mule');{
echo "le résultat est: $cocktails[1].";
}
?>
<br><br>

<?php
//exercice 15. Faite en sorte que la fonction HelloWorld retourne
//exactement la valeur Hello World!
echo "<strong>*- exercice 15<br><br></strong>";
function HelloWorld(){
    $string = 'Hello World!';
    
    return $string;  
}
var_dump(HelloWorld());

?>
<br><br>
<?php
//exercice 16. Créer une fonction qui s'appelle jeRetourneMonArgument().
echo "<strong>*- exercice 16<br><br></strong>";
$Arg1 = "abc"; //==> Return abc
$Arg2 = 123; //==> Return 123
echo "$Arg1 <br>";
echo "$Arg2 <br>";

?>

<br><br>

<?php
//exercice 17. Créer une fonction qui s'appelle concatenation().
//Elle prendra deux arguments de type string.
//Elle devra retourner la concatenation des deux.
//Exemple : argument 1 = Antoine Argument 2 = Griezmann;
//Resultat : AntoineGriezmann

echo "<strong>*- exercice 17<br><br></strong></strong>";
$argument1 = "Antoine";
$argument2 = "Griezmann";

echo "je m'appelle $argument1 $argument2.";
?>
<br><br>

<?php
//exercice 18. Créer une fonction qui s'appelle somme(). Elle prendra deux
//arguments de type int.
//Elle devra retourner la somme des deux.
//Exemple :
//● argument 1 = 5 Argument 2 = 5 ;
//● Resultat : 10
echo "<strong>*- exercice 18<br><br></strong>";

// Fonction addition
$argumentA = 5;
$argumentB = 5;
$Result = ($argumentA + $argumentB);

echo "Le résultat est: $Result";
?><br><br>
<?php
//exercice 19.Créer une fonction qui s'appelle soustraction(). Elle prendra
//deux arguments de type int.
//Elle devra retourner la soustraction des deux.
//Exemple :
//● argument 1 = 5
//● Argument 2 = 5 ;
//● Resultat : 0
echo "<strong>*- exercice 19<br><br></strong>";
// fonction soustraction
$argumentA = 5;
$argumentB = 5;
$Result = ($argumentA - $argumentB);

echo "Le résultat est: $Result";

?>
<br><br>
<?php
//exercice 20. Créer une fonction qui s'appelle multiplication(). Elle prendra
//deux arguments de type int.
//Elle devra retourner la multiplication des deux.
//Exemple :
//● argument 1 = 5
//● Argument 2 = 5 ;
//● Resultat : 25
echo "<strong>*- exercice 20<br><br></strong>";
// fonction Multiplication
$argumentA = 5;
$argumentB = 5;
$Result = ($argumentA * $argumentB);

echo "Le résultat est: $Result";

?>
<br><br>
<?php
//exercice 21. Créer une fonction qui s'appelle division(). Elle prendra deux
//arguments de type int.
//Elle devra retourner la division des deux.
//Exemple :
//● argument 1 = 5
//● Argument 2 = 5 ;
//● Resultat : 1
echo "<strong>*- exercice 21<br><br></strong>";
// fonction de Division
$argumentA = 5;
$argumentB = 5;
$Result = ($argumentA / $argumentB);

echo "Le résultat est: $Result";

?>
<br><br>

<?php
//exercice 22.Créer une fonction qui s'appelle estIlMajeure(). Elle prendra
//un argument de type int.
//Elle devra retourner un boolean.
//Si age >= 18 elle doit retourner true
//si age < 18 elle doit retourner false
//Exemple :
//● age = 5 ==> false
//● age = 34 ==> true 
echo "<strong>*- exercice 22<br><br></strong>";
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
//exercice 23. Créer une fonction qui s'appelle premierElementTableau().
//Elle prendra un argument de type array.
//Elle devra retourner le premier élement du tableau.
//Si l'array est vide, il faudra retourner null;
echo "<strong>*- exercice 23<br><br></strong>";
function premierElementTableau(){
    $tableau = array('pierre', 'paul', 'Jacque', 'Emeline');
    return var_dump($tableau[0]);

}
    echo premierElementTableau();
?>
<br><br>

<?php
//exercice 24. Créer une fonction qui s'appelle plusGrand().
//Elle prendra un argument de type array.
//Elle devra retourner le plus grand des élements présent dans
//l'array.
//Si l'array est vide, il faudra retourner null;
echo "<strong>*- exercice 24<br><br></strong>";
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
//exercice 25. Créer une fonction from scratch qui s'appelle
//verificationPassword().
//Elle prendra un argument de type string.
//Elle devra retourner un boolean qui vaut true si le password
//ait au moins 8 caractères et false si moins.
echo "<strong>*- exercice 25<br><br></strong>";

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
//exercice 26. Créer une fonction qui s'appelle verificationPassword(). Elle
//prendra un argument de type string. Elle devra retourner un
//boolean qui vaut true si le password respecte les règles
//suivantes :
//● Faire au moins 8 caractères
//● Avoir au moins 1 chiffre
//● Avoir au moins une majuscule et une minuscule
//exercice 26
echo "<strong>*- exercice 26<br><br></strong>";

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
 //exercice 27. Créer une fonction qui s'appelle capital(). Elle prendra un argument de
//type string. Elle devra retourner le nom de la capitale des pays suivants :
//● France ==> Paris
//● Allemagne ==> Berlin
//● Italie ==> Rome
//● Maroc ==> Rabat
//● Espagne ==> Madrid
//● Portugal ==> Lisbonne
//● Angleterre ==> Londres
//● Tout autre pays ==> Inconnu
//Il faudra utiliser la structure SWITCH pour faire cette exercice.
 echo "<strong>*- exercice 27<br><br></strong>";

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
//exercice 28.Créer une fonction qui s'appelle listHTML(). Elle prendra deux arguments :
//Un string représentant le nom de la liste
//Un array représentant les élements de cette liste
//Elle devra retourner une liste HTML. Chaque element de cette liste viendra du tableau passé en
//paramètre.
//Exemple : Paramètre : Titre : Capitale Liste : ["Paris", "Berlin", "Moscou"] Résultat :
//<h3>Capitale</h3><ul><li>Paris</li><li>Berlin</li><li>Moscou</li></ul>
//Comme vous pouvez le voir il n'y a pas d'espace ni de retour à la ligne entre les élements de la liste.
//Pas d'espace non plus entre le titre et la liste.
//Si le titre est null et vide il faut que la fonction retourne null. Si l'array est vide, il faut que la fonction
//retourne null.
 echo "<strong>*- exercice 28<br><br></strong>";

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
//exercice 29. Créer une fonction qui s'appelle remplacerLesLettres(). Elle prendra un
//argument de type string. Elle devra retourner cette même string mais en
//remplacant les e par des 3, les i par des 1 et les o par des 0 Exemple :
//input : "Bonjour les amis" ==> Output : B0nj0ur l3s am1s
//input : "Les cours de programmation Web sont trops cools" ==>
//Output : L3s c0urs d3 pr0grammat10n W3b s0nt tr0ps
//c00ls
 echo "<strong>*- exercice 29<br><br></strong>";
function remplacerLesLettres($replace){
    $replace = strtr($replace, 'e,i,o', '3,1,0');
return $replace;

}
echo remplacerLesLettres("Bonjour les amis. Les cours de programmation Web sont trops cools.");


 ?>
 <br><br>
<?php
//exercice 30. Créer une fonction qui s'appelle quelleDate(). Elle devra
//retourner une string représentant la date actuelle sous le
//format suivant DD/MM/YYYY
//Où DD représente le jour actuelle, MM le mois actuel et YYYY
//l'année actuelle.
//Les valeurs doivent être numérique et non au format String.
 echo "<strong>*- exercice 30<br><br></strong>";

// Enregistrons les informations de date dans des variables
    function quelleDate(){
        date_default_timezone_set('Indian/Reunion'); 
        $date = setlocale(LC_ALL, 'fr_FR.UTF8', 'fr_FR','fr','fr','fra','fr_FR@euro');
     
    return strftime('%I:%M:%S'). '<br>';

}
  echo quelleDate()


?>