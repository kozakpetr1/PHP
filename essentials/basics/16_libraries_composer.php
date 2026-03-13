<?php

/*
===========================================
PHP TUTORIAL 16
Práce s knihovnami a Composer
===========================================

Cíle:
- pochopit co je knihovna
- naučit se používat Composer
- instalovat balíčky
- načítat knihovny pomocí autoload
*/

echo "<h1>PHP Tutorial 16 - Composer</h1>";

/*
-------------------------------------------
1. CO JE KNIHOVNA
-------------------------------------------

Knihovna je balík hotového kódu,
který řeší nějaký problém.

Například:

- práce s PDF
- posílání emailů
- HTTP klient
- práce s databází
*/

echo "<h2>1. Co je knihovna</h2>";

echo "Knihovna je znovupoužitelný kód.<br>";



/*
-------------------------------------------
2. CO JE COMPOSER
-------------------------------------------

Composer je správce balíčků pro PHP.

Podobně jako:

npm (JavaScript)
pip (Python)
apt (Linux)
*/

echo "<h2>2. Composer</h2>";

echo "Composer spravuje PHP knihovny.<br>";



/*
-------------------------------------------
3. INSTALACE COMPOSERU
-------------------------------------------

Na Linuxu:

sudo apt install composer

Kontrola:

composer --version
*/

echo "<h2>3. Instalace Composeru</h2>";

echo "Composer se spouští z příkazové řádky.<br>";



/*
-------------------------------------------
4. VYTVOŘENÍ PROJEKTU
-------------------------------------------

Inicializace projektu:

composer init
*/

echo "<h2>4. composer.json</h2>";

echo "Composer vytvoří soubor composer.json.<br>";



/*
Ukázka composer.json
*/

echo "<pre>";

echo '{
  "name": "example/project",
  "require": {
    "monolog/monolog": "^3.0"
  }
}';

echo "</pre>";



/*
-------------------------------------------
5. INSTALACE KNIHOVNY
-------------------------------------------

composer require monolog/monolog
*/

echo "<h2>5. Instalace knihovny</h2>";

echo "Composer stáhne balíček do složky vendor.<br>";



/*
-------------------------------------------
6. AUTOLOAD
-------------------------------------------

Composer generuje autoload soubor.
*/

echo "<h2>6. Autoload</h2>";

echo "require 'vendor/autoload.php';<br>";



/*
-------------------------------------------
7. POUŽITÍ KNIHOVNY
-------------------------------------------
*/

require __DIR__ . '/vendor/autoload.php';

use Monolog\Logger;
use Monolog\Handler\StreamHandler;

echo "<h2>7. Ukázka Monolog</h2>";

$log = new Logger("app");

$log->pushHandler(new StreamHandler("app.log", Logger::WARNING));

$log->warning("Testovací log");

echo "Log byl zapsán do souboru app.log.<br>";



/*
-------------------------------------------
8. DALŠÍ UŽITEČNÉ PŘÍKAZY
-------------------------------------------

composer install
composer update
composer remove
*/

echo "<h2>8. Composer příkazy</h2>";

echo "<ul>
<li>composer install</li>
<li>composer update</li>
<li>composer require</li>
<li>composer remove</li>
</ul>";



/*
-------------------------------------------
9. PRAKTICKÉ KNIHOVNY
-------------------------------------------

Mezi často používané patří:

monolog/monolog
guzzlehttp/guzzle
twig/twig
phpmailer/phpmailer
*/

echo "<h2>9. Příklady knihoven</h2>";

echo "<ul>
<li>Monolog – logování</li>
<li>Guzzle – HTTP klient</li>
<li>Twig – templating</li>
<li>PHPMailer – email</li>
</ul>";



/*
-------------------------------------------
SHRNUTÍ
-------------------------------------------

Composer je správce balíčků pro PHP.

Základní kroky:

1) composer init
2) composer require knihovna
3) require vendor/autoload.php
*/

echo "<h2>Konec ukázky</h2>";

?>