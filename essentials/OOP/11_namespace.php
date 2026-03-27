<?php

/*
===========================================
PHP TUTORIAL 11
Namespace (jmenné prostory)
===========================================

Cíle:
- pochopit, proč namespace existují
- naučit se definovat namespace
- pochopit konflikt názvů tříd
- naučit se používat use (import)
- pochopit plně kvalifikovaný název
*/


// ==================================================
// 1) PROBLÉM – dvě třídy se stejným názvem
// ==================================================

// Představ si, že máme dvě různé třídy se stejným názvem Person
// (např. z různých částí aplikace)

// BEZ namespace by to způsobilo CHYBU!


// ==================================================
// 2) ŘEŠENÍ – namespace
// ==================================================


// --------------------------------------------------
// "Virtuální soubor" 1
// --------------------------------------------------

namespace App\Models;

// Tato třída patří do prostoru App\Models
class Person
{
    public function whoAmI()
    {
        return "Jsem App\\Models\\Person";
    }
}


// --------------------------------------------------
// "Virtuální soubor" 2
// --------------------------------------------------

namespace App\Users;

// Jiná třída se stejným názvem, ale jiný namespace
class Person
{
    public function whoAmI()
    {
        return "Jsem App\\Users\\Person";
    }
}


// ==================================================
// 3) POUŽITÍ namespace v hlavním skriptu
// ==================================================

// Přepneme se zpět do globálního prostoru
namespace {

    // ----------------------------------------------
    // Použití plně kvalifikovaného názvu
    // ----------------------------------------------

    // Musíme uvést CELÝ název včetně namespace
    $modelPerson = new App\Models\Person();
    $userPerson = new App\Users\Person();

    echo $modelPerson->whoAmI();
    echo "<br>";
    echo $userPerson->whoAmI();

    echo "<br><br>";


    // ----------------------------------------------
    // Použití "use" (import)
    // ----------------------------------------------

    // Zkrátíme si názvy tříd
    use App\Models\Person as ModelPerson;
    use App\Users\Person as UserPerson;

    $p1 = new ModelPerson();
    $p2 = new UserPerson();

    echo $p1->whoAmI();
    echo "<br>";
    echo $p2->whoAmI();
}


// ==================================================
// 4) DŮLEŽITÉ POZNÁMKY
// ==================================================

/*
1) namespace je jako "balíček" pro třídy
   → umožňuje mít stejné názvy tříd bez konfliktu

2) zpětné lomítko "\" znamená:
   → "začni od kořene" (globálního prostoru)

3) use slouží ke zkrácení názvů tříd

4) v praxi:
   - každý soubor má vlastní namespace
   - odpovídá struktuře složek

Např.:
App/
 ├── Models/Person.php   → namespace App\Models;
 └── Users/Person.php    → namespace App\Users;
*/