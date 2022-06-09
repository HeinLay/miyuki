<?php $title = "EN VOGUE";?>
<?php $description = "トップページのディスクリプションがここに入ります。90～120文字で入力し、全ページ同じディスクリプションにならないように注意しましょう。";?>
<?php $ogurl = "https://hoc-template01.com/"; ?>
<?php include('header.php'); ?>
<?php get_template_part('gnav'); ?>


        <!----------------------------------------------------------------------->
        <!--##### メインイメージ #####-->
        <div class="header-main">
          <div class="container">
            <img class="header-main__img" src="news/wp-content/themes/miyuki/images/index/index_header_txt01.png" alt="メッセージ" data-aos="zoom-in-right" data-aos-duration="1200" data-aos-delay="300">
          </div>
        </div><!-- END / .header__bg メインイメージここまで -->
        
        <!----------------------------------------------------------------------->
        <!--##### コンセプト #####-->
        <div class="concept">
          <div class="container">
            <h2 class="index__ttl">コンセプト</h2>
            <div class="concept-content">
              <p>こんなこどもに育ってほしい</p>
              <ul class="concept-list">
                <li>・逆境を乗り越えることができる力をもった人に</li>
                <li>・自分のこともまわりのことも大切にできる人に　</li>
                <li>・約束事を守れる人に</li>
                <li>・素直に感動できる人に</li>
                <li>・人をゆるせるやさしいこころを持てる人に</li>
                <li>・ポジティブに物事を考えれれる人に</li>
                <li>・五つの心をもった人に・・・</li>
                <li>&nbsp;はい」と言う　素直な心</li>
                <li>「すみません」と言う反省の心</li>
                <li>「おかげさまです」と言う謙虚な心</li>
                <li>「させて頂きます」と言う奉仕の心</li>
                <li>「ありがとうございます」と言う感謝の心</li>
              </ul>
            </div>
          </div><!-- END / .container -->
        </div><!-- END / .concept -->

        <!----------------------------------------------------------------------->
        <!--##### ニュース #####-->
        <div class="news">
          <div class="container">

            <h2 class="index__ttl">NEWS最新投稿</h2>

            <!-- 新着情報 -->
            <div class="news__contents" data-aos="fade-up" data-aos-duration="1500">

              <?php
              $args = array(
              'posts_per_page' => 4 // 表示件数の指定
              );
              $the_query = new WP_Query($args); if($the_query->have_posts()):
              ?>
              <?php while ($the_query->have_posts()): $the_query->the_post(); ?>

              <div class="news__item">
                <figure class="news__thumbnail">
                  <?php if( has_post_thumbnail() ): ?>
                  <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
                  <?php endif; ?>
                </figure>

                <div class="news__txt">
                <time class="news__date" datetime="<?php the_time('Y-m-d'); ?>T<?php the_time('H:i:sP'); ?>"><?php the_time('Y.n.j'); ?></time>
                <p class="news__ttl"><a href="<?php the_permalink(); ?>" class="entry-link"><?php the_title(); ?></a></p>
                </div>
              </div><!--/.news__item-->

              <?php endwhile; ?>
              <?php wp_reset_postdata(); ?>
              <?php else: ?>
              <p><span class="aka-futo"><?php echo "投稿が見つかりません" ; ?></span></p>
              <!-- 投稿が無い場合の処理 -->
              <?php endif; ?>

            </div><!--/.news__contents-->

            <!-- ボタン -->
            <a class="btn1" href="https://hoc-template01.com/news/" data-aos="fade-up" data-aos-duration="1500">Read More >></a>

          </div><!-- END / .container -->
        </div><!-- END / .newsニュースここまで -->

        <!----------------------------------------------------------------------->
        <!--##### メインコンテンツ #####-->
        <div class="main">
          <div class="container">
          <h2 class="index__ttl">施設紹介3施設</h2>
            <!-- メインコンテンツ　その１ -->
            <div class="main__contents">
              <img class="main__img" src="news/wp-content/themes/miyuki/images/index/index_main_img01.jpg" alt="エステの施術を受ける女性" data-aos="fade-left" data-aos-duration="1200">
              <div class="main__item">
                <h4 class="main__ttl" data-aos="fade-right" data-aos-duration="1200" data-aos-delay="300">あなたの体を美しく<br>健康にデザインする。</h4>
                <img class="main__line" src="news/wp-content/themes/miyuki/images/common/line01.png" alt="" data-aos="fade-right" data-aos-duration="1200" data-aos-delay="500">
                <p class="main__txt" data-aos="fade-right" data-aos-duration="1200" data-aos-delay="700">
                  テキストテキストテキストテキストテキスト
                  テキストテキストテキストテキストテキスト
                  テキストテキストテキストテキストテキスト
                  テキストテキストテキストテキストテキスト
                  テキストテキストテキストテキストテキスト
                  テキストテキストテキストテキストテキスト
                  テキストテキストテキストテキストテキスト
                </p>
              </div>
            </div>

            <!-- メインコンテンツ　その２ -->
            <div class="main__contents">
            <img class="main__img" src="news/wp-content/themes/miyuki/images/index/index_main_img02.jpg" alt="アロマオイル" data-aos="fade-right" data-aos-duration="1200">
              <div class="main__item">
                <h4 class="main__ttl" data-aos="fade-left" data-aos-duration="1200" data-aos-delay="300">身体も心も癒される本格サロン</h4>
                <img class="main__line" src="news/wp-content/themes/miyuki/images/common/line01.png" alt="" data-aos="fade-left" data-aos-duration="1200" data-aos-delay="500">
                <p class="main__txt" data-aos="fade-left" data-aos-duration="1200" data-aos-delay="700">
                  テキストテキストテキストテキストテキスト
                  テキストテキストテキストテキストテキスト
                  テキストテキストテキストテキストテキスト
                  テキストテキストテキストテキストテキスト
                  テキストテキストテキストテキストテキスト
                  テキストテキストテキストテキストテキスト
                  テキストテキストテキストテキストテキスト
                </p>
              </div>
            </div>

          </div><!-- END / .container -->
        </div><!-- END / .main メインコンテンツここまで -->


        <!----------------------------------------------------------------------->
        <!--##### メニュー #####-->
        <div class="menu">
          <div class="container">

            <h2 class="index__ttl">採用バナー</h2>

            <div class="menu__contents">
              <figure class="menu__item" data-aos="fade-up" data-aos-duration="1500">
                  <img class="menu__img" src="news/wp-content/themes/miyuki/images/index/index_menu_img01.png" alt="アロマリンパマッサージを受ける女性">
                　<figcaption class="menu__txt">
                  　  <h5 class="menu__ttl">アロマリンパマッサージ</h5>
                    　<p class="menu__txt--state_current">
                        最高級ホホバオイルで<br>
                        全身のリンパやツボを<br>
                        丁寧にトリートメントいたします。
                      </p>
                　</figcaption>
              </figure>
              <figure class="menu__item" data-aos="fade-up" data-aos-duration="1500" data-aos-delay="300">
                  <img class="menu__img" src="news/wp-content/themes/miyuki/images/index/index_menu_img02.png" alt="リフレクソロジーを受ける女性の足">
                　<figcaption class="menu__txt">
                  　  <h5 class="menu__ttl">リフレクソロジー</h5>
                    　<p class="menu__txt--state_current">
                        足裏全体を揉みほぐし<br>
                        体内の老廃物を排出します。<br>
                        むくみや冷え性でお悩みの方に。
                      </p>
                　</figcaption>
              </figure>
              <figure class="menu__item" data-aos="fade-up" data-aos-duration="1500">
                  <img class="menu__img" src="news/wp-content/themes/miyuki/images/index/index_menu_img03.png" alt="フェイシャルトリートメントを受ける女性">
                　<figcaption class="menu__txt">
                  　  <h5 class="menu__ttl">フェイシャル</h5>
                    　<p class="menu__txt--state_current">
                      お顔のリンパを丁寧に流し、<br>
                      潤いのある美しい素肌に。<br>
                      美肌・小顔・リフトアップ効果。
                      </p>
                　</figcaption>
              </figure>
              <figure class="menu__item" data-aos="fade-up" data-aos-duration="1500" data-aos-delay="300">
                  <img class="menu__img" src="news/wp-content/themes/miyuki/images/index/index_menu_img04.png" alt="アロマオイル">
                　<figcaption class="menu__txt">
                  　  <h5 class="menu__ttl">トータルヒーリングコース</h5>
                    　<p class="menu__txt--state_current">
                        お顔から足の先まで、<br>
                        全身のケアをしたい方におすすめです。
                      </p>
                　</figcaption>
              </figure>
            </div><!-- END / .menu__contents -->

            <!-- ボタン -->
            <a class="btn1" href="https://hoc-template01.com/menu" data-aos="fade-up" data-aos-duration="1500">Read More >></a>

          </div><!-- END / .container -->
        </div><!-- END / .menu メニューここまで -->

        <div class="container">
          <img class="news__line" src="news/wp-content/themes/miyuki/images/common/line01.png" alt="">
        </div>

<?php get_footer(); ?>
