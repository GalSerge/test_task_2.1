<?

ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

require "Models/Goods.php";

$goods = new Goods();

if (isset($_GET['good']))
{
    echo 1;
} else if (isset($_GET['comment']))
{
    echo 2;
} else
{
    $goods_list = $goods->get_all();
    var_dump($goods_list);
}