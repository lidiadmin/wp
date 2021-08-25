<?php

define( 'DAHUZI_THEMER_DIR', get_template_directory() );
define( 'DAHUZI_THEME_URL', get_template_directory_uri() );
define( 'DAHUZI_THEME_VERSION', wp_get_theme()->get('Version') );
define( 'DAHUZI_EDD_ID', '106163' ); //主题id，不可更改
define( 'DAHUZI_THEME_NAME', 'Factory主题' ); //主题名字，不可更改

/** --------------------------------------------------------------------------------- *
 *  codestar-framework 相关
 *  --------------------------------------------------------------------------------- */
include TEMPLATEPATH.'/admin/codestar-framework/codestar-framework.php'; // codestar-framework
include TEMPLATEPATH.'/admin/codestar-framework/config/customize.php'; // 自定义设置
include TEMPLATEPATH.'/admin/codestar-framework/config/options.php'; // 通用优化设置
include TEMPLATEPATH.'/admin/codestar-framework/config/metabox.php'; // 文章扩展
include TEMPLATEPATH.'/admin/codestar-framework/config/post-type-dahuzi-page.php'; // 低配版页面构建器
include TEMPLATEPATH.'/admin/codestar-framework/config/taxonomy.php'; // 分类扩展
//include TEMPLATEPATH.'/admin/codestar-framework/config/shortcoder.php'; // 短代码配置器

// 自定义设置 echo xintheme('option');
if ( !function_exists('xintheme') ) {
  function xintheme( $option = '', $default = null ) {
    $options = get_option('xintheme_customize');
    return ( isset( $options[$option] ) ) ? $options[$option] : $default;
  }
}
if ( !function_exists('xintheme_img') ) {
    function xintheme_img($option = '', $default = '')
    {
        $options = get_option('xintheme_customize');
        return ( isset( $options[$option]['url'] ) ) ? $options[$option]['url'] : $default;
    }
}

// 输出图片Alt文本 echo xintheme_image_alt('option');
if ( !function_exists('xintheme_image_alt') ) {
    function xintheme_image_alt($option = '', $default = '')
    {
        $options = get_option('xintheme_customize');
        $id = isset( $options[$option]['id'] ) ?: $default;
        $_wp_attachment_image_alt = get_post_meta( $id, '_wp_attachment_image_alt', true );
        return ( isset( $_wp_attachment_image_alt ) ) ? $_wp_attachment_image_alt : $default;
    }
}

// 网站优化设置 echo dahuzi('option');
if ( !function_exists('dahuzi') ) {
  function dahuzi( $option = '', $default = null ) {
    $options = get_option('xintheme_optimize');
    return ( isset( $options[$option] ) ) ? $options[$option] : $default;
  }
}
if ( !function_exists('dahuzi_img') ) {
  function dahuzi_img( $option = '', $default = null ) {
    $options = get_option('xintheme_optimize');
    return ( isset( $options[$option]['url'] ) ) ? $options[$option]['url'] : $default;
  }
}

// 分类扩展设置 echo dahuzi_taxonomy('option');
if ( !function_exists('dahuzi_taxonomy') ) {
  function dahuzi_taxonomy( $option = '', $default = null ) {
    global $wp_query;
    $options = get_term_meta( $wp_query->get_queried_object_id(), '_dahuzi_taxonomy_options', true );
    return ( isset( $options[$option] ) ) ? $options[$option] : $default;
  }
}


/** --------------------------------------------------------------------------------- *
 *  核心文件
 *  --------------------------------------------------------------------------------- */
include TEMPLATEPATH.'/public/encryption/admin-page.php';
include TEMPLATEPATH.'/public/encryption/encryption.php';
include TEMPLATEPATH.'/public/extend/xintheme-seo.php'; //SEO设置
include TEMPLATEPATH.'/public/encryption/dahuzi-contact.php'; //在线留言
include TEMPLATEPATH.'/public/theme-functions.php'; //主题相关
include TEMPLATEPATH.'/public/basic-functions.php'; //通用函数
include TEMPLATEPATH.'/public/wp-optimize.php'; //WP优化
include TEMPLATEPATH.'/public/extend-functions.php'; //扩展功能
include TEMPLATEPATH.'/public/widget.php'; //小工具
include TEMPLATEPATH.'/public/comment.php'; //评论相关
include TEMPLATEPATH.'/public/wp_bootstrap_navwalker.php'; //菜单

include TEMPLATEPATH.'/admin/dahuzi-blocks/dahuzi-blocks.php'; //古腾堡模块



