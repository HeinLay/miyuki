<?php get_header(); ?>
<?php get_template_part('gnav'); ?>

        <!----------------------------------------------------------------------->
        <!--##### 下層ページヘッダー #####-->
        <div class="header-sub">
          <div class="container">
            <div class="header-sub__item" data-aos="fade-up" data-aos-duration="1200" data-aos-delay="300">
              <h2 class="header-sub__ttl single__ttl"><?php the_title(); ?></h2>
            </div>
          </div>
        </div><!-- END / .header-sub 下層ページヘッダーここまで -->


        <!----------------------------------------------------------------------->
        <!--##### 新着情報 #####-->
        <div class="single02">
          <div class="container">
            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            <div class="single02__post">
                <div class="single02__thumbnail">
                  <?php if(has_post_thumbnail()) { echo the_post_thumbnail('full'); } ?>
                </div>
                <div class="single02__contents">
                  <div class="single02__blog_info">
                      <ul>
                          <li class="single02__cal"><?php the_time('Y年m月j日') ?></li>
                          <li class="single02__cat"><?php the_category(', ') ?></li>
                          <li class="single02__tag"><?php the_tags('', ', '); ?></li>
                      </ul>
                      <br class="clear" />
                  </div>

                  <div class="single02__txt">
                    <?php the_content(); ?>
                  </div>
              </div>
            </div><!-- /.single02__post -->

            <?php endwhile; ?>

          </div><!-- END / .container -->

          <div class="nav-below">
            <?php if (get_previous_post()):?>
            <span class="nav-previous"><?php previous_post_link('%link', '前へ') ?></span>
            <?php endif; ?>
            <?php if (get_next_post()):?>
            <span class="nav-next"><?php next_post_link('%link', '次へ') ?></span>
            <?php endif; ?>
          </div><!-- /.nav-below -->

          <!-- Commetns -->
          <div class="container">
            <img class="single__line" src="<?php echo get_template_directory_uri(); ?>/images/common/line01.png" alt="">
            <?php comments_template(); ?>
          </div>

          <?php else : ?>

              <h3 class="title">記事が見つかりませんでした。</h3>

          <?php endif; ?>


          <!-- フッターウィジェット -->
          <div class="container footer__widget" data-aos="fade-up" data-aos-duration="1500">
          	<?php dynamic_sidebar( 'footer-widget' ); ?>
          </div>

        </div><!-- END / .single02 ここまで -->


<?php get_footer(); ?>
