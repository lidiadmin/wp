<?php
$modular_title = $id['modular_title'] ?: '模块标题';
$modular_describe = $id['modular_describe'] ?: '无需编码技能，您也可以创建出一个独特的网站（XinTheme）';?>
<section class="testimonials-section pb-70 modular_display_<?php echo $id['modular_display'];?> <?php if( $id['modular_bg_f9'] ){ echo 'bg-f9'; }?>">
<div class="container">
	<div class="row">
		<div class="section-title">
	    	<h2><?php echo $modular_title; ?></h2>
	    	<p><?php echo $modular_describe; ?></p>
		</div>
	</div>
	<div class="row testimonials-post" style="background-image: url(<?php echo $id['modular_6_bgimg']['url'];?>);">
		<div class="col-md-12">
			<div id="testimonials_carousel" class="owl-carousel">
			    <?php
			    if( is_array($id['add_modular_6']) ){
			    foreach ( $id['add_modular_6'] as $value ): ?>
				<div class="item">
					<div class="testimonials-item">
						<div class="thumb">
							<img src="<?php echo $value['modular_6_img']['url'];?>" alt="<?php echo get_post_meta( $value['modular_6_img']['id'], '_wp_attachment_image_alt', true );?>">
						</div>
						<div class="content">
							<p>
								<i class="fa fa-quote-left"></i><?php echo $value['modular_6_describe'];?><i class="fa fa-quote-right"></i>
							</p>
							<small><strong><?php echo $value['modular_6_title'];?></strong></small>
						</div>
					</div>
				</div>
			    <?php
			    endforeach;
			    }?>
			</div>
		</div>
	</div>
</div>
</section>