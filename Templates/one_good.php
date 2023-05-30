<h1> <? echo $good['name'] ?></h1>

<?
foreach ($comments as $comm)
{
    echo '<h3>' . $comm['nickname'] . '</h3>';
    echo '<p>' . $comm['text'] . '</p>';
}

?>