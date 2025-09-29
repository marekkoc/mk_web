#!/usr/bin/env python3
# -*- coding: utf-8 -*-

import sys
from datetime import datetime

def main():
    # Sprawdź czy są argumenty
    if len(sys.argv) < 4:
        print("❌ Brak wystarczających argumentów")
        return

    # Pobierz argumenty z PHP
    tekst = sys.argv[1]
    liczba_slow = sys.argv[2]
    liczba_znakow = sys.argv[3]

    # Aktualna data i czas
    teraz = datetime.now().strftime("%Y-%m-%d %H:%M:%S")

    # Przygotuj dane do zapisu
    log_entry = f"""
{teraz}
Tekst: "{tekst}"
Słowa: {liczba_slow}, Znaki: {liczba_znakow}
{"="*50}
"""

    try:
        # Zapisz do pliku (dopisuj na końcu)
        with open('analiza.txt', 'a', encoding='utf-8') as file:
            file.write(log_entry)

        print(f"✅ Zapisano do pliku analiza.txt")
        print(f"📅 Czas: {teraz}")
        print(f"📝 Długość tekstu: {liczba_znakow} znaków")
        print(f"🔤 Liczba słów: {liczba_slow}")

        # Dodatkowa analiza Python
        if int(liczba_znakow) > 100:
            print("🎯 To był długi tekst!")
        elif int(liczba_znakow) > 20:
            print("👌 Średniej długości tekst")
        else:
            print("📏 Krótki tekst")

    except Exception as e:
        print(f"❌ Błąd zapisu: {e}")

if __name__ == "__main__":
    main()
