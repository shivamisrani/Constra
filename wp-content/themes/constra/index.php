<?php get_header(); ?>
<?php if (have_posts()) : ?>
    <div class="row">
        <?php while (have_posts()) : the_post(); ?>
            <div class="col-lg-4 wow fadeInUp" data-wow-delay="0.4s">
                <div class="blog-item h-100">
                    <div class="blog-img">
                        <?php if (has_post_thumbnail()) : ?>
                            <img src="<?php echo get_the_post_thumbnail_url(); ?>" class="img-fluid w-100" alt="<?php the_title(); ?>">
                        <?php else : ?>
                            <img src="<?php echo get_template_directory_uri(); ?>/img/default-image.jpg" class="img-fluid w-100" alt="Default Image">
                        <?php endif; ?>
                    </div>
                    <div class="blog-content p-4">
                        <div class="d-flex justify-content-between mb-3">
                            <p class="mb-0"><i class="fa fa-calendar-check text-secondary me-1"></i> <?php echo get_the_date(); ?></p>
                            <p class="mb-0"><i class="fa fa-user text-secondary me-1"></i> <?php the_author(); ?></p>
                        </div>
                        <a href="<?php the_permalink(); ?>" class="h4 d-block mb-4"><?php the_title(); ?></a>
                        <a class="btn btn-secondary py-2 px-4" href="<?php the_permalink(); ?>">Read More</a>
                    </div>
                </div>
            </div>
        <?php endwhile; ?>
    </div>
    <?php
        // Pagination
        the_posts_pagination(array(
            'mid_size' => 2,
            'prev_text' => __('&laquo; Previous', 'textdomain'),
            'next_text' => __('Next &raquo;', 'textdomain'),
        ));
    ?>
<?php else : ?>
    <p><?php esc_html_e('No posts found.'); ?></p>
<?php endif; ?>
<?php get_footer(); ?>
