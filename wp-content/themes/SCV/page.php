<?php define('WP_USE_THEMES', false); get_header(); ?>

<div class="wrapper">

    <div class="content">


        <?php
        $args = array(
            'post_type' => 'page',
            'order'     => 'ASC'
        );

        $scv_page = new WP_Query( $args );


        if (have_posts()) : while (have_posts()) : the_post();?>
            <div class="post">
                <h2 id="post-<?php the_ID(); ?>"><?php the_title();?></h2>
                <div class="entrytext">
                    <?php the_content('<p class="serif">Read the rest of this page &raquo;</p>'); ?>
                </div>
            </div>
        <?php endwhile; endif; ?>
           <?php echo apply_filters('the_content', $page_data->post_content); ?>

<?php get_sidebar( 'pre_footer' ); ?>

<?php get_footer();?>