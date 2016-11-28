<?php
ini_set('display_errors', 'On');
include('fcts.php');
  // --> Ceci est un commentaire
  # - ceci est un autre commentaire...
  /* Ceci est un commentaire
      Sur plusieurs lignes... */

$une_variable_php = "est identifiée par un $ devant";
echo "ma variable ".$une_variable_php."<br>";
echo 'ma variable '.$une_variable_php."<br>";
echo "ma variable  $une_variable_php <br>";
echo 'ma variable  $une_variable_php <br>';

function maFonction($produit = false)
{
  echo "OK...";
}
maFonction();

function maFonctionAmelioree($itr = 100)
{
  for ($i = 0; $i <= $itr; $i++)
  {
    echo $i." // ";
  }
  echo "J'ai fini...";
}
maFonctionAmelioree(50);


echo maFonctionAmelioreeSuite(50);

if ($condition == true)
{
  $tpl = 'MonTemplate';
}
else
{
  $tpl = 'SonTemplate';
}

function bidon()
{
  return true;
}
$test = bidon();

$tpl = ($condition === true) ? 'MonTemplate' : 'SonTemplate' ;
