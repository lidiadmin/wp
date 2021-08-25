<section class="client-section style-2 pb-70 pt-70 modular_display_<?php echo $id['modular_display'];?> <?php if( $id['modular_bg_f9'] ){ echo 'bg-f9'; }?>">
<div class="container">
	<div class="row">
		<div class="col-md-12">
			<div id="client_carousel" class="owl-carousel">
			    <?php
			    if( is_array($id['add_modular_9']) ){ // 必要时可通过php判断，项目数量超过6个在启用轮播显示，现在懒得做......
			    foreach ( $id['add_modular_9'] as $value ): ?>
				<div class="item">
					<div class="client-img-item">
						<?php if($value['modular_9_url']){?>
							<a href="<?php echo $value['modular_9_url'];?>" target="_blank" rel="nofollow">
						<img src="<?php echo $value['modular_9_img']['url'];?>" alt="<?php echo $value['modular_9_title'];?>">
						</a>
						<?php }else{?>
						<img src="<?php echo $value['modular_9_img']['url'];?>" alt="<?php echo $value['modular_9_title'];?>">
						<?php }?>
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