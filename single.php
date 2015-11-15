<?php get_header(); ?>
<?php while (have_posts()) : the_post(); ?>
    <?php if (has_post_thumbnail() && !post_password_required()) : ?>
        <?php $bcimage = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'single-post-thumbnail'); ?>
    <?php endif; ?>

    <div id="content" class="bc-content">
    <div class="container">
    <div class="row">
        <div class="col-md-10 col-lg-10 col-lg-offset-1">
            <div class="page-header">
                <h1>
                    <?php the_title(); ?>
                </h1>
            </div>
        </div>
    </div>
    <div class="row content-row">
    <div class="col-md-6 col-lg-6 col-lg-offset-1">
        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
            <div class="entry-content">
                <?php the_content(); ?>
            </div>
            <!-- .entry-content -->

        </article>
        <!-- #post -->
    </div>
    <div class="col-md-4 col-lg-4">
        <?php if ($bcimage) {
            echo '<img src="' . $bcimage[0] . '" class="img-responsive">';
        } ?>
    </div>
<?php endwhile; ?>
    </div>
    </div>
    </div>
    <!-- #content -->

<?php get_footer(); ?>