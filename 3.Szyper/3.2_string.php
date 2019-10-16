<?php
$lorem='Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.';
echo $lorem;
$col = wordwrap($lorem,10,'<br>');
echo $col,'<hr>';
//CZYSZczenie zawartosci bufora
ob_clean();
##########
//usuwanie białych znakówarning  (spacje)
$name = 'Kasia';
$name1= '    Kasia';
echo 'Długość zmiennej $name',strlen($name),'<br>';//5
echo 'Długość zmiennej $name1',strlen($name),'<br>';//15
echo strlen(ltrim($name1));//5
echo strlen(rtrim($name1));//9
echo strlen(trim($name1));//5
//przeszukiwanie ciagow znaków
$address = 'Poznań, ul. Przełajowa 5, tel. (61) 445-35-20';
$search = stristr($address, 'Tel.', true);
echo $search,'<br>' ; //poznan przeławjowa
$mail = strstr('zsl@gmail.com', 64);
echo $mail,'<br>'; //@gmail.com
#########################################################
$ciag1 = 'a';
$ciag2 = 'b';
echo strcmp($ciag1, $ciag2); //-1
echo strcmp('d','d'); //0
echo strcmp('d','a'); //1
echo strcmp('aac','aa'),'<hr>'; //1
//pozycja
echo strpos('abcdedg','bc'); //1
echo strpos('abcdabcd','ab'),'<br>'; //0
//sprawdz czy w ciągu o nazwie text1 znajduje sie ciąg text2
$text1 = 'abcd';
$text2 = 'ass';
if (strpos($text1,$text2) === false ){
echo "Ciąg $text2 nie został znaleziony w ciągu $text1";
} else {
  echo "Ciąg $text2 nie został znaleziony w ciągu $text1";
}
//przetwarzanie ciągów znaków
$replace = str_replace('zsk','zsł','Technikum Informatyczne - zsk');
echo $replace,'<br>';
//substr
$surname = substr('Janusz Kowalski',3);
echo $surname,'<br>'; //usz Kowalski
$surname = substr('Janusz Kowalski',-3);
echo $surname,'<br>'; //ski
$surname = substr('Janusz Kowalski',-8, 5); //Kowal
echo $surname,'<br>';
$surname = substr('Janusz Kowalski',7, 5); //Kowal
echo $surname,'<br>';
###################################################
//zamiana polskich znaków
$login = 'żąkol';
$censore = array('ą','ę','ś','ć','ż','ź','ó','ń','ł');
$replace = array('a','e','s','c','z','z','o','n','l');
$newLogin = str_replace($censore,$replace,$login);
echo $newLogin,'<hr>'; //zkaol
ob_clean();
/*
Napisz aplikację cenzurującą zdanie podane przez użytkownika,
Użytkownik podaje dane w formularzu.
Zamień słowa: zsk , zse , zsł na ciąg '**####**'.
Wyświetl dane:
Dane bez poprawy:...
Dane po poprawie:...
*/
echo <<< FORM
<form method="post">
  <input type="text" name="dane" placeholder="Wpisz zdanie">
 <input type="submit" name="" value="Zatwierdź">
</form>
FORM;
if(isset($_POST['dane'])) {
  $data = $_POST['dane'];
  //echo $data;
  $censore = array('zse','zsk','zsl');
  $replace = '**###**';
  $correct = str_replace($censore,$replace,$data);
  echo "Dane bez poprawy: $data<br>";
  echo "Dane po poprawie: $correct<br>";
}
?>
