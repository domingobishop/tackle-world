<?php get_header(); ?>
<?php while (have_posts()) : the_post(); ?>
    <?php if (has_post_thumbnail() && !post_password_required()) : ?>
        <?php $bcimage = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'single-post-thumbnail'); ?>
    <?php endif; ?>

    <div id="content" class="bc-content" role="main">
    <div class="container">
    <div class="row">
    <div class="col-lg-8 col-lg-offset-2">
    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
        <div class="page-header">
            <h1>
                <?php the_title(); ?>
            </h1>
        </div>
        <div class="entry-content">
            <?php the_content(); ?>
        </div>
        <!-- .entry-content -->

    </article>
    <!-- #post -->

<?php endwhile; ?>
    </div>
    </div>
    </div>
    </div>
    <!-- #content -->

<?php get_footer(); ?>