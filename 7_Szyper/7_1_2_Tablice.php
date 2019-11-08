<?php
//tablice indeksowane numerycznie

$colors = array('Red','Green','Blue');
$colors[3] = 'Magenta';

for ($i=0; $i < count($colors) ; $i++) {
  $elem = $i + 1;
  echo "Element $elem: $colors[$i]<br>";
}
########################################################

function showArray($tab){
for ($i=0; $i < count($tab) ; $i++) {
  $elem = $i + 1;
  echo "Element $elem: $tab[$i]<br>";
 }
}
showArray($colors);
echo "<br>";

foreach ($colors as $key => $value) {
    echo "$value $value<br>";
}
echo "<br>";

foreach ($colors as $key => $value) {
  $elem = $key + 1;
  echo "Element $elem: $value<br>";

}

//tablice asocjacyjne

$data = array(
'imie' => 'Janusz',
'nazwisko' => 'Nowak',
'wiek' => 20
);
echo "<br>";
function showArrayAssoc($tab){
  foreach ($tab as $key => $value) {
    echo "$key: $value <br>";
  }
}

showArrayAssoc($data);


?>
