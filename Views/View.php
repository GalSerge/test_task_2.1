<?

class View
{
    function show_list($goods_list)
    {
        $title = 'Список товаров';
        $content = 'Templates/goods_list.php';
        include 'Templates/main.php';
    }

    function show_one_good($good, $comments)
    {
        $title = $good['name'];
        $content = 'Templates/one_good.php';
        include 'Templates/main.php';
    }

}