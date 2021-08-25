        <?php if( is_active_sidebar('widget_footer') ){?>
        <footer class="bg-faded pt-70 pb-70 bg-theme-color-2">
          <div class="container">
            <div class="section-content">
              <div class="row">
                <?php if ( function_exists('dynamic_sidebar') && dynamic_sidebar('widget_footer') ) : endif;?>
              </div>
            </div>
          </div>
        </footer>
        <?php }?>
        <section class="footer-copy-right bg-theme-color-2 text-white p-0">
          <div class="container">
            <div class="row">
              <?php
              if ( is_home() && xintheme('foot_link') || is_front_page() && xintheme('foot_link') ) {
                $foot_link_cat = xintheme('foot_link_cat');
                if(!empty($foot_link_cat)){
                  $foot_link_cat = implode(',', $foot_link_cat);
                }?>
              <ul class="footer-menu col-12 text-center<?php if( xintheme('foot_link_mobile') ){ echo ' foot_link_mobile'; }?>">
                <li>友情链接：</li><?php wp_list_bookmarks('title_li=&categorize=0&category='.$foot_link_cat.''); ?>
              </ul>
              <?php }?>
              <div class="col-12 text-center">
                <p>
                <?php
                  $footer_icp = xintheme('footer_icp');
                  $footer_gaba = xintheme('footer_gaba');
                  $footer_copyright = xintheme('footer_copyright');
                  $timer_stop = xintheme('timer_stop');
                ?>
                <?php if( $footer_copyright ){?><?php echo $footer_copyright;?><?php }else{?>© <?php echo date('Y'); ?>.&nbsp;All Rights Reserved.<?php } ?><?php if( $footer_icp ) : ?>&nbsp;<a rel="nofollow" target="_blank" href="http://beian.miit.gov.cn/"><?php echo $footer_icp;?></a><?php endif; ?><?php if( $footer_gaba ) : ?>&nbsp;<a rel="nofollow" target="_blank" href="<?php echo xintheme('footer_gaba_url');?>"><img class="gaba" alt="公安备案" src="<?php bloginfo('template_directory'); ?>/static/images/gaba.png"><?php echo $footer_gaba;?></a><?php endif; ?><?php if( xintheme('xintheme_link') ) : ?>&nbsp;Theme By&nbsp;<a href="http://www.xintheme.com" target="_blank">XinTheme</a><?php endif; ?><?php if( $timer_stop ) : ?>.&nbsp;页面生成时间：<?php timer_stop(1);?>秒<?php endif; ?>
                </p>
              </div>
            </div>
          </div>
        </section>

    </div>

    <div class="slide-bar">

    <?php
    $add_kefu = xintheme('add_kefu');
    if ( is_array($add_kefu) ){
    foreach ( $add_kefu as $value ):?>

    <?php if( $value['kefu_type'] == 'link' ){?>
      <a href="<?php echo $value['kefu_url'];?>" target="_blank" rel="nofollow" class="slide-bar__item<?php if(!$value['kefu_title']){ echo ' slide-bar-title_none'; }?>">
        <img class="slide-bar__item__icon" src="<?php echo $value['kefu_icon']['url'];?>" alt="<?php echo $value['kefu_title'];?>">
        <?php if($value['kefu_title']){?><span class="slide-bar__item__text"><?php echo $value['kefu_title'];?></span><?php }?>
        <?php if($value['kefu_desc']){?><div class="slide-bar__item__tips"><?php echo $value['kefu_desc'];?></div><?php }?>
      </a>
    <?php }elseif( $value['kefu_type'] == 'img' ){?>
        <div class="slide-bar__item<?php if(!$value['kefu_title']){ echo ' slide-bar-title_none'; }?>">
          <img class="slide-bar__item__icon" src="<?php echo $value['kefu_icon']['url'];?>" alt="<?php echo $value['kefu_title'];?>">
          <span class="slide-bar__item__text"><?php echo $value['kefu_title'];?></span>
          <div class="slide-bar__item__img">
            <img src="<?php echo $value['kefu_img']['url'];?>" alt="<?php echo $value['kefu_title'];?>">
          </div>
        </div>
    <?php
    }
    endforeach; }?>

      <div class="slide-bar__item scrollup">
        <i class="slide-bar__item__top fa fa-angle-up"></i>
        <div class="slide-bar__item__tips">返回顶部</div>
      </div>

    </div>
<?php if( xintheme('mobile_foot_menu_sw') ){ get_template_part( 'template-parts/mobile-foot-menu' );}?>
<?php wp_footer(); ?>
</body>
</html>


