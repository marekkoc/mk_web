<?php
// PHP generuje HTML
$colors = ['czerwony', 'niebieski', 'zielony'];
$selected_color = $_POST['color'] ?? '';

echo '<form method="POST">';

// Dropdown
echo '<select name="color">';
foreach($colors as $color) {
    $selected = ($color == $selected_color) ? 'selected' : '';
    echo "<option value='$color' $selected>$color</option>";
}
echo '</select>';

// Przyciski
echo '<button type="submit">Wyślij</button>';
echo '<button type="reset">Wyczyść</button>';
echo '</form>';

// Obsługa po wysłaniu
if ($selected_color) {
    echo "<p>Wybrano kolor: <strong>$selected_color</strong></p>";
}
?>
