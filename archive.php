<?php get_header(); ?>
                <main class="l-main">
                    <section class="l-main__top p-mainvisual--archive">
                        <h2 class="p-mainvisual__title--archive">Menu:
                            <?php if(is_category()) : ?> <!--カテゴリーの場合-->
                            <p><?php single_cat_title('',true ); ?></p> <!--カテゴリー名取得-->
                            <?php endif;?>
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
                        <?php 
                        if (have_posts()) : //投稿データがあるかどうかの条件分離
                            while (have_posts()) : //表示させるデータがあるかどうか
                                the_post(); ?>
                            <!--チーズバーガー-->
                            <figure class="p-card" id="post-<?php the_ID(); ?>"<?php post_class(); ?>>
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
                            <!--チーズバーガー-->
                            <!--<figure class="p-card">
                                <figcaption class="p-card__body">
                                    <h3 class="p-card__head">チーズバーガー</h3>
                                    <h4 class="p-card__subhead">小見出しが入ります</h4>
                                    <p class="p-card__text">
                                        テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。
                                        テキストが入ります。テキストが入ります。
                                    </p>
                                    <a class="p-card__btn c-btn" href="">詳しく見る</a>
                                </figcaption>
                                <img class="p-card__img" src="../wp-content/themes/HAMBURGER-SITE/img/archive.jpg">
                            </figure>
                            
                            <figure class="p-card">
                                <figcaption class="p-card__body">
                                    <h3 class="p-card__head"></h3>
                                    <h4 class="p-card__subhead">小見出しが入ります</h4>
                                    <p class="p-card__text">
                                        テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。
                                        テキストが入ります。テキストが入ります。
                                    </p>
                                    <a class="p-card__btn c-btn" href=""詳しく見る</a>
                                </figcaption>
                                <img class="p-card__img" src="" alt="">
                            </figure>-->
                        </article>
                        <?php endwhile;
                    else: ?>
                    <p>表示する記事がありません</P>
                    <?php endif; ?>
                    </section>
                </main>


                <div class="c-pagenation">
                    <ul class="c-pagenation__list">
                        <?php if(function_exists('wp_pagenavi')) { wp_pagenavi(); } ?>
                        <!--<li class="c-pagenation__top">page 1/10</li>
                        <li class="c-pagenation__arrow-pre"><?php next_posts_link( '前へ' ); ?></li>
                        <li class="c-pagenation__number"><a href="">1</a></li>
                        <li class="c-pagenation__number"><a href="page-2.html">2</a></li>
                        <li class="c-pagenation__number"><a href="page-3.html">3</a></li>
                        <li class="c-pagenation__number"><a href="page-4.html">4</a></li>
                        <li class="c-pagenation__number"><a href="page-5.html">5</a></li>
                        <li class="c-pagenation__number"><a href="page-6.html">6</a></li>
                        <li class="c-pagenation__number"><a href="page-7.html">7</a></li>
                        <li class="c-pagenation__number"><a href="page-8.html">8</a></li>
                        <li class="c-pagenation__number"><a href="page-9.html">9</a></li>
                        <li class="c-pagenation__arrow-next"><?php previous_posts_link( '次へ' ); ?></li>-->

                    </ul>
                </div>
            </div>
            <!--container-->

          <?php get_sidebar(); ?>
           <?php get_footer(); ?>