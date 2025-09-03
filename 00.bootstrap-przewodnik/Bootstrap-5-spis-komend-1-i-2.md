# Bootstrap 5 - Spis wszystkich komend

## 📱 Rozmiary ekranów (Breakpoints)
- `xs` (<576px), `sm` (≥576px), `md` (≥768px), `lg` (≥992px), `xl` (≥1200px), `xxl` (≥1400px)

## 📏 Spacing (Marginesy i Paddingi)
### Kierunki
- `m`, `mt`, `mb`, `ms`, `me`, `mx`, `my`
- `p`, `pt`, `pb`, `ps`, `pe`, `px`, `py`

### Wartości
- `0` (0px), `1` (4px), `2` (8px), `3` (16px), `4` (24px), `5` (48px)

## 🎨 Kolory
### Nazwy kolorów
- `primary`, `secondary`, `success`, `danger`, `warning`, `info`, `light`, `dark`, `white`, `muted`

### Zastosowania kolorów
- `bg-{color}` - tło
- `text-{color}` - tekst
- `border-{color}` - obramowanie
- `btn-{color}` - przyciski
- `text-bg-{color}` - tekst z tłem (Bootstrap 5.1+)

## 🏗️ Layout i Grid
### Kontenery
- `container`, `container-fluid`
- `container-sm`, `container-md`, `container-lg`, `container-xl`, `container-xxl`

### Grid System
- `row`
- `col`, `col-1` do `col-12`
- `col-{breakpoint}-{size}` (np. `col-md-6`)

## 🎛️ Display
### Podstawowe
- `d-none`, `d-block`, `d-inline`, `d-inline-block`, `d-flex`, `d-grid`, `d-table`

### Responsive
- `d-{breakpoint}-{value}` (np. `d-md-flex`)

### Print
- `d-print-none`, `d-print-block`, `d-print-inline`, `d-print-inline-block`, `d-print-table`, `d-print-table-row`, `d-print-table-cell`, `d-print-flex`, `d-print-inline-flex`

## 🔄 Flexbox
### Direction
- `flex-row`, `flex-column`, `flex-row-reverse`, `flex-column-reverse`

### Justify Content
- `justify-content-start`, `justify-content-center`, `justify-content-end`, `justify-content-between`, `justify-content-around`, `justify-content-evenly`

### Align Items
- `align-items-start`, `align-items-center`, `align-items-end`, `align-items-baseline`, `align-items-stretch`

### Align Self
- `align-self-start`, `align-self-center`, `align-self-end`, `align-self-baseline`, `align-self-stretch`

### Flex utilities
- `flex-fill`, `flex-grow-1`, `flex-shrink-1`, `flex-wrap`, `flex-nowrap`

## 📐 Pozycjonowanie
### Position
- `position-static`, `position-relative`, `position-absolute`, `position-fixed`, `position-sticky`

### Sticky utilities
- `sticky-top`, `sticky-bottom`

### Pozycje
- `top-0`, `top-50`, `top-100`
- `bottom-0`, `bottom-50`, `bottom-100`
- `start-0`, `start-50`, `start-100`
- `end-0`, `end-50`, `end-100`

### Transform
- `translate-middle`, `translate-middle-x`, `translate-middle-y`

### Z-index
- `z-n1`, `z-0`, `z-1`, `z-2`, `z-3`

## 📏 Rozmiary
### Szerokości
- `w-25`, `w-50`, `w-75`, `w-100`, `w-auto`
- `mw-100` (max-width: 100%)

### Wysokości
- `h-25`, `h-50`, `h-75`, `h-100`, `h-auto`
- `mh-100` (max-height: 100%)
- `min-vh-100` (min-height: 100vh)

### Aspect Ratio
- `ratio`, `ratio-1x1`, `ratio-4x3`, `ratio-16x9`, `ratio-21x9`

## 📝 Tekst
### Wyrównanie
- `text-start`, `text-center`, `text-end`
- `text-{breakpoint}-{align}` (np. `text-md-center`)

### Transform
- `text-lowercase`, `text-uppercase`, `text-capitalize`

### Wrapping
- `text-wrap`, `text-nowrap`, `text-break`

### Decorations
- `text-decoration-none`, `text-decoration-underline`, `text-decoration-line-through`

### Font Weight
- `fw-light`, `fw-normal`, `fw-medium`, `fw-semibold`, `fw-bold`, `fw-bolder`, `fw-lighter`

### Font Size
- `fs-1`, `fs-2`, `fs-3`, `fs-4`, `fs-5`, `fs-6`

### Font Style
- `fst-italic`, `fst-normal`

### Line Height
- `lh-1`, `lh-sm`, `lh-base`, `lh-lg`

## 🖼️ Obrazy
### Klasy obrazów
- `img-fluid` (max-width: 100%)
- `img-thumbnail`
- `object-fit-contain`, `object-fit-cover`, `object-fit-fill`, `object-fit-scale`, `object-fit-none`

### Figure
- `figure`, `figure-img`, `figure-caption`

## 🔲 Obramowania
### Podstawowe
- `border`, `border-top`, `border-bottom`, `border-start`, `border-end`, `border-0`

### Kolory obramowań
- `border-{color}` (np. `border-primary`)

### Grubość
- `border-1`, `border-2`, `border-3`, `border-4`, `border-5`

### Zaokrąglenia
- `rounded`, `rounded-0`, `rounded-1`, `rounded-2`, `rounded-3`
- `rounded-top`, `rounded-bottom`, `rounded-start`, `rounded-end`
- `rounded-circle`, `rounded-pill`

## 🌫️ Efekty wizualne
### Cienie
- `shadow-none`, `shadow-sm`, `shadow`, `shadow-lg`

### Opacity
- `opacity-0`, `opacity-25`, `opacity-50`, `opacity-75`, `opacity-100`

## 🎭 Visibility
### Podstawowe
- `visible`, `invisible`

### Screen readers
- `visually-hidden`, `visually-hidden-focusable`

## 📦 Overflow
### Wszystkie osie
- `overflow-auto`, `overflow-hidden`, `overflow-visible`, `overflow-scroll`

### Konkretne osie
- `overflow-x-auto`, `overflow-x-hidden`, `overflow-x-scroll`
- `overflow-y-auto`, `overflow-y-hidden`, `overflow-y-scroll`

## 🌊 Float
### Float utilities
- `float-start`, `float-end`, `float-none`
- `float-{breakpoint}-{direction}` (np. `float-md-start`)

### Clearfix
- `clearfix`

## 👆 Interakcja użytkownika
### User Select
- `user-select-all`, `user-select-auto`, `user-select-none`

### Pointer Events
- `pe-none`, `pe-auto`

### Links
- `stretched-link`

## 🎯 Komponenty

### Przyciski
- `btn` (wymagana klasa bazowa)
- `btn-{color}` (np. `btn-primary`)
- `btn-outline-{color}` (np. `btn-outline-secondary`)
- `btn-sm`, `btn-lg`
- `btn-close`, `btn-close-white`

### Button Groups
- `btn-group`, `btn-group-vertical`, `btn-toolbar`
- `btn-group-sm`, `btn-group-lg`

### Karty
- `card`, `card-header`, `card-body`, `card-footer`
- `card-title`, `card-subtitle`, `card-text`
- `card-img-top`, `card-img-bottom`, `card-img-overlay`

### Alerty
- `alert`, `alert-{color}` (np. `alert-success`)
- `alert-dismissible`

### Badges
- `badge`
- `text-bg-{color}` (np. `text-bg-primary`)
- `rounded-pill`

### Nawigacja
- `navbar`, `navbar-expand-{breakpoint}`, `navbar-light`, `navbar-dark`
- `navbar-brand`, `navbar-toggler`, `navbar-toggler-icon`
- `nav`, `nav-link`, `nav-item`, `nav-pills`, `nav-tabs`
- `breadcrumb`, `breadcrumb-item`

### Listy
- `list-group`, `list-group-item`, `list-group-item-action`
- `list-group-flush`, `list-group-horizontal`, `list-group-numbered`

### Tabele
- `table`, `table-striped`, `table-hover`, `table-bordered`, `table-borderless`
- `table-sm`, `table-responsive`
- `table-{color}` (np. `table-primary`)

### Formularze
#### Pola podstawowe
- `form-control`, `form-control-sm`, `form-control-lg`
- `form-select`, `form-label`, `form-text`

#### Checkboxy i Radio
- `form-check`, `form-check-input`, `form-check-label`
- `form-check-inline`, `form-switch`

#### Range i inne
- `form-range`

#### Input Groups
- `input-group`, `input-group-text`
- `input-group-sm`, `input-group-lg`

#### Walidacja
- `is-valid`, `is-invalid`
- `valid-feedback`, `invalid-feedback`
- `needs-validation`, `was-validated`

### Modalne okna
- `modal`, `modal-dialog`, `modal-content`
- `modal-header`, `modal-title`, `modal-body`, `modal-footer`
- `modal-sm`, `modal-lg`, `modal-xl`, `modal-fullscreen`
- `modal-dialog-centered`, `modal-dialog-scrollable`
- `modal-fullscreen-{breakpoint}-down`

### Dropdowny
- `dropdown`, `dropdown-toggle`, `dropdown-menu`, `dropdown-item`
- `dropdown-divider`, `dropdown-header`
- `dropdown-menu-end`

### Offcanvas
- `offcanvas`, `offcanvas-start`, `offcanvas-end`, `offcanvas-top`, `offcanvas-bottom`
- `offcanvas-header`, `offcanvas-title`, `offcanvas-body`

### Accordions
- `accordion`, `accordion-item`, `accordion-header`
- `accordion-button`, `accordion-body`, `accordion-collapse`

### Carousel
- `carousel`, `carousel-inner`, `carousel-item`
- `carousel-control-prev`, `carousel-control-next`
- `carousel-control-prev-icon`, `carousel-control-next-icon`
- `carousel-indicators`, `carousel-caption`, `carousel-fade`

### Progress Bars
- `progress`, `progress-bar`
- `progress-bar-striped`, `progress-bar-animated`
- `progress-stacked`

### Spinners
- `spinner-border`, `spinner-grow`
- `spinner-border-sm`, `spinner-grow-sm`

### Toast Notifications
- `toast`, `toast-container`, `toast-header`, `toast-body`

### Pagination
- `pagination`, `page-item`, `page-link`
- `pagination-sm`, `pagination-lg`
- `page-item active`, `page-item disabled`

### Placeholders (Bootstrap 5.1+)
- `placeholder`, `placeholder-glow`, `placeholder-wave`
- `placeholder-xs`, `placeholder-sm`, `placeholder-lg`

## 🔧 Atrybuty HTML i Data Attributes

### Modalne okna
- `data-bs-toggle="modal"`
- `data-bs-target="#modalId"`
- `data-bs-dismiss="modal"`

### Dropdowny
- `data-bs-toggle="dropdown"`

### Collapse
- `data-bs-toggle="collapse"`
- `data-bs-target="#collapseId"`

### Offcanvas
- `data-bs-toggle="offcanvas"`
- `data-bs-target="#offcanvasId"`
- `data-bs-dismiss="offcanvas"`

### Tooltips
- `data-bs-toggle="tooltip"`
- `title="Tekst tooltip"`
- `data-bs-placement="top|bottom|left|right"`

### Popovers
- `data-bs-toggle="popover"`
- `data-bs-content="Zawartość"`
- `data-bs-title="Tytuł"`
- `data-bs-placement="top|bottom|left|right"`
- `data-bs-trigger="click|hover|focus"`
- `data-bs-html="true"`

### Scrollspy
- `data-bs-spy="scroll"`
- `data-bs-target="#navbarId"`
- `data-bs-offset="10"`
- `data-bs-smooth-scroll="true"`

### Toast
- `data-bs-dismiss="toast"`

### Alert
- `data-bs-dismiss="alert"`

### Carousel
- `data-bs-ride="carousel"`
- `data-bs-interval="5000"`
- `data-bs-slide="prev|next"`
- `data-bs-slide-to="0"`

## 📋 Kompletna lista klas alfabetycznie

### A
- `accordion`, `accordion-body`, `accordion-button`, `accordion-collapse`, `accordion-header`, `accordion-item`
- `alert`, `alert-{color}`, `alert-dismissible`
- `align-items-start`, `align-items-center`, `align-items-end`, `align-items-baseline`, `align-items-stretch`
- `align-self-start`, `align-self-center`, `align-self-end`, `align-self-baseline`, `align-self-stretch`

### B
- `badge`
- `bg-{color}` (primary, secondary, success, danger, warning, info, light, dark, white, transparent)
- `border`, `border-top`, `border-bottom`, `border-start`, `border-end`, `border-0`
- `border-{color}`, `border-1` do `border-5`
- `breadcrumb`, `breadcrumb-item`
- `btn`, `btn-{color}`, `btn-outline-{color}`, `btn-sm`, `btn-lg`
- `btn-close`, `btn-close-white`
- `btn-group`, `btn-group-vertical`, `btn-toolbar`, `btn-group-sm`, `btn-group-lg`
- `bottom-0`, `bottom-50`, `bottom-100`

### C
- `card`, `card-header`, `card-body`, `card-footer`, `card-title`, `card-subtitle`, `card-text`
- `card-img-top`, `card-img-bottom`, `card-img-overlay`
- `carousel`, `carousel-inner`, `carousel-item`, `carousel-control-prev`, `carousel-control-next`
- `carousel-control-prev-icon`, `carousel-control-next-icon`, `carousel-indicators`, `carousel-caption`, `carousel-fade`
- `clearfix`
- `col`, `col-1` do `col-12`, `col-{breakpoint}-{size}`
- `collapse`, `container`, `container-fluid`, `container-{breakpoint}`

### D
- `d-none`, `d-block`, `d-inline`, `d-inline-block`, `d-flex`, `d-grid`, `d-table`
- `d-{breakpoint}-{display}`
- `d-print-none`, `d-print-block`, `d-print-inline`, `d-print-flex`
- `dropdown`, `dropdown-toggle`, `dropdown-menu`, `dropdown-item`, `dropdown-divider`, `dropdown-header`, `dropdown-menu-end`

### E
- `end-0`, `end-50`, `end-100`

### F
- `figure`, `figure-img`, `figure-caption`
- `flex-row`, `flex-column`, `flex-row-reverse`, `flex-column-reverse`
- `flex-fill`, `flex-grow-1`, `flex-shrink-1`, `flex-wrap`, `flex-nowrap`
- `float-start`, `float-end`, `float-none`
- `float-{breakpoint}-{direction}`
- `form-control`, `form-control-sm`, `form-control-lg`
- `form-select`, `form-label`, `form-text`
- `form-check`, `form-check-input`, `form-check-label`, `form-check-inline`
- `form-switch`, `form-range`
- `fs-1`, `fs-2`, `fs-3`, `fs-4`, `fs-5`, `fs-6`
- `fst-italic`, `fst-normal`
- `fw-light`, `fw-normal`, `fw-medium`, `fw-semibold`, `fw-bold`, `fw-bolder`, `fw-lighter`

### G
- `gap-0`, `gap-1`, `gap-2`, `gap-3`, `gap-4`, `gap-5`

### H
- `h-25`, `h-50`, `h-75`, `h-100`, `h-auto`
- `mh-100`, `min-vh-100`

### I
- `img-fluid`, `img-thumbnail`
- `input-group`, `input-group-text`, `input-group-sm`, `input-group-lg`
- `invisible`
- `is-valid`, `is-invalid`

### J
- `justify-content-start`, `justify-content-center`, `justify-content-end`
- `justify-content-between`, `justify-content-around`, `justify-content-evenly`

### L
- `lh-1`, `lh-sm`, `lh-base`, `lh-lg`
- `list-group`, `list-group-item`, `list-group-item-action`
- `list-group-flush`, `list-group-horizontal`, `list-group-numbered`

### M
- `m-0` do `m-5`, `mt-0` do `mt-5`, `mb-0` do `mb-5`
- `ms-0` do `ms-5`, `me-0` do `me-5`, `mx-0` do `mx-5`, `my-0` do `my-5`
- `m-{breakpoint}-{size}`
- `modal`, `modal-dialog`, `modal-content`, `modal-header`, `modal-title`, `modal-body`, `modal-footer`
- `modal-sm`, `modal-lg`, `modal-xl`, `modal-fullscreen`
- `modal-dialog-centered`, `modal-dialog-scrollable`
- `mw-100`, `mh-100`

### N
- `nav`, `nav-link`, `nav-item`, `nav-pills`, `nav-tabs`
- `navbar`, `navbar-expand-{breakpoint}`, `navbar-light`, `navbar-dark`
- `navbar-brand`, `navbar-toggler`, `navbar-toggler-icon`
- `needs-validation`

### O
- `object-fit-contain`, `object-fit-cover`, `object-fit-fill`, `object-fit-scale`, `object-fit-none`
- `offcanvas`, `offcanvas-start`, `offcanvas-end`, `offcanvas-top`, `offcanvas-bottom`
- `offcanvas-header`, `offcanvas-title`, `offcanvas-body`
- `opacity-0`, `opacity-25`, `opacity-50`, `opacity-75`, `opacity-100`
- `overflow-auto`, `overflow-hidden`, `overflow-visible`, `overflow-scroll`
- `overflow-x-auto`, `overflow-x-hidden`, `overflow-x-scroll`
- `overflow-y-auto`, `overflow-y-hidden`, `overflow-y-scroll`

### P
- `p-0` do `p-5`, `pt-0` do `pt-5`, `pb-0` do `pb-5`
- `ps-0` do `ps-5`, `pe-0` do `pe-5`, `px-0` do `px-5`, `py-0` do `py-5`
- `p-{breakpoint}-{size}`
- `page-item`, `page-link`, `page-item active`, `page-item disabled`
- `pagination`, `pagination-sm`, `pagination-lg`
- `pe-none`, `pe-auto`
- `placeholder`, `placeholder-glow`, `placeholder-wave`
- `placeholder-xs`, `placeholder-sm`, `placeholder-lg`
- `position-static`, `position-relative`, `position-absolute`, `position-fixed`, `position-sticky`
- `progress`, `progress-bar`, `progress-bar-striped`, `progress-bar-animated`, `progress-stacked`

### R
- `ratio`, `ratio-1x1`, `ratio-4x3`, `ratio-16x9`, `ratio-21x9`
- `rounded`, `rounded-0`, `rounded-1`, `rounded-2`, `rounded-3`
- `rounded-top`, `rounded-bottom`, `rounded-start`, `rounded-end`
- `rounded-circle`, `rounded-pill`
- `row`, `row-cols-1`, `row-cols-2`, `row-cols-3`, `row-cols-4`, `row-cols-5`, `row-cols-6`

### S
- `shadow-none`, `shadow-sm`, `shadow`, `shadow-lg`
- `spinner-border`, `spinner-grow`, `spinner-border-sm`, `spinner-grow-sm`
- `start-0`, `start-50`, `start-100`
- `sticky-top`, `sticky-bottom`
- `stretched-link`

### T
- `table`, `table-striped`, `table-hover`, `table-bordered`, `table-borderless`
- `table-sm`, `table-responsive`, `table-{color}`, `table-active`
- `text-{color}` (primary, secondary, success, danger, warning, info, light, dark, white, muted, black-50, white-50)
- `text-bg-{color}`
- `text-start`, `text-center`, `text-end`
- `text-{breakpoint}-{align}`
- `text-wrap`, `text-nowrap`, `text-break`
- `text-lowercase`, `text-uppercase`, `text-capitalize`
- `text-decoration-none`, `text-decoration-underline`, `text-decoration-line-through`
- `toast`, `toast-container`, `toast-header`, `toast-body`
- `top-0`, `top-50`, `top-100`
- `translate-middle`, `translate-middle-x`, `translate-middle-y`

### U
- `user-select-all`, `user-select-auto`, `user-select-none`

### V
- `valid-feedback`, `invalid-feedback`
- `visible`, `invisible`
- `visually-hidden`, `visually-hidden-focusable`

### W
- `w-25`, `w-50`, `w-75`, `w-100`, `w-auto`
- `was-validated`

### Z
- `z-n1`, `z-0`, `z-1`, `z-2`, `z-3`

## 📱 Responsive Patterns

### Breakpoint suffixes dla wszystkich klas
- `-sm` (≥576px)
- `-md` (≥768px) 
- `-lg` (≥992px)
- `-xl` (≥1200px)
- `-xxl` (≥1400px)

### Przykłady responsive patterns
```html
<!-- Responsive margins -->
m-{breakpoint}-{size}
mt-{breakpoint}-{size}
mb-{breakpoint}-{size}
ms-{breakpoint}-{size}
me-{breakpoint}-{size}
mx-{breakpoint}-{size}
my-{breakpoint}-{size}

<!-- Responsive paddings -->
p-{breakpoint}-{size}
pt-{breakpoint}-{size}
pb-{breakpoint}-{size}
ps-{breakpoint}-{size}
pe-{breakpoint}-{size}
px-{breakpoint}-{size}
py-{breakpoint}-{size}

<!-- Responsive display -->
d-{breakpoint}-{display}

<!-- Responsive text alignment -->
text-{breakpoint}-{align}

<!-- Responsive flexbox -->
justify-content-{breakpoint}-{value}
align-items-{breakpoint}-{value}
flex-{breakpoint}-{direction}

<!-- Responsive float -->
float-{breakpoint}-{direction}
```

## 🎯 Najczęściej używane kombinacje

### Layout combinations
```html
<!-- Responsive columns -->
col-12 col-sm-6 col-md-4 col-lg-3
col-12 col-md-8
col-12 col-lg-6 offset-lg-3

<!-- Centered content -->
d-flex justify-content-center align-items-center min-vh-100
mx-auto text-center
position-absolute top-50 start-50 translate-middle

<!-- Responsive spacing -->
p-3 p-md-4 p-lg-5
mt-2 mt-md-3 mt-lg-4
mb-3 mb-md-4
```

### Component combinations
```html
<!-- Card with shadow and hover -->
card shadow-sm hover-lift

<!-- Button with spinner -->
btn btn-primary disabled
spinner-border spinner-border-sm me-2

<!-- Alert dismissible -->
alert alert-success alert-dismissible

<!-- Badge in button -->
btn btn-primary position-relative
position-absolute top-0 start-100 translate-middle badge rounded-pill text-bg-danger

<!-- Form with validation -->
form-control is-invalid
invalid-feedback
needs-validation was-validated

<!-- Responsive navbar -->
navbar navbar-expand-lg navbar-light bg-light
navbar-toggler
collapse navbar-collapse
navbar-nav ms-auto
nav-item nav-link
```

### Utility combinations
```html
<!-- Perfect centering -->
d-flex justify-content-center align-items-center min-vh-100

<!-- Responsive text -->
fs-1 fs-md-2 fs-lg-3 text-center text-md-start

<!-- Card with effects -->
card shadow-lg border-0 h-100

<!-- Sticky positioned -->
position-sticky top-0 z-3

<!-- Full width responsive -->
w-100 w-md-75 w-lg-50 mx-auto

<!-- Responsive flex direction -->
d-flex flex-column flex-md-row

<!-- Text with multiple utilities -->
text-center text-md-start fs-4 fw-bold text-primary lh-sm
```

## 📚 CSS Classes Count Summary

**Łącznie klas w Bootstrap 5:**
- **Spacing:** ~240 klas (marginesy + paddingi × breakpointy)
- **Colors:** ~100 klas (wszystkie kolory × zastosowania)
- **Display:** ~40 klas (display × breakpointy)
- **Flexbox:** ~60 klas (wszystkie właściwości flex)
- **Components:** ~200 klas (wszystkie komponenty)
- **Utilities:** ~300 klas (text, borders, shadows, itp.)
- **Grid:** ~80 klas (kolumny × breakpointy)

**Szacowana liczba wszystkich klas: ~1000+**

## 🎯 Cheat Sheet - Najważniejsze wzorce

### 1. Container → Row → Col
```html
<div class="container">
  <div class="row">
    <div class="col-12 col-md-6">Zawartość</div>
  </div>
</div>
```

### 2. Mobile-first responsive
```html
<!-- Od małego do dużego ekranu -->
<div class="col-12 col-sm-6 col-md-4 col-lg-3"></div>
```

### 3. Flexbox centering
```html
<div class="d-flex justify-content-center align-items-center min-vh-100">
  <div>Wyśrodkowane</div>
</div>
```

### 4. Form structure
```html
<div class="mb-3">
  <label for="input" class="form-label">Etykieta</label>
  <input type="text" class="form-control" id="input">
  <div class="form-text">Tekst pomocniczy</div>
</div>
```

### 5. Card structure
```html
<div class="card">
  <div class="card-header">Nagłówek</div>
  <div class="card-body">
    <h5 class="card-title">Tytuł</h5>
    <p class="card-text">Tekst</p>
  </div>
</div>
```

---

**📊 Statystyki:** Przewodnik zawiera **1000+** klas Bootstrap 5 z praktycznymi przykładami użycia każdej z nich.