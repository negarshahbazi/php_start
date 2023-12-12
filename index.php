<?php 
$name="negar";
echo  "<div>". $name ."</div><hr>";


$lastname="shahbazi";
$firstname="negar";
$age="32";
echo $lastname ."<br>". $firstname ."<br>". $age."<hr>";

$km=1;
echo $km."<br>";
$km=3;
echo $km."<br>";
$km=125;
echo $km."<hr>";
//  Créer une variable de type string, une variable de type int, une variable de type float, une variable de type booléan et les initialiser avec une valeur de votre choix.
// Les afficher.
$name="negar";
echo $name."<br>";
$float=2.5;
echo $float."<br>";

$int=3;
echo $int."<br>";
 
$boolean=true;
echo $boolean."<hr>";

// Créer une variable name et l'initialiser avec la valeur de votre choix.
// Afficher : "Bonjour" + name + ", comment vas tu ?".
$name="negar";
echo "bonjour " . $name . "commen vas tu!";
// Créer trois variables lastname , firstname et age et les initialiser avec les valeurs de votre choix. Attention age est de type entier.
// Afficher : "Bonjour" + lastname + firstname + ",tu as" + age + "ans".
$lastname="shahbazi";
$firstname="negar";
$age="32";
echo "bonjour " . $lastname ." ". $firstname." "."tu as"." ".$age." "."ans<hr>";
// Créer 3 variables.
// Dans la première mettre le résultat de l'opération 3 + 4.
// Dans la deuxième mettre le résultat de l'opération 5 * 20.
// Dans la troisième mettre le résultat de l'opération 45 / 5.
// Afficher le contenu des variables.
$x=3;
$y=4;
$premiere=$x+$y;
echo $premiere."<br>";
$deuxieme=5*20;
echo $deuxieme."<br>";

$troisième=45 / 5;
echo $troisième."<hr>";

// Créer une variable age et l'initialiser avec une valeur.
// Si l'âge est supérieur ou égale à 18, afficher Vous êtes majeur. Dans le cas contraire, afficher Vous êtes mineur.
$age="32";
if($age>=18){
    echo "Vous êtes majeur.<hr>";
} else {
   echo" Vous êtes mineur.<hr>";
}
// Créer une variable isEasy de type booléan et l'initialiser avec une valeur.
// Afficher C'est facile!! si c'est vrai. Dans le cas contraire afficher C'est difficile !!!.
// Bonus : L'écrire de deux manières différentes.
$isEasy=true;
if($isEasy===true){
echo "C'est facile!<br><hr>";}
else{
echo " C'est difficile!<hr>";}

// Créer deux variables age et gender. La variable gender peut prendre comme valeur :

// Homme
// Femme
// En fonction de l'âge et du genre afficher la phrase correspondante :

// Vous êtes un homme et vous êtes majeur
// Vous êtes un homme et vous êtes mineur
// Vous êtes une femme et vous êtes majeur
// Vous êtes une femme et vous êtes mineur
// Gérer tous les cas.

$age=32;
$gender="femme";

    if($age>=18 && $gender==="femme"){
        echo "Vous êtes une femme et vous êtes majeur.<hr>";
    } else if($age>=18 && $gender==="homme"){
       echo" Vous êtes un homme et vous êtes majeur .<hr>";
    }else if($age<18 && $gender==="homme"){
        echo"  Vous êtes un homme et vous êtes mineur .<hr>";

}else if($age<18 && $gender==="homme"){
    echo"  Vous êtes une femme et vous êtes mineur .<hr>";
}else{
    echo " c'est pas bon!!!<hr>";
}



// L'échelle de Richter est un outil de mesure qui permet de définir la magnitude de moment d'un tremblement de terre. Cette échelle va de 1 à 9.
// Créer une variable magnitude. Selon la valeur de magnitude, afficher la phrase correspondante.

function tremblement($magnitude){
    if($magnitude===1){
        echo "	Micro-séisme impossible à ressentir.<hr>";
    }else if($magnitude===2){
        echo "	Micro-séisme impossible à ressentir mais enregistrable par les sismomètres.<hr>";
    }else if($magnitude===3){
        echo "Ne cause pas de dégats mais commence à pouvoir être légèrement ressenti.<hr>";

}else if($magnitude===4){
    echo "	Séisme capable de faire bouger des objets mais ne causant généralement pas de dégats.<hr>";
}else if($magnitude===5){
    echo "Séisme capable d'engendrer des dégats importants sur de vieux bâtiments ou bien des bâtiments présentants des défauts de construction. Peu de dégats sur des bâtiments modernes.<hr>";

}else if($magnitude===6){
    echo "	Fort séisme capable d'engendrer des destructions majeures sur une large distance (180 km) autour de l'épicentre.<hr>";

}else if($magnitude===7){
    echo "	Séisme capable de destructions majeures à modérées sur une très large zone en fonction de la distance.<hr>";

}else if($magnitude===8){
    echo "	Séisme capable de destructions majeures sur une très large zone de plusieurs centaines de kilomètres.<hr>";

}else if($magnitude===9){
    echo "	Séisme capable de tout détruire sur une très vaste zone.<hr>";

}
}
tremblement(3);

$magnitude = 6;

switch ($magnitude) {
  case 1:
    echo "	Micro-séisme impossible à ressentir.<hr>";
    break;
    case 2:
        echo "	Micro-séisme impossible à ressentir mais enregistrable par les sismomètres.<hr>";
        break;
  case 3:
    echo "Ne cause pas de dégats mais commence à pouvoir être légèrement ressenti.<hr>";
    break;
  case 4:
    echo "	Séisme capable de faire bouger des objets mais ne causant généralement pas de dégats.<hr>";
    break;
    case 5:
        echo "Séisme capable d'engendrer des dégats importants sur de vieux bâtiments ou bien des bâtiments présentants des défauts de construction. Peu de dégats sur des bâtiments modernes.<hr>";
        break;
        case 6:
            echo "	Fort séisme capable d'engendrer des destructions majeures sur une large distance (180 km) autour de l'épicentre.<hr>";
            break;
            case 7:
                echo "	Séisme capable de destructions majeures à modérées sur une très large zone en fonction de la distance.<hr>";
                break;
                case 8:
                    echo "	Séisme capable de destructions majeures sur une très large zone de plusieurs centaines de kilomètres.<hr>";
                    break;
                    case "9":
                        echo "	Séisme capable de tout détruire sur une très vaste zone.<hr>";
                        break;
  default:
    echo "Your favorite color is neither red, blue, nor green!";
}

// switch case
// <?php
//   echo ($age >= 18) ? 'Tu es majeur' : 'Tu n\'es pas majeur';
//
$age=28;
if ($age >= 18){
    echo "Tu es majeur.<hr>";
}else{ echo "Tu n\'es pas majeur.<hr>";}
// <?php
//   echo ($gender != 'Homme') ? 'C\'est une développeuse !!!' : 'C\'est un développeur !!!';
// 
$gender='Homme';
if ($gender  != 'Homme'){
    echo "C'est une développeuse !!!<hr>";
}else{ echo "C'est un développeur !!!<hr>";}

// <?php
//   echo ($isOk == false) ? 'c\'est pas bon !!!' : 'c\'est ok !!';
// 
$isOk = false;
if($isOk){
    echo 'c\'est pas bon !!!<hr>' ;
}else{
    echo 'c\'est ok !!<hr>' ;
}

// <?php
//   echo ($isOk) ? 'c'est ok !!' : 'c'est pas bon !!!';
// 
$isOk=false;
if($isOk){
    echo "c'est ok !!<hr>" ;
}else{
    echo "c'est pas bon !!!<hr>" ;
}
// Créer une variable et l'initialiser à 0.
// Tant que cette variable n'atteint pas 10, il faut :

// l'afficher
// l'incrementer

for($x=0;$x<=10;$x++){
    echo $x ;
}echo"<hr>";
// Créer deux variables. Initialiser la première à 0 et la deuxième avec un nombre compris en 1 et 100.
// Tant que la première variable n'est pas supérieure à 20 :

// multiplier la première variable avec la deuxième
// afficher le résultat
// incrementer la première variable
$m=0;
$p=rand(1,100);
for($m=0;$m<=20;$m++){
  $v= $m*$p."*";
  echo $v;

}
echo"<hr>";
// Créer deux variables. Initialiser la première à 100 et la deuxième avec un nombre compris en 1 et 100.
// Tant que la première variable n'est pas inférieure ou égale à 10 :

// multiplier la première variable avec la deuxième
// afficher le résultat
// décrémenter la première variable
$x=100;
$w=rand(1,100);
for($x=100;$x>10;$x--){
    $c=$x*$w."*";
    echo $c;
}
echo"<hr>";
// Créer une variable et l'initialiser à 1.
// Tant que cette variable n'atteint pas 10, il faut :

// l'afficher
// l'incrementer de la moitié de sa valeur

for($x=1;$x<=10;$x+=$x/2){
    echo $x."*";
   
}
echo"<hr>";
// En allant de 1 à 15 avec un pas de 1, afficher le message On y arrive presque.
for($x=1;$x<=15;$x++){
echo "On y arrive presque";
}
echo"<hr>";
// En allant de 20 à 0 avec un pas de 1, afficher le message C'est presque bon.
for($x=20;$x>=0;$x--){
    echo "C'est presque bon";
}
echo"<hr>";
// En allant de 1 à 100 avec un pas de 15, afficher le message On tient le bon bout.
for($x=1;$x<=100;$x+=15){
    echo "On tient le bon bout";
}
echo"<hr>";
// En allant de 200 à 0 avec un pas de 12, afficher le message Enfin !!!!.
for($x=200;$x>=0;$x-=12){
    echo "Enfin !!!!";
}
echo"<hr>";
// Faire une fonction qui retourne true.

function p(){
   return true;
}
echo"<hr>";
p();

// Faire une fonction qui prend en paramètre une chaine de caractères et qui retourne cette même chaine.
function parametre($chaine){
    return $chaine;
}
parametre("negar shahbazi");
echo "<hr>";

// Faire une fonction qui prend en paramètre deux nombres. La fonction doit retourner :

// Le premier nombre est plus grand si le premier nombre est plus grand que le deuxième
// Le premier nombre est plus petit si le premier nombre est plus petit que le deuxième
// Les deux nombres sont identiques si les deux nombres sont égaux
function compare($n,$m){
   if($n>$m){
    return "Le premier nombre est plus grand ";
   }else if($n==$m){
    return "Les deux nombres sont identiques ";
   }else{
    return "Le premier nombre est plus petit ";
   }
    }
    compare(2,4);
    echo "<hr>";
    // Faire une fonction qui prend en paramètre un nombre et une chaine de caractères et qui renvoit la concaténation de ces deux paramètres.
function anniversaire($day,$mois){
    return "je suis ne le "." ". $day." " .  "de"." " . $mois;
}
anniversaire(22,"april");
echo "<hr>";

// Faire une fonction qui prend trois paramètres : le nom, le prénom et l'âge d'une personne. Elle doit renvoyer une chaine de la forme :
//     "Bonjour" + nom + prénom + ",tu as" + age + "ans".

function personne($nom,$prenom,$age){
    return "bonjour ". $nom ." ". $prenom ." tu as ".$age." ans";
}
personne("shahbazi","negar",32);
echo "<hr>";
// Faire une fonction qui prend deux paramètres : l'âge et le genre d'une personne. Le genre peut être :

// Homme
// Femme
// La fonction doit renvoyer en fonction des paramètres :

// Vous êtes un homme et vous êtes majeur
// Vous êtes un homme et vous êtes mineur
// Vous êtes une femme et vous êtes majeur
// Vous êtes une femme et vous êtes mineur
// Gérer tous les cas.


function persone($age,$gender){
    if($age>=18 && "femme"){
        return "Vous êtes une femme et vous êtes majeur.<hr>";
    } else if($age>=18 && "homme"){
        return" Vous êtes un homme et vous êtes majeur .<hr>";
    }else if($age<18 && "homme"){
        return"  Vous êtes un homme et vous êtes mineur .<hr>";

}else{
    return"  Vous êtes une femme et vous êtes mineur .<hr>";
}}

persone(32,"femme");

// Faire une fonction qui prend en paramètre trois nombres et qui renvoit la somme de ces nombres.
// Tous les paramètres doivent avoir une valeur par défaut.
function addition($a,$b,$c){
    return $a+$b+$c;
}
addition(1,2,3);
echo "<hr>";
// ;;;;;;;;;;;;;;;;;;;;;;;;;;;tableaux;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;
// Créer un tableau months et l'initialiser avec les valeurs suivantes :

// janvier
// février
// mars
// avril
// mai
// juin
// juillet
// aout
// septembre
// octobre
// novembre
// décembre
$mois=["janvier","février","mars","avril","mai","juin","juillet","aout","septembre","octobre","novembre","décembre"];
var_dump($mois);
echo "<hr>";
// Avec le tableau de l'exercice 1, afficher la valeur de la troisième ligne de ce tableau.
$mois=["janvier","février","mars","avril","mai","juin","juillet","aout","septembre","octobre","novembre","décembre"];
echo $mois[2] ;
echo "<hr>";
// Avec le tableau de l'exercice , afficher la valeur de l'index 5.
echo $mois[5] ;
echo "<hr>";
// Avec le tableau de l'exercice 1, modifier le mois de aout pour lui ajouter l'accent manquant.
$mois[7]="août";
echo $mois ;
echo "<hr>";
// Créer un tableau associatif avec comme index le numéro des départements des Hauts de France et en valeur leur nom.
// Avec le tableau de l'exercice 5, afficher la valeur de l'index 59.
$departement=[
    59=>"saint",
    69=>"ain",
    75=>"paris",
     91=>"l'essone",
];
print_r($departement);
echo "<hr>";
// Avec le tableau de l'exercice 5, ajouter la ligne correspondant au département de la ville de Reims.
$departement=[51=>'reims'];

echo $departement[51];
echo "<hr>";
// Avec le tableau de l'exercice 1 et une boucle, afficher toutes les valeurs de ce tableau.
$mois=["janvier","février","mars","avril","mai","juin","juillet","aout","septembre","octobre","novembre","décembre"];
for($i=0;$i<=11;$i++){
echo $mois[$i]."*";
}
echo "<hr>";
// Avec le tableau de l'exercice 5, afficher toutes les valeurs de ce tableau.
foreach($departement as $departement1){
echo( $departement);}
echo "<hr>";
// Avec le tableau de l'exercice 5, afficher toutes les valeurs de ce tableau ainsi que les clés associés.
// Cela pourra être, par exemple, de la forme : "Le département" + nom du département + "a le numéro" + numéro du département
foreach($departement as $key=>$value){
echo "le departement".$value;
};

var_dump($departement);

?>