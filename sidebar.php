<aside class="l-sidebar is-menu">
            <button type="button" class="c-toggle">
                <span class="c-toggle--btn">Menu</span>
                <span class="c-toggle--line is-open"></span>
            </button>
            <nav class="l-sidebar__menu p-gnav">
                <?php 
                    wp_nav_menu (
                        array(
                            'menu_class' => 'p-gnav__list',
                            'container_class' => 'p-gnav',
                            'theme_location' => 'globalmenu',
                        ));
                        ?>
                    
                <!--<ul class="p-gnav__list">

                    <li class="p-gnav__item"><a href="#">バーガー</a>
                        <ul class="p-gnav__sublist">
                            <li class="p-gnav__subitem"><a href="#">ハンバーガー</a></li>
                            <li class="p-gnav__subitem"><a href="#">チーズバーガー</a></li>
                            <li class="p-gnav__subitem"><a href="#">テリヤキバーガー</a></li>
                            <li class="p-gnav__subitem"><a href="#">アボカドバーガー</a></li>
                            <li class="p-gnav__subitem"><a href="#">フィッシュバーガー</a></li>
                            <li class="p-gnav__subitem"><a href="#">ベーコンバーガー</a></li>
                            <li class="p-gnav__subitem"><a href="#">チキンバーガー</a></li>
                        </ul>
                    </li>
                

                    <li class="p-gnav__item"><a href="#">サイド</a>
                        <ul class="p-gnav__sublist">
                            <li class="p-gnav__subitem"><a href="#">ポテト</a></li>
                            <li class="p-gnav__subitem"><a href="#">サラダ</a></li>
                            <li class="p-gnav__subitem"><a href="#">ナゲット</a></li>
                            <li class="p-gnav__subitem"><a href="#">コーン</a></li>
                        </ul>
                    </li>

                    <li class="p-gnav__item"><a href="#">ドリンク</a>
                        <ul class="p-gnav__sublist">
                            <li class="p-gnav__subitem"><a href="#">コーラ</a></li>
                            <li class="p-gnav__subitem"><a href="#">ファンタ</a></li>
                            <li class="p-gnav__subitem"><a href="#">オレンジ</a></li>
                            <li class="p-gnav__subitem"><a href="#">アップル</a></li>
                            <li class="p-gnav__subitem"><a href="#">紅茶(ice/hot)</a></li>
                            <li class="p-gnav__subitem"><a href="#">コーヒー(ice/hot)</a></li>
                        </ul>
                    </li>
                </ul>-->
            </nav>
        </aside>