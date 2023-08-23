<?php



interface pizza_hut
{
    function venue();
    function employee();
    function oven();
    function saman();
}


class pizza_shop implements pizza_hut
{
    public function venue()
    {
        echo "venue<br>";
    }
    public function employee()
    {
        echo "employee<br>";
    }
    public function oven()
    {
        echo "oven<br>";
    }
    public function saman()
    {
        echo "saman<br>";
    }
}


$shop = new pizza_shop;
$shop->employee();
$shop->saman();
$shop->venue();
$shop->oven();





?>