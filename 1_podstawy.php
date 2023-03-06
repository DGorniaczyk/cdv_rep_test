<?php
    $firstname = "Janusz";
    $lastname = "Nowak";
    echo "Imie i nazwisko: $firstname $lastname<br>";
    echo 'Imie i nazwisko: $firstname $lastname<br>';
    //heredoc
    echo <<< DATA
        Imię: $firstname<br>
        Nazwisko: $lastname<br>
    DATA;
    $data = <<< DATA
    Imię: $firstname<br>
    Nazwisko: $lastname<br>
DATA;
    echo $data;
    //nowdoc
    echo <<< 'DATA'
        Imię: $firstname<br>
        Nazwisko: $lastname<br>
    DATA;

    $bin = 0b1011;
    echo $bin; //11
    $oct = 011;
    echo $oct; //9
    $hex = 0xA1;
    echo $hex; //161
?>