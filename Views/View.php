<?

class View
{
    function show_list($goods_list)
    {
        $title = 'Список товаров';
        $content = 'Templates/goods_list.php';
        include 'Templates/main.php';
    }
}