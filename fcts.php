<?php
function maFonctionAmelioreeSuite($itr = 100)
{
  $html = "";
  for ($i = 0; $i <= $itr; $i++)
  {
    $html .= $i." // ";
  }
  return $html."J'ai fini...";
}
