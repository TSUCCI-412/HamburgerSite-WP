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
                    
                
            </nav>
        </aside>