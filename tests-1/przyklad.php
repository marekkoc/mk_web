<!DOCTYPE html>
<html>
<head>
    <title>PHP + JS Example</title>
</head>
<body>
    <h1>Kalkulator z PHP i JS</h1>
    
    <?php
    // PHP obsługuje formularz po wysłaniu
    if ($_POST['calculate'] ?? false) {
        $a = (float)$_POST['a'];
        $b = (float)$_POST['b'];
        $operation = $_POST['operation'];
        
        switch($operation) {
            case 'add': $result = $a + $b; break;
            case 'subtract': $result = $a - $b; break;
            case 'multiply': $result = $a * $b; break;
            case 'divide': $result = $b != 0 ? $a / $b : 'Błąd'; break;
        }
        
        echo "<div style='background: lightgreen; padding: 10px;'>";
        echo "Wynik: $result";
        echo "</div>";
    }
    ?>
    
    <form method="POST">
        <input type="number" name="a" step="0.01" placeholder="Liczba A" required>
        
        <select name="operation" onchange="previewOperation()">
            <option value="add">Dodawanie (+)</option>
            <option value="subtract">Odejmowanie (-)</option>
            <option value="multiply">Mnożenie (×)</option>
            <option value="divide">Dzielenie (÷)</option>
        </select>
        
        <input type="number" name="b" step="0.01" placeholder="Liczba B" required>
        
        <button type="submit" name="calculate">Oblicz przez PHP</button>
        <button type="button" onclick="calculateJS()">Oblicz przez JS</button>
    </form>
    
    <div id="js-result"></div>
    
    <script>
    function calculateJS() {
        const a = parseFloat(document.querySelector('input[name="a"]').value);
        const b = parseFloat(document.querySelector('input[name="b"]').value);
        const op = document.querySelector('select[name="operation"]').value;
        
        let result;
        switch(op) {
            case 'add': result = a + b; break;
            case 'subtract': result = a - b; break;
            case 'multiply': result = a * b; break;
            case 'divide': result = b !== 0 ? a / b : 'Błąd'; break;
        }
        
        document.getElementById('js-result').innerHTML = 
            `<div style="background: lightblue; padding: 10px;">Wynik JS: ${result}</div>`;
    }
    
    function previewOperation() {
        const op = document.querySelector('select[name="operation"]').value;
        console.log('Wybrano operację:', op);
    }
    </script>
</body>
</html>
