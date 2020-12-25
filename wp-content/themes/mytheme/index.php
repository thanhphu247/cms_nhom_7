<section class="header">
    <?php get_header() ?>
</section>
<!-- phần nội dung trang chủ -->
<!-- banner -->
<section id="home-slider">

    <?php echo do_shortcode('[metaslider id="27"]'); ?>


</section>
<!-- End banner -->
<!-- About -->
<section class="about">
    <div class="container">
        <div class="heading">
            <h2>About us</h2>
        </div>
        <div class="about-content row">
            <div class="about-box-img col-lg-5">
                <img class="img" src="<?= get_template_directory_uri() ?>/assets/images/about1.jpg" alt="about" width="100%">
            </div>
            <div class="about-text col-lg-5">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ratione,
                    a quidem dolores labore voluptatum autem culpa magnam amet? Vitae quam tempore commodi.
                    Consectetur illo a natus corrupti debitis nemo temporibus?.
                    Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                    Corporis porro deleniti nisi, repellat placeat odio voluptatum at perspiciatis
                    iste cum eligendi fugit ea amet dicta distinctio ex delectus quae nobis!</p>
                <button><a href="http://localhost/wordpress/about/">Read more</a></button>
            </div>
        </div>
    </div>
</section>
<!-- End About -->
<!-- phần thứ 2, nổi bật  -->
<section id="home-features" class='section bg-grey'>
    <div class="container">
        <h2 class="section-title">
            Services
        </h2>
        <div class="row justify-content-center">
            <div class="col-12 col-md-3">
                <div class="icon-box">
                    <div class="img-fea">
                        <img class="icon-box--img" src="<?= get_template_directory_uri() ?>/assets/images/f1.jpg" alt="feature 1">
                    </div>
                    <h4 class="icon-box--title">
                        Moving house package
                    </h4>
                    <p class="icon-box-desc">
                        Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ipsam nisi praesentium, architecto
                    </p>
                </div>
            </div>
            <div class="col-12 col-md-3">
                <div class="icon-box">
                    <div class="img-fea">
                        <img height="250px" class="icon-box--img" src="<?= get_template_directory_uri() ?>/assets/images/f2.jpg" alt="feature 1">
                    </div>
                    <h4 class="icon-box--title">
                        Moving factory package
                    </h4>
                    <p class="icon-box-desc">
                        Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ipsam nisi praesentium, architecto
                    </p>
                </div>
            </div>
            <div class="col-12 col-md-3">
                <div class="icon-box">
                    <div class="img-fea">
                        <img class="icon-box--img" src="<?= get_template_directory_uri() ?>/assets/images/f3.jpg" alt="feature 1">
                    </div>
                    <h4 class="icon-box--title">
                        Cargo truck rental
                    </h4>
                    <p class="icon-box-desc">
                        Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ipsam nisi praesentium, architecto
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- News -->
<!-- <section id="home-new-posts" class='section'>
    <div class="container">
        <h2 class="section-title">
            News
        </h2>
        <?php if (has_post_thumbnail()) {
            $featured_image = get_the_post_thumbnail();
        } ?>
        <?php echo do_shortcode('[wp_show_posts id="67"]'); ?>
    </div>
</section> -->
<section id="home-new-posts" class='section'>
    <div class="container">
        <h2 class="section-title">
            News
        </h2>
        <div class="row news">
        <?php
        $np_args = [
            'post_type' => 'post'
        ];
        $np_result = new WP_Query($np_args);

        if ($np_result->have_posts()) :
            while ($np_result->have_posts()) :
                $np_result->the_post();
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
                            Categories: <?= the_category(); ?>
                        </div>
                        <div class="home-newpost--excerpt">
                            <?= the_excerpt(); ?>
                        </div>
                    </div>
                </div>
            <?php
            endwhile;
        else :
            ?>
            <div class="row">
                <div class="col">
                    <h4 class="text-danger">Chưa có bài viết, vui lòng quay lại sau!</h4>
                </div>
            </div>
        <?php endif; ?>
        </div>
    </div>
</section>
<!-- End news -->


<section>
    <?php get_footer() ?>
</section>