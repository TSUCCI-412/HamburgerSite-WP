
<?php $search_query = get_search_query(); ?>
<!--methodにgetを指定することでgetリクエストにてaction先⇒homeに送信-->
<form class="p-search-form" method="get" action="<?php echo esc_url(home_url('/')); ?>">
    <label for="search" class="screen-reader-text"></label>
    <input class="p-search-form__keyword fas fa-search" placeholder="&#xf002;" type="text" name="s" id="s" value="">
    <input class="p-search-form__submit c-btn--search c-btn" type="submit" value="検索">
</form>

<!--検索機能をつけるのにid="s"が必要-->
<!--inputタグのtypeをtextではなくsearchにすれば検索後に×が表示される。しかし枠線のズレが生じるためtextに変更
valueの中を変更すれば検索語の文字が残るやり方もあり-->