<div class="download post">

    <a
        href="#" onclick="return wprp_toggle('.download-instruction','');"> <span
            class="instruction-expander">راهنمای دانلود</span></a>

    <h2>لینک‌های دانلود</h2>
    <!--زمینه های دلخواه-->

    <div id="download-links">
        <ul>

            <!--
<li id="keyfiyat-image">فعال<font color="#0093C4"> <?php echo get_post_meta($post->ID, 'جعبه دانلود',true); ?></font>&nbsp,</li>
-->
            <?php $mid_var = get_post_meta($post->ID, 'نام',true);
            if(isset($mid_var) && !empty($mid_var)) : ?>
                <li id="format-image"><strong>نام :&nbsp </strong></strong><font color="#0093C4"> <?php echo get_post_meta($post->ID, 'نام',true); ?></font>&nbsp </li>
            <?php endif; ?>

            <?php $mid_var = get_post_meta($post->ID, 'لینک مستقیم',true);
            if(isset($mid_var) && !empty($mid_var)) : ?>
                <li id="zhaner-image"><a href="<?php echo get_post_meta($post->ID, 'لینک مستقیم',true); ?>"><strong> دانلود با لینک مستقیم </strong></a>&nbsp</li>
            <?php endif; ?>

            <?php $mid_var = get_post_meta($post->ID, 'دانلود قسمت اول',true);
            if(isset($mid_var) && !empty($mid_var)) : ?>
                <li id="zhaner-image"><a href="<?php echo get_post_meta($post->ID, 'دانلود قسمت اول',true); ?>"><strong> دانلود قسمت اول </strong></a>&nbsp</li>

            <?php endif; ?>

            <?php $mid_var = get_post_meta($post->ID, 'دانلود قسمت دوم',true);
            if(isset($mid_var) && !empty($mid_var)) : ?>
                <li id="zhaner-image"><a href="<?php echo get_post_meta($post->ID, 'دانلود قسمت دوم',true); ?>"><strong> دانلود قسمت دوم </strong></a>&nbsp</li>
            <?php endif; ?>

            <?php $mid_var = get_post_meta($post->ID, 'دانلود قسمت سوم',true);
            if(isset($mid_var) && !empty($mid_var)) : ?>
                <li id="zhaner-image"><a href="<?php echo get_post_meta($post->ID, 'دانلود قسمت سوم',true); ?>"><strong> دانلود قسمت سوم </strong></a>&nbsp</li>
            <?php endif; ?>

            <?php $mid_var = get_post_meta($post->ID, 'دانلود قسمت چهارم',true);
            if(isset($mid_var) && !empty($mid_var)) : ?>
                <li id="zhaner-image"><a href="<?php echo get_post_meta($post->ID, 'دانلود قسمت چهارم',true); ?>"><strong> دانلود قسمت چهارم </strong></a>&nbsp</li>
            <?php endif; ?>

            <?php $mid_var = get_post_meta($post->ID, 'لینک کمکی',true);
            if(isset($mid_var) && !empty($mid_var)) : ?>
                <li id="hajm-image"><a href="<?php echo get_post_meta($post->ID, 'لینک کمکی',true); ?>"><strong> لینک کمکی </strong></a>&nbsp</li>
            <?php endif; ?>

            <?php $mid_var = get_post_meta($post->ID, 'رمز',true);
            if(isset($mid_var) && !empty($mid_var)) : ?>
                <li id="format-image"><strong> رمز فایل :&nbsp </strong><font color="#0093C4"> <?php echo get_post_meta($post->ID, 'رمز',true); ?></font>&nbsp</li>
            <?php endif; ?>

            <?php $mid_var = get_post_meta($post->ID, 'حجم',true);
            if(isset($mid_var) && !empty($mid_var)) : ?>
                <li id="format-image"><strong>حجم فایل :&nbsp </strong></strong><font color="#0093C4"> <?php echo get_post_meta($post->ID, 'حجم',true); ?></font>&nbsp </li>
            <?php endif; ?>

            <?php $mid_var = get_post_meta($post->ID, 'فرمت',true);
            if(isset($mid_var) && !empty($mid_var)) : ?>
                <li id="date-image"><strong> فرمت فایل :&nbsp </strong><font color="#0093C4"> <?php echo get_post_meta($post->ID, 'فرمت',true); ?></font>&nbsp</li>
            <?php endif; ?>

            <?php $mid_var = get_post_meta($post->ID, 'منبع',true);
            if(isset($mid_var) && !empty($mid_var)) : ?>
                <li id="date-image"><strong> منبع :&nbsp </strong><font color="#0093C4"> <?php echo get_post_meta($post->ID, 'منبع',true); ?></font>&nbsp</li>
            <?php endif; ?>

            <?php $mid_var = get_post_meta($post->ID, 'توضیحات',true);
            if(isset($mid_var) && !empty($mid_var)) : ?>
                <li id="format-image"><strong>توضیحات :&nbsp </strong></strong><font color="#0093C4"> <?php echo get_post_meta($post->ID, 'توضیحات',true); ?></font>&nbsp </li>
            <?php endif; ?>

        </ul>
    </div>
    <!--/زمینه های دلخواه-->

</div><div
    class="download-instruction"><h3>راهنمای دانلود</h3><ul><li>برای دانلود، به روی عبارت "دانلود" کلیک کنید و منتظر بمانید تا پنجره مربوطه ظاهر شود سپس محل ذخیره شدن فایل را انتخاب کنید و منتظر بمانید تا دانلود تمام شود.</li><li>جهت استفاده از فایل های فشرده از نرم افزار WinRar استفاده نموده و به پسورد هر فایل توجه نمایید.</li><li><span
                style="color: #ff0000;">در صورت بروز مشکل در دانلود فایل ها تنها کافی است از طریق سیستم گزارش خطا نسبت به بروز مشکل اطلاع دهید تا پیگیری سریع برای حل مشکل اقدام گردد.</span></li><li>فایل های قرار داده شده برای دانلود به منظور کاهش حجم و دریافت سریعتر فشرده شده اند، برای خارج سازی فایل ها از حالت فشرده از نرم افزار<b> Win Rar </b>و یا مشابه آن استفاده کنید.</li><li>کلمه رمز جهت بازگشایی فایل فشرده عبارت <b>www.bigtheme.ir ( حتما با حروف کوچک تایپ شود )</b> می باشد. تمامی حروف را میبایستی به صورت کوچک تایپ کنید و در هنگام تایپ به وضعیت EN/FA کیبورد خود توجه داشته باشید همچنین بهتر است کلمه رمز را تایپ کنید و از Copy-Paste آن بپرهیزید.</li><li>چنانچه در هنگام خارج سازی فایل از حالت فشرده با پیغام <b>CRC</b> مواجه شدید، در صورتی که کلمه رمز را درست وارد کرده باشید. فایل به صورت خراب دانلود شده است و می بایستی مجدداً آن را دانلود کنید.</li></ul></div>

<!--   /download -->