<?php get_header(); ?>
<?php while (have_posts()) : the_post(); ?>
    <?php if (has_post_thumbnail() && !post_password_required()) : ?>
        <?php $bcimage = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'single-post-thumbnail'); ?>
    <?php endif; ?>

    <div id="content" class="bc-content bc-attachment">
    <div class="container">
    <div class="row">
        <div class="col-md-8 col-lg-8 col-lg-offset-2">
            <?php echo wp_get_attachment_image( get_the_ID(), 'large' ); ?>

            <h1 class="post-title"><?php the_title(); ?></h1>

            <div class="entry">
                <div class="entry-inner">
                    <?php the_content(); ?>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
    <?php endwhile; ?>
    </div>


    </div>
    </div>
    <!-- #content -->

<?php get_footer(); ?>