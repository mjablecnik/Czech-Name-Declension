# Czech Name Declension

Converts Czech nouns and persons' names to the requested declension.

## Usage

```php
use peterkahl\CzechNameDeclension\CzechNameDeclension;

echo CzechNameDeclension::getVocative('Antonín Dvořák');   # Antoníne Dvořáku

echo CzechNameDeclension::getVocative('Bedřich Smetana');  # Bedřichu Smetano

echo CzechNameDeclension::getVocative('Oldřiška');         # Oldřiško

# Also works with nouns
echo CzechNameDeclension::getVocative('hrad');             # hrade

```