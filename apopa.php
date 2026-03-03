<?php
// 5.Sprawdzający wiek.
// Mniej niż 11: dziecko;
// Między 11 i 17: nastolatek;
// 18 i więcej: dorosły;

// 6.Sprawdzający siłę hasła.
// Mniej niż 5: bardzo słabe;
// Między 5 i 8: słabe;
// Między 9 i 11: silne;
// Ponad 11: bardzo silne;

// 1.Napisz program informujący czy liczba parzysta czy nieparzysta.

$liczba1 = readline("podaj pierwszą liczbę: ");

if ($liczba1 % 2 == 0){
    echo "liczba jest parzysta                                                                                                              ";
}else{
    echo "liczba jest nieparzysta                                                                                                                                 ";
};

echo "=================================================================                                                                                ";

// 2.Sprawdza czy pierwsza jest podzielna przez drugą.

$liczba2 = readline("podaj pierwszą liczbę: ");
$liczba3 = readline("podaj druga liczbę: ");

if($liczba2 % $liczba3 == 0){
    echo "liczba " . $liczba2 . "jest pdzielna przez liczbę " . $liczba3;
}else{
    echo "nie da sie podzielić liczbę " . $liczba2 . "przez liczbę " . $liczba3 . "                                                                                  ";
};

echo "=================================================================                                                                                   ";

// 3.Napisz program sprawdzający czy liczba jest z przedziału <1,10> lub <17,21>

$liczba4 = readline("podaj pierwsza liczbę: ");

if($liczba4 >=1 && $liczba4 <=10){
    echo "jiczba jest w przedziale 1                                                                                              ";
}else if($liczba4 >=17 && $liczba4 <=21){
    echo "liczba jest w przedziale 2                                                                                            ";
}else{
    echo "liczba nie mieści się w żadnym przedziałów                                                                         ";
}

echo "=================================================================                                                                                   ";

// 4.Napisz program informujący czy liczba jest większa, mniejsza czy równa zero.
// Wykorzystaj tylko jedną, podstawową instrukcję warunkową.




