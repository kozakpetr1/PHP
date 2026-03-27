<?php

/*
===========================================
PHP TUTORIAL 12
$_SERVER
===========================================

Cíle:
- pochopit význam superglobální proměnné $_SERVER
- získávat informace o serveru a HTTP požadavku
- využít tyto informace v aplikaci
*/

echo "<h1>PHP Tutorial 12 - \$_SERVER</h1>";



/*
-------------------------------------------
1. CO JE $_SERVER
-------------------------------------------

$_SERVER je superglobální pole,
které obsahuje informace o:

- serveru
- HTTP požadavku
- klientovi
*/

echo "<h2>1. Základní informace</h2>";

echo "Server software: " . $_SERVER["SERVER_SOFTWARE"] . "<br>";
echo "Server name: " . $_SERVER["SERVER_NAME"] . "<br>";
echo "Server port: " . $_SERVER["SERVER_PORT"] . "<br>";



/*
-------------------------------------------
2. INFORMACE O POŽADAVKU
-------------------------------------------
*/

echo "<h2>2. Informace o požadavku</h2>";

echo "Request method: " . $_SERVER["REQUEST_METHOD"] . "<br>";
echo "Request URI: " . $_SERVER["REQUEST_URI"] . "<br>";



/*
-------------------------------------------
3. INFORMACE O KLIENTOVI
-------------------------------------------
*/

echo "<h2>3. Informace o klientovi</h2>";

echo "IP adresa klienta: " . $_SERVER["REMOTE_ADDR"] . "<br>";
echo "User agent: " . $_SERVER["HTTP_USER_AGENT"] . "<br>";



/*
-------------------------------------------
4. NÁZEV SKRIPTU
-------------------------------------------
*/

echo "<h2>4. Informace o skriptu</h2>";

echo "Script name: " . $_SERVER["SCRIPT_NAME"] . "<br>";
echo "Document root: " . $_SERVER["DOCUMENT_ROOT"] . "<br>";



/*
-------------------------------------------
5. PRAKTICKÝ PŘÍKLAD – DETEKCE METODY
-------------------------------------------
*/

echo "<h2>5. Detekce HTTP metody</h2>";

if ($_SERVER["REQUEST_METHOD"] === "POST") {

    echo "Formulář byl odeslán metodou POST.<br>";

} else {

    echo "Požadavek nebyl POST.<br>";
}



/*
-------------------------------------------
6. VÝPIS CELÉHO POLE
-------------------------------------------
*/

echo "<h2>6. Kompletní obsah</h2>";

echo "<pre>";
print_r($_SERVER);
echo "</pre>";



/*
-------------------------------------------
SHRNUTÍ
-------------------------------------------

$_SERVER obsahuje informace o:

serveru
HTTP požadavku
klientovi

Nejčastěji používané položky:

SERVER_NAME
SERVER_SOFTWARE
REQUEST_METHOD
REQUEST_URI
REMOTE_ADDR
HTTP_USER_AGENT
*/

echo "<h2>Konec ukázky</h2>";

?>