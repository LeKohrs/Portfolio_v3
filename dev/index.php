<!-- TEMPLATE FOR A POST LIST -->

<?php get_template_part('templates/header'); ?>

<section class="content--wrapper">
    <main class="content content--blog" role="main">
        <?php while(have_posts()) : the_post(); ?>
        <article id="post-<?php the_ID(); ?>" <?php post_class('post'); ?> role="article">
            <header class="content__header post__header">
                <?php if ( has_post_thumbnail() ) : ?>
                    <figure class="content__thumbnail post__thumbnail">
                        <a href="<?php the_permalink(); ?>" rel="bookmark" title="<?php the_title_attribute();
                        ?>"><?php the_post_thumbnail( 'my-custom-image-size' ); ?></a>
                    </figure>
                <?php endif; ?>
            </header>
            <section class="post__content">
                <aside class="byline vcard">
                    <time class="byline__date updated" datetime="<?php echo the_time('Y-m-j'); ?>" pubdate>
                        <?php the_time(get_option('date_format')); ?>
                    </time>
                </aside>
                <h3 class="content__title post__title">
                    <a href="<?php the_permalink(); ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a>
                </h3>
                <div class="content--inner post__content--inner">
                    <?php echo excerpt(38); ?>
                </div>
                <a href="<?php the_permalink(); ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><h5>Read
                        More</h5></a>
            </section>
            <footer class="post__metadata">

            </footer>
        </article>
        <?php endwhile; ?>
        <nav class="prev-next-nav">
            <div class="prev-link">
                <?php echo get_next_posts_link('&laquo; Older Entries') ?>
            </div>
            <div class="next-link">
                <?php echo previous_posts_link('Newer Entries &raquo;') ?>
            </div>
        </nav>
    </main>
</section>

<?php get_template_part('templates/footer'); ?>