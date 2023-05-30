<?

ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

require "Models/Goods.php";
require "Views/View.php";

$goods = new Goods();
$view = new View();

if (isset($_GET['good']))
{
    $good = $goods->get_by_id($_GET['good']);
    $comments = $goods->get_comments($_GET['good']);

    if ($good == null)
    {
        header('HTTP/1.1 404 Not Found');
        die();
    }

    $view->show_one_good($good, $comments);
} else if (isset($_GET['comment']))
{
    echo 2;
} else
{
    $goods_list = $goods->get_all();
    $view->show_list($goods_list);
}