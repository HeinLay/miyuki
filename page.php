<?php get_header(); ?>
<?php get_template_part('gnav'); ?>


        <!----------------------------------------------------------------------->
        <!--##### 下層ページヘッダー #####-->
        <div class="header-sub">
          <div class="container">
            <div class="header-sub__item" data-aos="fade-up" data-aos-duration="1200" data-aos-delay="300">
              <h2 class="header-sub__ttl">NEWS</h2>
              <p class="header-sub__txt">WHAT'S NEW</p>
            </div>
          </div>
        </div><!-- END / .header-sub 下層ページヘッダーここまで -->


        <!----------------------------------------------------------------------->
        <!--##### 新着情報 #####-->
        <div class="page02">
          <div class="container">
            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            <div class="page02__post">
                <h1 class="page02__ttl"><?php the_title(); ?></h1>

                <div class="page02__thumbnail"><?php if(has_post_thumbnail()) { echo the_post_thumbnail(); } ?></div>

                <p class="page02__txt"><?php the_content(); ?></p>
            </div><!-- /.post -->

            <?php endwhile; ?>

            <?php else : ?>

                <h2 class="title">記事が見つかりませんでした。</h2>
                <p>検索で見つかるかもしれません。</p><br />
                <?php get_search_form(); ?>

            <?php endif; ?>
          </div>
        </div><!-- END / .page02 ここまで -->


<?php get_footer(); ?>
