// === PRZYKŁAD 1: Zmiana tekstu ===
$('#changeTextButton').click(function() {
    $('#textToChange').text('Tekst został zmieniony!');
});

// === PRZYKŁAD 2: Toggle z jQuery ===
$('#toggleButton').click(function() {
    $('#toggleText').toggle();
});

// === PRZYKŁAD 3: Toggle ze zmienną logiczną ===
let isTextVisible = true;

$('#variableToggleButton').click(function() {
    if (isTextVisible) {
        $('#variableToggleText').hide();
        isTextVisible = false;
    } else {
        $('#variableToggleText').show();
        isTextVisible = true;
    }
});

// === PRZYKŁAD 4: Toggle z tablicą ===
let actions = ['hide', 'show'];
let clickCount = 0;

$('#arrayToggleButton').click(function() {
    let currentAction = actions[clickCount % 2];
    
    if (currentAction === 'show') {
        $('#arrayToggleText').show();
    } else {
        $('#arrayToggleText').hide();
    }
    
    clickCount++;
    console.log('Liczba kliknięć:', clickCount);
});