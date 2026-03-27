<?php

/*
===========================================
PHP TUTORIAL 14
Práce se soubory
===========================================

Cíle:
- naučit se číst soubory
- zapisovat data do souboru
- přidávat data na konec souboru
- mazat soubory
*/

echo "<h1>PHP Tutorial 14 - Práce se soubory</h1>";

$file = "data.txt";


/*
-------------------------------------------
1. ZÁPIS DO SOUBORU (WRITE)
-------------------------------------------

Mode "w":
- vytvoří soubor
- přepíše existující obsah
*/

echo "<h2>1. Zápis do souboru</h2>";

$content = "Toto je první řádek souboru.";

$handle = fopen($file, "w");
fwrite($handle, $content);
fclose($handle);

echo "Data byla zapsána.<br>";



/*
-------------------------------------------
2. ČTENÍ SOUBORU (READ)
-------------------------------------------

Mode "r":
- otevře soubor pouze pro čtení
*/

echo "<h2>2. Čtení souboru</h2>";

$handle = fopen($file, "r");

$data = fread($handle, filesize($file));

fclose($handle);

echo "Obsah souboru:<br>";
echo $data . "<br>";



/*
-------------------------------------------
3. PŘIDÁNÍ OBSAHU (APPEND)
-------------------------------------------

Mode "a":
- přidá data na konec souboru
*/

echo "<h2>3. Přidání obsahu</h2>";

$newLine = "\nDruhý řádek přidaný do souboru.";

$handle = fopen($file, "a");
fwrite($handle, $newLine);
fclose($handle);

echo "Nový řádek byl přidán.<br>";



/*
-------------------------------------------
4. ZNOVU ČTENÍ SOUBORU
-------------------------------------------
*/

echo "<h2>4. Aktuální obsah souboru</h2>";

echo "<pre>";
echo file_get_contents($file);
echo "</pre>";



/*
-------------------------------------------
5. SMAZÁNÍ SOUBORU
-------------------------------------------

unlink() odstraní soubor ze systému.
*/

echo "<h2>5. Smazání souboru</h2>";

if (file_exists($file)) {

    unlink($file);

    echo "Soubor byl smazán.<br>";
}



/*
-------------------------------------------
6. KONTROLA EXISTENCE SOUBORU
-------------------------------------------
*/

echo "<h2>6. Kontrola existence</h2>";

if (file_exists($file)) {

    echo "Soubor existuje.<br>";

} else {

    echo "Soubor neexistuje.<br>";
}



/*
-------------------------------------------
7. JEDNODUŠŠÍ FUNKCE PRO PRÁCI SE SOUBORY
-------------------------------------------

PHP nabízí jednodušší funkce:
*/

echo "<h2>7. Alternativní funkce</h2>";

$text = "Ukázkový text.";

file_put_contents("example.txt", $text);

echo file_get_contents("example.txt");

unlink("example.txt");



/*
-------------------------------------------
SHRNUTÍ
-------------------------------------------

Otevření souboru:
fopen()

Čtení:
fread()
file_get_contents()

Zápis:
fwrite()
file_put_contents()

Smazání:
unlink()

Kontrola existence:
file_exists()
*/

echo "<h2>Konec ukázky</h2>";

?>