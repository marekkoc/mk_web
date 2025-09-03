# Bootstrap 5 - Kompletny przewodnik referencyjny

## 📐 Rozmiary ekranów (Breakpoints)

| Skrót | Nazwa | Rozmiar | Urządzenia |
|-------|-------|---------|-----------|
| `xs` | Extra Small | <576px | Telefony pionowo |
| `sm` | Small | ≥576px | Telefony poziomo |
| `md` | Medium | ≥768px | Tablety |
| `lg` | Large | ≥992px | Laptopy |
| `xl` | Extra Large | ≥1200px | Duże monitory |
| `xxl` | Extra Extra Large | ≥1400px | Bardzo duże monitory |

## 📏 Spacing (Marginesy i Paddingi)

### Kierunki
| Skrót | Znaczenie | CSS Property |
|-------|-----------|--------------|
| `m` | Margin (wszystkie strony) | margin |
| `mt` | Margin Top | margin-top |
| `mb` | Margin Bottom | margin-bottom |
| `ms` | Margin Start (lewo) | margin-left |
| `me` | Margin End (prawo) | margin-right |
| `mx` | Margin poziomy (lewo + prawo) | margin-left + margin-right |
| `my` | Margin pionowy (góra + dół) | margin-top + margin-bottom |
| `p` | Padding (wszystkie strony) | padding |
| `pt` | Padding Top | padding-top |
| `pb` | Padding Bottom | padding-bottom |
| `ps` | Padding Start (lewo) | padding-left |
| `pe` | Padding End (prawo) | padding-right |
| `px` | Padding poziomy (lewo + prawo) | padding-left + padding-right |
| `py` | Padding pionowy (góra + dół) | padding-top + padding-bottom |

### Wartości spacing
| Wartość | Rozmiar | Piksele (16px = 1rem) |
|---------|---------|----------------------|
| `0` | 0rem | 0px |
| `1` | 0.25rem | 4px |
| `2` | 0.5rem | 8px |
| `3` | 1rem | 16px |
| `4` | 1.5rem | 24px |
| `5` | 3rem | 48px |

### Przykłady
```html
<div class="mt-3">margin-top: 1rem</div>
<div class="px-4">padding lewo i prawo: 1.5rem</div>
<div class="my-5">margin góra i dół: 3rem</div>
<div class="m-0">brak marginesów</div>
```

## 🎨 Kolory

### Kolory podstawowe
| Klasa | Kolor | Zastosowanie |
|-------|-------|-------------|
| `primary` | Niebieski | Główne akcje |
| `secondary` | Szary | Drugorzędne akcje |
| `success` | Zielony | Sukces, potwierdzenia |
| `danger` | Czerwony | Błędy, usuwanie |
| `warning` | Żółty | Ostrzeżenia |
| `info` | Jasnoniebieski | Informacje |
| `light` | Jasny | Tła jasne |
| `dark` | Ciemny | Tła ciemne |
| `white` | Biały | Białe tło |
| `muted` | Wyciszony szary | Tekst drugorzędny |

### Użycie kolorów
```html
<!-- Tła -->
<div class="bg-primary">Niebieskie tło</div>
<div class="bg-success">Zielone tło</div>

<!-- Tekst -->
<p class="text-danger">Czerwony tekst</p>
<p class="text-muted">Wyciszony tekst</p>

<!-- Przyciski -->
<button class="btn btn-warning">Żółty przycisk</button>

<!-- Obramowania -->
<div class="border border-info">Niebieskie obramowanie</div>
```

## 📦 Layout i Grid System

### Kontenery
| Klasa | Opis |
|-------|------|
| `container` | Kontener o stałej maksymalnej szerokości |
| `container-fluid` | Kontener na pełną szerokość ekranu |
| `container-sm` | Kontener responsywny od small |
| `container-md` | Kontener responsywny od medium |
| `container-lg` | Kontener responsywny od large |
| `container-xl` | Kontener responsywny od extra large |
| `container-xxl` | Kontener responsywny od extra extra large |

### Grid
| Klasa | Opis |
|-------|------|
| `row` | Wiersz w systemie grid |
| `col` | Kolumna automatyczna |
| `col-1` do `col-12` | Kolumna o określonej szerokości |
| `col-sm-6` | Kolumna na 50% od small |
| `col-md-4` | Kolumna na 33% od medium |
| `col-lg-3` | Kolumna na 25% od large |

### Przykłady grid
```html
<div class="container">
  <div class="row">
    <div class="col-12 col-md-8">Główna treść</div>
    <div class="col-12 col-md-4">Sidebar</div>
  </div>
</div>
```

## 🧩 Komponenty

### Przyciski
| Klasa | Opis |
|-------|------|
| `btn` | Podstawowa klasa przycisku (WYMAGANA) |
| `btn-primary` | Niebieski przycisk |
| `btn-secondary` | Szary przycisk |
| `btn-success` | Zielony przycisk |
| `btn-danger` | Czerwony przycisk |
| `btn-warning` | Żółty przycisk |
| `btn-info` | Jasnoniebieski przycisk |
| `btn-light` | Jasny przycisk |
| `btn-dark` | Ciemny przycisk |
| `btn-outline-primary` | Przycisk z obramowaniem |
| `btn-sm` | Mały przycisk |
| `btn-lg` | Duży przycisk |
| `btn-block` | Przycisk na pełną szerokość (Bootstrap 4) |

### Karty
| Klasa | Opis |
|-------|------|
| `card` | Podstawowa karta |
| `card-header` | Nagłówek karty |
| `card-body` | Główna zawartość karty |
| `card-footer` | Stopka karty |
| `card-title` | Tytuł w karcie |
| `card-subtitle` | Podtytuł w karcie |
| `card-text` | Tekst w karcie (z odpowiednimi marginesami) |
| `card-img-top` | Obrazek na górze karty |
| `card-img-bottom` | Obrazek na dole karty |
| `card-img-overlay` | Nakładka tekstowa na obrazek |

### Alerty
| Klasa | Opis |
|-------|------|
| `alert` | Podstawowy alert |
| `alert-primary` | Niebieski alert |
| `alert-secondary` | Szary alert |
| `alert-success` | Zielony alert (sukces) |
| `alert-danger` | Czerwony alert (błąd) |
| `alert-warning` | Żółty alert (ostrzeżenie) |
| `alert-info` | Jasnoniebieski alert (info) |
| `alert-light` | Jasny alert |
| `alert-dark` | Ciemny alert |
| `alert-dismissible` | Alert z przyciskiem zamknięcia |

### Nawigacja
| Klasa | Opis |
|-------|------|
| `navbar` | Pasek nawigacyjny |
| `navbar-expand-lg` | Rozwiń nawigację od large |
| `navbar-light` | Jasny motyw nawigacji |
| `navbar-dark` | Ciemny motyw nawigacji |
| `navbar-brand` | Logo/marka w nawigacji |
| `nav` | Lista nawigacyjna |
| `nav-link` | Link w nawigacji |
| `nav-item` | Element nawigacji |
| `nav-pills` | Nawigacja w postaci pigułek |
| `nav-tabs` | Nawigacja w postaci zakładek |
| `breadcrumb` | Ścieżka nawigacyjna (breadcrumbs) |
| `breadcrumb-item` | Element breadcrumb |

### Listy
| Klasa | Opis |
|-------|------|
| `list-group` | Grupa listowa |
| `list-group-item` | Element listy |
| `list-group-item-action` | Klikalny element listy |
| `list-group-flush` | Lista bez obramowań |
| `list-group-horizontal` | Pozioma lista |
| `list-group-numbered` | Numerowana lista |

### Tabele
| Klasa | Opis |
|-------|------|
| `table` | Podstawowa tabela |
| `table-striped` | Tabela z paskami (co drugi wiersz) |
| `table-hover` | Efekt hover na wierszach |
| `table-bordered` | Tabela z obramowaniami |
| `table-borderless` | Tabela bez obramowań |
| `table-sm` | Kompaktowa tabela |
| `table-responsive` | Responsywna tabela (scroll poziomy) |
| `table-primary` | Wiersz w kolorze primary |
| `table-success` | Wiersz w kolorze success |
| `table-danger` | Wiersz w kolorze danger |

## 📝 Formularze

### Pola formularza
| Klasa | Opis |
|-------|------|
| `form-control` | Podstawowe pole (input, textarea, select) |
| `form-control-sm` | Małe pole |
| `form-control-lg` | Duże pole |
| `form-select` | Lista rozwijana (select) |
| `form-check` | Kontener dla checkbox/radio |
| `form-check-input` | Checkbox lub radio button |
| `form-check-label` | Etykieta dla checkbox/radio |
| `form-switch` | Przełącznik (toggle switch) |
| `form-range` | Suwak (range input) |
| `form-label` | Etykieta pola |
| `form-text` | Tekst pomocniczy pod polem |

### Grupy pól
| Klasa | Opis |
|-------|------|
| `input-group` | Grupa pól (input + przycisk/tekst) |
| `input-group-text` | Tekst w grupie pól |
| `input-group-sm` | Mała grupa pól |
| `input-group-lg` | Duża grupa pól |

### Walidacja
| Klasa | Opis |
|-------|------|
| `is-valid` | Pole poprawne (zielone) |
| `is-invalid` | Pole niepoprawne (czerwone) |
| `valid-feedback` | Komunikat sukcesu |
| `invalid-feedback` | Komunikat błędu |

## 🎛️ Utility Classes (klasy pomocnicze)

### Display
| Klasa | CSS | Opis |
|-------|-----|------|
| `d-none` | display: none | Ukryj element |
| `d-block` | display: block | Blok |
| `d-inline` | display: inline | Inline |
| `d-inline-block` | display: inline-block | Inline-block |
| `d-flex` | display: flex | Flexbox |
| `d-grid` | display: grid | CSS Grid |
| `d-table` | display: table | Tabela |

### Flexbox
| Klasa | CSS | Opis |
|-------|-----|------|
| `d-flex` | display: flex | Kontener flex |
| `flex-row` | flex-direction: row | Poziomo |
| `flex-column` | flex-direction: column | Pionowo |
| `justify-content-start` | justify-content: flex-start | Wyrównaj do początku |
| `justify-content-center` | justify-content: center | Wyśrodkuj |
| `justify-content-end` | justify-content: flex-end | Wyrównaj do końca |
| `justify-content-between` | justify-content: space-between | Rozłóż równomiernie |
| `align-items-start` | align-items: flex-start | Wyrównaj do góry |
| `align-items-center` | align-items: center | Wyśrodkuj pionowo |
| `align-items-end` | align-items: flex-end | Wyrównaj do dołu |

### Grid
| Klasa | CSS | Opis |
|-------|-----|------|
| `d-grid` | display: grid | Kontener grid |
| `gap-0` do `gap-5` | gap: 0 do 3rem | Odstępy między elementami |

### Pozycjonowanie
| Klasa | CSS | Opis |
|-------|-----|------|
| `position-static` | position: static | Domyślne |
| `position-relative` | position: relative | Względem rodzica |
| `position-absolute` | position: absolute | Absolutne |
| `position-fixed` | position: fixed | Względem okna |
| `position-sticky` | position: sticky | Sticky |
| `top-0` | top: 0 | Góra 0 |
| `bottom-0` | bottom: 0 | Dół 0 |
| `start-0` | left: 0 | Lewo 0 |
| `end-0` | right: 0 | Prawo 0 |
| `top-50` | top: 50% | Góra 50% |
| `start-50` | left: 50% | Lewo 50% |
| `translate-middle` | transform: translate(-50%, -50%) | Wyśrodkuj |

### Szerokości i wysokości
| Klasa | CSS | Opis |
|-------|-----|------|
| `w-25` | width: 25% | Szerokość 25% |
| `w-50` | width: 50% | Szerokość 50% |
| `w-75` | width: 75% | Szerokość 75% |
| `w-100` | width: 100% | Szerokość 100% |
| `w-auto` | width: auto | Automatyczna szerokość |
| `h-25` | height: 25% | Wysokość 25% |
| `h-50` | height: 50% | Wysokość 50% |
| `h-75` | height: 75% | Wysokość 75% |
| `h-100` | height: 100% | Wysokość 100% |
| `h-auto` | height: auto | Automatyczna wysokość |
| `mw-100` | max-width: 100% | Maksymalna szerokość 100% |
| `mh-100` | max-height: 100% | Maksymalna wysokość 100% |

### Tekst
| Klasa | CSS | Opis |
|-------|-----|------|
| `text-start` | text-align: left | Wyrównaj do lewej |
| `text-center` | text-align: center | Wyśrodkuj |
| `text-end` | text-align: right | Wyrównaj do prawej |
| `text-wrap` | white-space: normal | Zawijaj tekst |
| `text-nowrap` | white-space: nowrap | Nie zawijaj tekstu |
| `text-break` | word-wrap: break-word | Łam długie słowa |
| `text-lowercase` | text-transform: lowercase | małe litery |
| `text-uppercase` | text-transform: uppercase | WIELKIE LITERY |
| `text-capitalize` | text-transform: capitalize | Pierwsze Litery Wielkie |

### Czcionka
| Klasa | CSS | Opis |
|-------|-----|------|
| `fw-light` | font-weight: 300 | Cienka czcionka |
| `fw-normal` | font-weight: 400 | Normalna czcionka |
| `fw-medium` | font-weight: 500 | Średnia czcionka |
| `fw-semibold` | font-weight: 600 | Półgruba czcionka |
| `fw-bold` | font-weight: 700 | Gruba czcionka |
| `fw-bolder` | font-weight: bolder | Grubsza czcionka |
| `fw-lighter` | font-weight: lighter | Lżejsza czcionka |
| `fs-1` | font-size: 2.5rem | Bardzo duży tekst |
| `fs-2` | font-size: 2rem | Duży tekst |
| `fs-3` | font-size: 1.75rem | Średnio duży tekst |
| `fs-4` | font-size: 1.5rem | Średni tekst |
| `fs-5` | font-size: 1.25rem | Mały tekst |
| `fs-6` | font-size: 1rem | Bardzo mały tekst |

### Obramowania
| Klasa | CSS | Opis |
|-------|-----|------|
| `border` | border: 1px solid | Obramowanie wszystkie strony |
| `border-top` | border-top: 1px solid | Obramowanie góra |
| `border-bottom` | border-bottom: 1px solid | Obramowanie dół |
| `border-start` | border-left: 1px solid | Obramowanie lewo |
| `border-end` | border-right: 1px solid | Obramowanie prawo |
| `border-0` | border: 0 | Bez obramowania |
| `border-primary` | border-color: primary | Niebieskie obramowanie |
| `border-1` do `border-5` | border-width: 1px do 5px | Grubość obramowania |

### Zaokrąglenia
| Klasa | CSS | Opis |
|-------|-----|------|
| `rounded` | border-radius: 0.375rem | Zaokrąglone rogi |
| `rounded-0` | border-radius: 0 | Bez zaokrągleń |
| `rounded-1` | border-radius: 0.25rem | Lekko zaokrąglone |
| `rounded-2` | border-radius: 0.5rem | Średnio zaokrąglone |
| `rounded-3` | border-radius: 1rem | Mocno zaokrąglone |
| `rounded-circle` | border-radius: 50% | Okrąg |
| `rounded-pill` | border-radius: 50rem | Pigułka |
| `rounded-top` | Zaokrąglone góra |
| `rounded-bottom` | Zaokrąglone dół |
| `rounded-start` | Zaokrąglone lewo |
| `rounded-end` | Zaokrąglone prawo |

### Cienie
| Klasa | CSS | Opis |
|-------|-----|------|
| `shadow-none` | box-shadow: none | Bez cienia |
| `shadow-sm` | Mały cień |
| `shadow` | Normalny cień |
| `shadow-lg` | Duży cień |

## 🧭 Nawigacja i komponenty interaktywne

### Modalne okna
| Klasa | Opis |
|-------|------|
| `modal` | Kontener modalny |
| `modal-dialog` | Dialog modalny |
| `modal-content` | Zawartość modala |
| `modal-header` | Nagłówek modala |
| `modal-title` | Tytuł modala |
| `modal-body` | Ciało modala |
| `modal-footer` | Stopka modala |
| `modal-sm` | Mały modal |
| `modal-lg` | Duży modal |
| `modal-xl` | Bardzo duży modal |
| `modal-fullscreen` | Modal na pełny ekran |

### Dropdowny
| Klasa | Opis |
|-------|------|
| `dropdown` | Kontener dropdown |
| `dropdown-toggle` | Przycisk otwierający dropdown |
| `dropdown-menu` | Menu dropdown |
| `dropdown-item` | Element w menu |
| `dropdown-divider` | Separator w menu |
| `dropdown-header` | Nagłówek w menu |

### Tooltips i Popovers
| Klasa | Opis |
|-------|------|
| `tooltip` | Tooltip (wymaga JS) |
| `popover` | Popover (wymaga JS) |

## 📱 Responsive Utilities

### Responsive Display
| Klasa | Opis |
|-------|------|
| `d-sm-none` | Ukryj od small |
| `d-md-block` | Pokaż jako block od medium |
| `d-lg-flex` | Pokaż jako flex od large |
| `d-xl-grid` | Pokaż jako grid od extra large |

### Responsive Text
| Klasa | Opis |
|-------|------|
| `text-sm-center` | Wyśrodkuj tekst od small |
| `text-md-start` | Wyrównaj do lewej od medium |
| `text-lg-end` | Wyrównaj do prawej od large |

### Responsive Spacing
```html
<!-- Różne marginesy na różnych ekranach -->
<div class="mt-2 mt-md-4 mt-lg-5">Responsywny margin</div>

<!-- Różne paddingi -->
<div class="p-1 p-sm-2 p-md-3 p-lg-4">Responsywny padding</div>
```

## 🎯 Komponenty zaawansowane

### Accordions
| Klasa | Opis |
|-------|------|
| `accordion` | Kontener accordionu |
| `accordion-item` | Element accordionu |
| `accordion-header` | Nagłówek elementu |
| `accordion-button` | Przycisk accordionu |
| `accordion-body` | Zawartość elementu |
| `accordion-collapse` | Zwijana sekcja |

### Carousel
| Klasa | Opis |
|-------|------|
| `carousel` | Kontener karuzeli |
| `carousel-inner` | Wewnętrzna część karuzeli |
| `carousel-item` | Element karuzeli |
| `carousel-control-prev` | Przycisk poprzedni |
| `carousel-control-next` | Przycisk następny |
| `carousel-indicators` | Wskaźniki slajdów |

### Progress bars
| Klasa | Opis |
|-------|------|
| `progress` | Kontener paska postępu |
| `progress-bar` | Pasek postępu |
| `progress-bar-striped` | Pasek w paski |
| `progress-bar-animated` | Animowany pasek |

### Badges
| Klasa | Opis |
|-------|------|
| `badge` | Podstawowa odznaka |
| `badge bg-primary` | Niebieska odznaka |
| `badge bg-secondary` | Szara odznaka |
| `rounded-pill` | Okrągła odznaka |

### Spinners
| Klasa | Opis |
|-------|------|
| `spinner-border` | Obrotowy spinner |
| `spinner-grow` | Pulsujący spinner |
| `spinner-border-sm` | Mały spinner |

## 📋 Atrybuty HTML w Bootstrap

### Formularze
```html
<!-- Input fields -->
<input type="text" class="form-control" id="nazwa" name="nazwa" placeholder="Wpisz nazwę" required>
<input type="email" class="form-control" id="email" name="email" placeholder="email@example.com">
<input type="password" class="form-control" id="haslo" name="haslo" minlength="8">
<input type="number" class="form-control" id="wiek" name="wiek" min="0" max="120">
<input type="tel" class="form-control" id="telefon" name="telefon" pattern="[0-9]{3}-[0-9]{3}-[0-9]{3}">
<input type="url" class="form-control" id="strona" name="strona" placeholder="https://example.com">
<input type="date" class="form-control" id="data" name="data">

<!-- Textarea -->
<textarea class="form-control" id="wiadomosc" name="wiadomosc" rows="3" maxlength="500"></textarea>

<!-- Select -->
<select class="form-select" id="kategoria" name="kategoria">
  <option value="">Wybierz...</option>
  <option value="opcja1">Opcja 1</option>
</select>

<!-- Checkboxes i Radio -->
<div class="form-check">
  <input class="form-check-input" type="checkbox" id="zgoda" name="zgoda" value="tak">
  <label class="form-check-label" for="zgoda">Wyrażam zgodę</label>
</div>

<div class="form-check">
  <input class="form-check-input" type="radio" id="opcjaA" name="wybor" value="A">
  <label class="form-check-label" for="opcjaA">Opcja A</label>
</div>

<!-- Przyciski -->
<button type="submit" class="btn btn-primary">Wyślij formularz</button>
<button type="reset" class="btn btn-secondary">Wyczyść</button>
<button type="button" class="btn btn-info">Zwykły przycisk</button>

<!-- Formularz -->
<form action="/submit" method="POST" target="_blank" enctype="multipart/form-data">
```

### Linki i nawigacja
```html
<!-- Podstawowe linki -->
<a href="/strona" class="link-primary">Link niebieski</a>
<a href="mailto:email@example.com" class="link-success">Email link</a>
<a href="tel:+48123456789" class="link-info">Telefon link</a>

<!-- Linki z target -->
<a href="https://example.com" target="_blank" rel="noopener">Link zewnętrzny</a>
<a href="#sekcja" class="nav-link">Link do sekcji</a>

<!-- Obrazy -->
<img src="image.jpg" class="img-fluid" alt="Opis obrazu">
<img src="avatar.jpg" class="rounded-circle" alt="Avatar" width="50" height="50">
```

## 🎨 Przykłady kombinacji

### Karta produktu
```html
<div class="card shadow-sm">
  <img src="produkt.jpg" class="card-img-top" alt="Produkt">
  <div class="card-body">
    <h5 class="card-title">Nazwa produktu</h5>
    <p class="card-text text-muted">Opis produktu...</p>
    <div class="d-flex justify-content-between align-items-center">
      <span class="h5 text-success mb-0">99 zł</span>
      <button class="btn btn-primary btn-sm">Kup teraz</button>
    </div>
  </div>
</div>
```

### Formularz kontaktowy
```html
<form action="/kontakt" method="POST" class="needs-validation" novalidate>
  <div class="mb-3">
    <label for="imie" class="form-label">Imię *</label>
    <input type="text" class="form-control" id="imie" name="imie" required>
    <div class="invalid-feedback">Proszę podać imię.</div>
  </div>
  
  <div class="mb-3">
    <label for="email" class="form-label">Email *</label>
    <input type="email" class="form-control" id="email" name="email" required>
    <div class="invalid-feedback">Proszę podać poprawny email.</div>
  </div>
  
  <div class="mb-3">
    <label for="wiadomosc" class="form-label">Wiadomość</label>
    <textarea class="form-control" id="wiadomosc" name="wiadomosc" rows="4"></textarea>
  </div>
  
  <button type="submit" class="btn btn-success w-100">📧 Wyślij wiadomość</button>
</form>
```

### Responsywny navbar
```html
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container">
    <a class="navbar-brand" href="/">MojaStrona</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item">
          <a class="nav-link active" href="/">Strona główna</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/produkty">Produkty</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/kontakt">Kontakt</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
```

## 🔧 JavaScript i atrybuty Bootstrap

### Data atrybuty (wymagają Bootstrap JS)
```html
<!-- Modal trigger -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#myModal">
  Otwórz modal
</button>

<!-- Tooltip -->
<button type="button" class="btn btn-secondary" data-bs-toggle="tooltip" title="Tekst tooltipa">
  Hover na mnie
</button>

<!-- Dropdown -->
<div class="dropdown">
  <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown">
    Menu
  </button>
  <ul class="dropdown-menu">
    <li><a class="dropdown-item" href="#">Opcja 1</a></li>
    <li><a class="dropdown-item" href="#">Opcja 2</a></li>
  </ul>
</div>

<!-- Collapse -->
<button class="btn btn-primary" type="button" data-bs-toggle="collapse" data-bs-target="#collapseExample">
  Pokaż/ukryj
</button>
<div class="collapse" id="collapseExample">
  <div class="card card-body">Ukryta zawartość</div>
</div>

<!-- Alert dismissible -->
<div class="alert alert-warning alert-dismissible" role="alert">
  Uwaga! To jest ostrzeżenie.
  <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
</div>
```

## 🖼️ Obrazy i media

### Klasy obrazów
| Klasa | CSS | Opis |
|-------|-----|------|
| `img-fluid` | max-width: 100% | Responsywny obrazek |
| `img-thumbnail` | Obrazek z ramką |
| `rounded` | Zaokrąglony obrazek |
| `rounded-circle` | Okrągły obrazek |

### Figures
| Klasa | Opis |
|-------|------|
| `figure` | Kontener dla obrazu z podpisem |
| `figure-img` | Obrazek w figure |
| `figure-caption` | Podpis obrazu |

```html
<figure class="figure">
  <img src="image.jpg" class="figure-img img-fluid rounded" alt="Opis">
  <figcaption class="figure-caption text-center">Podpis obrazu</figcaption>
</figure>
```

## 📊 Komponenty danych

### Tables rozszerzone
| Klasa | Opis |
|-------|------|
| `table-active` | Aktywny wiersz |
| `table-primary` | Wiersz w kolorze primary |
| `table-secondary` | Wiersz w kolorze secondary |
| `table-success` | Wiersz w kolorze success |
| `table-danger` | Wiersz w kolorze danger |
| `table-warning` | Wiersz w kolorze warning |
| `table-info` | Wiersz w kolorze info |
| `table-light` | Wiersz w kolorze light |
| `table-dark` | Wiersz w kolorze dark |

### Pagination
| Klasa | Opis |
|-------|------|
| `pagination` | Kontener paginacji |
| `page-item` | Element strony |
| `page-link` | Link strony |
| `page-item active` | Aktywna strona |
| `page-item disabled` | Wyłączona strona |
| `pagination-sm` | Mała paginacja |
| `pagination-lg` | Duża paginacja |

```html
<nav>
  <ul class="pagination">
    <li class="page-item disabled">
      <a class="page-link" href="#">Poprzednia</a>
    </li>
    <li class="page-item active">
      <a class="page-link" href="#">1</a>
    </li>
    <li class="page-item">
      <a class="page-link" href="#">2</a>
    </li>
    <li class="page-item">
      <a class="page-link" href="#">Następna</a>
    </li>
  </ul>
</nav>
```

## 🎪 Komponenty specjalne

### Offcanvas
| Klasa | Opis |
|-------|------|
| `offcanvas` | Kontener offcanvas |
| `offcanvas-start` | Wysuwane z lewej |
| `offcanvas-end` | Wysuwane z prawej |
| `offcanvas-top` | Wysuwane z góry |
| `offcanvas-bottom` | Wysuwane z dołu |
| `offcanvas-header` | Nagłówek offcanvas |
| `offcanvas-body` | Ciało offcanvas |

### Toast notifications
| Klasa | Opis |
|-------|------|
| `toast` | Kontener powiadomienia |
| `toast-container` | Kontener dla wielu toastów |
| `toast-header` | Nagłówek toasta |
| `toast-body` | Ciało toasta |

### Close buttons
| Klasa | Opis |
|-------|------|
| `btn-close` | Przycisk zamknięcia (X) |
| `btn-close-white` | Biały przycisk zamknięcia |

## 🎨 Kolory rozszerzone

### Text colors
```html
<p class="text-primary">Niebieski tekst</p>
<p class="text-success">Zielony tekst</p>
<p class="text-danger">Czerwony tekst</p>
<p class="text-warning">Żółty tekst</p>
<p class="text-info">Jasnoniebieski tekst</p>
<p class="text-light">Jasny tekst</p>
<p class="text-dark">Ciemny tekst</p>
<p class="text-white">Biały tekst</p>
<p class="text-muted">Wyciszony tekst</p>
<p class="text-black-50">Czarny 50% przezroczystości</p>
<p class="text-white-50">Biały 50% przezroczystości</p>
```

### Background colors
```html
<div class="bg-primary text-white">Niebieskie tło</div>
<div class="bg-success text-white">Zielone tło</div>
<div class="bg-danger text-white">Czerwone tło</div>
<div class="bg-warning text-dark">Żółte tło</div>
<div class="bg-info text-white">Jasnoniebieski tło</div>
<div class="bg-light text-dark">Jasne tło</div>
<div class="bg-dark text-white">Ciemne tło</div>
<div class="bg-white text-dark">Białe tło</div>
<div class="bg-transparent">Przezroczyste tło</div>
```

## 🔧 Overflow i visibility

### Overflow
| Klasa | CSS | Opis |
|-------|-----|------|
| `overflow-auto` | overflow: auto | Auto scroll |
| `overflow-hidden` | overflow: hidden | Ukryj overflow |
| `overflow-visible` | overflow: visible | Pokaż overflow |
| `overflow-scroll` | overflow: scroll | Zawsze scroll |

### Visibility
| Klasa | CSS | Opis |
|-------|-----|------|
| `visible` | visibility: visible | Widoczny |
| `invisible` | visibility: hidden | Niewidoczny (zajmuje miejsce) |

## 📱 Responsive helpers

### Screen readers
| Klasa | Opis |
|-------|------|
| `visually-hidden` | Ukryj wizualnie, pokaż dla czytników ekranu |
| `visually-hidden-focusable` | Pokaż gdy w fokusie |

### Print utilities
| Klasa | Opis |
|-------|------|
| `d-print-none` | Ukryj przy drukowaniu |
| `d-print-block` | Pokaż jako block przy drukowaniu |
| `d-print-inline` | Pokaż jako inline przy drukowaniu |

## 🎯 Najczęściej używane kombinacje

### Wyśrodkowany kontener
```html
<div class="container d-flex justify-content-center align-items-center min-vh-100">
  <div class="text-center">Wyśrodkowana zawartość</div>
</div>
```

### Responsywna karta produktu
```html
<div class="col-12 col-sm-6 col-md-4 col-lg-3">
  <div class="card h-100 shadow-sm">
    <img src="product.jpg" class="card-img-top" alt="Produkt">
    <div class="card-body d-flex flex-column">
      <h5 class="card-title">Produkt</h5>
      <p class="card-text flex-grow-1">Opis...</p>
      <button class="btn btn-primary">Kup</button>
    </div>
  </div>
</div>
```

### Hero section
```html
<div class="bg-primary text-white py-5">
  <div class="container">
    <div class="row justify-content-center text-center">
      <div class="col-12 col-md-8">
        <h1 class="display-4 fw-bold mb-3">Główny tytuł</h1>
        <p class="lead mb-4">Podtytuł opisujący stronę</p>
        <button class="btn btn-light btn-lg">Rozpocznij</button>
      </div>
    </div>
  </div>
</div>
```

### Formularz logowania
```html
<div class="card shadow">
  <div class="card-body p-4">
    <h3 class="card-title text-center mb-4">Logowanie</h3>
    <form action="/login" method="POST">
      <div class="mb-3">
        <label for="login" class="form-label">Login</label>
        <input type="text" class="form-control form-control-lg" id="login" name="login" required>
      </div>
      <div class="mb-3">
        <label for="haslo" class="form-label">Hasło</label>
        <input type="password" class="form-control form-control-lg" id="haslo" name="haslo" required>
      </div>
      <div class="mb-3 form-check">
        <input type="checkbox" class="form-check-input" id="zapamietaj" name="zapamietaj">
        <label class="form-check-label" for="zapamietaj">Zapamiętaj mnie</label>
      </div>
      <button type="submit" class="btn btn-primary btn-lg w-100">Zaloguj się</button>
    </form>
  </div>
</div>
```

## 📚 CDN Links

### CSS
```html
<link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">
```

### JavaScript
```html
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
```

## 🎓 Najważniejsze zasady Bootstrap

1. **Mobile First** - zawsze zacznij od telefonu
2. **Container > Row > Col** - struktura grid system
3. **Utility classes** - używaj klas pomocniczych zamiast własnego CSS
4. **Responsive breakpoints** - dodawaj klasy dla większych ekranów
5. **Semantic HTML** - używaj odpowiednich tagów HTML
6. **Accessibility** - pamiętaj o `alt`, `aria-label`, `for` w labelach

## 🚀 Przykład kompletnej strony

```html
<!DOCTYPE html>
<html lang="pl">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Moja strona Bootstrap</title>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <div class="container">
      <a class="navbar-brand" href="#">MojaStrona</a>
    </div>
  </nav>
  
  <div class="container mt-5">
    <div class="row">
      <div class="col-12 col-md-8">
        <h1>Witaj na mojej stronie!</h1>
        <p class="lead">To jest przykład strony z Bootstrap.</p>
      </div>
      <div class="col-12 col-md-4">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Kontakt</h5>
            <p class="card-text">Skontaktuj się z nami!</p>
          </div>
        </div>
      </div>
    </div>
  </div>
  
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
</body>
</html>
```

---

**© 2025 - Bootstrap 5 Reference Guide - Przewodnik dla początkujących i zaawansowanych**