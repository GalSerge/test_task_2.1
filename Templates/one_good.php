<div class="wrapper_good card">
    <div class="img_good">
        <img src="images/<? echo $good['image'] ?>">
    </div>
    <div class="info">
        <div class="card_title">
            <? echo $good['name'] ?>
        </div>
        <div class="card_price">
            <span><? echo $good['price'].'$' ?></span>
        </div>
    </div>
    <div class="comms">
        <div id="comms_list" class="comms_list">
            <?

            foreach ($comments as $comm) echo '<div class="comm">
                <div class="nickname">
                    '.$comm['nickname'].'
                </div>
                <div class="text">
                    '.$comm['text'].'
                </div>
            </div>'

            ?>
        </div>
        <form id="add" class="comms_add">
            <div class="form_item">Оставить отзыв</div>
            <div class="form_item"><input type="hidden" id="good_id" value="<? echo $good['good_id'] ?>"></div>
            <div class="form_item"><input type="text" id="nickname" placeholder="Имя"></div>
            <div class="form_item"><textarea type="text" id="text" placeholder="Отзыв" maxlength="140"></textarea></div>
            <div class="form_item" id="msg">
            </div>
            <div class="form_item">
                <button type="button" onclick="send_comm();">Отправить</button>
            </div>
        </form>
    </div>
</div>
