<?php
$modular_title = $id['modular_title'] ?: '模块标题';
$modular_describe = $id['modular_describe'] ?: '无需编码技能，您也可以创建出一个独特的网站（XinTheme）';
$modular_category = $id['modular_category'];?>

<section class="modular_display_<?php echo $id['modular_display'];?> <?php if( $id['modular_bg_f9'] ){ echo 'bg-f9'; }?>">
  <div class="container">
    <div class="row">
      <div class="section-title">
          <h2><?php echo $modular_title; ?></h2>
          <p><?php echo $modular_describe; ?></p>
      </div>
    </div>
    <div class="row">
    <?php
    if(is_array( $modular_category )){
    $s = 1;
    foreach ($modular_category as $cat=>$catid ){?>
      <div class="col-lg-4">
        <div class="modular-12">
          <div class="newscat">
            <h3>
              <a href="<?php echo get_category_link($catid);?>"><?php echo get_cat_name( $catid );?></a>
            </h3>
            <span class="more">
              <a href="<?php echo get_category_link($catid);?>" rel="nofollow"><svg t="1608448718517" class="icon" viewBox="0 0 1024 1024" version="1.1" xmlns="http://www.w3.org/2000/svg" p-id="2865" width="14" height="14"><path d="M512 224.85m-82.04 0a82.04 82.04 0 1 0 164.08 0 82.04 82.04 0 1 0-164.08 0Z" fill="#666666" p-id="2866"></path><path d="M512 512m-82.04 0a82.04 82.04 0 1 0 164.08 0 82.04 82.04 0 1 0-164.08 0Z" fill="#666666" p-id="2867"></path><path d="M512 799.15m-82.04 0a82.04 82.04 0 1 0 164.08 0 82.04 82.04 0 1 0-164.08 0Z" fill="#666666" p-id="2868"></path></svg></a>
            </span>
          </div>
          <?php
          $args = array(
            'no_found_rows' => true,
            'ignore_sticky_posts' => 1,
            'posts_per_page' => 7,
            'cat' => $catid
          );
          $cat_posts = Dahuzi_Query($args);
          $i = 1;
          while( $cat_posts->have_posts() ): $cat_posts->the_post();?>

          <?php if($i == 1){ ?>
          <div class="news_top">
            <a href="<?php the_permalink(); ?>"><img src="<?php echo post_thumbnail(500,216); ?>" alt="<?php echo post_thumbnail_alt();?>" /></a>
            <a class="news_title_1" href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
          </div>
          <div class="news_list">
            <ul>
              <?php }else{ ?>
              <li>
                <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
              </li>
              <?php } ?>
              <?php $i++; endwhile; wp_reset_query();?>
            </ul>
          </div>
        </div>
      </div>
    <?php } }?>
    </div>
  </div>
</section>
