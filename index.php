<?php get_header(); ?>
            <main class="l-main">
                <!--メインヴィジュアルのsection-->
                <section class="p-mainvisual">
                    <h2 class="p-mainvisual__title">ダミーサイト</h2>
                </section>

                <!--TakeoutとEatinメニューを囲む-->
                <section class="l-main__wrapper p-branchmenu">
                
                <!--Takeoutのカテゴリーを取得してページ遷移させる-->
                <div class="p-branchmenu--takeout">
                <?php       
                $cat = get_cat_ID('Take Out'); //カテゴリー名からカテゴリーIDを取得
                $cat_link = get_category_link($cat);//取り出したカテゴリーIDをget_category_linkに指定
            ?>
                        <h3 class="p-branchmenu__head"><a href="<?php echo $cat_link ?>">Take Out</a></h3>
                        <!--カードを囲む-->
                        <ul class="p-branchmenu__list">
                           <a href="<?php echo $cat_link ?>">
                           <!--dlにリンクを付けるためにaタグを追加-->
                            <li class="p-branchmenu__item">
                                <dl>
                                    <dt>Take Out</dt>
                                    <dd>当店のテイクアウトで利用できる商品を掲載しています</dd>
                                </dl>
                            </li>
                            <li class="p-branchmenu__item">
                                <dl>
                                    <dt>Take Out</dt>
                                    <dd>当店のテイクアウトで利用できる商品を掲載しています</dd>
                                </dl>
                            </li>
</a>
                        </ul>
                    </div>
                    <!--Eatinのカテゴリーを取得してページ遷移させる-->
                    <div class="p-branchmenu--eatin">
                    <?php       
                    $cat = get_cat_ID('Eat In');
                    $cat_link = get_category_link($cat);
                ?>
                        <h3 class="p-branchmenu__head"><a href="<?php echo $cat_link ?>">Eat In</a></h3>
                        <!--カードを囲む-->
                        <ul class="p-branchmenu__list">
                        <a href="<?php echo $cat_link ?>">
                            <li class="p-branchmenu__item">
                                <dl>
                                    <dt>Eat In</dt>
                                    <dd>当店のテイクアウトで利用できる商品を掲載しています</dd>
                                </dl>
                            </li>
                            <li class="p-branchmenu__item">
                                <dl>
                                    <dt>Eat In</dt>
                                    <dd>当店のテイクアウトで利用できる商品を掲載しています</dd>
                                </dl>
                            </li></a>
                        </ul>
                    </div>
                    
                </section>
                <!--TakeoutとEatinメニューを囲むsection-->

                <!--Mapのsection-->
                <section class="l-main__map p-map">
                    <div class="p-map__wrap">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d13046.008691578849!2d136.87702724578173!3d35.169034399033535!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x600376e794d78b89%3A0x81f7204bf8261663!2z5ZCN5Y-k5bGL6aeF!5e0!3m2!1sja!2sjp!4v1631351592153!5m2!1sja!2sjp"
                            style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                    </div>

                    <!--地図のグレーカラー-->
                    <div class="p-map__layer"></div>
                    <div class="p-map__content">
                        <h3 class="p-map__head">見出しが入ります</h3>
                        <!--疑似要素で横線追加-->
                        <p class="p-map__txt">
                            テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。
                            テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。
                            テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。
                            テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。
                            テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。
                            テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。
                            テキストが入ります。テキストが入ります。テキストが入ります。
                        </p>
                    </div>

                </section>
            </main>
        </div>
        <!--c-container__main-->
        <?php get_sidebar(); ?>

        <?php get_footer(); ?>
                    