<div class="wrapper">
    <?
foreach ($goods_list as $good)
    echo '
    <a class="card" href="index.php?good='.$good['good_id'].'">
        <div class="card_img">
            <img src="images/'.$good['image'].'">
        </div>
        <div class="card_price">
            <span>'.$good['price'].'$</span>
        </div>
        <div class="card_title">
            '.$good['name'].'
        </div>
    </a>' ?>
</div>

