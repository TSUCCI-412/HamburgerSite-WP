<?php get_header(); ?>
                <main class="l-main">
                    <!--メインヴィジュアルのsection-->
                    <section class="l-main__top p-mainvisual--single" style="background-image: url(<?php echo wp_get_attachment_url( get_post_thumbnail_id() ); ?>)">
                        <h2 class="p-mainvisual__title--single"><?php the_title(); ?></h2>
                    </section>
                    <section class="l-main__wrapper--special">

                    <?php if(have_posts()):
                        while(have_posts()):
                            the_post(); ?>
                            <?php remove_filter ('the_content', 'wpautop'); ?> <!--WPで自動生成されるbrタグやｐなどを制御-->

                            <?php the_content(); ?> 
                            <?php wp_link_pages(); //記事内ページャー ?>

                        <!--<article class="p-article">
                            <h2 class="p-article__title">見出しh2</h2>
                            <p class="p-article__text">
                                PタグテキストPタグテキストPタグテキストPタグテキストPタグテキストPタグテキストPタグテキストPタグテキスト
                                PタグテキストPタグテキストPタグテキストPタグテキストPタグテキストPタグテキストPタグテキストPタグテキスト
                                PタグテキストPタグテキストPタグテキストPタグテキストPタグテキストPタグテキストPタグテキストPタグテキスト
                                PタグテキストPタグテキストPタグテキストPタグテキストPタグテキストPタグテキストPタグテキストPタグテキスト
                                PタグテキストPタグテキストPタグテキストPタグテキストPタグテキストPタグテキストPタグテキストPタグテキスト
                                PタグテキストPタグテキストPタグテキストPタグテキストPタグテキストPタグテキストPタグテキストPタグテキスト
                                PタグテキストPタグテキストPタグテキストPタグテキストPタグテキストPタグテキストPタグテキストPタグテキスト
                                PタグテキストPタグテキストPタグテキストPタグテキストPタグテキストPタグテキストPタグテキストPタグテキスト
                            </p>

                            <h3>見出しh3</h3>

                            <h4>見出しh4</h4>

                            <h5>見出しh5</h5>

                            <h6>見出しh6</h6>
                            <div class="p-article__blockquote">
                                <p class="p-article__blockquote-text">
                                    Blockquote引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ
                                    引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ
                                    引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ
                                    引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ
                                    引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ
                                    引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ引用タグ
                                </p>

                                <cite class="p-article__blockquote-link">出典元：<a>https://xxxx.com</a></cite>
                            </div>
                        </article>
                        <article class="p-pictures">
                            <img class="p-pictures--top" src="../img/setmenu.jpg" alt="">
                            <div class="p-pictures--flex">
                                <img src="../img/setmenu.jpg" alt="">
                                <p>テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。
                                </p>
                            </div>
                            <div class="p-pictures--flex">
                                <p>テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。
                                </p>
                                <img src="../img/setmenu.jpg" alt="">
                            </div>
                            <img class="p-pictures--bottom" src="../img/setmenu.jpg" alt="">

                            <div class="p-pictures__list">
                                <img class="p-pictures__item" src="../img/setmenu.jpg" alt="">
                                <img class="p-pictures__item" src="../img/setmenu.jpg" alt="">
                                <img class="p-pictures__item" src="../img/setmenu.jpg" alt="">
                                <img class="p-pictures__item" src="../img/setmenu.jpg" alt="">
                                <img class="p-pictures__item" src="../img/setmenu.jpg" alt="">
                                <img class="p-pictures__item" src="../img/setmenu.jpg" alt="">
                                <img class="p-pictures__item" src="../img/setmenu.jpg" alt="">
                                <img class="p-pictures__item" src="../img/setmenu.jpg" alt="">
                                <img class="p-pictures__item" src="../img/setmenu.jpg" alt="">
                            </div>

                        </article>
                        <article class="c-list">
                            <div class="c-list__wrapper">
                                <ol class="c-list__item">
                                    <li>1.リストリストリスト</li>
                                    <li>2.リストリストリスト</li>
                                </ol>
                                <ol class="c-list__item">
                                    <li class="c-list__middle">1.リスト2リスト2リスト2</li>
                                    <li class="c-list__middle">2.リスト2リスト2リスト2</li>

                                </ol>
                                <ol class="c-list__item">
                                    <li>1.リストリストリスト</li>
                                    <li>2.リストリストリスト</li>
                                </ol>
                            </div>
                            <div class="c-list__wrapper">
                                <ul class="c-list__item">
                                    <li>リストリストリスト</li>
                                    <li>リストリストリスト</li>
                                </ul>
                                <ul class="c-list__item">
                                    <li class="c-list__middle">リスト2リスト2リスト</li>
                                    <li class="c-list__middle">リスト2リスト2リスト</li>
                                </ul>
                                <ul class="c-list__item">
                                    <li>リストリストリスト</li>
                                    <li>リストリストリスト</li>
                                </ul>
                            </div>
                        </article>
                        <article class="c-samplecode">
                            <pre><code>
&lt;html&gt;
    &lt;head&gt;
    &lt;/head&gt;
    &lt;body&gt;
    &lt;/body&gt;                
&lt;/html&gt;                            
</code>
</pre>
                        </article>
                        <article class="c-table">
                                <table>
                                    <tr>
                                        <td width="35%">テーブル</td>
                                        <td width="65%">テーブル</td>
                                    </tr>
                                    <tr>
                                        <td>テーブル</td>
                                        <td>テーブル</td>
                                    </tr>
                                    <tr>
                                        <td>テーブル</td>
                                        <td>テーブル</td>
                                    </tr>
                                    <tr>
                                        <td>テーブル</td>
                                        <td>テーブル</td>
                                    </tr>
                                </table>
                        
                        </article>
                        <button class="c-btn--primary c-btn">ボタン</button>

                        <p class="p-article__text--repeat">boldboldboldboldboldboldbold</p>-->

                    </section>
                    <?php endwhile;
                    else: ?>
                    <p>表示する記事がありません</P>
                    <?php endif; ?>



                </main>
            </div>
            <?php get_sidebar(); ?>
            

          <?php get_footer(); ?>


          