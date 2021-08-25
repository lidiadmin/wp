<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no, viewport-fit=cover">
<!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

    <?php if( xintheme('dahuzi_loading') && xintheme_img('loading_gif') ){?><div class="preloader" style="background-image: url(<?php echo xintheme_img('loading_gif');?>);"></div><?php }?>

    <div class="page-wrapper">
        <?php
        if( xintheme('header_type') == '2' ){
            $header_type = '2';
        }else{
            $header_type = '1';
        }?>
        <header class="mobile-header header header-style-<?php echo $header_type;?> clearfix" <?php if( !xintheme('notice_code_switch') ) :?>style="margin:0"<?php endif;?>>

            <?php if( xintheme('notice_code_switch') ) :?>
            <div class="top-bar">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-<?php if( xintheme('notice_phone') ){?>9<?php }else{?>12<?php }?>">
                            <div class="contact-info">
                                <ul>
                                    <li>
                                        <?php echo xintheme('notice_code');?>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <?php if( xintheme('notice_phone') ){?>
                        <div class="col-lg-3">
                            <div class="social-icons">
                                <ul>
                                    <li><i class="fa fa-phone"></i><?php echo xintheme('notice_phone');?></li>
                                </ul>
                            </div>
                        </div>
                        <?php }?>
                    </div>
                </div>
            </div>
            <?php endif;?>

            <div class="menu-style <?php if( xintheme('header_type') == '2' ){ echo 'menu-hover-2';}?> bg-transparent clearfix">

                <div class="main-navigation main-mega-menu animated<?php if( xintheme('header_sticky') ){ echo ' header-sticky';}?>">
                    <nav class="navbar navbar-expand-lg <?php if( xintheme('header_type') == '2' ){ echo 'navbar-light';}else{ echo 'navbar-dark'; }?>">
                        <div class="container">

                            <a class="navbar-brand" href="<?php bloginfo('url'); ?>">
                                <img id="logo_img" src="<?php echo xintheme_img('logo');?>" alt="<?php echo xintheme_image_alt('logo');?>">
                            </a> 
                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-collapse-1" aria-controls="navbar-collapse-1" aria-expanded="false">
                                <span class="navbar-toggler-icon"></span>
                            </button>

                            <div class="collapse navbar-collapse<?php if( !xintheme('search_header') ){ echo ' no-search'; }?>" id="navbar-collapse-1">

                                <ul class="pc-menu navbar-nav ml-xl-auto">
                                    <?php wp_nav_menu( array(
                                        'container'     => false,
                                        'items_wrap'    =>'%3$s',
                                        'theme_location'=> 'main',
                                        'walker'        => new wp_bootstrap_navwalker( true ),
                                        'fallback_cb'   => 'wp_bootstrap_navwalker::fallback'
                                    ) ); ?>
                                </ul>

                                <ul class="mobile-menu navbar-nav ml-xl-auto">
                                    <?php wp_nav_menu( array(
                                        'container'     => false,
                                        'items_wrap'    =>'%3$s',
                                        'theme_location'=> 'mobile',
                                        'walker'        => new wp_bootstrap_navwalker( true ),
                                        'fallback_cb'   => 'wp_bootstrap_navwalker::fallback'
                                    ) ); ?>
                                </ul>

                                <?php if( xintheme('search_header') ){?>
                                <div class="dropdown-buttons">
                                    <div class="btn-group menu-search-box">
                                        <button type="button" class="btn dropdown-toggle" id="header-drop-3" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-search"></i></button>
                                        <ul class="dropdown-menu dropdown-menu-right dropdown-animation" aria-labelledby="header-drop-3" <?php if( xintheme('search_animation') ){ echo 'style="animation: 0s ease 0ms normal forwards 1 running fadeInLeft;"'; }?>>
                                            <li>
                                                <form role="search" class="search-box" action="<?php echo esc_url(home_url('/')); ?>">
                                                    <div class="form-group">
                                                        <input type="text" class="form-control" name="s" placeholder="<?php if( xintheme('search_placeholder') ){ echo xintheme('search_placeholder'); }else{ echo '输入关键词搜索...'; }?>">
                                                        <button type="submit" class="fa fa-search form-control-feedback"></button>
                                                    </div>
                                                </form>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <?php }?>

                            </div>
                        </div>
                    </nav>
                </div>
            </div>

        </header>