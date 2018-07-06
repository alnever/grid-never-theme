<!DOCTYPE html>
<html lang="ru">
    <head>
        <!-- meta tags -->
        <meta charset="<?php _e(bloginfo('charset')); ?>" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <meta name="author" content="Alex Neverov" />
        <meta name="description" content="Simpe Worpress Theme for a Personal Blog" />

        <!-- styles -->
        <link rel="stylesheet" id="main-style-sheet" href="<?php _e(bloginfo('stylesheet_url')); ?>" type="text/css" media="all" />
        <link rel="stylesheet" id="grid-style-sheet" href="<?php _e(bloginfo('template_url')); ?>/css/grid-never-theme.css" type="text/css" media="all" />
        <link rel="stylesheet" id="mobile-style-sheet" href="<?php _e(bloginfo('template_url')); ?>/css/mobile.css" type="text/css" media="screen and (max-width:600px)" />
        
        <!-- title -->
        <title><?php _e(strip_tags(get_the_title()), 'grid-never-theme'); ?><?php _e(bloginfo('name'), 'grid-never-theme'); ?></title>

        <!-- wp_head hook -->
        <?php wp_head(); ?>

        <!-- scripts -->
        <script id="grid-never-script" src="<?php _e(bloginfo('template_url')); ?>/js/grid-never-theme.js"></script>
    </head>
<body> <!-- must be closed in footer.php -->
    <div class="wrapper"> <!-- must be closed in footer.php -->