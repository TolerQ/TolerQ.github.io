<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <link rel="stylesheet" href="./css/6_1_1_.css">
    <meta charset="utf-8">
    <form method="post">
      liczba<input type="number" name="liczba">

      <input type="submit" name="submit">
    </form>
    <title></title>
  </head>
  <body>
    <table>



<?php
if(!empty($_POST['liczba'])){
$liczba=$_POST['liczba'];
$suma=0;
$suma1=0;
$row=1;


for($gor=0;$gor<=$liczba;$gor++){
  echo "<td class=\"green\">$gor</td>";
}

do {
  echo "<tr>";
$col=1;
echo "<td class=\"green\">$row</td>";
do {
$wynik=$row*$col;
if($row==$col){
$suma+=$wynik;
echo "<td class=\"red\">$wynik</td>";
}else if($row+$col==$liczba+1){
  $suma1+=$wynik;
  echo "<td class=\"yellow\">$wynik</td>";}
  else{
echo "<td>$wynik</td>";}
$col++;
} while ($col <= $liczba);
$row++;
echo"</tr>";
} while ($row <= $liczba);

}


 ?>

</table>
<?php
echo $suma+$suma1,'<br>';
 ?>

</body>
</html>
