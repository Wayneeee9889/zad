<?php
// 1.Napisz program informujący czy liczba parzysta czy nieparzysta.

$liczba1 = readline("podaj pierwszą liczbę: ");

if ($liczba1 % 2 == 0){
    echo "liczba jest parzysta \n";
}else{
    echo "liczba jest nieparzysta \n";
};

echo "=================================================================  \n";

// 2.Sprawdza czy pierwsza jest podzielna przez drugą.

$liczba2 = readline("podaj pierwszą liczbę: ");
$liczba3 = readline("podaj druga liczbę: ");

if($liczba2 % $liczba3 == 0){
    echo "liczba " . $liczba2 . " jest pdzielna przez liczbę " . $liczba3 . "\n";
}else{
    echo "nie da sie podzielić liczbę " . $liczba2 . "przez liczbę " . $liczba3 . "\n";
};

echo "=================================================================   ";

// 3.Napisz program sprawdzający czy liczba jest z przedziału <1,10> lub <17,21>

$liczba4 = readline("podaj pierwsza liczbę: ");

if($liczba4 >=1 && $liczba4 <=10){
    echo "liczba jest w przedziale 1  \n";
}else if($liczba4 >=17 && $liczba4 <=21){
    echo "liczba jest w przedziale 2  \n";
}else{
    echo "liczba nie mieści się w żadnym przedziałów \n";
}

echo "================================================================= \n";

// 4.Napisz program informujący czy liczba jest większa, mniejsza czy równa zero.
// Wykorzystaj tylko jedną, podstawową instrukcję warunkową.

$liczba5 = readline("podaj ");

switch($liczba5){
    case $liczba5 > 0:
        echo "liczba jest większa od 0 \n";
        break;
    case $liczba5 = 0:
        echo "liczba jest równa 0 \n";
        break;
    case $liczba5 < 0:
        echo "leczba jest mniejsza od 0  \n";
        break;
};

echo "=================================================================  \n";

// 5.Sprawdzający wiek.
// Mniej niż 11: dziecko;
// Między 11 i 17: nastolatek;
// 18 i więcej: dorosły;

$wiek = readline("podaj swój wiek: ");

switch($wiek){
    case $wiek < 11:
        echo "Jesteś dzieckiem  \n";
        break;
    case $wiek >= 11 && $wiek <= 17:
        echo "Jesteś nastolatkiem  \n";
        break;
    case $wiek >= 18:
        echo "jesteś dorosły  \n";
        break;
};

echo "=================================================================  \n";

// 6.Sprawdzający siłę hasła.
// Mniej niż 5: bardzo słabe;
// Między 5 i 8: słabe;
// Między 9 i 11: silne;
// Ponad 11: bardzo silne;

$liczba6 = readline("podaj hasło dla sprawdzenia");

switch($liczba6){
    case strlen($liczba6) < 5:
        echo "bardzo słabe! \n";
    break;
    case strlen($liczba6) >=5 && strlen($liczba6) <= 8:
        echo "słabe \n";
    break;
    case strlen($liczba6) >= 9 && strlen($liczba6) <= 11:
        echo "silne  \n";
    break;
    case strlen($liczba6) > 11:
        echo "bardzo silne! \n";
    break;
}

echo "=================================================================  \n";

// Ilość dni w lutym.
// Program zwraca ilość dni w lutym w zależności od roku przestępnego.
// Lata przestępne liczymy od momentu reformy kalendarza w roku 1582.
// Rokiem przestępnym jest ten, który jest podzielny przez 4.
// Wyjątek stanowią lata podzielne przez 100 z wyjątkiem podzielnych przez 400.
// Np.: rok 1900 nie był przestępny, ale 1600 lub 2000 już tak.

$rok = readline("podaj rok króry chcesz sprawdzić: ");
$dniWMiesiacu = "";

if($rok % 4 == 0){
    $dniWMiesiacu = "28";
    echo("to jest rok przestępny! Ilość dni w miesiącu: " . $dniWMiesiacu);
}else{
    $dniWMiesiacu = "27";
    echo("to nie jest rok przestępny! ilośc dni w miesiącu:  " . $dniWMiesiacu);
}

echo "=================================================================  \n";

// Napisz program wyznaczający najmniejszą z trzech liczb podanych przez użytkownika.
