<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
<link rel="stylesheet" href="./css/6_1_1_.css">
<form method="post">
  Liczba<input type="number" name="liczba">
  <input type="submit" name="button" value="guzik">
</form>
    <title></title>
  </head>
  <body>
    <table>


<?php
if(!empty($_POST['liczba'])){
  $suma = 0;
  $suma1 = 0;
    $col = 1;
$row = 0;
$liczba = $_POST['liczba'];
for ($up=0; $up<= $liczba; $up++) {
  if($up==0){
    echo "<td class=\"green\"></td>";
  }
  else{
     echo "<td class=\"green\">$up</td>";
  }

}
do {
  echo "<tr>";
  if($row==0){
    echo "<td class=\"green\">$col</td>";
  }
  else{

do {
   $wynik=$row*$col;
   if ($row==$col) {
     $suma+=$wynik;
     echo "<td class=\"red\">$wynik</td>";

   }else if ($row+$col==$liczba+1) {
        echo "<td class=\"yellow\">$wynik</td>";
    $suma1+=$wynik;
   }else{
  echo "<td>$wynik</td>";}
  $col++;
} while ($col <= $liczba);
}
  $row++;
}
 while ($row <= $liczba);
  echo "</tr>";
}

 ?>
</table>
<?php  echo  $suma1+$suma; ?>
</body>
</html>
