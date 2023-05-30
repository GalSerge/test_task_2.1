<div class="wrapper">
    <?
foreach ($goods_list as $good)
    echo '
    <div class="card">
        <div class="card_img">
            <img src="images/'.$good['image'].'">
        </div>
        <div class="card_price">
            <span>'.$good['price'].'$</span>
        </div>
        <div class="card_title">
            '.$good['name'].'
        </div>
    </div>' ?>
</div>

