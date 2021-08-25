<?php
$modular_title = $id['modular_title'] ?: '模块标题';
$modular_describe = $id['modular_describe'] ?: '无需编码技能，您也可以创建出一个独特的网站（XinTheme）';?>
<section class="contact-section pb-70 modular_display_<?php echo $id['modular_display'];?> <?php if( $id['modular_bg_f9'] ){ echo 'bg-f9'; }?>">
<div class="container">
    <div class="row contact-bg">
        <div class="col-md-12 col-lg-4 p-0">
            <div class="contact-text">
                <h2><?php echo $modular_title; ?></h2>
                <p><?php echo $modular_describe; ?></p>
                <?php
                if( is_array($id['add_modular_8']) ){
                foreach ( $id['add_modular_8'] as $value ): ?>
                <div class="contact-info">
                    <div class="icon-box">
                        <img src="<?php echo $value['modular_8_icon']['url'];?>" alt="<?php echo get_post_meta( $value['modular_8_icon']['id'], '_wp_attachment_image_alt', true );?>">
                    </div>
                    <h6><?php echo $value['modular_8_title'];?></h6>
                </div>
                <?php
                endforeach;
                }?>
            </div>
        </div>
        <div class="col-md-12 col-lg-8 style-2">
            <form id="ajax-contact" method="POST" action="">
                <div class="form-row">
                    <div class="form-group col-md-12">
                        <input type="text" name="name" id="name" class="form-control" placeholder="姓名 *" required>
                    </div>
                    <div class="form-group col-md-12">
                        <input type="text" name="phone" id="phone" class="form-control" placeholder="电话 *" required>
                    </div>
                    <div class="form-group col-md-12">
                        <input type="email" name="mail" id="mail" class="form-control" placeholder="Email">
                    </div>
                    <div class="form-group col-md-12">
                        <div class="contact-textarea">
                            <textarea class="form-control" rows="6" placeholder="<?php echo $id['modular_8_contact_textarea'] ?: '请输入留言内容...';?>" id="message" name="message" required></textarea>
                            <input type="hidden" name="current_url" id="current_url" value="<?php echo home_url(add_query_arg(array()));?>">
                            <input type="hidden" name="action" value="dahuzi_contact_ajax">
                            <div id="form-messages"></div>
                            <button id="submit_message" class="btn btn-theme mt-4" type="submit"><?php echo $id['modular_8_contact_button'] ?: '提交留言';?></button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
</section>