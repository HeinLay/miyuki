<?php get_header(); ?>
<?php get_template_part('gnav'); ?>

        <!----------------------------------------------------------------------->
        <!--##### 下層ページヘッダー #####-->
        <div class="header-sub">
          <div class="container">
            <div class="header-sub__item" data-aos="fade-up" data-aos-duration="1200" data-aos-delay="300">
              <h2 class="header-sub__ttl category__ttl"><?php the_time('Y年m月') ?></h2>
              <p class="header-sub__txt">ARCHIVE</p>
            </div>
          </div>
        </div><!-- END / .header-sub 下層ページヘッダーここまで -->


        <!----------------------------------------------------------------------->
        <!--##### 新着情報 #####-->
        <div class="news02">
          <div class="container">
            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            <div class="news02__post" data-aos="fade-up" data-aos-duration="1200" data-aos-delay="300">
                <a href="<?php the_permalink() ?>" class="news02__thumbnail">
                  <?php if(has_post_thumbnail()) { echo the_post_thumbnail('full'); } ?>
                </a>
                <div class="news02__contents">
                  <h4 class="news02__ttl">
                      <a href="<?php the_permalink() ?>" title="<?php the_title_attribute(); ?>">
                          <?php the_title(); ?>
                      </a>
                  </h4>
                  <div class="news02__blog_info">
                      <ul>
                          <li class="news02__cal"><?php the_time('Y/m/j') ?></li>
                          <li class="news02__cat"><?php the_category(', ') ?></li>
                          <li class="news02__tag"><?php the_tags('', ', '); ?></li>
                      </ul>
                      <br class="clear" />
                  </div>

                  <p class="news02__txt"><?php echo mb_substr( get_the_excerpt(), 0, 50 ) . '...'; ?></p>

                </div>
              </div><!-- /.news02__post -->

            <?php endwhile; ?>

          </div><!-- END / .container -->

          <div class="nav-below">
            <?php if( get_previous_posts_link() ) :?>
            <span class="nav-previous"><?php previous_posts_link('古い記事へ') ?></span>
            <?php elseif( get_next_posts_link() ) :?>
            <span class="nav-next"><?php next_posts_link('新しい記事へ') ?></span>
            <?php endif; ?>
          </div><!-- /.nav-below -->

      <?php else : ?>

          <h3 class="title">記事が見つかりませんでした。</h3>

      <?php endif; ?>

      <!-- フッターウィジェット -->
      <img class="single__line" src="<?php echo get_template_directory_uri(); ?>/images/common/line01.png" alt="">
      <div class="container footer__widget" data-aos="fade-up" data-aos-duration="1500">
        <?php dynamic_sidebar( 'footer-widget' ); ?>
      </div>

      </div><!-- END / .news02ここまで -->


<?php get_footer(); ?>
