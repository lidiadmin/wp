<?php

/**
 * @Author: 大胡子
 * @Email:  dahuzi@xintheme.com
 * @Link:   www.dahuzi.me
 * @Date:   2020-09-09 22:18:48
 * @Last Modified by:   dahuzi
 * @Last Modified time: 2021-06-16 09:56:32
 */

/** --------------------------------------------------------------------------------- *
 *  启用主题后跳转到入门页面
 *  --------------------------------------------------------------------------------- */
global $pagenow ; 
if( is_admin() && isset( $_GET['activated'] ) && $pagenow  ==  'themes.php' ) {
    wp_redirect( admin_url('admin.php?page=xintheme-page') );
    exit;
}

//注册导航
register_nav_menus(
    array(
        'main' => __( '主菜单导航' ), 'mobile' => __( '手机端菜单' )
    )
);

/** --------------------------------------------------------------------------------- *
 *  载入JS、CSS
 *  --------------------------------------------------------------------------------- */
if ( ! function_exists( 'xintheme_scripts_method' ) ) {
    function xintheme_scripts_method() {
		
		wp_enqueue_style('plugins', DAHUZI_THEME_URL . '/static/css/plugins.min.css', array(), DAHUZI_THEME_VERSION);
		wp_enqueue_style('style', DAHUZI_THEME_URL . '/static/css/style.css', array(), DAHUZI_THEME_VERSION);
		wp_enqueue_style('responsive', DAHUZI_THEME_URL . '/static/css/responsive.css', array(), DAHUZI_THEME_VERSION);
		wp_enqueue_style( 'font-awesome', 'https://cdn.jsdelivr.net/npm/font-awesome@4.7.0/css/font-awesome.min.css', array(), '4.7.1', 'all' );

		//载入JS
		wp_deregister_script('jquery');
		wp_enqueue_script('jquery', "https://cdn.staticfile.org/jquery/3.3.1/jquery.min.js", false, null);

		wp_deregister_script('jquery-migrate');
		wp_enqueue_script('jquery-migrate', "https://cdn.staticfile.org/jquery-migrate/3.0.1/jquery-migrate.min.js", false, null);

		wp_enqueue_script('bootstrap', DAHUZI_THEME_URL . '/static/js/bootstrap.min.js', array(), DAHUZI_THEME_VERSION, true);
		wp_enqueue_script('owl', DAHUZI_THEME_URL . '/static/js/owl.carousel.min.js', array(), DAHUZI_THEME_VERSION, true);
		wp_enqueue_script('animate', DAHUZI_THEME_URL . '/static/js/css3-animate-it.js', array(), DAHUZI_THEME_VERSION, true);

		wp_enqueue_script('theia-sticky-sidebar', get_template_directory_uri() . '/static/js/theia-sticky-sidebar.js', array(),false, true);
		wp_enqueue_script('script', DAHUZI_THEME_URL . '/static/js/script.js', array(), DAHUZI_THEME_VERSION, true);
        wp_localize_script('script', 'dahuzi', [
            'ajaxurl' => admin_url('admin-ajax.php'),
        ]);

		//fancybox
		wp_enqueue_style('fancybox', 'https://cdn.staticfile.org/fancybox/3.5.7/jquery.fancybox.min.css');
		wp_enqueue_script('fancybox3', 'https://cdn.staticfile.org/fancybox/3.5.7/jquery.fancybox.min.js', ['jquery'], '', true);
		
		if (is_singular() && comments_open() && get_option('thread_comments')){
			wp_enqueue_script( 'comment-reply' );
		}
		
     }
}
add_action('wp_enqueue_scripts', 'xintheme_scripts_method');

// 获取文章缩略图
function post_thumbnail($width=400, $height=200, $echo=1){

    global $post, $is_chrome;

    $default_timthumb = dahuzi_img('default_timthumb');
    $cdn_type = dahuzi('cdn_type');
    
    $dir = get_bloginfo('template_directory');

    if( has_post_thumbnail() ){
        $timthumb_src = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID),'full');
        $img_url = $timthumb_src[0];
        if( $cdn_type == 'qiniu' ){
            if( $is_chrome || is_android_dahuzi() ){
                $src = "$img_url?imageView2/1/format/webp/w/$width/h/$height/q/100";
            }else{
                $src = "$img_url?imageView2/1/w/$width/h/$height/q/100";
            }
        }elseif( $cdn_type == 'alioss' ){
            if( $is_chrome || is_android_dahuzi() ){
                $src = "$img_url?x-oss-process=image/resize,m_fill,w_$width,h_$height/format,webp";
            }else{
                $src = "$img_url?x-oss-process=image/resize,m_fill,w_$width,h_$height";
            }
        }else{
            //$src = $img_url;
            if( dahuzi('dahuzi_thumbnail_link') ){
                $src = $img_url;
            }else{
                $src = "$dir/timthumb.php&#63;src=$img_url&#38;w=$width&#38;h=$height&#38;zc=1&#38;q=100";
            }
        }
    }else{
        ob_start();
        ob_end_clean();
        $output = preg_match_all('/<img.+src=[\'"]([^\'"]+)[\'"].*>/i', $post->post_content, $matches ,PREG_SET_ORDER);
        $cnt = count( $matches );
        if($cnt>0){
            $img_url = $matches[0][1];
            if( $cdn_type == 'qiniu' ){
                if( $is_chrome || is_android_dahuzi() ){
                    $src = "$img_url?imageView2/1/format/webp/w/$width/h/$height/q/100";
                }else{
                    $src = "$img_url?imageView2/1/format/webp/w/$width/h/$height/q/100";
                }
            }elseif( $cdn_type == 'alioss' ){
                if( $is_chrome || is_android_dahuzi() ){
                    $src = "$img_url?x-oss-process=image/resize,m_fill,w_$width,h_$height/format,webp";
                }else{
                    $src = "$img_url?x-oss-process=image/resize,m_fill,w_$width,h_$height";
                }
            }else{
                //$src = $img_url; // 使用文章内第一张图作为文章缩略图
                if( dahuzi('dahuzi_thumbnail_link') ){
                    $src = $img_url;
                }else{
                    $src = "$dir/timthumb.php&#63;src=$img_url&#38;w=$width&#38;h=$height&#38;zc=1&#38;q=100";
                }
            }
        }else{
            //$src = $default_timthumb; // 默认缩略图
            if( dahuzi('dahuzi_thumbnail_link') ){
                $src = $default_timthumb;
            }else{
                $src = "$dir/timthumb.php&#63;src=$default_timthumb&#38;w=$width&#38;h=$height&#38;zc=1&#38;q=100";
            }
        }
    }
    return $src;
}

/** --------------------------------------------------------------------------------- *
 *  自动添加暗箱标签属性
 *  --------------------------------------------------------------------------------- */
add_filter('the_content', 'add_dahuzi_data_fancybox');
function add_dahuzi_data_fancybox ($content){
    global $post;
    $pattern = "/<a(.*?)href=('|\")([^>]*).(bmp|gif|jpeg|jpg|png)('|\")(.*?)>(.*?)<\/a>/i";
    $replacement = '<a$1href=$2$3.$4$5 data-fancybox="images"$6>$7</a>';
    $content = preg_replace($pattern, $replacement, $content);
    
    return $content;
}

/** --------------------------------------------------------------------------------- *
 *  favicon 图标
 *  --------------------------------------------------------------------------------- */
add_action('wp_head', 'dahuzi_favicon', 0);
function dahuzi_favicon() {
    $favicon = get_template_directory_uri().'/static/images/favicon.png';
    if( $favicon && !get_option('site_icon') ) {
    	echo "<link rel=\"shortcut icon\" href=\"$favicon\">\n";
    }
}

/** --------------------------------------------------------------------------------- *
 *  菜单添加class
 *  --------------------------------------------------------------------------------- */
function xintheme_menu_classes($classes, $item, $args) {
	if($args->theme_location == 'main') { //这里的 main 是菜单id
    	$classes[] = 'nav-item dropdown'; //这里的 nav-item 是要添加的class类
	}
	return $classes;
}
add_filter('nav_menu_css_class','xintheme_menu_classes',10,3);

add_action( 'wp_head', 'dahuzi_theme_color', 20 );
if ( ! function_exists( 'dahuzi_theme_color' ) ) :
function dahuzi_theme_color(){
//通知栏配色
$notice_color = xintheme('notice_color');
$notice_bg_color = isset( $notice_color['bg_color'] ) ? $notice_color['bg_color'] : '#091426';
$notice_text_color = isset( $notice_color['text_color'] ) ? $notice_color['text_color'] : '#eee';
//网站主色调
$theme_color = xintheme('theme_color');
$theme_color_1 = isset( $theme_color['theme_color_1'] ) ? $theme_color['theme_color_1'] : '#fcab03';
$theme_color_2 = isset( $theme_color['theme_color_2'] ) ? $theme_color['theme_color_2'] : '#091426';
//鼠标悬浮配色
$theme_color_hover = xintheme('theme_color_hover') ?: '#fcab03';?>
<style><?php include get_template_directory() . '/static/css/color.php';?></style>

<?php }
endif;

/** --------------------------------------------------------------------------------- *
 *  清除wp所有自带的customize选项
 *  --------------------------------------------------------------------------------- */
function remove_default_settings_customize( $wp_customize ) {
    //$wp_customize->remove_section( 'title_tagline');
    $wp_customize->remove_section( 'colors');
    $wp_customize->remove_section( 'header_image');
    $wp_customize->remove_section( 'background_image');
    //$wp_customize->remove_panel( 'nav_menus');
    //$wp_customize->remove_section( 'static_front_page');
    $wp_customize->remove_section( 'custom_css');
    //$wp_customize->remove_panel( 'widgets' );

	$wp_customize->get_section( 'static_front_page' )->priority  = 0; // 将主页设置移动到第一位

}
add_action( 'customize_register', 'remove_default_settings_customize',50 );

/** --------------------------------------------------------------------------------- *
 *  隐藏后台「在线留言」菜单
 *  --------------------------------------------------------------------------------- */

if( dahuzi('remove_admin_dahuzi_contact') ){

	add_action( 'admin_head', 'remove_admin_dahuzi_contact' );
	function remove_admin_dahuzi_contact(){
		echo "<style>#toplevel_page_contact{display:none}</style>";
	}

}







