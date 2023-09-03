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

                      
                    </section>
                    <?php endwhile;
                    else: ?>
                    <p>表示する記事がありません</P>
                    <?php endif; ?>



                </main>
            </div>
            <?php get_sidebar(); ?>
            

          <?php get_footer(); ?>


          