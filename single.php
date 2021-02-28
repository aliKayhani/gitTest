<?php get_header();?>
<!--/.navbar -->
get_search_form();
<div class="offset"></div>
<div class="light-wrapper">
    <?php  if(have_posts()){    ?>
    <div class="container inner">

        <div class="owl-slider-wrapper">
            <div class="owl-portfolio-slider owl-carousel">
                <div class="item"> <img src="<?php the_post_thumbnail_url(); ?>" alt="" /> </div>

            </div>
            <div class="owl-custom-nav"> <a class="slider-prev"></a> <a class="slider-next"></a> </div>
        </div>
        <!--/.owl-slider-wrapper -->
        <div class="divide20"></div>
        <h1 class="post-title"><?php the_title() ?></h1>
        <div class="row">
            <div class="col-sm-8">
                <p><?php the_content(); ?></p>
            </div>
            <!-- /.col-sm-8 -->
            <div class="col-sm-4 lp30">
                <ul class="item-details">

                    <li><span>تاریخ :</span><p style="direction: rtl; "> <?php the_date('D/M/Y'); ?> -<?php the_time('H:m' )  ?> </p></li>
                    <li><span>آخرین تاریخ ویرایش :</span>
                        <p style="direction: rtl; "> <?php the_modified_date('D/M/Y'); ?> - <?php the_modified_time('H:m')  ?>- <?php the_modified_author(); ?> </p></li>
                    <li><span>دسته ها:</span>  <?php the_category();   ?></li>


                </ul>
            </div>
            <!-- /.col-sm-4 -->
        </div>
        <!-- /.row -->
        <?php   }  ?>
        <div class="divide70"></div>

                     <?php include('download_box.php');  ?>
        <!-- /.owlcarousel -->
    </div>
</div>
</div>
<?php comments_template();  ?>
<?php get_footer(); ?>





</body>
</html>