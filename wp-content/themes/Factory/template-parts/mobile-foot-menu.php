<style>
@media screen and (max-width:767px){
	.footer-copy-right{margin-bottom:53px}
  .footer-copy-right.footer-mobile_btn{margin-bottom:0 !important}
  .footer-copy-right.footer-mobile_btn2{margin-bottom:53px !important}
}
</style>
<?php if( xintheme('mobile_foot_menu_touch') ){?>
<script type="text/javascript">

  var startY = 0;

  document.addEventListener("touchstart",function(e){
    startY = e.changedTouches[0].pageY;
  },false);

  document.addEventListener("touchmove",function(e){

    var endY = e.changedTouches[0].pageY;
    var changeVal = endY - startY;
    if(endY < startY){
      //console.log("向上滑");
      $('#mobile_btn').hide();
      $('.footer-copy-right').toggleClass('footer-mobile_btn');
    }else if(endY > startY){
      //console.log("向下滑");
      $('#mobile_btn').show();
      $('.footer-copy-right').removeClass('footer-mobile_btn').toggleClass('footer-mobile_btn2');
    }else{
      //console.log("没有偏移");
    }

    var a = document.body.scrollTop || document.documentElement.scrollTop;;
    var b =document.documentElement.clientHeight
    var c = $('body').height();
    if(a+b >= c){
        $('#mobile_btn').show();
    }

  },false);

</script>
<?php }?>

<div id="mobile_btn">
  <nav>

	<?php
	if ( is_array(xintheme('add_mobile_foot_menu')) ){
	foreach ( xintheme('add_mobile_foot_menu') as $value ):
	if( $value['mobile_foot_menu_type'] == 'link' ){ ?>

    <div class="flexbox">
      <a href="<?php echo $value['mobile_foot_menu_url'];?>" rel="nofollow" <?php if( $value['mobile_foot_menu_url_blank'] ){?>target="_blank"<?php }?>>
        <img src="<?php echo $value['mobile_foot_menu_icon']['url'];?>" alt="<?php echo $value['mobile_foot_menu_title'];?>" />
        <span><?php echo $value['mobile_foot_menu_title'];?></span>
      </a>
    </div>

    <?php }elseif( $value['mobile_foot_menu_type'] == 'qq' ){?>

    <div class="flexbox">
	<?php if( wp_is_mobile() ){
		$qq_url = 'mqqwpa://im/chat?chat_type=wpa&uin='.$value['mobile_foot_menu_qq'].'&version=1&src_type=web&web_src=oicqzone.com';
	}else{
		$qq_url = 'http://wpa.qq.com/msgrd?v=3&uin='.$value['mobile_foot_menu_qq'].'&site=qq&menu=yes';
	}?>
      <a href="<?php echo $qq_url;?>" rel="nofollow" target="_blank">
        <img src="<?php echo $value['mobile_foot_menu_icon']['url'];?>" alt="<?php echo $value['mobile_foot_menu_title'];?>" />
        <span><?php echo $value['mobile_foot_menu_title'];?></span>
      </a>
    </div>

    <?php }elseif( $value['mobile_foot_menu_type'] == 'tel' ){?>

    <div class="flexbox">
      <a href="tel:<?php echo $value['mobile_foot_menu_tel'];?>" rel="nofollow" target="_blank">
        <img src="<?php echo $value['mobile_foot_menu_icon']['url'];?>" alt="<?php echo $value['mobile_foot_menu_title'];?>" />
        <span><?php echo $value['mobile_foot_menu_title'];?></span>
      </a>
    </div>

    <?php }elseif( $value['mobile_foot_menu_type'] == 'img' ){
    $md5_title = md5( $value['mobile_foot_menu_title'] );?>

    <div class="flexbox">
      <a data-fancybox href="#<?php echo $md5_title;?>" rel="nofollow">
        <img src="<?php echo $value['mobile_foot_menu_icon']['url'];?>" alt="<?php echo $value['mobile_foot_menu_title'];?>" />
        <span><?php echo $value['mobile_foot_menu_title'];?></span>
      </a>
    </div>
	<div id="<?php echo $md5_title;?>" style="display:none;">
		<img src="<?php echo $value['mobile_foot_menu_img']['url'];?>" alt="">
		<h3><?php echo $value['mobile_foot_menu_img_text'];?></h3>
	</div>

	<?php }?>
	<?php endforeach; }?>

  </nav>
</div>