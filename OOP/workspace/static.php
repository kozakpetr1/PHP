<?php
class Miner
{
    // Statická vlastnost pro počítání vytvořených objektů
    public static $coins = 0; // co vytěží všichni těžaři dohromady
    public $myCoins = 0; // co vytěží konkrétní těžař
 
    public static function mine($coins)
    {
        self::$coins += $coins;
    }

    public function mineCoins($coins)
    {
        self::$coins += $coins;
        $this->myCoins += $coins;
    }
}

// Vytvoření několika objektů a těžení mincí
$m1 = new Miner();
$m2 = new Miner();
$m3 = new Miner();
$m1->mineCoins(10);
$m2->mineCoins(20);
$m3->mineCoins(30);
echo "Celkový počet vytěžených mincí: " . Miner::$coins;
echo "<br>";
echo "Těžař 1 vytěžil: " . $m1->myCoins . " mincí<br>";
echo "Těžař 2 vytěžil: " . $m2->myCoins . " mincí<br>";
echo "Těžař 3 vytěžil: " . $m3->myCoins . " mincí<br>";