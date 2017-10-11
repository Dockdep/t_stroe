<form action="/search/main" method="get">
    <div class="search_input_wr style">
        <input value="<?= $word ?>" name="word" type="text">
    </div>

    <input type="hidden"  value="<?= $action ?>" name="action">

    <button type="submit" value=""></button>
    <div class="search-list">
        <span>по номеру товара</span>
        <ul class="search-ul">
            <li><i>по номеру товара</i></li>
            <li><i>по бренду</i></li>
            <li><i>по названию товара</i></li>
        </ul>
    </div>
</form>