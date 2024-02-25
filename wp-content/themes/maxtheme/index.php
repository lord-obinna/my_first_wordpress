<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<div id="page">
    <header id="masthead" class="site-header">
        <h1 class="site-title"><?php bloginfo('name'); ?></h1>
    </header><!-- #masthead -->

    <div id="content" class="site-content">
        <?php
        if (have_posts()) :
            while (have_posts()) : the_post();
                the_content();
            endwhile;
        endif;
        ?>
    </div><!-- #content -->
</div><!-- #page -->

<?php wp_footer(); ?>
</body>
</html>
