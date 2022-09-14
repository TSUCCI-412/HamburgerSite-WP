
<?php get_header(); ?>

    <main class="l-main p-nf">
        <section class="p-nf--404page">
            <h2> <?php _e('404 Not Found', 'HamburgerSite'); ?></h2>
            <p class="p-nf--404page__text">指定されたサイトは存在しないか、または移動した可能性があります。</p>
            <!--ページurl取得-->
            <p class="p-nf--404page__url">URL:<span><?php echo get_pagenum_link(); ?></span></p>
            <!--ホームへ戻る-->
            <p class="p-nf--404page__home">URLをご確認の上、再読込みするか、<a href="<?php echo esc_url(home_url());?>">トップページへ</a>お戻りください。</p>
        </section>  
    </main>

<!--eを付けると翻訳してくれる-->

</div>
<?php get_sidebar(); ?>
<?php get_footer(); ?>



