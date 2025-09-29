<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Analiza tekstu - 3 technologie</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h2>🔍 Analiza tekstu</h2>
        <p><small>JS = licznik na żywo | PHP = liczenie słów | Python = zapis do pliku</small></p>
        
        <?php
        // PHP - obsługa po wysłaniu formularza
        if ($_POST && !empty($_POST['tekst'])) {
            $tekst = trim($_POST['tekst']);
            $liczba_slow = str_word_count($tekst, 0, 'ąćęłńóśźżĄĆĘŁŃÓŚŹŻ');
            $liczba_znakow = mb_strlen($tekst);
            
            // Wywołanie skryptu Python
            $escaped_tekst = escapeshellarg($tekst);
            $escaped_slowa = escapeshellarg($liczba_slow);
            $escaped_znaki = escapeshellarg($liczba_znakow);
            
            $python_output = shell_exec("python3 analiza.py $escaped_tekst $escaped_slowa $escaped_znaki 2>&1");
            
            echo "<div class='alert alert-success'>";
            echo "<h5>📊 Wyniki analizy PHP:</h5>";
            echo "<strong>Liczba słów:</strong> $liczba_slow<br>";
            echo "<strong>Liczba znaków:</strong> $liczba_znakow<br>";
            echo "<strong>Tekst:</strong> \"$tekst\"";
            echo "</div>";
            
            if ($python_output) {
                echo "<div class='alert alert-info'>";
                echo "<h5>🐍 Python odpowiada:</h5>";
                echo "<pre>$python_output</pre>";
                echo "</div>";
            }
        }
        ?>
        
        <div class="row">
            <div class="col-8">
                <form method="POST">
                    <div class="mb-3">
                        <label class="form-label">Wpisz tekst do analizy:</label>
                        <textarea 
                            name="tekst" 
                            id="tekstArea" 
                            class="form-control" 
                            rows="4"
                            placeholder="Napisz coś ciekawego..."><?php echo htmlspecialchars($_POST['tekst'] ?? ''); ?></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">📤 Wyślij do analizy (PHP + Python)</button>
                </form>
            </div>
            
            <div class="col-4">
                <div class="card">
                    <div class="card-header">⚡ JavaScript - Na żywo</div>
                    <div class="card-body">
                        <h6>Licznik znaków:</h6>
                        <div class="h4 text-primary" id="licznikZnakow">0</div>
                        
                        <h6 class="mt-3">Podgląd słów:</h6>
                        <div class="text-muted" id="licznikSlow">0</div>
                    </div>
                </div>
                
                <div class="mt-3">
                    <small class="text-muted">
                        <strong>Różnice:</strong><br>
                        🟡 JS - natychmiast<br>
                        🔵 PHP - po wysłaniu<br>
                        🟢 Python - zapis do pliku
                    </small>
                </div>
            </div>
        </div>
    </div>

    <script>
        // JavaScript - licznik na żywo
        document.addEventListener('DOMContentLoaded', function() {
            const textarea = document.getElementById('tekstArea');
            const licznikZnakow = document.getElementById('licznikZnakow');
            const licznikSlow = document.getElementById('licznikSlow');
            
            function aktualizujLiczniki() {
                const tekst = textarea.value;
                const znaki = tekst.length;
                const slowa = tekst.trim() === '' ? 0 : tekst.trim().split(/\s+/).length;
                
                licznikZnakow.textContent = znaki;
                licznikSlow.textContent = slowa + ' słów';
                
                // Zmiana koloru w zależności od długości
                if (znaki > 100) {
                    licznikZnakow.className = 'h4 text-success';
                } else if (znaki > 50) {
                    licznikZnakow.className = 'h4 text-warning';
                } else {
                    licznikZnakow.className = 'h4 text-primary';
                }
            }
            
            // Aktualizuj podczas pisania
            textarea.addEventListener('input', aktualizujLiczniki);
            
            // Inicjalna aktualizacja
            aktualizujLiczniki();
        });
    </script>
</body>
</html>