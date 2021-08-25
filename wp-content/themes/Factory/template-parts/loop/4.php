<div class="col-md-6 col-lg-12 cat-4-item">
  <div class="projects-item">
    <div class="thumb">
      <a href="<?php the_permalink(); ?>">
        <img src="<?php echo post_thumbnail($post_img_width,$post_img_height); ?>" alt="<?php echo post_thumbnail_alt();?>">
      </a>
    </div>
    <div class="content">
        <?php if( is_sticky() ){ echo '<div class="post-sticky">置顶</div>'; }?>
        <h2>
            <a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a>
        </h2>
        <div class="meta">
            <div class="date">
                <i class="fa fa-clock-o"></i> <?php the_time('Y-m-d') ?>
            </div>
        </div>
        <?php dahuzi_excerpt( 300, '...' );?>
        <a class="project-btn" href="<?php the_permalink(); ?>">查看更多</a>
    </div>
  </div>
</div>
