<?php define('WP_USE_THEMES', false); get_header(); ?>
<span class="registration">
            <h2>Реєстрація на другий сезон відкрита!</h2>
            <a href="#">Зареєструватися</a>
        </span>

</div>
</div>
<div class="wrapper">

    <div class="content">
        <p class='site-description'><?php bloginfo( 'description' ); ?></p>
        <h3>
            <?php $post_type = get_post_type_object( 'scv_courses' );
            echo $post_type->labels->name ; ?>
        </h3>
            <ul class="courses">

                <?php
                $args = array(
                    'post_type' => 'scv_courses',
                    'order'     => 'ASC'
                            );

                $scv_courses = new WP_Query( $args );

                 if ($scv_courses-> have_posts() ) {
                    while ($scv_courses-> have_posts() ) {
                        $scv_courses->the_post(); ?>
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
