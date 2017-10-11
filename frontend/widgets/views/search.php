<form action="/search/main" method="get">
    <div class="search_input_wr style">
        <input value="<?= $word ?>" name="word" type="text">
    </div>

    <input type="hidden"  value="<?= $action ?>" name="action">

    <button type="submit" value=""></button>
    <div class="search-list">
        <span><?= $searchParams[$action]?></span>
        <ul class="search-ul">
            <?php foreach ($searchParams as $searchParam){?>
                <li><i><?= $searchParam ?></i></li>
            <?php } ?>
        </ul>
    </div>
</form>