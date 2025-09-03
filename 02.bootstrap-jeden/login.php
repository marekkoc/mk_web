<?php
// login.php - prosty skrypt do odbierania i zapisywania danych logowania

// Funkcja do zapisu użytkownika do JSON
function zapiszUzytkownika($login, $haslo, $zapamietaj) {
    $plik = 'users.json';
    
    // Sprawdź czy plik istnieje, jeśli nie - utwórz pustą strukturę
    if (!file_exists($plik)) {
        $dane = ['users' => []];
    } else {
        $zawartosc = file_get_contents($plik);
        $dane = json_decode($zawartosc, true) ?: ['users' => []];
    }
    
    // Sprawdź czy użytkownik już istnieje
    foreach ($dane['users'] as $user) {
        if ($user['login'] === $login) {
            return false; // Użytkownik już istnieje
        }
    }
    
    // Dodaj nowego użytkownika
    $nowyUzytkownik = [
        'login' => $login,
        'haslo' => $haslo, // Na razie bez hashowania - dodamy w kroku 5
        'zapamietaj' => $zapamietaj,
        'data_utworzenia' => date('Y-m-d H:i:s')
    ];
    
    $dane['users'][] = $nowyUzytkownik;
    
    // Zapisz do pliku
    $json = json_encode($dane, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE);
    return file_put_contents($plik, $json) !== false;
}

// Sprawdź czy formularz został wysłany metodą POST
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    
    // Pobierz dane z formularza
    $login = $_POST['login'] ?? '';
    $haslo = $_POST['haslo'] ?? '';
    $zapamietaj = isset($_POST['zapamietaj']) ? 'tak' : 'nie';
    
    // Wyświetl otrzymane dane
    echo "<h2>Otrzymane dane:</h2>";
    echo "<p><strong>Login:</strong> " . htmlspecialchars($login) . "</p>";
    echo "<p><strong>Hasło:</strong> " . htmlspecialchars($haslo) . "</p>";
    echo "<p><strong>Zapamiętaj:</strong> " . $zapamietaj . "</p>";
    
    // Sprawdź czy pola nie są puste
    if (empty($login) || empty($haslo)) {
        echo "<p style='color: red;'>Błąd: Login i hasło są wymagane!</p>";
    } else {
        // Spróbuj zapisać użytkownika
        if (zapiszUzytkownika($login, $haslo, $zapamietaj)) {
            echo "<p style='color: green;'>✅ Użytkownik został zapisany do pliku users.json!</p>";
        } else {
            echo "<p style='color: orange;'>⚠️ Użytkownik o tym loginie już istnieje lub wystąpił błąd zapisu.</p>";
        }
    }
    
    // Link do powrotu
    echo "<hr><a href='index-grid.html'>← Powrót do formularza</a>";
    
} else {
    // Jeśli nie POST, przekieruj z powrotem do formularza
    echo "<p>Proszę użyć formularza do logowania.</p>";
    echo "<a href='index-grid.html'>Powrót do formularza</a>";
}
?>
