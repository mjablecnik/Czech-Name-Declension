# Czech Name Declension

Converts Czech nouns and persons' names to the requested declension.

## Usage

```php
use peterkahl\CzechNameDeclension\CzechNameDeclension;

echo CzechNameDeclension::getVocative('Vojta');   # Vojto

echo CzechNameDeclension::getVocative('Antonín'); # Antoníne

echo CzechNameDeclension::getVocative('Bedřich'); # Bedřichu
```