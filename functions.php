<?php
/**
 * Created by PhpStorm.
 * User: Faradars
 * Date: 31/12/2016
 * Time: 10:16 PM
 */

add_theme_support('menus');
add_theme_support( 'post-thumbnails' );



if ( function_exists('register_sidebar') )
    register_sidebar(array(
        'name' => 'درباره ما ',
        'before_widget' => '',
        'after_widget' => '',
        'before_title' => '<h3>',
        'after_title' => '</h3>',
    ));




if ( function_exists('register_sidebar') )
    register_sidebar(array(
        'name' =>'موارد محبوب',
        'before_widget' => '',
        'after_widget' => '',
        'before_title' => '<h3>',
        'after_title' => '</h3>',
    ));
add_action( 'init', 'create_project' );
function create_project() {
    $labels = array(
        'name'=> _x('پروژ های جدید', 'post type general name'),
        'singular_name' => _x('پروژه', 'post type singular name'),
        'add_new' => _x('افزودن', 'پروژه'),
        'add_new_item' => __('افزودن پروژه'),
        'edit_item' => __('ویرایش پروژه'),
        'new_item' => __('جدید پروژه'),
        'view_item' =>__('نمایش پروژه'),
        'search_items' => __('جستجوی پروژه'),
        'not_found' => __('پروژهی وجود ندارد'),
        'not_found_in_trash' => __('در زباله دان پروژهی نیست'),
        'parent_item_colon' => ''
    );

    $supports = array('title', 'editor', 'custom-fields', 'excerpt','thumbnail');

    register_post_type( 'project',
        array(
            'labels' => $labels,
            'public' => true,
            'supports' => $supports
        )
    );
}

    /* search*/

    function custom_search_form($custom_search)
    {
        $default = array(

            'cat_show' => false,
            'tag_show' => false,
            'author_show' => false,
            'archive_show' => false,
            'field_show' => true,
            'label_show' => false,
            'rememberd' => true,
            'echo' => true,
            'button_show'=>true
        );

        foreach ((array)$custom_search as $key => $value) {
            $default[$key] = $value;

        }
        global $WP_Query, $query, $Wp_user;
        $cat_option = '';
        $tag_option = '';
        $author_option = '';
        $archive_option = '';
        $advanced_option = '';
        $close_option = '';
        $field_option = '';
        $button_option = '';
        $cat_selected = get_query_var('cat');
        $author_selected = get_query_var('author');
        $month_selected = get_query_var('monthnum');
        $day_selected = get_query_var('day');
        $year_selected = get_query_var('year');

        if($month_selected==0)$month_selected='';
        if($year_selected==0)$year_selected='';

        //----category-----

        if($default['cat_show']==1):

            $categories=get_categories();
            $cat_option='<li><ul>';
            if($default['label_show']==1)
            {

                $cat_option .='<li  class="cat_label">'.__('دسته بندی ').'</li>';

            }

            $cat_option.='<li class="search_cat"><select name="cat" id=""searchcat"><option value="">'.__('all').'</option>';
            foreach ($categories as $category)
            {
                $cat_option.='<option value="'.$category->cat->ID.'"';

                if(($cat_selected==$category->cat_ID)&&($default['rememberd']==1)):
                    $cat_option.='selected';
                endif;
                $cat_option.='>'.$category->cat_name.'</option>';


            }

            $cat_option.='</select></li></ul></li>';

        endif;
        //--------tag--------------------
        if($default['tag_show']==1):
            $tags = get_categories('taxonomy=post_tag');
            $tag_option='<li><ul>';
            if($default['label_show']):
                $tag_option .='<li class="tag-label">'.__('برچسب','zistfa').'</li>';
            endif;
            $tag_option .='<li class="search-tag" ><select name="tag" id="searchtag" ><option value="">'.__('همه','zistfa').'</option>';

            foreach ($tags as $tag) {
                $tag_option .= '<option value="'.$tag->slug.'"';
                if(($tag_selected == $tag->slug)&&($default['rememberd']==1)):
                    $tag_option .=' selected';
                endif;
                $tag_option .= '>'.$tag->cat_name;
                $tag_option .= '</option>';
            }
            $tag_option .= '</select></li></ul></li>';
        endif;
        //--------author--------------------
        if($default['author_show']==1):
            $authors=get_users(array('who'=>'authors','fields'=>array('id','display_name')));
            $author_option='<li><ul>';
            if($default['label_show']):
                $author_option .='<li class="author-label">'.__('نویسنده ','zistfa').'</li>';
            endif;
            $author_option .='<li class="search-author" ><select name="tag" id="searchauthor" ><option value="">'.__('همه','zistfa').'</option>';

            foreach ($authors as $author) {
                $author_option .= '<option value="'.$author->id.'"';
                if(($author_selected == $author->id)&&($default['rememberd']==1)):
                    $author_option .=' selected';
                endif;
                $author_option .= '>'.$author->display_name;
                $author_option .= '</option>';
            }
            $author_option .= '</select></li></ul></li>';
        endif;
        //--------Date--------------------
        if($default['archive_show']==1):
            $archive_option='<li><ul>';
            if($default['label_show']):
                $archive_option .='<li class="archive-label">'.__('تاریخ','zistfa').'</li>';
            endif;
            $archive_option .='<li class="archive-field">
		<input type="text" value="' . $year_selected . '" name="year" id="year" size="3" placeholder="'.__('سال','zistfa').'" />
		<input type="text" value="' . $month_selected . '" name="monthnum" id="monthnum" size="2" placeholder="'.__('ماه','zistfa').'" />
		<input type="text" value="' . $day_selected. '" name="day" id="day" size="1" placeholder="'.__('روز','zistfa').'" />
</li></ul></li>';
        endif;
        //--------search field--------------------
        if($default['field_show']==1):
            $field_option='<li><ul>';
            if($default['label_show']):
                $field_option .='<li class="search-label">'.__('جستجو برای : ','zistfa').'</li>';
            endif;
            $field_option .='<li class="search-field"><input type="text" value="' . get_search_query() . '" name="s"  placeholder="'.__('کلمه مورد نظر + اینتر','zistfa').'" /></li>
		</ul>
	</li>';
        endif;
        //--------search button--------------------
        if($default['button_show']==1):
            $button_option='<li>
<input type="submit" class="search-submit" value="'. esc_attr__( 'جستجو','zistfa' ) .'" />
</li>';
        endif;


        $form='<form action="" method="get" class="searchform"><ul>'.
            $cat_option.$tag_option.$author_option.$archive_option.$field_option.$button_option.'</ul></form>';


        if($default['echo']==1)
        {
            echo $form;
        }
        else
        {
            return $form;
        }

    }


    add_filter('get_search_form','custom_search_form',10,1);


/* admin panel*//* ----------------------------------------------------------
دسته بندی ها
------------------------------------------------------------- */

    $shortname = "shortname";

    $categories = get_categories('hide_empty=0&orderby=name');
    $all_cats = array();
    foreach ($categories as $category_item ) {
        $all_cats[$category_item->cat_ID] = $category_item->cat_name;
    }
    array_unshift($all_cats, "انتخاب دسته بندی");

    /*---------------------------------------------------
    ساخت تنظیمات
    ----------------------------------------------------*/
    function theme_settings_init(){
        register_setting( 'theme_settings', 'theme_settings' );
        wp_enqueue_style("panel_style", get_template_directory_uri()."/panel.css", false, "1.0", "all");
        wp_enqueue_script("panel_script", get_template_directory_uri()."/panel_script.js", false, "1.0");
    }

    /*---------------------------------------------------
    افزودن تنظیمات به منو پیشخوان
    ----------------------------------------------------*/
    function add_settings_page() {
        add_menu_page( __( 'تنظیمات'  ), __( 'تنظیمات'  ), 'manage_options', 'settings', 'theme_settings_page');
    }

    add_action( 'admin_init', 'theme_settings_init' );
    add_action( 'admin_menu', 'add_settings_page' );

    /* ---------------------------------------------------------
    تعریف آرایه های تنظیمات
    ----------------------------------------------------------- */

    $theme_options = array (

        array( "name" =>" تنظیمات" . $themename,
            "type" => "title"),

        /* ---------------------------------------------------------
        بخش تنظیمات عمومی
        ----------------------------------------------------------- */
        array( "name" => "عمومی",
            "type" => "section"),
        array( "type" => "open"),

        array( "name" => "لوگو سایت",
            "desc" => "عکس لوگو را وارد کنید",
            "id" => "logo",
            "type" => "text",
            "std" => ""),


        array( "type" => "close"),

        /* ---------------------------------------------------------
        بخش تنظیمات صفحه نخست
        ----------------------------------------------------------- */
        array( "name" => "صفحه نخست",
            "type" => "section"),
        array( "type" => "open"),

        array( "name" => "مطالب ویژه صفحه نخست",
            "desc" => "دسته مطالب ویژه را انتخاب کنید",
            "id" => $shortname."_feat_cat",
            "type" => "select",
            "options" => $all_cats,
            "std" => "انتخاب دسته"),

        array( "type" => "close"),


    );

    /*---------------------------------------------------
    تعریف بخش های پنل
    ----------------------------------------------------*/
    function theme_settings_page() {
        global $themename,$theme_options;
        $i=0;
        $message='';
        if ( 'save' == $_REQUEST['action'] ) {

            foreach ($theme_options as $value) {
                update_option( $value['id'], $_REQUEST[ $value['id'] ] ); }

            foreach ($theme_options as $value) {
                if( isset( $_REQUEST[ $value['id'] ] ) ) { update_option( $value['id'], $_REQUEST[ $value['id'] ]  ); } else { delete_option( $value['id'] ); } }
            $message='saved';
        }
        else if( 'reset' == $_REQUEST['action'] ) {

            foreach ($theme_options as $value) {
                delete_option( $value['id'] ); }
            $message='reset';
        }

        ?>
        <div class="wrap options_wrap">
        <div id="icon-options-general"></div>
        <h2><?php _e( ' تنظیمات قالب' ) //your admin panel title ?></h2>
        <?php
        if ( $message=='saved' ) echo '<div class="updated settings-error" id="setting-error-settings_updated"> 
        <p>تنظیمات قالب '.$themename.' ذخیره شد.</strong></p></div>';
        if ( $message=='reset' ) echo '<div class="updated settings-error" id="setting-error-settings_updated"> 
        <p>'.$themename.' settings reset.</strong></p></div>';
        ?>
        <ul>

            <li>نسخه قالب : 1.0 </li>
        </ul>
        <div class="content_options">
        <form method="post">

        <?php foreach ($theme_options as $value) {

            switch ( $value['type'] ) {

                case "open": ?>
                    <?php break;

                case "close": ?>
                    </div>
                    </div><br />
                    <?php break;

                case "title": ?>
                    <div class="message">
                        <p>از این پنل برای تنظیم سایت استفاده کنید</p>
                    </div>
                    <?php break;

                case 'text': ?>
                    <div class="option_input option_text">
                        <label for="<?php echo $value['id']; ?>">
                            <?php echo $value['name']; ?></label>
                        <input id="" type="<?php echo $value['type']; ?>" name="<?php echo $value['id']; ?>" value="<?php if ( get_settings( $value['id'] ) != "") { echo stripslashes(get_settings( $value['id'])  ); } else { echo $value['std']; } ?>" />
                        <small><?php echo $value['desc']; ?></small>
                        <div class="clearfix"></div>
                    </div>
                    <?php break;

                case 'textarea': ?>
                    <div class="option_input option_textarea">
                        <label for="<?php echo $value['id']; ?>"><?php echo $value['name']; ?></label>
                        <textarea name="<?php echo $value['id']; ?>" rows="" cols=""><?php if ( get_settings( $value['id'] ) != "") { echo stripslashes(get_settings( $value['id']) ); } else { echo $value['std']; } ?></textarea>
                        <small><?php echo $value['desc']; ?></small>
                        <div class="clearfix"></div>
                    </div>
                    <?php break;

                case 'select': ?>
                    <div class="option_input option_select">
                        <label for="<?php echo $value['id']; ?>"><?php echo $value['name']; ?></label>
                        <select name="<?php echo $value['id']; ?>" id="<?php echo $value['id']; ?>">
                            <?php foreach ($value['options'] as $option) { ?>
                                <option <?php if (get_settings( $value['id'] ) == $option) { echo 'selected="selected"'; } ?>><?php echo $option; ?></option>
                            <?php } ?>
                        </select>
                        <small><?php echo $value['desc']; ?></small>
                        <div class="clearfix"></div>
                    </div>
                    <?php break;

                case "checkbox": ?>
                    <div class="option_input option_checkbox">
                        <label for="<?php echo $value['id']; ?>"><?php echo $value['name']; ?></label>
                        <?php if(get_option($value['id'])){ $checked = "checked=\"checked\""; }else{ $checked = "";} ?>
                        <input id="<?php echo $value['id']; ?>" type="checkbox" name="<?php echo $value['id']; ?>" value="true" <?php echo $checked; ?> />
                        <small><?php echo $value['desc']; ?></small>
                        <div class="clearfix"></div>
                    </div>
                    <?php break;

                case "section":
                    $i++; ?>
                    <div class="input_section">
                    <div class="input_title">

                        <h3><img src="<?php echo get_template_directory_uri();?>/images/options.png" alt="">&nbsp;<?php echo $value['name']; ?></h3>
                        <span class="submit"><input name="save<?php echo $i; ?>" type="submit" class="button-primary" value="ذخیره" /></span>
                        <div class="clearfix"></div>
                    </div>
                    <div class="all_options">
                    <?php break;

            }
        }?>
        <input type="hidden" name="action" value="save" />
        </form>
        <form method="post">
            <p class="submit">
                <input name="reset" type="submit" value="بازنشانی تنظیمات" />
                <input type="hidden" name="action" value="reset" />
            </p>
        </form>
        </div>

        </div>
        <?php
    }

    ?>
<?php
function comment_reform ($arg) {
    $arg['title_reply'] = __(' ارسال  نظر ');
    return $arg;
}
add_filter('comment_form_defaults','comment_reform');
function custom_comment_form_defaults($defaults){
    $defaults['comment_notes_before'] = '<p class="comment-notes">' . sprintf( __('آدرس الکترونیکی شما نمایش داده نمی شود %s'), '<span class="required">*</span>' ) . '</p>';
    return $defaults;
}
add_filter( 'comment_form_defaults', 'custom_comment_form_defaults' );
?>


