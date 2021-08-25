<?php
$modular_title = $id['modular_title'] ?: '模块标题';
$modular_describe = $id['modular_describe'] ?: '无需编码技能，您也可以创建出一个独特的网站（XinTheme）';
?>

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
    if( is_array($id['add_modular_13']) ){
    foreach ( $id['add_modular_13'] as $value ): ?>
      <div class="col-lg-4">
        <div class="modular-13 service-item style-2">
          <div class="content">
            <h5><?php if($value['modular_13_ico']['url']){?><img class="modular-13-ico" src="<?php echo $value['modular_13_ico']['url'];?>" alt="<?php echo get_post_meta( $value['modular_13_ico']['id'], '_wp_attachment_image_alt', true );?>"><?php }?><?php echo $value['modular_13_title'];?></h5>
            <p><?php echo $value['modular_13_desc'];?></p>
            <?php if($value['modular_13_url']){?>
            <a class="btn-link" href="<?php echo $value['modular_13_url'];?>" target="_blank"><?php echo $value['modular_13_url_text'] ?: '查看更多';?> <i class="fa fa-long-arrow-right"></i></a>
            <?php }?>
          </div>
          <?php if($value['modular_13_img']['url']){?><img src="<?php echo $value['modular_13_img']['url'];?>" alt="<?php echo get_post_meta( $value['modular_13_img']['id'], '_wp_attachment_image_alt', true );?>"><?php }?>
        </div>
      </div>
    <?php
    endforeach;
    }?>
    </div>
  </div>
</section>
