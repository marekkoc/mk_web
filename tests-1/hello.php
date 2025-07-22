<?php
// Prosty skrypt PHP
echo "<h1>Witaj w PHP!</h1>";

// Zmienne
$name = "Jan";
$age = 25;

echo "<p>Nazywam się $name i mam $age lat.</p>";

// Aktualna data i czas
$current_time = date('Y-m-d H:i:s');
echo "<p>Aktualna data: $current_time</p>";

// Pętla
echo "<h2>Liczby od 1 do 5:</h2>";
for ($i = 1; $i <= 5; $i++) {
    echo "<p>Liczba: $i</p>";
}

// Informacje o PHP
echo "<h2>Informacje o PHP:</h2>";
echo "<p>Wersja PHP: " . phpversion() . "</p>";
?>
