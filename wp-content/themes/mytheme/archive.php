<?php get_header(); ?>
<div class="container py-4">
    <?php
        the_archive_title( '<h1 class="archive-page-title text-primary text-center mb-3">', '</h1>' );
    ?>

    <?php
        if (have_posts()):
            while (have_posts()):
                the_post();
            ?>
            <div class="row home-newpost">
                <div class="col-12 col-lg-4 col-xl-3">
                    <div class="home-newpost--thumbnail">
                        <a href="<?= the_permalink(); ?>">
                            <?php the_post_thumbnail() ?>
                        </a>
                    </div>
                </div>
                <div class="col-12 col-lg-8 col-xl-9">
                    <h3 class="home-newpost--title">
                        <a href="<?= the_permalink(); ?>">
                            <?= the_title(); ?>
                        </a>
                    </h3>
                    <div class="home-newpost--meta mb-20">
                        Danh mục: <?= the_category(); ?> <br>
                    </div>
                    <div class="home-newpost--excerpt">
                        <?= the_excerpt(); ?>
                    </div>
                </div>
            </div>
            <?php
            endwhile;

            echo paginate_links();
        else :
    ?>
        <div class="no-post text-center">
            <h3 class="text-danger">Chưa có bài viết tại chuyên mục này, bạn vui lòng quay lại sau!</h3>
            <a class="btn btn-primary" href="<?= home_url() ?>">Trang chủ</a>
        </div>
    <?php
        endif;
    ?>
    </div>
<?php get_footer(); ?>