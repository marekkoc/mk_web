<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Prosta integracja</title>
    <!-- BOOTSTRAP - stylowanie -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <div class="row">
            <div class="col-6">
                <?php
                // PHP - obsługa danych z serwera
                $name = $_POST['name'] ?? '';
                if ($name) {
                    echo "<div class='alert alert-success'>Cześć $name!</div>";
                }
                ?>
                
                <!-- HTML FORM -->
                <form method="POST">
                    <div class="mb-3">
                        <label class="form-label">Twoje imię:</label>
                        <input type="text" name="name" class="form-control" id="nameInput">
                    </div>
                    <button type="submit" class="btn btn-primary">Wyślij do PHP</button>
                </form>
            </div>
            
            <div class="col-6">
                <h5>JavaScript demo:</h5>
                <button class="btn btn-warning" onclick="jsDemo()">Kliknij mnie!</button>
                <div id="jsOutput" class="mt-3"></div>
            </div>
        </div>
    </div>

    <!-- JAVASCRIPT - interakcje po stronie klienta -->
    <script>
        function jsDemo() {
            const name = document.getElementById('nameInput').value || 'Nieznajomy';
            document.getElementById('jsOutput').innerHTML = 
                `<div class="alert alert-info">JS mówi: Witaj ${name}!</div>`;
        }
    </script>
</body>
</html>