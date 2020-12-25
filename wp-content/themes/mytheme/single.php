<?php get_header(); ?>
<div class="container py-4">
    <?php
    while (have_posts()):
        the_post();
    ?>
    <h1 class="archive-page-title text-primary text-center mb-3"><?= the_title() ?></h1>

    <div class="post-meta mb-3">
        <div class="published_at">Đăng lúc: <?= the_date('m-d-Y') ?></div>
        <?php if (get_the_category()): ?>
        <div class="categories">Danh mục: <?= the_category(); ?></div>
        <?php endif; ?>
        <?php if (get_the_tags()): ?>
        <div class="tags">Tags: <?= the_tags( '<ul><li>', '</li><li>', '</li></ul>' ); ?></div>
        <?php endif; ?>
    </div>
    <div class="post-content">
        <?= the_content() ?>
    </div>

    <?php
    endwhile;
    ?>
    </div>
<?php get_footer(); ?>