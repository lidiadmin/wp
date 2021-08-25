<?php
$modular_title = $id['modular_title'] ?: '模块标题';
$modular_describe = $id['modular_describe'] ?: '无需编码技能，您也可以创建出一个独特的网站（XinTheme）';?>
<section class="company-section modular_display_<?php echo $id['modular_display'];?> <?php if( $id['modular_bg_f9'] ){ echo 'bg-f9'; }?>">
<div class="container">
	<div class="row about-features">
		<?php if( $id['modular_3']['modular_3_img_left'] ){?>
		<div class="col-md-4">
			<div class="thumb">
				<img src="<?php echo $id['modular_3']['modular_3_img']['url'];?>" alt="<?php echo get_post_meta( $id['modular_3']['modular_3_img']['id'], '_wp_attachment_image_alt', true );?>">
				<?php if( $id['modular_3']['modular_3_video'] || $id['modular_3']['modular_3_video2'] ){?>
				<div class="about-video">
					<h4><?php echo $id['modular_3']['modular_3_video_text'] ?: '观看视频';?></h4>
					<span class="about-video-btn"><i class="fa fa-play"></i></span>
				</div>

				<?php if( $id['modular_3']['modular_3_video'] ){?>
				<a class="u-permalink" data-fancybox href="#Dahuzi-Video"></a>
				<video controls id="Dahuzi-Video" style="display:none;">
				    <source src="<?php echo $id['modular_3']['modular_3_video'];?>" type="video/mp4">
				</video>
				<?php }else{?>
					<a class="u-permalink" data-fancybox data-type="iframe" href="<?php echo $id['modular_3']['modular_3_video2'];?>"></a>
				<?php }?>

				<?php }?>
			</div>
		</div>
		<?php }?>
		<div class="col-md-8">
			<div class="content">
				<h2><?php echo $modular_title; ?></h2>
				<p class="p-text">
					<?php echo $modular_describe; ?>
				</p>
			    <?php if( is_array($id['modular_3']['add_special']) ){?>
				<ul class="company-list">
					<?php foreach ( $id['modular_3']['add_special'] as $value ): ?>
					<li><i class="fa fa-angle-right"></i><?php echo $value['special_text'];?></li>
					<?php endforeach;?>
				</ul>
				<?php }?>
				<?php if( is_array($id['modular_3']['add_number']) ){?>
				<div class="company-funfact">
					<?php foreach ( $id['modular_3']['add_number'] as $value ): ?>
					<div class="funfact-item">
						<h2><?php echo $value['modular3_number'];?></h2>
						<h4><?php echo $value['modular3_number_text'];?></h4>
					</div>
					<?php endforeach;?>
				</div>
				<?php }?>
			</div>
		</div>
		<?php if( !$id['modular_3']['modular_3_img_left'] ){?>
		<div class="col-md-4">
			<div class="thumb">
				<img src="<?php echo $id['modular_3']['modular_3_img']['url'];?>" alt="<?php echo get_post_meta( $id['modular_3']['modular_3_img']['id'], '_wp_attachment_image_alt', true );?>">
				<?php if( $id['modular_3']['modular_3_video'] || $id['modular_3']['modular_3_video2'] ){?>
				<div class="about-video">
					<h4><?php echo $id['modular_3']['modular_3_video_text'] ?: '观看视频';?></h4>
					<span class="about-video-btn"><i class="fa fa-play"></i></span>
				</div>

				<?php if( $id['modular_3']['modular_3_video'] ){?>
				<a class="u-permalink" data-fancybox href="#Dahuzi-Video"></a>
				<video controls id="Dahuzi-Video" style="display:none;">
				    <source src="<?php echo $id['modular_3']['modular_3_video'];?>" type="video/mp4">
				</video>
				<?php }else{?>
					<a class="u-permalink" data-fancybox data-type="iframe" href="<?php echo $id['modular_3']['modular_3_video2'];?>"></a>
				<?php }?>

				<?php }?>
			</div>
		</div>
		<?php }?>
	</div>
</div>
</section>