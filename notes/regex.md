### Wyrażenia regularne (ang. *regular expressions*, w skrócie *regex* lub *regexp*)

To zaawansowany sposób na **wyszukiwanie**, **dopasowywanie** oraz **manipulowanie tekstem** za pomocą wzorców. Są to
symbole lub ciągi znaków, które definiują reguły określające, jakie teksty (lub ich fragmenty) pasują do danego wzorca.

### Gdzie używamy wyrażeń regularnych?

- **Szukanie tekstu**: Wyszukiwanie konkretnych fraz w dokumencie, pliku, ciągu znaków.
- **Walidacja danych**: Sprawdzanie, czy tekst pasuje do określonego formatu (np. adresy e-mail, numery telefonów, kody
  pocztowe, itd.).
- **Znajdowanie oraz zamiana**: Znalezienie określonego wzorca i jego zamiana na inny tekst.
- **Parsowanie tekstu**: Rozpoznawanie różnych fragmentów tekstu na podstawie zdefiniowanych wzorców.

### Przykłady zastosowań

1. **Sprawdzanie formatu adresu e-mail**
   Na przykład: Czy `test@example.com` to poprawny e-mail.

2. **Weryfikacja numeru telefonu**
   Czy ciąg znaków ma odpowiedni format, np. dla numeru z Polski `+48 123 456 789`.

3. **Znajdowanie specyficznych fragmentów tekstu**
   Na przykład:
    - Wszystkie liczby w dokumencie.
    - Wszystkie słowa zaczynające się od konkretnej litery.

---

### Podstawowe elementy wyrażeń regularnych

1. **Znaki specjalne:**
    - `.` – Dowolny pojedynczy znak (z wyjątkiem znaku nowej linii).
    - `*` – Dopasowanie dowolnej liczby powtórzeń poprzedzającego znaku (w tym brak).
    - `+` – Dopasowanie co najmniej jednego powtórzenia poprzedzającego znaku.
    - `?` – Poprzedzający znak jest opcjonalny (może wystąpić raz lub wcale).
    - `^` – Początek linii lub tekstu.
    - `$` – Koniec linii lub tekstu.
    - `\` – Używane jako znak "ucieczki", aby oznaczyć, że następny znak ma być traktowany dosłownie (np. `\.` oznacza
      kropkę, a nie "dowolny znak").

2. **Grupy i zakresy:**
    - `[abc]` – Jeden z podanych znaków: `a`, `b` lub `c`.
    - `[a-z]` – Zakres, np. dowolna mała litera.
    - `[^abc]` – Dowolny znak **oprócz** `a`, `b` i `c`.
    - `(abc)` – Grupa dla wzorca `abc` (używana również do wyodrębniania danych).

3. **Kotwice (dla miejsc w tekście):**
    - `^` – Początek tekstu/linii (np. `^abc` dopasuje tylko teksty zaczynające się od "abc").
    - `$` – Koniec tekstu/linii (np. `abc$` dopasuje teksty kończące się na "abc").

4. **Kwantyfikatory:**
    - `{n}` – Dokładnie `n` wystąpień.
    - `{n,}` – Co najmniej `n` wystąpień.
    - `{n,m}` – Co najmniej `n`, ale nie więcej niż `m` wystąpień.

---

### Przykłady wyrażeń regularnych

1. **Dopasowanie wyrazów zaczynających się od liter "A" do "C":**

```
^[A-Ca-c].*
```

- Znaczenie: Linia zaczyna się dowolną literą z zakresu A-C (mała bądź wielka), a za nią występują dowolne znaki.

2. **Wszystkie cyfry w tekście:**

```
\d
```

- `\d` oznacza dowolną cyfrę (**0-9**).

3. **Adres e-mail:**

```
[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}
```

- Taki wzorzec dopasuje większość adresów e-mail.

4. **Format kodu pocztowego w Polsce (np. 00-123):**

```
\d{2}-\d{3}
```

---

### Przykład w praktyce (PHP):

W PHP wyrażenia regularne obsługują funkcje takie jak `preg_match`, `preg_replace`, itd.

```php
if (preg_match('/\d{2}-\d{3}/', '00-123')) {
    echo "Pasuje do formatu kodu pocztowego!";
}
```

Tu wyrażenie regularne `/\d{2}-\d{3}/` sprawdza, czy ciąg znaków pasuje do polskiego kodu pocztowego.

### Podsumowanie

Wyrażenia regularne są bardzo potężnym narzędziem, ale ich użycie czasem może być skomplikowane. Główna ich siła leży w
elastyczności dopasowywania i manipulowania tekstami w sposób precyzyjny i wydajny. 😊
