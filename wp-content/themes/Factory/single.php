<?php

$single_ad = xintheme('single_ad');

$post_header_banner = xintheme('post_header_banner');
$single_header_img = xintheme('single_header_img');
$single_header_url = isset( $single_header_img['url'] ) ? $single_header_img['url'] : '';

$category = get_the_category();
if($category[0]){
    $catid = $category[0]->term_id;
}
$category_data = get_term_meta( $catid, '_dahuzi_taxonomy_options', true );

if( $single_header_url ){
  $banner_img = isset( $single_header_img['url'] ) ? $single_header_img['url'] : '';
}else{
  $banner_img = isset( $category_data['cat_banner_img']['url'] ) ? $category_data['cat_banner_img']['url'] : '';
}

// 产品信息
$extend_info = get_post_meta( get_the_ID(), 'extend_info', true );
$showproduct_head = isset($extend_info['showproduct_head']) ? $extend_info['showproduct_head'] : '';
$produc_abstract = isset($extend_info['produc_abstract']) ? $extend_info['produc_abstract'] : '';
$produc_parameter = isset($extend_info['add_produc_parameter']) ? $extend_info['add_produc_parameter'] : '';
$post_add_button = isset($extend_info['add_button']) ?$extend_info['add_button'] : '';
$produc_parameter_col = isset($extend_info['produc_parameter_col']) ?$extend_info['produc_parameter_col'] : '';
$produc_img = isset($extend_info['produc_img']) ?$extend_info['produc_img'] : '';

get_header();

if( $post_header_banner && !$showproduct_head || xintheme('header_type') == '1' && !$showproduct_head ){?>
<section class="inner-area parallax-bg text-align-left" data-background="<?php echo $banner_img;?>" data-type="parallax" data-speed="3" style="background-image: url('<?php echo $banner_img;?>');">
  <div class="container">
    <div class="section-content">
      <div class="row">
        <div class="col-12">
          <h1><?php the_title_attribute(); ?></h1>
          <div class="banner-entry-meta">
            <span><?php the_category(', ') ?></span>
            <?php if( xintheme('xintheme_single_time') ){ ?>
            <span><?php echo dahuzi_post_time();?><?php //echo get_the_date('Y-m-d H:i'); ?></span>
            <?php }?>
            <?php if( xintheme('xintheme_single_views') ){ ?>
            <span><?php post_views('',''); ?> 次浏览</span>
            <?php }?>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<?php }?>

<?php if( $showproduct_head ){?>
<div class="showproduct-head">
  <div class="container">
    <?php if( $showproduct_head ){?>
    <div class="single-breadcrumbs">
      <?php if (function_exists('get_breadcrumbs')){get_breadcrumbs(); } ?>
    </div>
    <?php }?>
    <div class="showproduct-wrap">
      <div class="row">
        <div class="col-lg-4">
            <div class="showproduct-img">
              <ul id="showproduct-slider" class="showproduct-slider">
              <?php if($produc_img){ ?>
                <?php
                  if( !empty( $produc_img ) ) :
                    $produc_img = explode( ',', $extend_info['produc_img'] );
                    foreach ( $produc_img as $id ) :
                    $produc_img_src = wp_get_attachment_image_src( $id, 'full' );
                ?>
                <li>
                    <img src="<?php echo $produc_img_src[0];?>" alt="<?php the_title(); ?>"/>
                </li>
                <?php endforeach;endif ?>

              <?php }else{?>
                <li>
                    <img src="<?php echo post_thumbnail(500, 500); ?>" alt="<?php the_title(); ?>"/>
                </li>
              <?php }?>
              </ul>
            </div>
        </div>
        <div class="col-lg-8">
            <div class="product-text">
              <h1><?php the_title(); ?></h1>
              <ul class="product_meta">
                <li>产品分类：<?php the_category(', ') ?></li>
                <?php if( xintheme('xintheme_single_time') ){ ?>
                <li class="productline">|</li>
                <li>发布日期：<?php echo dahuzi_post_time();?></li>
                <?php }?>
              </ul>
              <?php
                if($produc_abstract){
                  echo '<p class="description">'.$produc_abstract.'</p>';
                }else{
                  echo dahuzi_excerpt( 260, '...' );
                }
              ?>
              <?php if($produc_parameter){?>
              <ul class="produc-parameter parameter-col-<?php echo $produc_parameter_col;?>">
                <?php if(is_array($produc_parameter)){
                  foreach ( $produc_parameter as $value ): ?>
                  <li><?php echo $value['parameter_text']?></li>
                  <?php endforeach;?>
                <?php }?>
              </ul>
              <?php }

                // 按钮开始
                if($post_add_button){
                  $add_button = $post_add_button;
                }else{
                  $add_button = xintheme('add_button');
                }
                if(is_array($add_button)){?>
                <div class="produc_button">
                  <?php foreach ( $add_button as $value ): ?>
                  <?php if( $value['produc_button_type'] == 'link' ){?>
                    <a href="<?php echo $value['button_url'];?>" rel="nofollow" target="_blank"<?php if( $value['button_color'] ){?> style="border: 1px solid <?php echo $value['button_color']?>;color:<?php echo $value['button_color']?>;"<?php }?>><?php echo $value['button_title'];?></a>
                  <?php }elseif( $value['produc_button_type'] == 'img' ){?>

                    <a data-fancybox href="#social_weixin" class="button_img"<?php if( $value['button_color'] ){?> style="border: 1px solid <?php echo $value['button_color']?>;color:<?php echo $value['button_color']?>;"<?php }?>><?php echo $value['button_title'];?></a>
                      <div id="social_weixin" style="display:none;">
                        <img src="<?php echo $value['button_img']['url'];?>">
                        <p style="text-align:center;font-size:16px;color:#333"><?php echo $value['button_title'];?></p>
                      </div>

                  <?php }else{?>
                    <a href="<?php if( wp_is_mobile() ){?>mqqwpa://im/chat?chat_type=wpa&uin=<?php echo $value['button_qq'];?>&version=1&src_type=web&web_src=oicqzone.com<?php }else{?>http://wpa.qq.com/msgrd?v=3&uin=<?php echo $value['button_qq'];?>&site=qq&menu=yes<?php }?>" rel="nofollow" target="_blank"<?php if( $value['button_color'] ){?> style="border: 1px solid <?php echo $value['button_color']?>;color:<?php echo $value['button_color']?>;"<?php }?>><?php echo $value['button_title'];?>
                    </a>
                  <?php }?>
                  <?php endforeach;?>
                </div>
                <?php }?>
            </div>
        </div>
      </div>
    </div>
  </div>
</div>
<?php }?>

<section class="blog-section sidebar">
  <div class="container">
    <div class="row">
      <?php if( xintheme('dahuzi_sidebar_right') && !xintheme('post_no_sidebar_all') ){ get_sidebar(); }?>
      <div class="col-md-8 <?php if( !xintheme('post_no_sidebar_all') ){ echo 'col-lg-9'; }else{ echo 'col-lg-12'; }?>">
        <?php if( !$showproduct_head ){?>
        <div class="single-breadcrumbs">
          <?php if (function_exists('get_breadcrumbs')){get_breadcrumbs(); } ?>
        </div>
        <?php }?>
        <?php /* Start the Loop */
        while ( have_posts() ) : the_post();?>
        <?php if( $showproduct_head ){?>
        <div class="product-details-title">
          <h2>产品详情</h2>
        </div>
        <?php }?>
        <div class="blog-details">
          <div class="details-content mb-40">
            <?php if( !$post_header_banner && !$showproduct_head ){?>
            <h1><?php the_title_attribute(); ?></h1>
            <div class="entry-meta">
              <span>分类：<?php the_category(', ') ?></span>
              <?php if( xintheme('xintheme_single_time') ){ ?>
              <span>日期：<?php echo dahuzi_post_time();?><?php //echo get_the_date('Y-m-d H:i'); ?></span>
              <?php }?>
              <?php if( xintheme('xintheme_single_views') ){ ?>
              <span>浏览：<?php post_views('',''); ?> 次</span>
              <?php }?>
            </div>
            <?php }?>

            <?php if( !empty($single_ad['single_ad_top']['url']) ){?>
            <div class="single-top">
              <?php if( !empty($single_ad['single_ad_top_url']) ){?><a href="<?php echo $single_ad['single_ad_top_url'];?>" target="_blank" rel="nofollow"><?php }?>
                  <img src="<?php echo $single_ad['single_ad_top']['url'];?>" alt="<?php echo $single_ad['single_ad_top']['title'];?>">
              <?php if( !empty($single_ad['single_ad_top_url']) ){?></a><?php }?>
            </div>
            <?php }?>

            <?php the_content(); ?>
            <div class="entry-tags">
              <?php the_tags('标签：', ' · ', ''); ?>
            </div>

            <?php if( !empty($single_ad['single_ad_bottom']['url']) ){?>
            <div class="single-bottom">
              <?php if( !empty($single_ad['single_ad_bottom_url']) ){?><a href="<?php echo $single_ad['single_ad_bottom_url'];?>" target="_blank" rel="nofollow"><?php }?>
                  <img src="<?php echo $single_ad['single_ad_bottom']['url'];?>" alt="<?php echo $single_ad['single_ad_bottom']['title'];?>">
              <?php if( !empty($single_ad['single_ad_bottom_url']) ){?></a><?php }?>
            </div>
            <?php }?>

            <?php if( xintheme('xintheme_single_related') ){
              get_template_part( 'template-parts/related');
            }?>

            <div class="btn-box mt-30">
              <?php
              $prev_post = get_previous_post();
              $next_post = get_next_post();
              if(!empty($prev_post)):?>
              <a <?php if(empty($next_post)){ echo 'style="width:100%"'; }?> href="<?php echo get_permalink($prev_post->ID);?>">上一篇：<?php echo $prev_post->post_title;?></a>
              <?php endif;?>
              <?php
              if(!empty($next_post)):?>
              <a <?php if(empty($prev_post)){ echo 'style="width:100%"'; }?> href="<?php echo get_permalink($next_post->ID);?>">下一篇：<?php echo $next_post->post_title;?></a>
              <?php endif;?>
            </div>

          </div>
          <?php if( xintheme('xintheme_single_author') ){ ?>
          <div class="blog-admin">
            <?php echo get_avatar( get_the_author_meta('ID'), '180' );?>
            <div class="blog-admin-desc">
              <div class="clearfix">
                <h5><?php echo get_the_author() ?></h5>
              </div>
              <p><?php if(get_the_author_meta('description')){ echo the_author_meta( 'description' );}else{echo'请到「后台-用户-个人资料」中填写个人说明。'; }?></p>
            </div>
          </div>
          <?php }?>

          <?php comments_template();?>

          <?php if( xintheme('post_contact') ){
            get_template_part( 'template-parts/dahuzi_contact');
          }?>

        </div>
        <?php endwhile; // End of the loop. ?>
      </div>
      <?php if( !xintheme('dahuzi_sidebar_right') && !xintheme('post_no_sidebar_all') ){ get_sidebar(); }?>
    </div>
  </div>
</section>


<?php get_footer(); ?>