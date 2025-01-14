# Asennus

## Versiot
- Laravel 11
- PHP 8.4
- MySQL 8

## Käyttöönnotto
Asenna php palvelimelle. Ohjelman juurikansio public, josta index.php löytyy.

Kopioi ``.env.example`` ja nimeä se uudelleen ``.env``, ja sijoita se samaan kansioon.

Suorita tarvittavat komennot.

### Tietokanta
- Portti: 3306
- Tietokanta: taitaja2023
- Käyttäjä: root
- Salasana: _Ei salasanaa_

## Komennot
``composer install``

``php artisan key:generate``

``php artisan migrate:fresh --seed``

## Lopuksi
Tässä vaiheessa ohjelman tulisi toimia normaalisti.