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
    if( is_array($id['add_modular_10']) ){
    foreach ( $id['add_modular_10'] as $value ): ?>
      <div class="col-lg-4">
        <div class="service-item style-1 border-1px">
          <?php if($value['modular_10_img']['url']){?>
          <div class="service-icon">
            <img src="<?php echo $value['modular_10_img']['url'];?>" alt="<?php echo get_post_meta( $value['modular_10_img']['id'], '_wp_attachment_image_alt', true );?>" style="background-color: <?php echo $value['modular_10_img_bg_color'] ?: '#fcab00';?>">
          </div>
          <?php }?>
          <div class="content">
            <?php if($value['modular_10_url']){?>
            <h5><a href="<?php echo $value['modular_10_url'];?>" target="_blank" rel="nofollow"><?php echo $value['modular_10_title'];?></a></h5>
            <?php }else{?>
            <h5><?php echo $value['modular_10_title'];?></h5>
            <?php }?>
            <p><?php echo $value['modular_10_desc'];?></p>
          </div>
        </div>
      </div>
    <?php
    endforeach;
    }?>
    </div>
  </div>
</section>
