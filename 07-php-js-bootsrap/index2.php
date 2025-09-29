<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Wiele inputów w jednym POST</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <?php
        // PHP odbiera WSZYSTKIE dane naraz z jednego POST
        if ($_POST) {
            echo "<div class='alert alert-success'>";
            echo "<h4>PHP dostało wszystkie dane naraz:</h4>";
            echo "Imię: " . ($_POST['imie'] ?? 'brak') . "<br>";
            echo "Email: " . ($_POST['email'] ?? 'brak') . "<br>";
            echo "Wiek: " . ($_POST['wiek'] ?? 'brak') . "<br>";
            echo "Miasto: " . ($_POST['miasto'] ?? 'brak') . "<br>";
            echo "</div>";
        }
        ?>
        
        <form method="POST">
            <div class="mb-3">
                <label>Imię:</label>
                <input type="text" name="imie" class="form-control">
            </div>
            
            <div class="mb-3">
                <label>Email:</label>
                <input type="email" name="email" class="form-control">
            </div>
            
            <div class="mb-3">
                <label>Wiek:</label>
                <input type="number" name="wiek" class="form-control">
            </div>
            
            <div class="mb-3">
                <label>Miasto:</label>
                <input type="text" name="miasto" class="form-control">
            </div>
            
            <button type="submit" class="btn btn-primary">
                Wyślij WSZYSTKIE dane w jednym POST
            </button>
        </form>
        
        <div class="mt-4">
            <h5>Jak to działa:</h5>
            <ul>
                <li>Wypełnij kilka pól</li>
                <li>Kliknij przycisk</li>
                <li>PHP dostanie WSZYSTKIE dane naraz w $_POST</li>
                <li>Jedna strona = jeden POST = wszystkie inputy</li>
            </ul>
        </div>
    </div>
</body>
</html>