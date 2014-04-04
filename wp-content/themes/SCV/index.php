<?php define('WP_USE_THEMES', false); get_header(); ?>

</div>
</div>
<div class="wrapper">

    <div class="content">

        <ul>

                <?php
                $args = array(
                    'post_type' => 'post',
                    'order'     => 'ASC'
                            );

                $scv_loop = new WP_Query( $args );

                 if ($scv_loop-> have_posts() ) {
                    while ($scv_loop-> have_posts() ) {
                        $scv_loop->the_post(); ?>
                        <li id="post<?php the_ID(); ?>">
                            <?php if ( has_post_thumbnail() ) {
                              the_post_thumbnail();
                            } ?>
                            <h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
                            <?php the_content(); ?>
                        </li>

                    <?php } // end while
                } // end if ?>

            </ul>
    </div>

<?php get_sidebar( 'pre_footer' ); ?>

<?php get_footer();?>
