<?php

// Create Stock Interface and Implement it in the MyStock Class

interface Stock
{
    public function StockLimit($limitHas);

    public function  CurrentStock($limitHave);
}

class MyStock implements Stock
{

    public function StockLimit($limitHas)
    {
        echo "Previous Stock : " . $limitHas . PHP_EOL;
    }

    public function CurrentStock($limitHave)
    {
        echo "Current Stock : " . $limitHave . PHP_EOL;
    }
}

$stockLimit1 = new MyStock();
$stockLimit1->StockLimit(8787878);
$stockLimit1->CurrentStock(9789797);
