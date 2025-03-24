# Namespace

Namespace (przestrzeń nazw) przypisuje unikalny obszar dla kodu.

Przestrzeń nazw powinna być zdefiniowana na samym początku pliku (przed jakimkolwiek innym kodem, z wyjątkiem deklaracji
`declare`); korzysta się ze słowa kluczowego `namespace`.

```injectablephp
// __DIR__ . 'Moje/App/KLasaTestowa.php'
<?php
namespace Moje\App;

class KlasaTestowa {
    public function witaj() {
        return "Witaj w przestrzeni nazw Moje\\App!";
    }
}
```

Aby uzyskać dostęp do klasy lub funkcji z konkretnej przestrzeni nazw, należy odwołać się do niej poprzez pełną ścieżkę
lub alias.

```injectablephp
<?php
require 'KlasaTestowa.php';

// $obiekt = new Moje\App\KlasaTestowa();  <=>

use Moje\App;

$obiekt = new KlasaTestowa();
echo $obiekt->witaj();
```

Kod, który nie jest w żadnej przestrzeni nazw, znajduje się w tzw. **globalnej przestrzeni nazw**. Aby odwołać się do
klasy z globalnej przestrzeni nazw w kontekście `namespace`, należy użyć prefiksu `\`.

```injectablephp

<?php
namespace Moje\App;

$datetime = new \DateTime(); // Używamy globalnej klasy DateTime
```

Jeśli używasz przestrzeni nazw, dobrym pomysłem jest użycie standardu PSR-4 do automatycznego ładowania klas.
Foldery są mapowane do nazw przestrzeni, co pozwala na automatyczne ładowanie klas bez wymogu ręcznego `require`.

```text
src/
  Moje/
    App/
      KlasaTestowa.php
```

```injectablephp
<?php
namespace Moje\App;

class KlasaTestowa {
    // Klasa...
}
```

```json
{
    "autoload": {
        "psr-4": {
            "Moje\\": "src/Moje/"
        }
    }
}
```


