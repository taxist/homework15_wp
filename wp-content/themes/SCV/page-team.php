<?php
/*
Template Name: scv page team
*/
?>

<?php define('WP_USE_THEMES', false); get_header(); ?>
<ul class="team">


        <?php
        $args = array(
            'post_type' => 'scv_teachers',
            'order'     => 'ASC'
        );

        $scv_teachers = new WP_Query( $args );

        if ($scv_teachers-> have_posts() ) {
            while ($scv_teachers-> have_posts() ) {
                $scv_teachers->the_post(); ?>
                <li id="post<?php the_ID(); ?>">
                    <?php if ( has_post_thumbnail() ) {
                        the_post_thumbnail();
                    } ?>
                    <h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
                    <?php the_meta(); ?>
                    <?php the_content(); ?>
                </li>
            <?php } // end while
        } // end if ?>
</ul>

<?php get_sidebar( 'pre_footer' ); ?>

<?php get_footer();?>