<?php

/*
===========================================
PHP TUTORIAL 17
Common Libraries
===========================================

Cíle:
- poznat běžné PHP knihovny
- pochopit jejich využití
- naučit se instalaci pomocí Composeru
*/

echo "<h1>PHP Tutorial 17 - Common Libraries</h1>";

/*
-------------------------------------------
1. CO JSOU COMMON LIBRARIES
-------------------------------------------

Common libraries jsou knihovny,
které se často používají ve webových aplikacích.

Řeší například:

- logování
- odesílání emailů
- práci s HTTP
- šablonování HTML
*/

echo "<h2>1. Přehled běžných knihoven</h2>";

echo "<ul>
<li>Monolog – logování</li>
<li>Guzzle – HTTP klient</li>
<li>Twig – templating</li>
<li>PHPMailer – odesílání emailů</li>
<li>Carbon – práce s datem a časem</li>
</ul>";



/*
-------------------------------------------
2. MONOLOG – LOGOVÁNÍ
-------------------------------------------

Instalace:

composer require monolog/monolog
*/

echo "<h2>2. Monolog</h2>";

echo "Monolog slouží pro logování událostí.<br>";



/*
Ukázka použití
*/

require __DIR__ . '/vendor/autoload.php';

use Monolog\Logger;
use Monolog\Handler\StreamHandler;

$log = new Logger("app");

$log->pushHandler(new StreamHandler("app.log", Logger::WARNING));

$log->warning("Ukázková zpráva");

echo "Log byl uložen do souboru.<br>";



/*
-------------------------------------------
3. GUZZLE – HTTP CLIENT
-------------------------------------------

Používá se pro komunikaci s API.

composer require guzzlehttp/guzzle
*/

echo "<h2>3. Guzzle</h2>";

echo "Guzzle umožňuje posílat HTTP požadavky.<br>";

/*
Příklad (zjednodušený):

$client = new GuzzleHttp\Client();
$response = $client->request('GET', 'https://api.example.com');
*/



/*
-------------------------------------------
4. TWIG – TEMPLATE ENGINE
-------------------------------------------

Twig odděluje:

logiku aplikace
a HTML šablony

composer require twig/twig
*/

echo "<h2>4. Twig</h2>";

echo "Twig je templating engine.<br>";



/*
-------------------------------------------
5. PHPMAILER – EMAIL
-------------------------------------------

Používá se pro odesílání emailů.

composer require phpmailer/phpmailer
*/

echo "<h2>5. PHPMailer</h2>";

echo "PHPMailer umožňuje odesílat emaily přes SMTP.<br>";



/*
-------------------------------------------
6. CARBON – DATUM A ČAS
-------------------------------------------

composer require nesbot/carbon
*/

echo "<h2>6. Carbon</h2>";

echo "Carbon usnadňuje práci s datem a časem.<br>";

/*
Ukázka:

use Carbon\Carbon;

echo Carbon::now();
*/



/*
-------------------------------------------
7. PACKAGIST
-------------------------------------------

Hlavní repozitář PHP balíčků.

https://packagist.org
*/

echo "<h2>7. Packagist</h2>";

echo "Packagist obsahuje tisíce PHP knihoven.<br>";



/*
-------------------------------------------
SHRNUTÍ
-------------------------------------------

Často používané knihovny:

Monolog – logování
Guzzle – HTTP klient
Twig – templating
PHPMailer – email
Carbon – datum a čas

Instalace pomocí Composer:

composer require název/knihovna
*/

echo "<h2>Konec ukázky</h2>";

?>