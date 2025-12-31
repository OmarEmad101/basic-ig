<?php
function Redirect($url)
{
  header('Location: ' . $url, true, 302);
  exit();
}

$accept = $_SERVER['HTTP_ACCEPT'];
if (strpos($accept, 'application/json+fhir') !== false)
  Redirect('https://omaremad101.github.io/basic-ig/0.4.0/StructureDefinition-FavoriteColor.json2');
elseif (strpos($accept, 'application/fhir+json') !== false)
  Redirect('https://omaremad101.github.io/basic-ig/0.4.0/StructureDefinition-FavoriteColor.json1');
elseif (strpos($accept, 'json') !== false)
  Redirect('https://omaremad101.github.io/basic-ig/0.4.0/StructureDefinition-FavoriteColor.json');
elseif (strpos($accept, 'application/xml+fhir') !== false)
  Redirect('https://omaremad101.github.io/basic-ig/0.4.0/StructureDefinition-FavoriteColor.xml2');
elseif (strpos($accept, 'application/fhir+xml') !== false)
  Redirect('https://omaremad101.github.io/basic-ig/0.4.0/StructureDefinition-FavoriteColor.xml1');
elseif (strpos($accept, 'html') !== false)
  Redirect('https://omaremad101.github.io/basic-ig/0.4.0/StructureDefinition-FavoriteColor.html');
else 
  Redirect('https://omaremad101.github.io/basic-ig/0.4.0/StructureDefinition-FavoriteColor.xml');
?>
    
You should not be seeing this page. If you do, PHP has failed badly.
