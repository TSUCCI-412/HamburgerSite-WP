<?php get_header(); ?>
                <main class="l-main">
                
                    <!--メインヴィジュアルのsection-->
                    <section class="l-main__top p-mainvisual--page" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                        <h2 class="p-mainvisual__title--single"><?php the_title(); ?></h2>
                    </section>

                    <section class="l-main__wrapper--special">  
                                
                        <article class="p-article">
                        <?php if( have_posts() ) : 
                            while( have_posts() ) :
                                the_post();
                                ?> 
                                <?php the_content(); ?> 
                           
                        <?php endwhile;
                        else: ?>
                        <P>表示する記事がありません</p>
                        <?php endif; ?>
                </main>
            </div>

           <?php get_sidebar(); ?>
<?php get_footer(); ?>