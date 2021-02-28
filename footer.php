<footer class="footer">
    <div class="container inner">
        <div class="row">
            <div class="col-sm-3">
                <div class="widget">

                    <p><?php if (!function_exists('dynamic_sidebar') || !dynamic_sidebar('درباره ما')) : ?><?php endif; ?></p>
                    <div class="divide5"></div>
                    <ul class="social">
                        <li><a href="#"><i class="icon-s-rss"></i></a></li>
                        <li><a href="#"><i class="icon-s-twitter"></i></a></li>
                        <li><a href="#"><i class="icon-s-facebook"></i></a></li>
                        <li><a href="#"><i class="icon-s-pinterest"></i></a></li>
                        <li><a href="#"><i class="icon-s-linkedin"></i></a></li>
                    </ul>
                </div>
                <!-- /.widget -->
            </div>
            <!-- /col -->

            <div class="col-sm-3">
                <div class="widget" >

                    <!-- /.post-list -->
                </div>
                <!-- /.widget -->
            </div>
            <!-- /col -->

            <div class="col-sm-3">
                <div class="widget">
                    <h3 class="widget-title upper">در تماس باشید</h3>
                    <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.
                        چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط.</p>
                    <div class="contact-info"><i class="icon-location"></i> ایران تهران <br/>
                        <i class="icon-phone"></i>+98 (21) 456 78 90 <br/>
                        <i class="icon-mail"></i> <a href="first.last_email.html">hello@webdesigndl.com</a></div>
                </div>
            </div>
            <!-- /col -->

            <div class="col-sm-3">
                <div class="widget">
                    <h3 class="widget-title upper">خبرنامه</h3>
                    <p>کتابهای زیادی در شصت و سه درصد گذشته، حال و آینده شناخت فراوان جامعه و متخصصان را می طلبد تا با
                        نرم افزارها شناخت بیستری را برای طراحان رایانه ای و فرهنگ پیشرو در زبان فارسی ایجاد کرد.</p>
                    <div class="divide10"></div>
                    <div class="newsletter-wrapper">
                        <div id="mc_embed_signup">
                            <form action="" method="post" id="mc-embedded-subscribe-form"
                                  name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
                                <input type="email" value="" name="EMAIL" class="email" id="mce-EMAIL"
                                       placeholder="ایمیل را وارد کنید" required>
                                <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
                                <div style="position: absolute; left: -5000px;">
                                    <input type="text" name="b_ddc180777a163e0f9f66ee014_056957de28" value="">
                                </div>
                                <div class="clear">
                                    <input type="submit" value="پیوستن" name="subscribe" id="mc-embedded-subscribe"
                                           class="button">
                                </div>
                            </form>
                        </div>
                    </div>
                    <!-- /.newsletter-wrapper -->
                </div>
                <!-- /.widget -->

            </div>
            <!-- /col -->
        </div>
        <!-- /.row -->
    </div>
    <!-- .container -->

    <div class="sub-footer">
        <div class="container">
            

                <?php

                $defaults = array(
                    'theme_location'  => '',
                    'menu'            => 'top_menu',
                    'container'       => '',
                    'container_class' => '',
                    'container_id'    => '',
                    'menu_class'      => '',
                    'menu_id'         => '',
                    'echo'            => true,
                    'fallback_cb'     => 'wp_page_menu',
                    'before'          => '',
                    'after'           => '',
                    'link_before'     => '',
                    'link_after'      => '',
                    'items_wrap'      => ' <ul class="footer-menu pull-right">%3$s</ul>',
                    'depth'           => 1,
                    'walker'          => ''
                );

                wp_nav_menu( $defaults );

                ?>

        </div>
    </div>
</footer>


<a href="#" class="bonfire-slideout-button"> <i class="icon-mail-1"></i> </a>
<div class="bonfire-slideout-button-triangle-background"></div>
<div class="bonfire-slideout">
    <div class="bonfire-slideout-inner">
        <div class="bonfire-slideout-inner-inner">
            <div class="bonfire-slideout-close"></div>
            <div class="bonfire-slideout-content container">
                <div class="thin">
                    <div class="section-title-wrapper">
                        <h3 class="section-title">در تماس باشید</h3>
                        <p>کتابهای زیادی در شصت و سه درصد گذشته، حال و آینده شناخت فراوان جامعه و متخصصان را می طلبد تا
                            با نرم افزارها شناخت بیستری را برای طراحان رایانه ای و فرهنگ پیشرو در زبان فارسی ایجاد کرد.
                            کتابهای زیادی در شصت و سه درصد گذشته، حال و آینده شناخت فراوان جامعه و متخصصان را می طلبد تا
                            با نرم افزارها شناخت بیستری را برای طراحان رایانه ای و فرهنگ پیشرو در زبان فارسی ایجاد
                            کرد.</p>
                    </div>
                    <div class="divide30"></div>
                    <div class="row">
                        <div class="col-sm-8">
                            <div class="form-container">
                                <div class="response alert alert-success"></div>
                                <form class="forms" action="" method="post">
                                    <fieldset>
                                        <ol>
                                            <li class="form-row text-input-row name-field">
                                                <input type="text" name="name" class="text-input defaultText required"
                                                       title="نام (ضروری)"/>
                                            </li>
                                            <li class="form-row text-input-row email-field">
                                                <input type="text" name="email"
                                                       class="text-input defaultText required email"
                                                       title="ایمیل (ضروری)"/>
                                            </li>
                                            <li class="form-row text-input-row subject-field">
                                                <input type="text" name="subject" class="text-input defaultText"
                                                       title="موضوع"/>
                                            </li>
                                            <li class="form-row text-area-row">
                                                <textarea name="message" class="text-area required"></textarea>
                                            </li>
                                            <li class="form-row hidden-row">
                                                <input type="hidden" name="hidden" value=""/>
                                            </li>
                                            <li class="nocomment">
                                                <label for="nocomment">این گزینه را خالی بگذارید</label>
                                                <input id="nocomment" value="" name="nocomment"/>
                                            </li>
                                            <li class="button-row">
                                                <input type="submit" value="ارسال" name="submit"
                                                       class="btn btn-submit bm0"/>
                                            </li>
                                        </ol>
                                        <input type="hidden" name="v_error" id="v-error" value="ضروری"/>
                                        <input type="hidden" name="v_email" id="v-email" value="ایمیل را وارد کنید"/>
                                    </fieldset>
                                </form>
                            </div>
                            <!-- /.form-container -->
                        </div>
                        <!-- /.col -->
                        <aside class="col-sm-4 sidebar lp20">
                            <div class="sidebox widget">
                                <h3>آدرس</h3>
                                <p>کتابهای زیادی در شصت و سه درصد گذشته، حال و آینده شناخت فراوان جامعه و متخصصان را می
                                    طلبد تا با نرم افزارها شناخت بیشتری را برای طراحان رایانه ای و فرهنگ پیشرو در زبان
                                    فارسی ایجاد کرد.</p>
                                <address>
                                  <br>
                                    ایران تهران <br>
                                    13362<br>
                                    <abbr title="Phone">تلفن:</abbr> (98)123456 <br>
                                    <abbr title="Email">ایمیل:</abbr> <a href="mailto:#">هmail.com</a>
                                </address>
                            </div>
                            <!-- /.widget -->
                        </aside>
                        <!-- /.col -->
                    </div>
                    <!-- /.row --></div>
            </div>
        </div>
    </div>
</div>
<!-- /canvas -->
<script src="<?php bloginfo('template_url'); ?>/style/js/jquery.min.js"></script>
<script src="<?php bloginfo('template_url'); ?>/style/js/bootstrap.min.js"></script>
<script src="<?php bloginfo('template_url'); ?>/style/js/twitter-bootstrap-hover-dropdown.min.js"></script>
<script src="<?php bloginfo('template_url'); ?>/style/js/jquery.themepunch.plugins.min.js"></script>
<script src="<?php bloginfo('template_url'); ?>/style/js/jquery.themepunch.revolution.min.js"></script>
<script src="<?php bloginfo('template_url'); ?>/style/js/jquery.fancybox.pack.js"></script>

<script
    src="<?php bloginfo('template_url'); ?>/style/js/fancybox/helpers/jquery.fancybox-thumbs0ff5.js?v=1.0.2"></script>
<script
    src="<?php bloginfo('template_url'); ?>/style/js/fancybox/helpers/jquery.fancybox-mediae209.js?v=1.0.0"></script>
<script src="<?php bloginfo('template_url'); ?>/style/js/jquery.isotope.min.js"></script>
<script src="<?php bloginfo('template_url'); ?>/style/js/jquery.easytabs.min.js"></script>
<script src="<?php bloginfo('template_url'); ?>/style/js/owl.carousel.min.js"></script>
<script src="<?php bloginfo('template_url'); ?>/style/js/jquery.fitvids.js"></script>
<script src="<?php bloginfo('template_url'); ?>/style/js/jquery.sticky.js"></script>
<script src="<?php bloginfo('template_url'); ?>/style/js/google-code-prettify/prettify.js"></script>
<script src="<?php bloginfo('template_url'); ?>/style/js/jquery.slickforms.js"></script>
<script src="<?php bloginfo('template_url'); ?>/style/js/retina.js"></script>
<script src="<?php bloginfo('template_url'); ?>/style/js/canvas.js"></script>
<script src="<?php bloginfo('template_url'); ?>/style/js/scripts.js"></script>
<script src="<?php bloginfo('template_url'); ?>/style/js/wprp.js"></script>

<!-- DEMO ONLY -->

<script type="text/javascript" src="switcher/switchstylesheet.js"></script>
<script type="text/javascript">
    $(document).ready(function () {
        $(".changecolor").switchstylesheet({seperator: "color"});
    });
</script>
