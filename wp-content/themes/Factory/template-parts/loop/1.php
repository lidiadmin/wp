<?php

if( is_archive() ){

    if( $cat_posts_num == '4' ){?>
        <div class="col-md-3">
    <?php }else{?>
        <div class="col-md-4">
    <?php }?>

<?php }else{?>

    <?php if($modular_col_post_num == '4'){?>
        <div class="col-md-3">
    <?php }else{?>
        <div class="col-md-4">
    <?php }?>

<?php }?>

    <div class="service-item style-4">
        <div class="thumb">
        	<img alt="<?php echo post_thumbnail_alt();?>" src="<?php echo post_thumbnail($post_img_width,$post_img_height); ?>">
        	<div class="service-link-box">
        		<a href="<?php the_permalink(); ?>">查看更多</a>
        	</div>
        </div>
        <div class="content">
            <?php if( is_sticky() ){ echo '<div class="post-sticky">置顶</div>'; }?>
        	<h2><a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a></h2>
        	<!--span><?php the_time('Y-m-d') ?></span-->
            <?php //the_tags('<h4>', '</h4><span>、</span><h4>', '</h4>') ?>
        </div>
    </div>
</div>