# Bootstrap 5 - Przewodnik rozszerzony (część 2)

## 🎭 Z-index utilities

| Klasa | CSS | Opis |
|-------|-----|------|
| `z-n1` | z-index: -1 | W tle (-1) |
| `z-0` | z-index: 0 | Poziom domyślny |
| `z-1` | z-index: 1 | Pierwszy poziom |
| `z-2` | z-index: 2 | Drugi poziom |
| `z-3` | z-index: 3 | Trzeci poziom |

### Przykłady z-index
```html
<div class="position-relative">
  <div class="accordion-item">
    <h2 class="accordion-header">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo">
        ❓ Pytanie drugie
      </button>
    </h2>
    <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
      <div class="accordion-body">
        Odpowiedź na drugie pytanie z <code>kodem</code> i <a href="#">linkiem</a>.
      </div>
    </div>
  </div>
  
  <div class="accordion-item">
    <h2 class="accordion-header">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree">
        🎯 Pytanie trzecie
      </button>
    </h2>
    <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
      <div class="accordion-body">
        <ul class="list-unstyled">
          <li>✅ Punkt pierwszy</li>
          <li>✅ Punkt drugi</li>
          <li>✅ Punkt trzeci</li>
        </ul>
      </div>
    </div>
  </div>
</div>
```

## 🎠 Carousel rozszerzone

### Klasy carousel (uzupełnienie)
| Klasa | Opis |
|-------|------|
| `carousel` | Kontener karuzeli |
| `carousel-inner` | Wewnętrzna część karuzeli |
| `carousel-item` | Element karuzeli |
| `carousel-item active` | Aktywny element |
| `carousel-control-prev` | Przycisk poprzedni |
| `carousel-control-next` | Przycisk następny |
| `carousel-control-prev-icon` | Ikona poprzedni |
| `carousel-control-next-icon` | Ikona następny |
| `carousel-indicators` | Wskaźniki slajdów |
| `carousel-caption` | Podpis slajdu |
| `carousel-fade` | Animacja fade zamiast slide |

### Kompletny przykład carousel
```html
<div id="carouselExample" class="carousel slide carousel-fade" data-bs-ride="carousel">
  <!-- Wskaźniki -->
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExample" data-bs-slide-to="0" class="active"></button>
    <button type="button" data-bs-target="#carouselExample" data-bs-slide-to="1"></button>
    <button type="button" data-bs-target="#carouselExample" data-bs-slide-to="2"></button>
  </div>

  <!-- Slajdy -->
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="slide1.jpg" class="d-block w-100" alt="Slajd 1">
      <div class="carousel-caption d-none d-md-block">
        <h5>Pierwszy slajd</h5>
        <p>Opis pierwszego slajdu.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="slide2.jpg" class="d-block w-100" alt="Slajd 2">
      <div class="carousel-caption d-none d-md-block">
        <h5>Drugi slajd</h5>
        <p>Opis drugiego slajdu.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="slide3.jpg" class="d-block w-100" alt="Slajd 3">
      <div class="carousel-caption d-none d-md-block">
        <h5>Trzeci slajd</h5>
        <p>Opis trzeciego slajdu.</p>
      </div>
    </div>
  </div>

  <!-- Kontrolki -->
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
    <span class="carousel-control-prev-icon"></span>
    <span class="visually-hidden">Poprzedni</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
    <span class="carousel-control-next-icon"></span>
    <span class="visually-hidden">Następny</span>
  </button>
</div>
```

## 🎪 Modal rozszerzone

### Rozmiary modal
| Klasa | Opis |
|-------|------|
| `modal-sm` | Mały modal (300px) |
| `modal-lg` | Duży modal (800px) |
| `modal-xl` | Bardzo duży modal (1140px) |
| `modal-fullscreen` | Pełny ekran |
| `modal-fullscreen-sm-down` | Pełny ekran do small |
| `modal-fullscreen-md-down` | Pełny ekran do medium |
| `modal-dialog-centered` | Wyśrodkowany pionowo |
| `modal-dialog-scrollable` | Przewijalna zawartość |

### Kompletny przykład modal
```html
<!-- Przycisk trigger -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
  🚀 Otwórz modal
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1">
  <div class="modal-dialog modal-lg modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5">🎯 Tytuł modal</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
      </div>
      <div class="modal-body">
        <form>
          <div class="mb-3">
            <label for="modalInput" class="form-label">Wprowadź dane</label>
            <input type="text" class="form-control" id="modalInput">
          </div>
          <div class="mb-3">
            <label for="modalSelect" class="form-label">Wybierz opcję</label>
            <select class="form-select" id="modalSelect">
              <option selected>Wybierz...</option>
              <option value="1">Opcja 1</option>
              <option value="2">Opcja 2</option>
            </select>
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Anuluj</button>
        <button type="button" class="btn btn-primary">💾 Zapisz</button>
      </div>
    </div>
  </div>
</div>
```

## 🎨 Gradient Utilities (Custom)

Choć Bootstrap nie ma wbudowanych gradientów, możesz je łatwo dodać:

```html
<style>
.gradient-primary {
  background: linear-gradient(45deg, var(--bs-primary), var(--bs-info));
}
.gradient-success {
  background: linear-gradient(45deg, var(--bs-success), var(--bs-warning));
}
.gradient-danger {
  background: linear-gradient(45deg, var(--bs-danger), var(--bs-warning));
}
</style>

<!-- Użycie gradientów -->
<div class="gradient-primary text-white p-4 rounded">
  <h3>Gradient primary</h3>
</div>
```

## 📱 Sticky Elements

| Klasa | CSS | Opis |
|-------|-----|------|
| `position-sticky` | position: sticky | Element sticky |
| `sticky-top` | position: sticky; top: 0 | Sticky na górze |
| `sticky-bottom` | position: sticky; bottom: 0 | Sticky na dole |

### Przykłady sticky
```html
<!-- Sticky navbar -->
<nav class="navbar navbar-dark bg-dark sticky-top">
  <div class="container">
    <a class="navbar-brand" href="#">Sticky Menu</a>
  </div>
</nav>

<!-- Sticky sidebar -->
<div class="row">
  <div class="col-8">
    <div style="height: 2000px;">Długa zawartość główna...</div>
  </div>
  <div class="col-4">
    <div class="position-sticky" style="top: 20px;">
      <div class="card">
        <div class="card-body">
          <h5>Sticky sidebar</h5>
          <p>Ten element pozostanie widoczny podczas przewijania.</p>
        </div>
      </div>
    </div>
  </div>
</div>
```

## 🎯 Przykłady zaawansowanych kombinacji

### Dashboard card
```html
<div class="card shadow-lg">
  <div class="card-header bg-gradient-primary text-white">
    <div class="d-flex justify-content-between align-items-center">
      <h5 class="mb-0">📊 Statystyki</h5>
      <span class="badge text-bg-light text-dark">Na żywo</span>
    </div>
  </div>
  <div class="card-body">
    <div class="row text-center">
      <div class="col-4">
        <div class="border-end">
          <div class="fs-2 fw-bold text-success">1,234</div>
          <div class="text-muted small">Użytkownicy</div>
        </div>
      </div>
      <div class="col-4">
        <div class="border-end">
          <div class="fs-2 fw-bold text-primary">5,678</div>
          <div class="text-muted small">Zamówienia</div>
        </div>
      </div>
      <div class="col-4">
        <div class="fs-2 fw-bold text-warning">€9,012</div>
        <div class="text-muted small">Przychód</div>
      </div>
    </div>
  </div>
</div>
```

### Loading state component
```html
<div class="card">
  <div class="card-body text-center p-5">
    <div class="spinner-border text-primary mb-3" role="status">
      <span class="visually-hidden">Ładowanie...</span>
    </div>
    <h5 class="placeholder-glow">
      <span class="placeholder col-6 mx-auto"></span>
    </h5>
    <p class="placeholder-wave">
      <span class="placeholder col-8"></span>
      <span class="placeholder col-5"></span>
    </p>
    <button class="btn btn-primary disabled placeholder col-4"></button>
  </div>
</div>
```

### Profile card z badge
```html
<div class="card text-center shadow">
  <div class="position-relative">
    <img src="avatar.jpg" class="card-img-top object-fit-cover" style="height: 200px;" alt="Avatar">
    <span class="position-absolute top-0 end-0 translate-middle badge rounded-pill text-bg-success">
      ✓ Online
    </span>
  </div>
  <div class="card-body">
    <h5 class="card-title">Jan Kowalski</h5>
    <p class="text-muted">Programista Full-Stack</p>
    <div class="d-flex justify-content-center gap-2">
      <span class="badge text-bg-primary">React</span>
      <span class="badge text-bg-secondary">Python</span>
      <span class="badge text-bg-success">Docker</span>
    </div>
    <div class="mt-3">
      <button class="btn btn-primary btn-sm">📧 Kontakt</button>
      <button class="btn btn-outline-secondary btn-sm">👤 Profil</button>
    </div>
  </div>
</div>
```

### Advanced search form
```html
<form class="card shadow-sm">
  <div class="card-header bg-light">
    <h5 class="mb-0">🔍 Wyszukiwarka zaawansowana</h5>
  </div>
  <div class="card-body">
    <div class="row g-3">
      <div class="col-12">
        <div class="input-group input-group-lg">
          <span class="input-group-text">🔍</span>
          <input type="text" class="form-control" placeholder="Czego szukasz?">
          <button class="btn btn-primary" type="submit">Szukaj</button>
        </div>
      </div>
      
      <div class="col-md-6">
        <label class="form-label">Kategoria</label>
        <select class="form-select">
          <option selected>Wszystkie kategorie</option>
          <option>Elektronika</option>
          <option>Książki</option>
          <option>Ubrania</option>
        </select>
      </div>
      
      <div class="col-md-3">
        <label class="form-label">Cena od</label>
        <div class="input-group">
          <span class="input-group-text">💰</span>
          <input type="number" class="form-control" placeholder="0">
        </div>
      </div>
      
      <div class="col-md-3">
        <label class="form-label">Cena do</label>
        <div class="input-group">
          <span class="input-group-text">💰</span>
          <input type="number" class="form-control" placeholder="1000">
        </div>
      </div>
      
      <div class="col-12">
        <div class="form-check form-check-inline">
          <input class="form-check-input" type="checkbox" id="dostepny">
          <label class="form-check-label" for="dostepny">Tylko dostępne</label>
        </div>
        <div class="form-check form-check-inline">
          <input class="form-check-input" type="checkbox" id="promocja">
          <label class="form-check-label" for="promocja">W promocji</label>
        </div>
        <div class="form-check form-check-inline">
          <input class="form-check-input" type="checkbox" id="nowosci">
          <label class="form-check-label" for="nowosci">Nowości</label>
        </div>
      </div>
    </div>
  </div>
  <div class="card-footer bg-transparent">
    <div class="d-flex justify-content-between">
      <button type="reset" class="btn btn-outline-secondary">🗑️ Wyczyść</button>
      <button type="submit" class="btn btn-success">✨ Zastosuj filtry</button>
    </div>
  </div>
</form>
```

## 🎨 Custom CSS Variables (Bootstrap 5.2+)

### Przykład użycia CSS custom properties
```html
<style>
:root {
  --bs-primary-rgb: 13, 110, 253;
  --bs-success-rgb: 25, 135, 84;
}

.custom-card {
  --bs-card-border-radius: 1rem;
  --bs-card-spacer-y: 1.5rem;
  --bs-card-spacer-x: 1.5rem;
}
</style>

<div class="card custom-card shadow">
  <div class="card-body">
    <h5 class="card-title">Karta z custom properties</h5>
    <p class="card-text">Zwiększone padding i zaokrąglenia</p>
  </div>
</div>
```

## 🎯 Validation States rozszerzone

### Custom validation
```html
<form class="needs-validation" novalidate>
  <div class="mb-3">
    <label for="validationCustom01" class="form-label">Imię *</label>
    <input type="text" class="form-control" id="validationCustom01" required>
    <div class="valid-feedback">✅ Wygląda dobrze!</div>
    <div class="invalid-feedback">❌ Pole wymagane.</div>
  </div>
  
  <div class="mb-3">
    <label for="validationCustom02" class="form-label">Email *</label>
    <input type="email" class="form-control" id="validationCustom02" required>
    <div class="valid-feedback">✅ Email poprawny!</div>
    <div class="invalid-feedback">❌ Podaj poprawny email.</div>
  </div>
  
  <div class="mb-3">
    <label for="validationCustom03" class="form-label">Hasło *</label>
    <input type="password" class="form-control" id="validationCustom03" minlength="8" required>
    <div class="form-text">Minimum 8 znaków</div>
    <div class="valid-feedback">✅ Hasło jest bezpieczne!</div>
    <div class="invalid-feedback">❌ Hasło musi mieć co najmniej 8 znaków.</div>
  </div>
  
  <button type="submit" class="btn btn-success">Zapisz</button>
</form>

<script>
// Przykład walidacji JavaScript
(function() {
  'use strict';
  window.addEventListener('load', function() {
    var forms = document.getElementsByClassName('needs-validation');
    Array.prototype.filter.call(forms, function(form) {
      form.addEventListener('submit', function(event) {
        if (form.checkValidity() === false) {
          event.preventDefault();
          event.stopPropagation();
        }
        form.classList.add('was-validated');
      }, false);
    });
  }, false);
})();
</script>
```

## 🎪 Close Button rozszerzone

| Klasa | Opis |
|-------|------|
| `btn-close` | Standardowy przycisk zamknięcia |
| `btn-close-white` | Biały przycisk zamknięcia (dla ciemnych tła) |

### Przykłady close button
```html
<!-- W alertach -->
<div class="alert alert-success alert-dismissible">
  ✅ Operacja wykonana pomyślnie!
  <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
</div>

<!-- W ciemnym tle -->
<div class="bg-dark text-white p-3 position-relative">
  Ciemna sekcja z białym przyciskiem zamknięcia
  <button type="button" class="btn-close btn-close-white position-absolute top-0 end-0 m-2"></button>
</div>

<!-- W toastach -->
<div class="toast align-items-center text-bg-primary">
  <div class="d-flex">
    <div class="toast-body">Toast message</div>
    <button type="button" class="btn-close btn-close-white me-2 m-auto" data-bs-dismiss="toast"></button>
  </div>
</div>
```

## 🎭 Print Utilities rozszerzone

| Klasa | Opis |
|-------|------|
| `d-print-none` | Ukryj przy drukowaniu |
| `d-print-inline` | Pokaż jako inline przy drukowaniu |
| `d-print-inline-block` | Pokaż jako inline-block przy drukowaniu |
| `d-print-block` | Pokaż jako block przy drukowaniu |
| `d-print-table` | Pokaż jako table przy drukowaniu |
| `d-print-table-row` | Pokaż jako table-row przy drukowaniu |
| `d-print-table-cell` | Pokaż jako table-cell przy drukowaniu |
| `d-print-flex` | Pokaż jako flex przy drukowaniu |
| `d-print-inline-flex` | Pokaż jako inline-flex przy drukowaniu |

### Przykłady print utilities
```html
<!-- Elementy tylko dla druku -->
<div class="d-none d-print-block">
  <h1>Raport do druku</h1>
  <p>Ten tekst pojawia się tylko przy drukowaniu</p>
</div>

<!-- Ukryj przy drukowaniu -->
<button class="btn btn-primary d-print-none">Ten przycisk nie będzie drukowany</button>

<!-- Różne zachowanie na ekranie vs druk -->
<div class="d-flex d-print-block">
  <div class="flex-grow-1">Treść główna</div>
  <div class="d-none d-print-block">
    <p><strong>Data druku:</strong> <script>document.write(new Date().toLocaleDateString());</script></p>
  </div>
</div>
```

## 🎪 Kompleksowy przykład - Panel administracyjny

```html
<!DOCTYPE html>
<html lang="pl">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Panel Admin - Bootstrap 5</title>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
  <!-- Top navbar -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top shadow">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">🏢 Admin Panel</a>
      
      <!-- Mobile toggle -->
      <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#sidebar">
        <span class="navbar-toggler-icon"></span>
      </button>
      
      <!-- User menu -->
      <div class="dropdown">
        <button class="btn btn-outline-light dropdown-toggle" data-bs-toggle="dropdown">
          👤 Admin
          <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill text-bg-danger">
            3
          </span>
        </button>
        <ul class="dropdown-menu dropdown-menu-end">
          <li><a class="dropdown-item" href="#">⚙️ Ustawienia</a></li>
          <li><a class="dropdown-item" href="#">👤 Profil</a></li>
          <li><hr class="dropdown-divider"></li>
          <li><a class="dropdown-item" href="#">🚪 Wyloguj</a></li>
        </ul>
      </div>
    </div>
  </nav>
  
  <div class="container-fluid">
    <div class="row">
      <!-- Sidebar -->
      <div class="col-auto d-none d-lg-block">
        <div class="d-flex flex-column vh-100 pt-3">
          <nav class="nav nav-pills flex-column">
            <a class="nav-link active" href="#">📊 Dashboard</a>
            <a class="nav-link" href="#">👥 Użytkownicy</a>
            <a class="nav-link" href="#">📦 Produkty</a>
            <a class="nav-link" href="#">💰 Zamówienia</a>
            <a class="nav-link" href="#">📈 Raporty</a>
          </nav>
        </div>
      </div>
      
      <!-- Main content -->
      <div class="col">
        <div class="p-4">
          <!-- Header -->
          <div class="d-flex justify-content-between align-items-center mb-4">
            <h1 class="h3">Dashboard</h1>
            <button class="btn btn-primary">
              <span class="spinner-border spinner-border-sm me-2 d-none" role="status"></span>
              ➕ Dodaj nowy
            </button>
          </div>
          
          <!-- Stats cards -->
          <div class="row g-4 mb-4">
            <div class="col-12 col-sm-6 col-xl-3">
              <div class="card text-bg-primary">
                <div class="card-body">
                  <div class="d-flex justify-content-between">
                    <div>
                      <div class="fs-2 fw-bold">1,234</div>
                      <div class="opacity-75">Użytkownicy</div>
                    </div>
                    <div class="fs-1 opacity-75">👥</div>
                  </div>
                </div>
              </div>
            </div>
            
            <div class="col-12 col-sm-6 col-xl-3">
              <div class="card text-bg-success">
                <div class="card-body">
                  <div class="d-flex justify-content-between">
                    <div>
                      <div class="fs-2 fw-bold">€5,678</div>
                      <div class="opacity-75">Przychód</div>
                    </div>
                    <div class="fs-1 opacity-75">💰</div>
                  </div>
                </div>
              </div>
            </div>
            
            <div class="col-12 col-sm-6 col-xl-3">
              <div class="card text-bg-warning">
                <div class="card-body">
                  <div class="d-flex justify-content-between">
                    <div>
                      <div class="fs-2 fw-bold">892</div>
                      <div class="opacity-75">Zamówienia</div>
                    </div>
                    <div class="fs-1 opacity-75">📦</div>
                  </div>
                </div>
              </div>
            </div>
            
            <div class="col-12 col-sm-6 col-xl-3">
              <div class="card text-bg-info">
                <div class="card-body">
                  <div class="d-flex justify-content-between">
                    <div>
                      <div class="fs-2 fw-bold">123</div>
                      <div class="opacity-75">Produkty</div>
                    </div>
                    <div class="fs-1 opacity-75">🛍️</div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          
          <!-- Data table -->
          <div class="card shadow-sm">
            <div class="card-header">
              <h5 class="mb-0">📋 Ostatnie zamówienia</h5>
            </div>
            <div class="table-responsive">
              <table class="table table-hover mb-0">
                <thead class="table-light">
                  <tr>
                    <th>ID</th>
                    <th>Klient</th>
                    <th>Produkt</th>
                    <th>Kwota</th>
                    <th>Status</th>
                    <th>Akcje</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>#001</td>
                    <td>Jan Kowalski</td>
                    <td>Laptop Dell</td>
                    <td>€1,299</td>
                    <td><span class="badge text-bg-success">✅ Opłacone</span></td>
                    <td>
                      <div class="btn-group btn-group-sm">
                        <button class="btn btn-outline-primary">👁️</button>
                        <button class="btn btn-outline-secondary">✏️</button>
                        <button class="btn btn-outline-danger">🗑️</button>
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <td>#002</td>
                    <td>Anna Nowak</td>
                    <td>Smartfon iPhone</td>
                    <td>€899</td>
                    <td><span class="badge text-bg-warning">⏳ Oczekuje</span></td>
                    <td>
                      <div class="btn-group btn-group-sm">
                        <button class="btn btn-outline-primary">👁️</button>
                        <button class="btn btn-outline-secondary">✏️</button>
                        <button class="btn btn-outline-danger">🗑️</button>
                      </div>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  
  <!-- Mobile sidebar (offcanvas) -->
  <div class="offcanvas offcanvas-start" tabindex="-1" id="sidebar">
    <div class="offcanvas-header">
      <h5 class="offcanvas-title">📱 Menu</h5>
      <button type="button" class="btn-close" data-bs-dismiss="offcanvas"></button>
    </div>
    <div class="offcanvas-body">
      <nav class="nav nav-pills flex-column">
        <a class="nav-link active" href="#">📊 Dashboard</a>
        <a class="nav-link" href="#">👥 Użytkownicy</a>
        <a class="nav-link" href="#">📦 Produkty</a>
        <a class="nav-link" href="#">💰 Zamówienia</a>
        <a class="nav-link" href="#">📈 Raporty</a>
      </nav>
    </div>
  </div>
  
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
  
  <!-- Custom validation script -->
  <script>
  (function() {
    'use strict';
    window.addEventListener('load', function() {
      var forms = document.getElementsByClassName('needs-validation');
      Array.prototype.filter.call(forms, function(form) {
        form.addEventListener('submit', function(event) {
          if (form.checkValidity() === false) {
            event.preventDefault();
            event.stopPropagation();
          }
          form.classList.add('was-validated');
        }, false);
      });
    }, false);
  })();
  
  // Initialize tooltips and popovers
  var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'));
  var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
    return new bootstrap.Tooltip(tooltipTriggerEl);
  });
  
  var popoverTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="popover"]'));
  var popoverList = popoverTriggerList.map(function (popoverTriggerEl) {
    return new bootstrap.Popover(popoverTriggerEl);
  });
  </script>
</body>
</html>
```

## 🎯 Responsive Utilities zaawansowane

### Responsive margins i paddings
```html
<!-- Responsywne marginesy -->
<div class="mt-2 mt-sm-3 mt-md-4 mt-lg-5 mt-xl-6">
  Różne marginesy na różnych ekranach
</div>

<!-- Responsywne paddingi -->
<div class="p-1 p-sm-2 p-md-3 p-lg-4 p-xl-5">
  Różne paddingi na różnych ekranach
</div>

<!-- Responsywne display -->
<div class="d-none d-sm-block d-md-flex d-lg-grid">
  Różne wyświetlanie na różnych ekranach
</div>
```

## 🎨 Text Utilities rozszerzone

### Line height
| Klasa | CSS | Opis |
|-------|-----|------|
| `lh-1` | line-height: 1 | Wysokość linii 1 |
| `lh-sm` | line-height: 1.25 | Mała wysokość linii |
| `lh-base` | line-height: 1.5 | Podstawowa wysokość linii |
| `lh-lg` | line-height: 2 | Duża wysokość linii |

### Font style
| Klasa | CSS | Opis |
|-------|-----|------|
| `fst-italic` | font-style: italic | Kursywa |
| `fst-normal` | font-style: normal | Normalna czcionka |

### Przykłady text utilities
```html
<p class="lh-1">Tekst z małą wysokością linii. Lorem ipsum dolor sit amet consectetur.</p>
<p class="lh-lg">Tekst z dużą wysokością linii. Lorem ipsum dolor sit amet consectetur.</p>
<p class="fst-italic fw-light">Kursywa z lekką wagą</p>
<p class="text-decoration-underline fs-4">Podkreślony większy tekst</p>
```

## 🎭 Interaction States

### Focus utilities
```html
<!-- Custom focus ring -->
<button class="btn btn-primary" style="--bs-btn-focus-box-shadow: 0 0 0 0.25rem rgba(13, 110, 253, 0.25);">
  Przycisk z custom focus
</button>

<!-- Usunięcie focus ring -->
<button class="btn btn-secondary" style="--bs-btn-focus-box-shadow: none;">
  Bez focus ring
</button>
```

### Hover effects
```html
<style>
.hover-lift {
  transition: transform 0.2s ease-in-out;
}
.hover-lift:hover {
  transform: translateY(-2px);
}

.hover-shadow:hover {
  box-shadow: 0 0.5rem 1rem rgba(0, 0, 0, 0.15) !important;
}
</style>

<div class="card hover-lift hover-shadow">
  <div class="card-body">
    <h5 class="card-title">Interaktywna karta</h5>
    <p class="card-text">Najedź na mnie, aby zobaczyć efekt</p>
  </div>
</div>
```

## 🎪 Advanced Form Examples

### Multi-step form
```html
<div class="card shadow">
  <div class="card-header">
    <ul class="nav nav-pills card-header-pills">
      <li class="nav-item">
        <a class="nav-link active" href="#step1">1. Dane osobowe</a>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" href="#step2">2. Adres</a>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" href="#step3">3. Podsumowanie</a>
      </li>
    </ul>
  </div>
  <div class="card-body">
    <!-- Krok 1 -->
    <div id="step1">
      <div class="row g-3">
        <div class="col-md-6">
          <label class="form-label">Imię *</label>
          <input type="text" class="form-control" required>
        </div>
        <div class="col-md-6">
          <label class="form-label">Nazwisko *</label>
          <input type="text" class="form-control" required>
        </div>
        <div class="col-12">
          <label class="form-label">Email *</label>
          <input type="email" class="form-control" required>
        </div>
      </div>
    </div>
  </div>
  <div class="card-footer">
    <div class="d-flex justify-content-between">
      <button class="btn btn-outline-secondary" disabled>← Poprzedni</button>
      <button class="btn btn-primary">Następny →</button>
    </div>
  </div>
</div>
```

### Search with filters
```html
<div class="card">
  <div class="card-body">
    <div class="row g-3 align-items-end">
      <div class="col-12 col-md-4">
        <label class="form-label">Szukaj</label>
        <div class="input-group">
          <span class="input-group-text">🔍</span>
          <input type="text" class="form-control" placeholder="Wpisz frazę...">
        </div>
      </div>
      
      <div class="col-6 col-md-2">
        <label class="form-label">Kategoria</label>
        <select class="form-select">
          <option>Wszystkie</option>
          <option>Elektronika</option>
          <option>Książki</option>
        </select>
      </div>
      
      <div class="col-6 col-md-2">
        <label class="form-label">Status</label>
        <select class="form-select">
          <option>Wszystkie</option>
          <option>Aktywne</option>
          <option>Nieaktywne</option>
        </select>
      </div>
      
      <div class="col-6 col-md-2">
        <label class="form-label">Sortuj</label>
        <select class="form-select">
          <option>Nazwa A-Z</option>
          <option>Nazwa Z-A</option>
          <option>Data ↑</option>
          <option>Data ↓</option>
        </select>
      </div>
      
      <div class="col-6 col-md-2">
        <div class="d-grid gap-2">
          <button class="btn btn-primary">Filtruj</button>
          <button class="btn btn-outline-secondary btn-sm">Wyczyść</button>
        </div>
      </div>
    </div>
  </div>
</div>
```

## 🎭 Animation Classes (Custom)

Chociaż Bootstrap nie ma wbudowanych animacji, oto użyteczne klasy:

```html
<style>
/* Fade animations */
.fade-in {
  animation: fadeIn 0.5s ease-in-out;
}

.fade-out {
  animation: fadeOut 0.5s ease-in-out;
}

@keyframes fadeIn {
  from { opacity: 0; transform: translateY(20px); }
  to { opacity: 1; transform: translateY(0); }
}

@keyframes fadeOut {
  from { opacity: 1; }
  to { opacity: 0; }
}

/* Slide animations */
.slide-up {
  animation: slideUp 0.3s ease-out;
}

@keyframes slideUp {
  from { transform: translateY(100%); }
  to { transform: translateY(0); }
}

/* Bounce animation */
.bounce-in {
  animation: bounceIn 0.6s ease-out;
}

@keyframes bounceIn {
  0% { transform: scale(0.3); opacity: 0; }
  50% { transform: scale(1.05); opacity: 1; }
  70% { transform: scale(0.9); }
  100% { transform: scale(1); }
}

/* Pulse animation */
.pulse {
  animation: pulse 2s infinite;
}

@keyframes pulse {
  0% { transform: scale(1); }
  50% { transform: scale(1.05); }
  100% { transform: scale(1); }
}
</style>

<!-- Użycie animacji -->
<div class="alert alert-success fade-in">Animowany alert</div>
<button class="btn btn-primary pulse">Pulsujący przycisk</button>
<div class="card slide-up">Karta wsuwająca się</div>
```

## 🎪 Dark Mode Support

### CSS Variables dla dark mode
```html
<style>
[data-bs-theme="dark"] {
  --bs-body-bg: #212529;
  --bs-body-color: #adb5bd;
  --bs-emphasis-color: #fff;
  --bs-border-color: #495057;
}

.theme-toggle {
  position: fixed;
  top: 20px;
  right: 20px;
  z-index: 1050;
}
</style>

<!-- Toggle dark mode -->
<button class="btn btn-outline-secondary theme-toggle" onclick="toggleTheme()">
  🌙 Tryb ciemny
</button>

<script>
function toggleTheme() {
  const htmlElement = document.documentElement;
  const currentTheme = htmlElement.getAttribute('data-bs-theme');
  const newTheme = currentTheme === 'dark' ? 'light' : 'dark';
  htmlElement.setAttribute('data-bs-theme', newTheme);
  
  // Zmień tekst przycisku
  const button = document.querySelector('.theme-toggle');
  button.textContent = newTheme === 'dark' ? '☀️ Tryb jasny' : '🌙 Tryb ciemny';
}
</script>
```

## 📱 Mobile-First Examples

### Responsive navigation
```html
<nav class="navbar navbar-expand-lg navbar-light bg-white shadow-sm">
  <div class="container">
    <!-- Brand -->
    <a class="navbar-brand fw-bold" href="#">🚀 MojaMarka</a>
    
    <!-- Mobile menu button -->
    <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
      <span class="navbar-toggler-icon"></span>
    </button>
    
    <!-- Menu items -->
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item">
          <a class="nav-link active" href="#">🏠 Start</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">
            📦 Produkty
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">💻 Elektronika</a></li>
            <li><a class="dropdown-item" href="#">📚 Książki</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">🎁 Nowości</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">📞 Kontakt</a></li>
        <li class="nav-item">
          <a class="btn btn-primary ms-2" href="#">🛒 Koszyk (3)</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
```

## 🎯 Performance Tips

### Lazy loading i optimization
```html
<!-- Lazy loading images -->
<img src="placeholder.jpg" data-src="real-image.jpg" class="img-fluid" loading="lazy" alt="Opis">

<!-- Optimized carousel -->
<div class="carousel slide" data-bs-ride="false" data-bs-interval="false">
  <!-- Wyłączona autoplay dla lepszej wydajności -->
</div>

<!-- Preload critical resources -->
<link rel="preload" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css" as="style">
```

## 🎪 Accessibility (a11y) Best Practices

### ARIA attributes
```html
<!-- Proper button roles -->
<button class="btn btn-primary" 
        aria-describedby="helpText"
        aria-expanded="false"
        aria-controls="collapseTarget">
  Przycisk z ARIA
</button>
<div id="helpText" class="form-text">Tekst pomocniczy</div>

<!-- Proper form labels -->
<div class="mb-3">
  <label for="username" class="form-label">Nazwa użytkownika</label>
  <input type="text" 
         class="form-control" 
         id="username"
         aria-describedby="usernameHelp"
         aria-required="true">
  <div id="usernameHelp" class="form-text">3-20 znaków, tylko litery i cyfry</div>
</div>

<!-- Skip links -->
<a href="#main-content" class="visually-hidden-focusable">
  Przejdź do głównej treści
</a>

<!-- Proper headings hierarchy -->
<main id="main-content">
  <h1>Główny tytuł strony</h1>
  <section>
    <h2>Sekcja 1</h2>
    <h3>Podsekcja 1.1</h3>
  </section>
</main>
```

## 🎨 Custom Components

### Card deck
```html
<div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4">
  <div class="col">
    <div class="card h-100 shadow-sm hover-lift">
      <div class="ratio ratio-16x9">
        <img src="image1.jpg" class="card-img-top object-fit-cover" alt="Produkt 1">
      </div>
      <div class="card-body d-flex flex-column">
        <h5 class="card-title">Produkt 1</h5>
        <p class="card-text flex-grow-1">Opis produktu...</p>
        <div class="d-flex justify-content-between align-items-center">
          <span class="h5 text-success mb-0">€99</span>
          <button class="btn btn-primary btn-sm">🛒 Dodaj</button>
        </div>
      </div>
    </div>
  </div>
  
  <div class="col">
    <div class="card h-100 shadow-sm hover-lift">
      <div class="ratio ratio-16x9">
        <img src="image2.jpg" class="card-img-top object-fit-cover" alt="Produkt 2">
      </div>
      <div class="card-body d-flex flex-column">
        <h5 class="card-title">Produkt 2</h5>
        <p class="card-text flex-grow-1">Opis produktu...</p>
        <div class="d-flex justify-content-between align-items-center">
          <span class="h5 text-success mb-0">€149</span>
          <button class="btn btn-primary btn-sm">🛒 Dodaj</button>
        </div>
      </div>
    </div>
  </div>
</div>
```

### Timeline component
```html
<div class="timeline">
  <style>
  .timeline {
    position: relative;
    padding-left: 2rem;
  }
  .timeline::before {
    content: '';
    position: absolute;
    left: 0.75rem;
    top: 0;
    bottom: 0;
    width: 2px;
    background: var(--bs-border-color);
  }
  .timeline-item {
    position: relative;
    margin-bottom: 2rem;
  }
  .timeline-item::before {
    content: '';
    position: absolute;
    left: -2.25rem;
    top: 0.5rem;
    width: 1rem;
    height: 1rem;
    border-radius: 50%;
    background: var(--bs-primary);
    border: 3px solid var(--bs-white);
    box-shadow: 0 0 0 3px var(--bs-border-color);
  }
  </style>
  
  <div class="timeline-item">
    <div class="card">
      <div class="card-body">
        <div class="d-flex justify-content-between">
          <h6 class="card-title mb-1">✅ Zadanie ukończone</h6>
          <small class="text-muted">2 godz. temu</small>
        </div>
        <p class="card-text mb-0">Implementacja nowej funkcji logowania</p>
      </div>
    </div>
  </div>
  
  <div class="timeline-item">
    <div class="card">
      <div class="card-body">
        <div class="d-flex justify-content-between">
          <h6 class="card-title mb-1">⏳ W trakcie</h6>
          <small class="text-muted">Rozpoczęte dzisiaj</small>
        </div>
        <p class="card-text mb-0">Testowanie API płatności</p>
        <div class="progress mt-2" style="height: 4px;">
          <div class="progress-bar bg-warning" style="width: 60%"></div>
        </div>
      </div>
    </div>
  </div>
</div>
```

## 🎯 JavaScript Initialization

### Kompletny skrypt inicjalizujący
```html
<script>
document.addEventListener('DOMContentLoaded', function() {
  // Initialize tooltips
  var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'));
  var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
    return new bootstrap.Tooltip(tooltipTriggerEl);
  });
  
  // Initialize popovers
  var popoverTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="popover"]'));
  var popoverList = popoverTriggerList.map(function (popoverTriggerEl) {
    return new bootstrap.Popover(popoverTriggerEl);
  });
  
  // Initialize toasts
  var toastElList = [].slice.call(document.querySelectorAll('.toast'));
  var toastList = toastElList.map(function (toastEl) {
    return new bootstrap.Toast(toastEl, {
      delay: 5000 // 5 sekund
    });
  });
  
  // Auto-show toasts
  toastList.forEach(toast => toast.show());
  
  // Custom form validation
  var forms = document.querySelectorAll('.needs-validation');
  Array.prototype.slice.call(forms).forEach(function (form) {
    form.addEventListener('submit', function (event) {
      if (!form.checkValidity()) {
        event.preventDefault();
        event.stopPropagation();
      }
      form.classList.add('was-validated');
    }, false);
  });
  
  // Dark mode toggle
  const darkModeToggle = document.querySelector('[data-bs-theme-toggle]');
  if (darkModeToggle) {
    darkModeToggle.addEventListener('click', function() {
      const html = document.documentElement;
      const currentTheme = html.getAttribute('data-bs-theme');
      const newTheme = currentTheme === 'dark' ? 'light' : 'dark';
      html.setAttribute('data-bs-theme', newTheme);
      localStorage.setItem('theme', newTheme);
    });
  }
  
  // Load saved theme
  const savedTheme = localStorage.getItem('theme') || 'light';
  document.documentElement.setAttribute('data-bs-theme', savedTheme);
});
</script>
```

## 🏆 Najlepsze praktyki Bootstrap 5

### 1. **Struktura HTML**
```html
<!-- ✅ POPRAWNIE -->
<div class="container">
  <div class="row">
    <div class="col-12 col-md-6">Zawartość</div>
  </div>
</div>

<!-- ❌ BŁĘDNIE -->
<div class="container">
  <div class="col-6">Brak row</div>
</div>
```

### 2. **Mobile-first approach**
```html
<!-- ✅ POPRAWNIE - od małego do dużego -->
<div class="col-12 col-sm-6 col-md-4 col-lg-3">Responsywna kolumna</div>

<!-- ❌ BŁĘDNIE - tylko desktop -->
<div class="col-lg-3">Tylko na dużych ekranach</div>
```

### 3. **Semantic HTML**
```html
<!-- ✅ POPRAWNIE -->
<nav aria-label="Główna nawigacja">
  <ul class="nav">
    <li class="nav-item">
      <a class="nav-link" href="#">Link</a>
    </li>
  </ul>
</nav>

<!-- ❌ BŁĘDNIE -->
<div class="nav">
  <div class="nav-link">Nie-semantyczny</div>
</div>
```

### 4. **Accessibility**
```html
<!-- ✅ POPRAWNIE -->
<button class="btn btn-primary" 
        aria-expanded="false" 
        aria-controls="collapse-target"
        data-bs-toggle="collapse" 
        data-bs-target="#collapse-target">
  <span class="visually-hidden">Rozwiń menu</span>
  🍔
</button>

<!-- ❌ BŁĘDNIE -->
<div onclick="toggle()">Menu</div>
```

## 🎨 Przydatne snippety

### Cookie consent
```html
<div class="position-fixed bottom-0 start-0 end-0 bg-dark text-white p-3 z-3" id="cookieConsent">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-12 col-md-8">
        <p class="mb-0">🍪 Używamy plików cookie aby poprawić Twoje doświadczenia na stronie.</p>
      </div>
      <div class="col-12 col-md-4 text-md-end mt-2 mt-md-0">
        <button class="btn btn-outline-light btn-sm me-2">Ustawienia</button>
        <button class="btn btn-light btn-sm" onclick="acceptCookies()">Akceptuj</button>
      </div>
    </div>
  </div>
</div>

<script>
function acceptCookies() {
  document.getElementById('cookieConsent').style.display = 'none';
  localStorage.setItem('cookiesAccepted', 'true');
}

// Sprawdź czy cookie zostały już zaakceptowane
if (localStorage.getItem('cookiesAccepted')) {
  document.getElementById('cookieConsent').style.display = 'none';
}
</script>
```

### Loading overlay
```html
<div class="position-fixed top-0 start-0 w-100 h-100 bg-dark bg-opacity-75 d-flex justify-content-center align-items-center z-3" id="loadingOverlay">
  <div class="text-center text-white">
    <div class="spinner-border spinner-border-lg mb-3" role="status">
      <span class="visually-hidden">Ładowanie...</span>
    </div>
    <div class="h5">Ładowanie danych...</div>
    <div class="progress" style="width: 200px;">
      <div class="progress-bar progress-bar-striped progress-bar-animated" style="width: 0%" id="loadingProgress"></div>
    </div>
  </div>
</div>
```

---

**© 2025 - Bootstrap 5 Extended Reference Guide - Przewodnik zaawansowany dla profesjonalistów**="position-absolute top-0 start-0 bg-primary z-1">Nad tłem</div>
  <div class="position-absolute top-0 start-0 bg-secondary z-n1">Za tłem</div>
  <div class="position-absolute top-0 start-0 bg-success z-3">Na wierzchu</div>
</div>
```

## 📐 Ratio (Aspect Ratio)

| Klasa | Stosunek | Opis |
|-------|----------|------|
| `ratio` | Podstawowy kontener | Wymaga dodatkowej klasy |
| `ratio-1x1` | 1:1 | Kwadrat |
| `ratio-4x3` | 4:3 | Standard TV |
| `ratio-16x9` | 16:9 | Widescreen |
| `ratio-21x9` | 21:9 | Ultra-wide |

### Przykłady ratio
```html
<!-- Video responsive -->
<div class="ratio ratio-16x9">
  <iframe src="https://www.youtube.com/embed/example" allowfullscreen></iframe>
</div>

<!-- Kwadratowy obrazek -->
<div class="ratio ratio-1x1">
  <img src="image.jpg" class="object-fit-cover" alt="Opis">
</div>

<!-- Własny stosunek -->
<div class="ratio" style="--bs-aspect-ratio: 75%">
  <div>Własny stosunek 4:3</div>
</div>
```

## 🔗 Stretched Links

| Klasa | CSS | Opis |
|-------|-----|------|
| `stretched-link` | Rozciąga link na cały kontener | Czyni całą kartę klikalną |

### Przykład stretched link
```html
<div class="card">
  <img src="image.jpg" class="card-img-top" alt="Produkt">
  <div class="card-body">
    <h5 class="card-title">Nazwa produktu</h5>
    <p class="card-text">Opis produktu...</p>
    <a href="/produkt/1" class="btn btn-primary stretched-link">Zobacz więcej</a>
  </div>
</div>
<!-- Cała karta jest teraz klikalna -->
```

## 👆 User Interaction

### User Select
| Klasa | CSS | Opis |
|-------|-----|------|
| `user-select-all` | user-select: all | Zaznacz wszystko jednym klikiem |
| `user-select-auto` | user-select: auto | Domyślne zachowanie |
| `user-select-none` | user-select: none | Nie można zaznaczać tekstu |

### Pointer Events
| Klasa | CSS | Opis |
|-------|-----|------|
| `pe-none` | pointer-events: none | Wyłącz wszystkie zdarzenia myszy |
| `pe-auto` | pointer-events: auto | Włącz zdarzenia myszy |

### Przykłady user interaction
```html
<!-- Tekst nie do zaznaczania -->
<p class="user-select-none">Ten tekst nie może być zaznaczony</p>

<!-- Zaznacz wszystko jednym klikiem -->
<code class="user-select-all">npm install bootstrap</code>

<!-- Element nieaktywny -->
<div class="pe-none text-muted">
  <button class="btn btn-primary">Nieaktywny przycisk</button>
</div>
```

## 🌫️ Opacity

| Klasa | CSS | Opis |
|-------|-----|------|
| `opacity-0` | opacity: 0 | Całkowicie przezroczysty |
| `opacity-25` | opacity: 0.25 | 25% przezroczystości |
| `opacity-50` | opacity: 0.5 | 50% przezroczystości |
| `opacity-75` | opacity: 0.75 | 75% przezroczystości |
| `opacity-100` | opacity: 1 | Pełna nieprzezroczystość |

### Przykłady opacity
```html
<div class="bg-primary text-white p-3 opacity-75">75% przezroczystości</div>
<img src="image.jpg" class="opacity-50" alt="Półprzezroczysty obrazek">
<button class="btn btn-success opacity-25">Przezroczysty przycisk</button>
```

## 🔗 Button Groups

| Klasa | Opis |
|-------|------|
| `btn-group` | Pozioma grupa przycisków |
| `btn-group-vertical` | Pionowa grupa przycisków |
| `btn-toolbar` | Pasek narzędzi z grupami przycisków |
| `btn-group-sm` | Mała grupa przycisków |
| `btn-group-lg` | Duża grupa przycisków |

### Przykłady button groups
```html
<!-- Podstawowa grupa -->
<div class="btn-group" role="group">
  <button type="button" class="btn btn-primary">Lewo</button>
  <button type="button" class="btn btn-primary">Środek</button>
  <button type="button" class="btn btn-primary">Prawo</button>
</div>

<!-- Pionowa grupa -->
<div class="btn-group-vertical" role="group">
  <button type="button" class="btn btn-outline-secondary">Pierwszy</button>
  <button type="button" class="btn btn-outline-secondary">Drugi</button>
  <button type="button" class="btn btn-outline-secondary">Trzeci</button>
</div>

<!-- Toolbar -->
<div class="btn-toolbar" role="toolbar">
  <div class="btn-group me-2" role="group">
    <button class="btn btn-primary">1</button>
    <button class="btn btn-primary">2</button>
  </div>
  <div class="btn-group" role="group">
    <button class="btn btn-secondary">3</button>
    <button class="btn btn-secondary">4</button>
  </div>
</div>
```

## 📱 Scrollspy

| Atrybut | Opis |
|---------|------|
| `data-bs-spy="scroll"` | Aktywuje scrollspy |
| `data-bs-target="#navbar"` | Cel nawigacji |
| `data-bs-offset="10"` | Offset w pikselach |
| `data-bs-smooth-scroll="true"` | Płynne przewijanie |

### Przykład scrollspy
```html
<body data-bs-spy="scroll" data-bs-target="#navbar" data-bs-offset="10">
  <nav id="navbar" class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
    <div class="container">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" href="#sekcja1">Sekcja 1</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#sekcja2">Sekcja 2</a>
        </li>
      </ul>
    </div>
  </nav>
  
  <div id="sekcja1" style="height: 500px;">
    <h2>Sekcja 1</h2>
    <p>Zawartość...</p>
  </div>
  
  <div id="sekcja2" style="height: 500px;">
    <h2>Sekcja 2</h2>
    <p>Zawartość...</p>
  </div>
</body>
```

## 💫 Placeholders (Bootstrap 5.1+)

| Klasa | Opis |
|-------|------|
| `placeholder` | Podstawowy placeholder |
| `placeholder-glow` | Animacja pulse |
| `placeholder-wave` | Animacja wave |
| `placeholder-xs` | Bardzo mały placeholder |
| `placeholder-sm` | Mały placeholder |
| `placeholder-lg` | Duży placeholder |

### Przykłady placeholders
```html
<div class="card">
  <div class="card-body">
    <h5 class="card-title placeholder-glow">
      <span class="placeholder col-6"></span>
    </h5>
    <p class="card-text placeholder-wave">
      <span class="placeholder col-7"></span>
      <span class="placeholder col-4"></span>
      <span class="placeholder col-4"></span>
      <span class="placeholder col-6"></span>
    </p>
    <a href="#" class="btn btn-primary disabled placeholder col-6"></a>
  </div>
</div>
```

## 🌊 Float Utilities

| Klasa | CSS | Opis |
|-------|-----|------|
| `float-start` | float: left | Opłyń z lewej |
| `float-end` | float: right | Opłyń z prawej |
| `float-none` | float: none | Bez opływania |

### Responsive float
| Klasa | Opis |
|-------|------|
| `float-sm-start` | Float left od small |
| `float-md-end` | Float right od medium |
| `float-lg-none` | Bez float od large |

### Przykłady float
```html
<div class="clearfix">
  <img src="image.jpg" class="float-start me-3" alt="Obrazek">
  <p>Tekst opływa obrazek z prawej strony...</p>
</div>

<div class="float-end">
  <button class="btn btn-primary">Przycisk po prawej</button>
</div>
```

## 🧹 Clearfix

| Klasa | CSS | Opis |
|-------|-----|------|
| `clearfix` | Czyści float | Dodaj po elementach float |

### Przykład clearfix
```html
<div class="clearfix">
  <div class="float-start">Element po lewej</div>
  <div class="float-end">Element po prawej</div>
  <!-- clearfix zapewnia, że kontener ma odpowiednią wysokość -->
</div>
```

## 🎯 Object Fit (Bootstrap 5.1+)

| Klasa | CSS | Opis |
|-------|-----|------|
| `object-fit-contain` | object-fit: contain | Zachowaj proporcje, pokaż całość |
| `object-fit-cover` | object-fit: cover | Zachowaj proporcje, wypełnij |
| `object-fit-fill` | object-fit: fill | Wypełnij bez zachowania proporcji |
| `object-fit-scale` | object-fit: scale-down | Skaluj w dół |
| `object-fit-none` | object-fit: none | Nie skaluj |

### Przykłady object fit
```html
<!-- Obrazek wypełnia kontener z zachowaniem proporcji -->
<div class="ratio ratio-16x9">
  <img src="image.jpg" class="object-fit-cover" alt="Opis">
</div>

<!-- Obrazek w kole z cover -->
<img src="avatar.jpg" class="rounded-circle object-fit-cover" width="100" height="100" alt="Avatar">
```

## 🎨 Shadows rozszerzone

### Podstawowe cienie (z pierwotnego dokumentu)
| Klasa | Opis |
|-------|------|
| `shadow-none` | Bez cienia |
| `shadow-sm` | Mały cień |
| `shadow` | Normalny cień |
| `shadow-lg` | Duży cień |

### Przykłady użycia shadows
```html
<!-- Karta z cieniem -->
<div class="card shadow">
  <div class="card-body">Zawartość z cieniem</div>
</div>

<!-- Przycisk z dużym cieniem -->
<button class="btn btn-primary shadow-lg">Przycisk z cieniem</button>

<!-- Obrazek bez cienia -->
<img src="image.jpg" class="shadow-none" alt="Bez cienia">

<!-- Hover effect z cieniem -->
<div class="card shadow-sm">
  <div class="card-body">
    <style>
      .hover-shadow:hover { box-shadow: 0 1rem 3rem rgba(0,0,0,.175) !important; }
    </style>
    <p class="hover-shadow">Najedź na mnie</p>
  </div>
</div>
```

## 💬 Toast Notifications rozszerzone

| Klasa | Opis |
|-------|------|
| `toast` | Kontener powiadomienia |
| `toast-container` | Kontener dla wielu toastów |
| `toast-header` | Nagłówek toasta |
| `toast-body` | Ciało toasta |
| `position-fixed` | Pozycjonowanie toasta |
| `top-0`, `bottom-0` | Pozycja pionowa |
| `start-0`, `end-0` | Pozycja pozioma |

### Kompletny przykład toast
```html
<!-- Kontener toastów -->
<div class="toast-container position-fixed bottom-0 end-0 p-3">
  <div class="toast" role="alert">
    <div class="toast-header">
      <strong class="me-auto text-success">✅ Sukces</strong>
      <small class="text-muted">przed chwilą</small>
      <button type="button" class="btn-close" data-bs-dismiss="toast"></button>
    </div>
    <div class="toast-body">
      Operacja zakończona pomyślnie!
    </div>
  </div>
</div>

<!-- Toast z różnymi pozycjami -->
<div class="toast-container position-fixed top-0 start-50 translate-middle-x p-3">
  <div class="toast align-items-center text-bg-primary border-0" role="alert">
    <div class="d-flex">
      <div class="toast-body">
        Toast na górze ekranu
      </div>
      <button type="button" class="btn-close btn-close-white me-2 m-auto" data-bs-dismiss="toast"></button>
    </div>
  </div>
</div>
```

## 🎪 Offcanvas rozszerzone

| Klasa | Opis |
|-------|------|
| `offcanvas` | Kontener offcanvas |
| `offcanvas-start` | Wysuwane z lewej |
| `offcanvas-end` | Wysuwane z prawej |
| `offcanvas-top` | Wysuwane z góry |
| `offcanvas-bottom` | Wysuwane z dołu |
| `offcanvas-header` | Nagłówek offcanvas |
| `offcanvas-title` | Tytuł offcanvas |
| `offcanvas-body` | Ciało offcanvas |

### Kompletny przykład offcanvas
```html
<!-- Przycisk trigger -->
<button class="btn btn-primary" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasExample">
  🍔 Otwórz menu
</button>

<!-- Offcanvas -->
<div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasExample">
  <div class="offcanvas-header">
    <h5 class="offcanvas-title">Menu nawigacyjne</h5>
    <button type="button" class="btn-close" data-bs-dismiss="offcanvas"></button>
  </div>
  <div class="offcanvas-body">
    <nav class="nav nav-pills flex-column">
      <a class="nav-link active" href="#">🏠 Strona główna</a>
      <a class="nav-link" href="#">📦 Produkty</a>
      <a class="nav-link" href="#">📞 Kontakt</a>
      <a class="nav-link" href="#">ℹ️ O nas</a>
    </nav>
  </div>
</div>
```

## 📏 Overflow rozszerzone

| Klasa | CSS | Opis |
|-------|-----|------|
| `overflow-auto` | overflow: auto | Auto scroll gdy potrzeba |
| `overflow-hidden` | overflow: hidden | Ukryj overflow |
| `overflow-visible` | overflow: visible | Pokaż overflow |
| `overflow-scroll` | overflow: scroll | Zawsze pokaż scrollbary |

### Overflow na konkretnych osiach
| Klasa | CSS | Opis |
|-------|-----|------|
| `overflow-x-auto` | overflow-x: auto | Auto scroll poziomo |
| `overflow-x-hidden` | overflow-x: hidden | Ukryj overflow poziomo |
| `overflow-x-scroll` | overflow-x: scroll | Scroll poziomo |
| `overflow-y-auto` | overflow-y: auto | Auto scroll pionowo |
| `overflow-y-hidden` | overflow-y: hidden | Ukryj overflow pionowo |
| `overflow-y-scroll` | overflow-y: scroll | Scroll pionowo |

### Przykłady overflow
```html
<!-- Tabela z przewijaniem poziomym -->
<div class="overflow-x-auto">
  <table class="table table-nowrap">
    <thead>
      <tr>
        <th>Bardzo długa nazwa kolumny 1</th>
        <th>Bardzo długa nazwa kolumny 2</th>
        <th>Bardzo długa nazwa kolumny 3</th>
      </tr>
    </thead>
  </table>
</div>

<!-- Kontener z ograniczoną wysokością -->
<div class="border p-3 overflow-y-auto" style="height: 200px;">
  <p>Długi tekst, który będzie przewijany...</p>
  <p>Więcej treści...</p>
  <p>Jeszcze więcej treści...</p>
</div>
```

## 🎭 Visibility rozszerzone

| Klasa | CSS | Opis |
|-------|-----|------|
| `visible` | visibility: visible | Widoczny |
| `invisible` | visibility: hidden | Niewidoczny (zajmuje miejsce) |
| `visually-hidden` | Ukryty wizualnie | Tylko dla czytników ekranu |
| `visually-hidden-focusable` | Widoczny przy focus | Dla accessibility |

### Przykłady visibility
```html
<!-- Element niewidoczny ale zajmujący miejsce -->
<button class="btn btn-primary invisible">Niewidoczny przycisk</button>

<!-- Tekst tylko dla czytników ekranu -->
<span class="visually-hidden">Dodatkowe informacje dla niewidomych</span>

<!-- Link widoczny tylko przy focus (skip link) -->
<a href="#main" class="visually-hidden-focusable">Przejdź do treści głównej</a>
```

## 📊 Progress Bars rozszerzone

| Klasa | Opis |
|-------|------|
| `progress` | Kontener paska postępu |
| `progress-bar` | Pasek postępu |
| `progress-bar-striped` | Pasek w paski |
| `progress-bar-animated` | Animowany pasek |
| `progress-stacked` | Ułożone paski postępu |

### Przykłady progress bars
```html
<!-- Podstawowy pasek -->
<div class="progress" role="progressbar">
  <div class="progress-bar" style="width: 25%">25%</div>
</div>

<!-- Animowany pasek w paski -->
<div class="progress" role="progressbar">
  <div class="progress-bar progress-bar-striped progress-bar-animated bg-success" style="width: 75%">
    75% ukończone
  </div>
</div>

<!-- Wielokolorowy pasek -->
<div class="progress-stacked">
  <div class="progress" role="progressbar" style="width: 15%">
    <div class="progress-bar bg-danger">15%</div>
  </div>
  <div class="progress" role="progressbar" style="width: 30%">
    <div class="progress-bar bg-warning">30%</div>
  </div>
  <div class="progress" role="progressbar" style="width: 20%">
    <div class="progress-bar bg-success">20%</div>
  </div>
</div>

<!-- Pasek z etykietą -->
<div class="progress" role="progressbar">
  <div class="progress-bar overflow-visible text-dark" style="width: 10%">
    Długa etykieta paska postępu
  </div>
</div>
```

## 💭 Popovers rozszerzone

| Atrybut | Opis |
|---------|------|
| `data-bs-toggle="popover"` | Aktywuje popover |
| `data-bs-content="Treść"` | Zawartość popover |
| `data-bs-placement="top"` | Pozycja: top, bottom, left, right |
| `data-bs-trigger="click"` | Wyzwalacz: click, hover, focus |
| `data-bs-html="true"` | Pozwala na HTML w zawartości |

### Przykłady popovers
```html
<!-- Podstawowy popover -->
<button type="button" class="btn btn-secondary" 
        data-bs-toggle="popover" 
        data-bs-title="Tytuł popover"
        data-bs-content="Zawartość popover">
  Kliknij dla popover
</button>

<!-- Popover z HTML -->
<button type="button" class="btn btn-primary" 
        data-bs-toggle="popover" 
        data-bs-html="true"
        data-bs-placement="top"
        data-bs-title="<strong>HTML tytuł</strong>"
        data-bs-content="Zawartość z <em>HTML</em> <a href='#'>linkiem</a>">
  Popover z HTML
</button>

<!-- Popover na hover -->
<span data-bs-toggle="popover" 
      data-bs-trigger="hover" 
      data-bs-content="Pojawiam się na hover"
      class="text-decoration-underline">
  Najedź na mnie
</span>
```

## 🏷️ Badges rozszerzone

| Klasa | Opis |
|-------|------|
| `badge` | Podstawowa odznaka |
| `text-bg-primary` | Niebieski badge z tekstem |
| `text-bg-secondary` | Szary badge z tekstem |
| `text-bg-success` | Zielony badge z tekstem |
| `text-bg-danger` | Czerwony badge z tekstem |
| `text-bg-warning` | Żółty badge z tekstem |
| `text-bg-info` | Jasnoniebieski badge z tekstem |
| `text-bg-light` | Jasny badge z tekstem |
| `text-bg-dark` | Ciemny badge z tekstem |
| `rounded-pill` | Okrągły badge |

### Przykłady badges
```html
<!-- Badge w nagłówku -->
<h2>Tytuł <span class="badge text-bg-secondary">Nowy</span></h2>

<!-- Badge jako licznik -->
<button class="btn btn-primary position-relative">
  📧 Wiadomości
  <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill text-bg-danger">
    99+
    <span class="visually-hidden">nieprzeczytanych wiadomości</span>
  </span>
</button>

<!-- Badge w liście -->
<ul class="list-group">
  <li class="list-group-item d-flex justify-content-between align-items-center">
    Zadanie 1
    <span class="badge text-bg-primary rounded-pill">14</span>
  </li>
  <li class="list-group-item d-flex justify-content-between align-items-center">
    Zadanie 2
    <span class="badge text-bg-success rounded-pill">2</span>
  </li>
</ul>
```

## 💫 Spinners rozszerzone

| Klasa | Opis |
|-------|------|
| `spinner-border` | Obrotowy spinner (border) |
| `spinner-grow` | Pulsujący spinner (grow) |
| `spinner-border-sm` | Mały border spinner |
| `spinner-grow-sm` | Mały grow spinner |

### Przykłady spinners
```html
<!-- Podstawowe spinnery -->
<div class="spinner-border text-primary" role="status">
  <span class="visually-hidden">Ładowanie...</span>
</div>

<div class="spinner-grow text-success" role="status">
  <span class="visually-hidden">Ładowanie...</span>
</div>

<!-- Spinnery w przyciskach -->
<button class="btn btn-primary" type="button" disabled>
  <span class="spinner-border spinner-border-sm me-2" role="status"></span>
  Ładowanie...
</button>

<button class="btn btn-success" type="button" disabled>
  <span class="spinner-grow spinner-grow-sm me-2" role="status"></span>
  Zapisywanie...
</button>

<!-- Kolorowe spinnery -->
<div class="spinner-border text-warning" role="status"></div>
<div class="spinner-border text-info" role="status"></div>
<div class="spinner-border text-danger" role="status"></div>
```

## 🎯 Input Groups rozszerzone

### Klasy podstawowe (uzupełnienie)
| Klasa | Opis |
|-------|------|
| `input-group` | Kontener grupy |
| `input-group-text` | Tekst lub ikona w grupie |
| `input-group-sm` | Mała grupa |
| `input-group-lg` | Duża grupa |

### Przykłady input groups
```html
<!-- Grupa z ikoną -->
<div class="input-group mb-3">
  <span class="input-group-text">👤</span>
  <input type="text" class="form-control" placeholder="Nazwa użytkownika">
</div>

<!-- Grupa z przyciskiem -->
<div class="input-group mb-3">
  <input type="text" class="form-control" placeholder="Szukaj...">
  <button class="btn btn-outline-secondary" type="button">🔍</button>
</div>

<!-- Grupa z dropdown -->
<div class="input-group mb-3">
  <label class="input-group-text" for="inputGroupSelect">Kategoria</label>
  <select class="form-select" id="inputGroupSelect">
    <option selected>Wybierz...</option>
    <option value="1">Elektronika</option>
    <option value="2">Książki</option>
    <option value="3">Ubrania</option>
  </select>
</div>

<!-- Grupa z wieloma elementami -->
<div class="input-group">
  <span class="input-group-text">💰</span>
  <input type="number" class="form-control" placeholder="Kwota">
  <span class="input-group-text">PLN</span>
  <button class="btn btn-success" type="button">Przelicz</button>
</div>
```

## 🎨 Text Decoration

| Klasa | CSS | Opis |
|-------|-----|------|
| `text-decoration-none` | text-decoration: none | Bez podkreślenia |
| `text-decoration-underline` | text-decoration: underline | Podkreślenie |
| `text-decoration-line-through` | text-decoration: line-through | Przekreślenie |

### Przykłady text decoration
```html
<a href="#" class="text-decoration-none">Link bez podkreślenia</a>
<p class="text-decoration-underline">Tekst podkreślony</p>
<del class="text-decoration-line-through">Tekst przekreślony</del>
```

## 🎭 Transform Utilities

| Klasa | CSS | Opis |
|-------|-----|------|
| `translate-middle` | transform: translate(-50%, -50%) | Wyśrodkuj dokładnie |
| `translate-middle-x` | transform: translateX(-50%) | Wyśrodkuj poziomo |
| `translate-middle-y` | transform: translateY(-50%) | Wyśrodkuj pionowo |

### Przykłady transform
```html
<!-- Wyśrodkowanie absolutne -->
<div class="position-relative bg-light" style="height: 200px;">
  <div class="position-absolute top-50 start-50 translate-middle bg-primary text-white p-3">
    Dokładnie wyśrodkowane
  </div>
</div>

<!-- Badge na rogu -->
<div class="position-relative">
  <img src="avatar.jpg" class="rounded" width="100" alt="Avatar">
  <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill text-bg-success">
    Online
  </span>
</div>
```

## 🎪 Accordion rozszerzone

### Kompletny przykład accordion
```html
<div class="accordion" id="accordionExample">
  <div class="accordion-item">
    <h2 class="accordion-header">
      <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne">
        📋 Pytanie pierwsze
      </button>
    </h2>
    <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
      <div class="accordion-body">
        <strong>Odpowiedź na pierwsze pytanie.</strong> Możesz dodać dowolną zawartość HTML tutaj.
      </div>
    </div>
  </div>
  
  <div class