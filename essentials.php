<?php

/**
 * ------------------------------------------------------------
 * Nastavení chování PHP vůči datovým typům.
 * ------------------------------------------------------------
 *
 * declare(strict_types=1) zapíná striktní typování:
 * - PHP NEPROVÁDÍ automatické (tiché) přetypování skalárních hodnot
 * - typy parametrů funkcí a návratové typy musí přesně odpovídat
 * - chybné typy způsobí TypeError místo nenápadné chyby v logice
 *
 * Příklad:
 *  function add(int $a, int $b): int {}
 *  add("2", "3"); // TypeError při strict_types=1
 *                // projde bez chyby při strict_types=0 (výchozí stav)
 *
 * Poznámka:
 * - declare() musí být první příkaz v souboru (po <?php)
 * - doporučeno pro výuku i produkční kód
 */
declare(strict_types=1);

/**
 * ------------------------------------------------------------
 * Základní šablona PHP skriptu – bez OOP (PHP 8.3+)
 * ------------------------------------------------------------
 * Zaměřeno na:
 * - skalární datové typy
 * - pole
 * - řídicí struktury
 * - typované funkce
 * ------------------------------------------------------------
 */

/**
 * ------------------------------------------------------------
 * 1. Základní datové typy
 * ------------------------------------------------------------
 */

// Skalární typy
$integerNumber = 42;               // int
$floatNumber   = 3.14;             // float
$stringValue   = 'Ahoj světe';     // string
$booleanValue  = true;             // bool

// Null
$nullableValue = null;             // null

// Výpis typů (didaktická ukázka)
var_dump(
    $integerNumber,
    $floatNumber,
    $stringValue,
    $booleanValue,
    $nullableValue
);

/**
 * ------------------------------------------------------------
 * 2. Práce s řetězci
 * ------------------------------------------------------------
 */

$firstName = 'Jan';
$lastName  = 'Novák';

// Spojování řetězců
$fullName = $firstName . ' ' . $lastName;

// Interpolace (funguje pouze s "")
$message = "Uživatel: $fullName";

echo $message . PHP_EOL;

/**
 * ------------------------------------------------------------
 * 3. Pole (array)
 * ------------------------------------------------------------
 */

// Indexované pole
$numbers = [1, 2, 3, 4, 5];

// Asociativní pole
$user = [
    'id'    => 1,
    'name'  => 'Petra',
    'email' => null,
];

// Vícedimenzionální pole
$users = [
    [
        'id' => 1,
        'name' => 'Jan',
    ],
    [
        'id' => 2,
        'name' => 'Eva',
    ],
];

/**
 * ------------------------------------------------------------
 * 4. Podmínky
 * ------------------------------------------------------------
 */

$age = 17;

if ($age >= 18) {
    echo "Uživatel je plnoletý." . PHP_EOL;
} elseif ($age >= 15) {
    echo "Uživatel je mladistvý." . PHP_EOL;
} else {
    echo "Uživatel je dítě." . PHP_EOL;
}

// Zkrácený ternární operátor
$status = ($age >= 18) ? 'dospělý' : 'nezletilý';

/**
 * ------------------------------------------------------------
 * 5. Match (PHP 8+)
 * ------------------------------------------------------------
 */

$dayNumber = 3;

$dayName = match ($dayNumber) {
    1 => 'Pondělí',
    2 => 'Úterý',
    3 => 'Středa',
    4 => 'Čtvrtek',
    5 => 'Pátek',
    6, 7 => 'Víkend',
    default => 'Neznámý den',
};

echo $dayName . PHP_EOL;

/**
 * ------------------------------------------------------------
 * 6. Cykly
 * ------------------------------------------------------------
 */

// for
for ($i = 1; $i <= 3; $i++) {
    echo "for: $i" . PHP_EOL;
}

// while
$counter = 1;
while ($counter <= 3) {
    echo "while: $counter" . PHP_EOL;
    $counter++;
}

// foreach – nejčastější v PHP
foreach ($numbers as $number) {
    echo "Číslo: $number" . PHP_EOL;
}

// foreach s klíčem
foreach ($user as $key => $value) {
    echo "$key => ";
    var_dump($value);
}

/**
 * ------------------------------------------------------------
 * 7. Funkce s typováním
 * ------------------------------------------------------------
 */

function calculateSum(int $a, int $b): int
{
    return $a + $b;
}

function formatEmail(?string $email): string
{
    return $email ?? 'neuvedeno';
}

echo calculateSum(5, 7) . PHP_EOL;
echo formatEmail($user['email']) . PHP_EOL;

/**
 * ------------------------------------------------------------
 * 8. Základní práce s chybami
 * ------------------------------------------------------------
 */

$value = '10';

// Přetypování (type casting)
$intValue = (int) $value;

// Striktní porovnání
if ($intValue === 10) {
    echo "Hodnota je přesně 10 (int)." . PHP_EOL;
}

/**
 * ------------------------------------------------------------
 * PŘEHLED ZÁKLADNÍCH OPERÁTORŮ V PHP
 * ------------------------------------------------------------
 */

/**
 * 1. Aritmetické operátory
 *
 * +   sčítání
 * -   odčítání
 * *   násobení
 * /   dělení
 * %   zbytek po dělení (modulo)
 * **  mocnina
 */

/**
 * 2. Operátory přiřazení
 *
 * =    přiřazení hodnoty
 * +=   přičtení a přiřazení
 * -=   odečtení a přiřazení
 * *=   násobení a přiřazení
 * /=   dělení a přiřazení
 * .=   spojení řetězců a přiřazení
 */

/**
 * 3. Porovnávací operátory
 *
 * ==    rovnost hodnot (s přetypováním)
 * ===   identita (hodnota + typ)
 * !=    nerovnost
 * !==   nerovnost včetně typu
 * <     menší než
 * >     větší než
 * <=    menší nebo rovno
 * >=    větší nebo rovno
 * <=>   spaceship (−1, 0, 1)
 */

/**
 * 4. Logické operátory
 *
 * &&    logické AND
 * ||    logické OR
 * !     logické NOT
 * and   AND (nižší priorita než &&)
 * or    OR  (nižší priorita než ||)
 */

/**
 * 5. Operátory pro řetězce
 *
 * .     spojení řetězců
 * .=    spojení a přiřazení
 */

/**
 * 6. Operátory pro práci s NULL
 *
 * ??    null coalescing (výchozí hodnota)
 * ??=   null coalescing assignment
 *
 * Příklad:
 *  $value ??= 'default';
 */

/**
 * 7. Ternární operátor
 *
 * ?:    podmíněný výraz
 *
 * Příklad:
 *  $status = ($age >= 18) ? 'dospělý' : 'nezletilý';
 */

/**
 * 8. Operátory pro pole
 *
 * +     sjednocení polí (levé má prioritu)
 * ==    porovnání hodnot
 * ===   porovnání hodnot i pořadí a typů
 */

/**
 * 9. Typové operátory
 *
 * instanceof   ověření typu objektu
 * (int)        přetypování
 * (string)
 * (bool)
 */

/**
 * 10. Inkremetační a dekrementační
 *
 * ++$a   pre-inkrementace
 * $a++   post-inkrementace
 * --$a   pre-dekrementace
 * $a--   post-dekrementace
**/


/**
 * ============================================================
 * PHP 8.3+ – přehled základních operací a operátorů
 * ============================================================
 */

/**
 * ------------------------------------------------------------
 * 1. Základní datové typy
 * ------------------------------------------------------------
 */
$intValue    = 10;
$floatValue  = 3.5;
$stringValue = 'PHP';
$boolValue   = true;
$nullValue   = null;

var_dump($intValue, $floatValue, $stringValue, $boolValue, $nullValue);

/**
 * ------------------------------------------------------------
 * 2. Aritmetické operátory
 * ------------------------------------------------------------
 */
$a = 10;
$b = 3;

echo "Sčítání: " . ($a + $b) . PHP_EOL;
echo "Odčítání: " . ($a - $b) . PHP_EOL;
echo "Násobení: " . ($a * $b) . PHP_EOL;
echo "Dělení: " . ($a / $b) . PHP_EOL;
echo "Modulo: " . ($a % $b) . PHP_EOL;
echo "Mocnina: " . ($a ** $b) . PHP_EOL;

/**
 * ------------------------------------------------------------
 * 3. Operátory přiřazení
 * ------------------------------------------------------------
 */
$x = 5;
$x += 2;   // 7
$x -= 1;   // 6
$x *= 3;   // 18
$x /= 2;   // 9

echo "Hodnota x: $x" . PHP_EOL;

/**
 * ------------------------------------------------------------
 * 4. Porovnávací operátory
 * ------------------------------------------------------------
 */
$a = 10;
$b = '10';

var_dump($a == $b);   // true
var_dump($a === $b);  // false
var_dump($a != $b);   // false
var_dump($a !== $b);  // true
var_dump($a > 5);     // true
var_dump($a <= 10);   // true

/**
 * ------------------------------------------------------------
 * 5. Logické operátory
 * ------------------------------------------------------------
 */
$age = 20;
$isStudent = true;

var_dump($age >= 18 && $isStudent);
var_dump($age < 18 || $isStudent);
var_dump(!$isStudent);

/**
 * ------------------------------------------------------------
 * 6. Ternární operátor
 * ------------------------------------------------------------
 */
$age = 17;

$status = ($age >= 18) ? 'dospělý' : 'nezletilý';
echo "Status: $status" . PHP_EOL;

/**
 * ------------------------------------------------------------
 * 7. Operátor ?? (null coalescing)
 * ------------------------------------------------------------
 */
$user = [
    'name' => 'Eva',
    'email' => null,
];

$email = $user['email'] ?? 'neuvedeno';
echo "Email: $email" . PHP_EOL;

/**
 * ------------------------------------------------------------
 * 8. Operátor ??= (null coalescing assignment)
 * ------------------------------------------------------------
 */
$city = null;
$city ??= 'Praha';

echo "Město: $city" . PHP_EOL;

/**
 * ------------------------------------------------------------
 * 9. Řetězcové operátory
 * ------------------------------------------------------------
 */
$firstName = 'Jan';
$lastName  = 'Novák';

$fullName = $firstName . ' ' . $lastName;
$fullName .= ' (učitel)';

echo "Celé jméno: $fullName" . PHP_EOL;

/**
 * ------------------------------------------------------------
 * 10. Operátory pro pole
 * ------------------------------------------------------------
 */
$arrayA = ['a' => 1, 'b' => 2];
$arrayB = ['b' => 3, 'c' => 4];

$resultArray = $arrayA + $arrayB;

print_r($resultArray);

/**
 * ------------------------------------------------------------
 * 11. Inkremetace a dekrementace
 * ------------------------------------------------------------
 */
$i = 1;

echo ++$i . PHP_EOL; // 2
echo $i++ . PHP_EOL; // 2
echo $i . PHP_EOL;   // 3

echo --$i . PHP_EOL; // 2
echo $i-- . PHP_EOL; // 2
echo $i . PHP_EOL;   // 1

/**
 * ------------------------------------------------------------
 * 12. Typové přetypování
 * ------------------------------------------------------------
 */
$value = '123';
$number = (int) $value;

var_dump($number);

/**
 * $$ (variable variables)
 *
 * Umožňuje přistupovat k proměnné nepřímo – název proměnné
 * je uložen v jiné proměnné.
 *
 * PHP nejprve vyhodnotí vnitřní proměnnou ($name)
 * a její hodnotu použije jako název jiné proměnné.
 *
 * Zápis:
 *  $$name  ==  ${$name}
 *
 * Použití:
 * - dynamická práce s názvy proměnných
 * - historicky používané ve starším PHP
 *
 * Nevýhody:
 * - špatná čitelnost kódu
 * - riziko bezpečnostních chyb
 * - obtížné ladění
 *
 * Doporučení:
 * - ve výuce ukázat, ale v praxi preferovat pole (array)
 */

$variableName = 'age';
$age = 18;

echo $$variableName; // 18