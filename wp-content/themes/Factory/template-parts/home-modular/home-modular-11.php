<?php
$modular_title = $id['modular_title'] ?: '模块标题';
$modular_describe = $id['modular_describe'] ?: '无需编码技能，您也可以创建出一个独特的网站（XinTheme）';?>

<section class="contact-details modular_display_<?php echo $id['modular_display'];?> <?php if( $id['modular_bg_f9'] ){ echo 'bg-f9'; }?>">
  <div class="container">
    <div class="row">
      <div class="section-title">
          <h2><?php echo $modular_title; ?></h2>
          <p><?php echo $modular_describe; ?></p>
      </div>
    </div>
    <div class="row">
    <?php
    if( is_array($id['add_modular_11']) ){
    foreach ( $id['add_modular_11'] as $value ): ?>
      <div class="col-lg-4">
        <div class="cleaning-service-item">
          <div class="thumb">
            <img src="<?php echo $value['modular_11_img']['url'];?>" alt="<?php echo get_post_meta( $value['modular_11_img']['id'], '_wp_attachment_image_alt', true );?>">
            <img class="img-carv" src="<?php echo get_template_directory_uri();?>/static/images/serv-bg.png" alt="<?php echo $value['modular_11_title'];?>">
            <div class="icon-box" style="background-color: <?php echo $value['modular_11_ico_bg_color'] ?: '#fcab00';?>">
              <img src="<?php echo $value['modular_11_ico']['url'];?>" alt="<?php echo get_post_meta( $value['modular_11_ico']['id'], '_wp_attachment_image_alt', true );?>">
            </div>
          </div>
          <div class="content">
            <h4><?php echo $value['modular_11_title'];?></h4>
            <p><?php echo $value['modular_11_desc'];?></p>
            <?php if($value['modular_11_url']){?>
            <a href="<?php echo $value['modular_11_url'];?>" target="_blank" rel="nofollow">查看更多</a>
            <?php }?>
          </div>
        </div>
      </div>
    <?php
    endforeach;
    }?>
    </div>
  </div>
</section>
