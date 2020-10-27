<?php

echo("<li>Laura Nowak");
echo("<li>Laura Nowak");
echo("<li>Laura Nowak");
echo("<li>Laura Nowak");

$pudelko_01_w_pamieci_komputera = 12;

$pudelko_02_w_pamieci_komputera = 3;

$suma = $pudelko_01_w_pamieci_komputera + $pudelko_02_w_pamieci_komputera;
echo ("<li>$suma");

$roznica = $pudelko_01_w_pamieci_komputera - $pudelko_02_w_pamieci_komputera;
echo ("<li>$roznica");

$mnozenie = $pudelko_01_w_pamieci_komputera * $pudelko_02_w_pamieci_komputera;
echo ("<li>$mnozenie");

$dzielenie = $pudelko_01_w_pamieci_komputera / $pudelko_02_w_pamieci_komputera;
echo ("<li>$dzielenie");

$mojtext = "<h1>To jest zadanie z PHP:</h1>";
$moj_inny_text = "<h2>Kalkulator</h2>";
echo $mojtext.$moj_inny_text;

echo ("<br> wynik dodawania:".(2+3));

$liczba1 = 3;
$liczba2 = 10;

echo $liczba1;
echo $liczba2;

echo ("<ol>");
echo ("<li> dodawanie: ".($liczba1+$liczba2));
echo ("<li> mnozenie: ".($liczba1*$liczba2));
echo ("<li> odejmowanie: ".($liczba1-$liczba2));
echo ("<li> dzielenie: ".($liczba1/$liczba2));
echo ("</ol>");

echo ("to jest tabelka");
echo ("<table border=1>");
echo ("<tr><td> dodawanie: ".($liczba1+$liczba2)."</td></tr>");
echo ("<tr><td> mnozenie: ".($liczba1*$liczba2)."</td></tr>");
echo ("<tr><td> odejmowanie: ".($liczba1-$liczba2)."</td></tr>");
echo ("<tr><td> dzielenie: ".($liczba1/$liczba2)."</td></tr>");
echo ("</table");

for($i=1;$i<10;$i++){
    echo("kwadrat liczb:".$i."*".$i."=".$i*$i." test</br>");
}

for($i=1;$i<10;$i++){
    echo("kwadrat liczb:".$i.",liczba 2 x wieksza".$i*$i." test</br>");
}

//white (jak długo true albo 1 )

while( $x <=100) {
    echo "<br>".$x=$x=5;
}

while( $x <=100) { and 1==1
    if($x <= 3 and 1==0)
        echo "<b>The number is: $y</br><br>"
} else {echo "<b>The number is: $y</br><br>"
}
?>
