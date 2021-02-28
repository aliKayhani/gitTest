<?php

header("HTTP/1.1 301 Moved Permanently");
header("Location: ".get_bloginfo('url'));
exit();

get_header();?>
<div align="center">
    <div style="border: 1px solid #DFDFDF;text-align:center;width:670px;padding:5px;font-family:Tahoma;font-size:10pt" dir="rtl">
        <div style="background:url('<?php bloginfo('template_url');  ?>/style/images/404.png');width:670px;height:452px;">
            <div style="font-weight:bold;padding-top:320px;color:white"><a href=" <?php bloginfo('template_url');  ?>">برگشت به سایت</a></div>
        </div>
    </div>
</div>
<div class="row" style=" background-color: rgba(255,0,0,0.5); ">

    <div class="col-xs-4" style=" border-right:1px solid #843534; float: right; direction:rtl; padding: 10px;"><?php wp_list_pages();  ?></div>
    <div class="col-xs-4" style=" border-right:1px solid #843534; float: right; direction:rtl; padding: 10px;"><?php wp_dropdown_categories();  ?></div>
    <div class="col-xs-4" style=" border-right:1px solid #843534; float: right; direction:rtl; padding: 10px;"><?php wp_page_menu();    ?></div>






</div>

<?php get_footer(); ?>
</body>
</html>
