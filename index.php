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
echo $mojtext.$moj_inny_text<?php
    $conn = new mysqli("127.0.0.1","root","","Nauka1");  //Adres do którego się łączę, nazwa użytkownika, hasło, baza danych
    $result = $conn->query('SELECT * FROM pracownicy');
        echo("<table border=1>");
        echo("<th>Id</th>"); //Nazwy Kolumn
        echo("<th>Imie</th>");
        echo("<th>Dzial</th>");
        echo("<th>Zarobki</th>");
            while($row=$result->fetch_assoc()){ // wyciąganie danych VVVVVVV
                echo("<tr>");
                    echo("<td>".$row["id_pracownicy"]."</td><td>".$row["imie"]."</td><td>".$row["dzial"]."</td><td>".$row["zarobki"]."</td>"); // wyciąga odpowiednie dane z bazy

                echo("</tr>");
            }

        echo("</table>");
        $conn = new mysqli("127.0.0.1","root","","Nauka1");  
    $result = $conn->query('SELECT * FROM pracownicy where imie like "%a"'); // wyświetla tylko kobiety
        echo("<table border=1>");
        echo("<th>Id</th>"); 
        echo("<th>Imie</th>");
        echo("<th>Dzial</th>");
        echo("<th>Zarobki</th>");
            while($row=$result->fetch_assoc()){ 
                echo("<tr>");
                    echo("<td>".$row["id_pracownicy"]."</td><td>".$row["imie"]."</td><td>".$row["dzial"]."</td><td>".$row["zarobki"]."</td>"); 

                echo("</tr>");
            }

        echo("</table>");
        $conn = new mysqli("127.0.0.1","root","","Nauka1");  
    $result = $conn->query('SELECT * FROM pracownicy where (dzial=1 or dzial=3)'); // wyświetla tylko pracowników z działu pierwszego i trzeciego
        echo("<table border=1>");
        echo("<th>Id</th>"); 
        echo("<th>Imie</th>");
        echo("<th>Dzial</th>");
        echo("<th>Zarobki</th>");
            while($row=$result->fetch_assoc()){ 
                echo("<tr>");
                    echo("<td>".$row["id_pracownicy"]."</td><td>".$row["imie"]."</td><td>".$row["dzial"]."</td><td>".$row["zarobki"]."</td>"); 

                echo("</tr>");
            }

        echo("</table>");

        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
          }
?>
