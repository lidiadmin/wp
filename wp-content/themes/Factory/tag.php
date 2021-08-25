<?php
$post_img_height = dahuzi_taxonomy('post_img_height') ?: '230';
$post_img_width = dahuzi_taxonomy('post_img_width') ?: '350';
get_header();?>

<?php
$banner_img = xintheme('header_banner_img_default');
if( xintheme('header_type') == '1'){?>
<section class="inner-area parallax-bg text-align-left" data-background="<?php echo $banner_img['url'];?>" data-type="parallax" data-speed="3" style="background-image: url('<?php echo $banner_img['url'];?>');">
  <div class="container">
    <div class="section-content">
      <div class="row">
        <div class="col-12">
          <h4># <?php echo single_term_title(); ?></h4>
        </div>
      </div>
    </div>
  </div>
</section>
<?php }?>

<section class="breadcrumbs">
	<div class="container">
      <?php if (function_exists('get_breadcrumbs')){get_breadcrumbs(); } ?>
	</div>
</section>

<section class="blog-section sidebar">
  <div class="container">
    <div class="row">

    <?php if( xintheme('dahuzi_sidebar_right') ){ get_sidebar(); }?>
    <div class="col-md-8 col-lg-9">
      <div class="row">

        <?php
        while( have_posts() ): the_post();
        include TEMPLATEPATH.'/template-parts/loop/5.php';
        endwhile; //结束while?>

      </div>
    </div>
    <?php if( !xintheme('dahuzi_sidebar_right') ){ get_sidebar(); }?>

    </div>
  </div>
</section>

<section class="paging-section text-center pt-0 pb-70">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="page-link-item">
          <ul>
            <?php par_pagenavi(9); ?>
          </ul>
        </div>
      </div>
    </div>
  </div>
</section>

<?php get_footer();?>