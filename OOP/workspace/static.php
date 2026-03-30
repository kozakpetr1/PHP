<?php
class Miner
{
    // Statická vlastnost pro počítání vytvořených objektů
    public static $coins = 0; // co vytěží všichni těžaři dohromady
    public $myCoins = 0; // co vytěží konkrétní těžař
 
    /** Statická metoda pro těžení mincí bez nutnosti vytvářet objekt
     * Může být volána přímo přes třídu, např. Miner::mine(10);
     */
    public static function mine($coins)
    {
        self::$coins += $coins; // aktualizace celkového počtu mincí
    }

    /* Metoda pro těžení mincí, která aktualizuje jak celkový počet, tak i počet pro konkrétního těžaře
     * Vyžaduje vytvoření objektu, např. $miner = new Miner(); $miner->mineCoins(10);
     */
    public function mineCoins($coins)
    {
        self::$coins += $coins; // aktualizace celkového počtu mincí
        $this->myCoins += $coins; // aktualizace počtu mincí pro tohoto těžaře
    }
}

// Vytvoření několika objektů a těžení mincí
$m1 = new Miner(); // těžař 1
$m2 = new Miner(); // těžař 2
$m3 = new Miner(); // těžař 3
$m1->mineCoins(10); // těžař 1 vytěží 10 mincí
$m2->mineCoins(20); // těžař 2 vytěží 20 mincí
$m3->mineCoins(30); // těžař 3 vytěží 30 mincí
echo "Celkový počet vytěžených mincí: " . Miner::$coins;
echo "<br>";
echo "Těžař 1 vytěžil: " . $m1->myCoins . " mincí<br>";
echo "Těžař 2 vytěžil: " . $m2->myCoins . " mincí<br>";
echo "Těžař 3 vytěžil: " . $m3->myCoins . " mincí<br>";