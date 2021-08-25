<?php

if( is_archive() ){

    if( $cat_posts_num == '4' ){?>
        <div class="col-md-6 col-lg-3">
    <?php }else{?>
        <div class="col-md-6 col-lg-4">
    <?php }?>

<?php }else{?>

    <?php if($modular_col_post_num == '4'){?>
        <div class="col-md-6 col-lg-3">
    <?php }else{?>
        <div class="col-md-6 col-lg-4">
    <?php }?>

<?php }?>

    <div class="blog-post">
        <div class="thumb">
            <a href="<?php the_permalink(); ?>">
            <img src="<?php echo post_thumbnail($post_img_width,$post_img_height); ?>" alt="<?php echo post_thumbnail_alt();?>">
            </a>
        </div>
        <div class="content">
            <h3><a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a></h3>
            <?php dahuzi_excerpt( 120, '...' );?>
        </div>
        <a href="<?php the_permalink(); ?>" class="read-btn">查看更多
        <i class="fa fa-long-arrow-right" aria-hidden="true"></i>
        </a>
    </div>
    <?php if( is_sticky() ){ echo '<div class="post-sticky">置顶</div>'; }?>
</div>