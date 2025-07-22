<?php
// Dane z bazy/tablicy
$products = [
    ['id' => 1, 'name' => 'Laptop'],
    ['id' => 2, 'name' => 'Telefon'],
    ['id' => 3, 'name' => 'Tablet']
];

echo '<select name="product">';
echo '<option value="">-- Wybierz produkt --</option>';
foreach($products as $product) {
    echo "<option value='{$product['id']}'>{$product['name']}</option>";
}
echo '</select>';
?>
