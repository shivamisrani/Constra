<?php get_header(); ?>

<div class="content-area">
    <main class="site-main">
        <?php
        if (have_posts()) :
            while (have_posts()) : the_post(); ?>
                <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                    <h1 class="entry-title"><?php the_title(); ?></h1>
                    <div class="entry-meta">
                        <span class="posted-on"><?php echo get_the_date(); ?></span>
                        <span class="byline"> by <?php the_author(); ?></span>
                    </div>
                    <div class="entry-content">
                        <?php the_content(); ?>
                    </div>
                </article>
                <div class="post-navigation">
                    <?php
                    // Previous/next post navigation.
                    the_post_navigation();
                    ?>
                </div>
            <?php endwhile;
        else : ?>
            <p><?php esc_html_e('Sorry, no posts matched your criteria.'); ?></p>
        <?php endif; ?>
    </main>

    <?php get_sidebar();  ?>
</div>

<?php get_footer(); ?>

