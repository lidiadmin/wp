<?php
/**
 * @Author: 大胡子
 * @Email:  dahuzi@xintheme.com
 * @Link:   www.dahuzi.me
 * @Date:   2020-10-17 22:19:20
 * @Last Modified by:   dahuzi
 * @Last Modified time: 2021-06-16 01:39:44
 */

$dahuzi_page = get_post_meta( get_the_ID(), 'post_type_dahuzi_page', true );
$dahuzi_page_modular = isset($dahuzi_page['index_modular']) ? $dahuzi_page['index_modular'] : '';

$page_banner = isset($dahuzi_page['page_banner']) ? $dahuzi_page['page_banner'] : '';

if( wp_is_mobile() ){
  $banner_img = isset($page_banner['banner_img_mobile']['url']) ? $page_banner['banner_img_mobile']['url'] : '';
}else{
  $banner_img = isset($page_banner['banner_img']['url']) ? $page_banner['banner_img']['url'] : '';
}

$banner_title = isset($page_banner['banner_title']) ? $page_banner['banner_title'] : '';
$banner_desc = isset($page_banner['banner_desc']) ? $page_banner['banner_desc'] : '';

get_header(); ?>

<?php if( $banner_img ){?>
<section class="text-align-left dahuzi-page-banner" style="background-image: url('<?php echo $banner_img; ?>');">
  <div class="container">
    <div class="section-content">
      <div class="row">
        <div class="col-12">
          <?php
          if( $banner_title ){ echo '<h1>'.$banner_title.'</h1>'; }
          if( $banner_desc ){ echo '<p>'.$banner_desc.'</p>'; }
          ?>
        </div>
      </div>
    </div>
  </div>
</section>
<?php }?>

<?php
  //$index_modular = xintheme('index_modular');
  if(is_array($dahuzi_page_modular)){

    foreach($dahuzi_page_modular as $id):

      $modular_type = $id['modular_type'];
      get_template_part( 'template-parts/home-modular/home-modular', $modular_type );

    endforeach;

  }else{
    echo "<div style='text-align:center;line-height:80vh;font-size:22px;font-weight:600'>抱歉，当前页面没有添加任何模块！</div>";
  }

get_footer();