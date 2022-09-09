<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <meta name="format-detection" content="telephone=no">
   
    <meta name="description" content="<?php bloginfo('description'); ?>">

    <!-- style -->
    <!--<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/destyle.css@3.0.2/destyle.css">-->
    <!--<link rel="stylesheet" href="../scss/foundation/reset.scss">-->
    
<?php wp_head(); ?>
</head>

<body <?php body_class() ; ?>>
<?php wp_body_open(); ?>
    <div class="c-layer is-fade">
    <!--grid用-->
    <div class="c-container">
        <div class="c-container__main">
            <!--grid用-->
            <header class="l-header p-header">
                <button type="button" class="p-header__btn c-btn--sp">Menu</button>
                <div class="p-header__wrap">
                    <h1 class="p-header__title">
                        <!--サイトの名前をクリックしたらホームに戻る-->
                    <a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php bloginfo( 'name' ); ?></a></h1>
                    <?php get_search_form(); ?>
                </div>
            </header>
</body>
</html>