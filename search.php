<?php get_header(); ?>

<main class="l-main">
    <section class="l-main__top p-mainvisual--archive">
        <!--メインヴィジュアルのsection-->
        <h2 class="p-mainvisual__title--archive">Search:
            <p><?php echo get_search_query(); ?></p> <!--検索単語が入る-->
        </h2>
    </section>
    <section class="l-main__wrapper">
        <article class="p-article">
            <h2 class="p-article__title">小見出しが入ります</h2>
            <p class="p-article__text">
                テキストが入ります。テキストが入ります。テキストが入ります。
                テキストが入ります。テキストが入ります。テキストが入ります。
                テキストが入ります。テキストが入ります。テキストが入ります。
                テキストが入ります。テキストが入ります。テキストが入ります。
                テキストが入ります。テキストが入ります。テキストが入ります。
                テキストが入ります。テキストが入ります。テキストが入ります。
                テキストが入ります。テキストが入ります。テキストが入ります。
                テキストが入ります。テキストが入ります。テキストが入ります。
            </p>
        </article>
        <article>
            <section class="p-search">
                <?php if (isset($_GET['s']) && empty($_GET['s'])) {  //検索条件未入力時の場合
                    echo '検索条件が入力されていません。'; ?>
                    <p class="p-search__result">

                    <?php } else {
                    $str = $_GET['s']; // 検索文字列の取得
                    $e_str = htmlspecialchars($str, ENT_QUOTES, "utf-8"); // 検索文字列のエスケープ処理
                    echo '"' . $e_str . '"の検索結果：' . $wp_query->found_posts . '件です。'; // 検索キーワードと該当件数を表示
                }
                    ?>
                    </p>
                    <!--ループ処理-->
                    <?php
                    if (have_posts()) : //投稿データがあるかどうかの条件分離
                        while (have_posts()) : //表示させるデータがあるかどうか
                            the_post(); ?>

                            <figure class="p-card" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                                <figcaption class="p-card__body">
                                    <h3 class="p-card__head"><?php the_title(); ?></h3>
                                    <h4 class="p-card__subhead">小見出しが入ります</h4>
                                    <p class="p-card__text">
                                        テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。
                                        テキストが入ります。テキストが入ります。
                                    </p>
                                    <a class="p-card__btn c-btn" href="<?php the_permalink(); ?>">詳しく見る</a>
                                </figcaption>
                                <img class="p-card__img" src="<?php echo get_the_post_thumbnail_url(); ?>" alt="<?php get_the_title(); ?>">
                            </figure>


                        <?php endwhile;
                    else : ?>
                        <p>入力画面に戻り、再度検索を指定して下さい</P>
                    <?php endif; ?>
        </article>
    </section>
</main>

<div class="c-pagenation">
    <ul class="c-pagenation__list">
        <?php if (function_exists('wp_pagenavi')) {
            wp_pagenavi();
        } ?>
        <!--<li class="c-pagenation__top">page 1/10</li>
                        <li class="c-pagenation__arrow-pre"><?php next_posts_link('前へ'); ?></li>
                        <li class="c-pagenation__number"><a href="">1</a></li>
                        <li class="c-pagenation__number"><a href="page-2.html">2</a></li>
                        <li class="c-pagenation__number"><a href="page-3.html">3</a></li>
                        <li class="c-pagenation__number"><a href="page-4.html">4</a></li>
                        <li class="c-pagenation__number"><a href="page-5.html">5</a></li>
                        <li class="c-pagenation__number"><a href="page-6.html">6</a></li>
                        <li class="c-pagenation__number"><a href="page-7.html">7</a></li>
                        <li class="c-pagenation__number"><a href="page-8.html">8</a></li>
                        <li class="c-pagenation__number"><a href="page-9.html">9</a></li>
                        <li class="c-pagenation__arrow-next"><?php previous_posts_link('次へ'); ?></li>-->

    </ul>
</div>

</div>
<!--container-->

<?php get_sidebar(); ?>

<?php get_footer(); ?>