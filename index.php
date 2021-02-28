<?php  get_header(); ?>
    <div class="offset"></div>
    <div class="light-wrapper">
<?php comments_template(); ?>
        <div class="container inner">
            <h1>با ما بهترین باشید</h1>
           </p>
            <div class="divide60"></div>
            <div class="banner-container revolution">
                <div class="banner">
                    <ul>
                        <li data-transition="fade"><img
                                src="<?php bloginfo('template_url'); ?>/style/images/art/slider-bg1.jpg" alt=""/>
                            <div class="caption sfb upper white-bg" data-x="45" data-y="400" data-speed="900"
                                 data-start="800" data-easing="Sine.easeOut">ماک آپ برندینگ خیلی خوب
                            </div>
                            <div class="captفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است
                            </div>
                        </li>
                        <li data-transition="fade"><img
                                src="<?php bloginfo('template_url'); ?>/style/images/art/slider-bg2.jpg" alt=""/>
                            <div class="caption sfb upper white-bg" data-x="750" data-y="45" data-speed="900"
                                 data-start="800" data-easing="Sine.easeOut">ماک آپ کارت ویزیت
                            </div>
                            <div class="caption sfb lower white-bg" data-x="750" data-y="105" data-speed="900"
                                 data-start="1300" data-easing="Sine.easeOut">لورم ایپسوم متن ساختگی با تولید سادگی
                                نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است
                            </div>
                        </li>
                        <li data-transition="fade"><img
                                src="<?php bloginfo('template_url'); ?>/style/images/art/slider-transparent.png"
                                style="background-color: #65676e;" alt=""/>
                            <div class="caption sfb upper white-bg" data-x="45" data-y="45" data-speed="900"
                                 data-start="3300" data-easing="Sine.easeOut">ماک آپ ساده
                            </div>
                            <div class="caption sfb lower white-bg" data-x="45" data-y="105" data-speed="900"
                                 data-start="3800" data-easing="Sine.easeOut">یک طرح خیلی <a href="#">خوشگل</a> می باشد
                            </div>
                            <div class="caption lft" data-x="300" data-y="0" data-speed="900" data-start="2800"
                                 data-easing="Sine.easeOut"><img
                                    src="<?php bloginfo('template_url'); ?>/style/images/art/slider-paper.png" alt=""/>
                            </div>
                            <div class="caption lfl" data-x="168" data-y="240" data-speed="900" data-start="800"
                                 data-easing="Sine.easeOut"><img
                                    src="<?php bloginfo('template_url'); ?>/style/images/art/slider-envelope.png"
                                    alt=""/></div>
                            <div class="caption lfr" data-x="517" data-y="153" data-speed="900" data-start="2300"
                                 data-easing="Sine.easeOut"><img
                                    src="<?php bloginfo('template_url'); ?>/style/images/art/slider-folder.png" alt=""/>
                            </div>
                            <div class="caption lfb" data-x="367" data-y="359" data-speed="900" data-start="1300"
                                 data-easing="Sine.easeOut"><img
                                    src="<?php bloginfo('template_url'); ?>/style/images/art/slider-card-back.png"
                                    alt=""/></div>
                            <div class="caption lfb" data-x="502" data-y="360" data-speed="900" data-start="1800"
                                 data-easing="Sine.easeOut"><img
                                    src="<?php bloginfo('template_url'); ?>/style/images/art/slider-card-front.png"
                                    alt=""/></div>
                        </li>
                    </ul>
                    <div class="tp-bannertimer tp-bottom"></div>
                </div>
                <!-- /.banner -->
            </div>
            <!-- /.banner-container -->

            <div class="divide70"></div>
            <div class="row text-center services-1">

                <?php


                $args = array(
                    'posts_per_page'   =>4,
                    'offset'           => 0,
                    'category'         => '6',
                    'category_name'    => '',
                    'orderby'          => 'post_date',
                    'order'            => 'DESC',
                    'include'          => '',
                    'exclude'          => '',
                    'meta_key'         => '',
                    'meta_value'       => '',
                    'post_type'        => 'post',
                    'post_mime_type'   => '',
                    'post_parent'      => '',
                    'post_status'      => 'publish',
                    'suppress_filters' => true );




                $myposts = get_posts( $args );
                foreach ( $myposts as $post ) : setup_postdata( $post ); ?>

                  <a href="<?php echo get_the_permalink();  ?>" title="more" >
                <div class="col-md-3 col-sm-6"  >

                    <div class="col-wrapper">
                        <div class="icon-border bm15"><i class="icon-picons-bulb"></i></div>
                        <h5 class="upper"> <?php  echo get_the_title();    ?></h5>
                        <p>

                            <?php the_excerpt();  ?>

                            </p>
                    </div>
                </div>


                  </a>
                <?php endforeach; ?>


            </div>
            <div class="divide70"></div>
            <div class="section-title-wrapper">
                <h3 class="section-title">آخرین پروژه های ما</h3>
            </div>
            <div class="owl-portfolio owlcarousel carousel-th">

                <?php
                $a = array(
                    'posts_per_page'   =>4,
                    'offset'           => 0,
                    'cat'         => '',
                    'category_name'    => '',
                    'orderby'          => 'post_date',
                    'order'            => 'DESC',
                    'include'          => '',
                    'exclude'          => '',
                    'meta_key'         => '',
                    'meta_value'       => '',
                    'post_type'        => 'project',
                    'post_mime_type'   => '',
                    'post_parent'      => '',
                    'post_status'      => 'publish',
                    'suppress_filters' => true );

                $the_query=new WP_Query($a);
                while($the_query->have_posts())
                {
                    $the_query->the_post();

                ?>
                    <a href="<?php the_permalink(); ?>">
                <div class="item">
                    <figure><a href="portfolio-post.html">
                            <div class="text-overlay">
                                <div class="info">نمایش پروژه</div>
                            </div>
                            <img src="<?php the_post_thumbnail_url(); ?>" style=" width: 400px !important; height: 300px !important;" alt=""/></a></figure>
                    <div class="image-caption text-center">
                        <h4 class="post-title upper"><a href="<?php the_permalink(); ?>"> <?php   echo get_the_title();  ?></a></h4>
                        <div class="meta"> <a href="#"><?php the_category()." , "; ?></a></span>
                        </div>
                        <p><?php the_content(); echo 'سال توسعه :'.get_post_meta($the_query->post->ID,'سال توسعه',true);?>
                            .</p>
                    </div>
                </div>

                    </a>
<?php } ?>
                <!-- /.item -->

                <!-- /.item -->

                <!-- /.item -->

                <!-- /.item -->

            <!-- /.item -->
        </div>
        <!-- /.owlcarousel -->

    </div>
</div>
<div class="parallax testimonials">
    <div class="container inner text-center">
        <div class="section-title-wrapper">
            <h3 class="section-title">مشتریان وب دیزاین دانلود چه می گویند</h3>
        </div>
        <div id="testimonials" class="tab-container">
            <div class="panel-container">
                <div id="tst1"> لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک
                    است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی
                    مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد.<span
                        class="author">نیکولاس</span></div>
                <div id="tst2"> لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک
                    است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی
                    مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد.<span class="author">کریس</span>
                </div>
                <div id="tst3">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک
                    است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی
                    مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد.<span
                        class="author">ولادیمر</span></div>
                <div id="tst4"> لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک
                    است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی
                    مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد. <span class="author">اریک</span>
                </div>
            </div>
            <ul class="etabs">
                <li class="tab"><a href="#tst1">1</a></li>
                <li class="tab"><a href="#tst2">2</a></li>
                <li class="tab"><a href="#tst3">3</a></li>
                <li class="tab"><a href="#tst4">4</a></li>
            </ul>
        </div>
    </div>
    <!-- /.container -->
</div>
<!-- /.testimonials -->

<div class="dark-wrapper">
    <div class="container inner">
        <div class="section-title-wrapper">
            <h3 class="section-title bm20">نکات اصلی قالب لوووم</h3>
        </div>
        <div class="thin">
            <p class="text-center">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان
                گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی
                تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد..</p>
        </div>
        <div class="divide40"></div>
        <div class="row">
            <div class="col-md-3">
                <div class="services-2">
                    <div class="icon"><i class="icon-picons-desktop-preferences icn"></i></div>
                    <!-- /.icon -->
                    <div class="text">
                        <h5 class="upper">%100 ریسپانسیو</h5>
                        <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک
                            است.</p>
                    </div>
                    <!-- /.text -->
                    <div class="divide20"></div>
                    <div class="icon"><i class="icon-picons-support icn"></i></div>
                    <!-- /.icon -->
                    <div class="text">
                        <h5 class="upper">پشتیبانی رایگان</h5>
                        <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک
                            است..</p>
                    </div>
                    <!-- /.text -->
                    <div class="divide20"></div>
                    <div class="icon"><i class="icon-picons-drawing icn"></i></div>
                    <!-- /.icon -->
                    <div class="text">
                        <h5 class="upper">پلاگین های پیکسلی</h5>
                        <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک
                            است.</p>
                    </div>
                    <!-- /.text -->

                </div>
                <!-- /.services-2 -->
            </div>
            <!-- /.col -->
            <div class="col-md-6">
                <figure><img src="<?php bloginfo('template_url'); ?>/style/images/art/loom-browser.png" alt=""/>
                </figure>
            </div>
            <!-- /.col -->
            <div class="col-md-3">
                <div class="services-2">
                    <div class="icon"><i class="icon-picons-window-layout-3 icn"></i></div>
                    <!-- /.icon -->
                    <div class="text">
                        <h5 class="upper">تنظیمات پیشرفدته</h5>
                        <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک
                            است.</p>
                    </div>
                    <!-- /.text -->
                    <div class="divide20"></div>
                    <div class="icon"><i class="icon-picons-earth icn"></i></div>
                    <!-- /.icon -->
                    <div class="text">
                        <h5 class="upper">سئو دوستانه</h5>
                        <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک
                            است.</p>
                    </div>
                    <!-- /.text -->
                    <div class="divide20"></div>
                    <div class="icon"><i class="icon-picons-brush icn"></i></div>
                    <!-- /.icon -->
                    <div class="text">
                        <h5 class="upper">پالت رنگ</h5>
                        <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک
                            است..</p>
                    </div>
                    <!-- /.text -->

                </div>
                <!-- /.services-3 -->
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container -->
</div>
<!-- /.dark-wrapper -->

<div class="light-wrapper">
    <div class="container inner">
        <div class="section-title-wrapper">
            <h3 class="section-title">از وبلاگ ما</h3>
        </div>
        <div class="owl-blog owlcarousel carousel-th">
            <div class="item">
                <figure><a href="blog-post.html">
                        <div class="text-overlay">
                            <div class="info">بیشتر بخوانید</div>
                        </div>
                        <img src="<?php bloginfo('template_url'); ?>/style/images/art/b1.jpg" alt=""/></a></figure>
                <div class="image-caption">
                    <div class="date-wrapper">
                        <div class="day">12</div>
                        <div class="month">تیر</div>
                    </div>
                    <h4 class="post-title"><a href="blog-post.html">عنوان خبر در اینجا</a></h4>
                    <div class="meta"><span class="categories"><a href="#">هویت</a>, <a href="#">برندینگ</a></span>
                        <span class="comments"><a href="#">7 نظر</a></span></div>
                    <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.لورم
                        ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. </p>
                </div>
            </div>
            <!-- /.item -->
            <div class="item">
                <figure><a href="blog-post.html">
                        <div class="text-overlay">
                            <div class="info">بیشتر بخوانید</div>
                        </div>
                        <img src="<?php bloginfo('template_url'); ?>/style/images/art/b2.jpg" alt=""/></a></figure>
                <div class="image-caption">
                    <div class="date-wrapper">
                        <div class="day">11</div>
                        <div class="month">تیر</div>
                    </div>
                    <h4 class="post-title"><a href="blog-post.html">عنوان خبر در اینجا</a></h4>
                    <div class="meta"><span class="categories"><a href="#">هویت</a>, <a href="#">برندینگ</a></span>
                        <span class="comments"><a href="#">7 نظر</a></span></div>
                    <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.لورم
                        ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. </p>
                </div>
            </div>
            <!-- /.item -->
            <div class="item">
                <figure><a href="blog-post.html">
                        <div class="text-overlay">
                            <div class="info">بیشتر بخوانید</div>
                        </div>
                        <img src="<?php bloginfo('template_url'); ?>/style/images/art/b3.jpg" alt=""/></a></figure>
                <div class="image-caption">
                    <div class="date-wrapper">
                        <div class="day">06</div>
                        <div class="month">تیر</div>
                    </div>
                    <h4 class="post-title"><a href="blog-post.html">عنوان خبر در اینجا</a></h4>
                    <div class="meta"><span class="categories"><a href="#">هویت</a>, <a href="#">برندینگ</a></span>
                        <span class="comments"><a href="#">7 نظر</a></span></div>
                    <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.لورم
                        ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. </p>
                </div>
            </div>
            <!-- /.item -->
            <div class="item">
                <figure><a href="blog-post.html">
                        <div class="text-overlay">
                            <div class="info">بیشتر بخوانید</div>
                        </div>
                        <img src="<?php bloginfo('template_url'); ?>/style/images/art/b4.jpg" alt=""/></a></figure>
                <div class="image-caption">
                    <div class="date-wrapper">
                        <div class="day">17</div>
                        <div class="month">تیر</div>
                    </div>
                    <h4 class="post-title"><a href="blog-post.html">عنوان خبر در اینجا</a></h4>
                    <div class="meta"><span class="categories"><a href="#">هویت</a>, <a href="#">برندینگ</a></span>
                        <span class="comments"><a href="#">7 نظر</a></span></div>
                    <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.لورم
                        ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. </p>
                </div>
            </div>
            <!-- /.item -->
            <div class="item">
                <figure><a href="blog-post.html">
                        <div class="text-overlay">
                            <div class="info">بیشتر بخوانید</div>
                        </div>
                        <img src="<?php bloginfo('template_url'); ?>/style/images/art/b5.jpg" alt=""/></a></figure>
                <div class="image-caption">
                    <div class="date-wrapper">
                        <div class="day">11</div>
                        <div class="month">تیر</div>
                    </div>
                    <h4 class="post-title"><a href="blog-post.html">عنوان خبر در اینجا</a></h4>
                    <div class="meta"><span class="categories"><a href="#">هویت</a>, <a href="#">برندینگ</a></span>
                        <span class="comments"><a href="#">7 نظر</a></span></div>
                    <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.لورم
                        ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. </p>
                </div>
            </div>
            <!-- /.item -->
        </div>
        <!-- /.owlcarousel -->

    </div>
</div>
<div class="parallax process">
    <div class="container inner text-center">
        <div class="section-title-wrapper">
            <h3 class="section-title bm20">پروسه ما</h3>
        </div>
        <div class="thin">
            <p class="text-center"> چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی
                تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد. چاپگرها و متون بلکه روزنامه
                و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف
                بهبود ابزارهای کاربردی می باشد.</p>
        </div>
        <div class="divide30"></div>
        <div class="row services-3 text-center">
            <div class="col-sm-3 col">
                <div class="icon"><i class="icon-picons-bulb icn"></i></div>
                <h4 class="upper">1. ایده خلاقانه</h4>
            </div>
            <div class="col-sm-3 col">
                <div class="icon"><i class="icon-picons-rocket icn"></i></div>
                <h4 class="upper">2. راه حل سریع</h4>
            </div>
            <div class="col-sm-3 col">
                <div class="icon"><i class="icon-picons-lab icn"></i></div>
                <h4 class="upper">3. لمس جادویی</h4>
            </div>
            <div class="col-sm-3 col">
                <div class="icon"><i class="icon-picons-award icn"></i></div>
                <h4 class="upper">4. برنده شدن</h4>
            </div>
        </div>
    </div>
    <!-- /.container -->
</div>
<!-- /.process -->
<div class="dark-wrapper">
    <div class="container inner">
        <div class="text-center">
            <p class="lead lite"><a href="contact.html">اگر از کارهای ما خوشتان آمد اینجا را کلیک کنید</a></p>
        </div>
    </div>
</div>


<?php  get_footer();   ?>
<!-- /footer -->

</div>
<!-- /.body-wrapper -->
</body>
</html>