<div class="wrap dahuzi-blocks-settings-page">
	<div class="intro-wrap">
		<div class="intro">
			<h1 class="grow">新主题（XinTheme），无需编码技能，您也可以创建出一个独特的网站！</h1>
			<a class="components-button review-button hide-mobile" href="https://www.xintheme.com" target="_blank" rel="noopener noreferrer">
				访问「新主题」官方网站
			</a>
		</div>
		<ul class="inline-list">
			<li class="current">
				<a id="dahuzi-blocks-panel" href="#">
					<?php dahuzi_admin_svg( 'started' ); ?>
					<span>快速入门</span>
				</a>
			</li>
			<li>
				<a id="theme-help" href="#">
					<?php dahuzi_admin_svg( 'theme-help' ); ?>
					<span>主题使用帮助</span>
				</a>
			</li>
			<li>
				<a id="theme-upgrade" href="#">
					<?php dahuzi_admin_svg( 'theme-upgrade' ); ?>
					<span style="margin-bottom:0">主题更新记录</span>
				</a>
			</li>
		</ul>
	</div>

	<div class="dahuzi-blocks-settings-sections">
		<div class="components-tab-panel__tab-content">
			<div id="dahuzi-blocks-panel" class="panel-left visible">

				<div class="dahuzi-gs-intro dahuzi-blocks-grid-2">
					<div class="dahuzi-gs-intro-text">
						<span class="dahuzi-gs-intro-tag">XinTheme</span>
						<h2>以设计和技术，创造极致用户体验！</h2>
						<p>我们是专业的WordPress网站建设团队，有8年的WordPress网站开发经验，提供高品质的WordPress主题。</p>
						<p>如果你有网站相关类的业务需求，可以联系我哦，期待与你的合作～</p>
						<p>新主题微信公众号：www-xintheme-com，欢迎热爱WordPress的每一位朋友关注！</p>
					</div>
					<div class="dahuzi-gs-intro-image">
						<img src="https://www.xintheme.com/wp-content/uploads/2021/01/xintheme-intro.svg" alt="" />
					</div>
				</div>

				<div class="dahuzi-gs-resources dahuzi-blocks-grid-3">
					<div class="dahuzi-gs-resource">
						<?php dahuzi_admin_svg( 'visualization' ); ?>
						<h3>可视化设置面板</h3>
						<p>提供简单便捷的设置选项，不需要任何编码知识就能够轻松设置好网站。</p>
						<a href="<?php echo wp_customize_url();?>" class="components-button is-primary">前往设置</a>
					</div>
					<div class="dahuzi-gs-resource">
						<?php dahuzi_admin_svg( 'home-modular' ); ?>
						<h3>模块化首页</h3>
						<p>内置多种首页模块，所有模块都可以根据自己的需求自由增删。</p>
						<a href="https://www.xintheme.com/news/107031.html" target="_blank" class="components-button is-primary">了解更多</a>
					</div>
					<div class="dahuzi-gs-resource">
						<?php dahuzi_admin_svg( 'page-builder' ); ?>
						<h3>超酷的页面构建器</h3>
						<p>基于古腾堡编辑器开发的页面构建器，可视化编辑，所见即所得！</p>
						<a href="https://www.xintheme.com/news/107051.html" target="_blank" class="components-button is-primary">了解更多</a>
					</div>
					<div class="dahuzi-gs-resource">
						<?php dahuzi_admin_svg( 'cat-style' ); ?>
						<h3>多种分类页样式</h3>
						<p>内置多种分类页面样式，直接在编辑分类的时候选择你喜欢的样式即可。</p>
						<a href="https://www.xintheme.com/theme-docs/107056.html" target="_blank" class="components-button is-primary">了解更多</a>
					</div>
					<div class="dahuzi-gs-resource">
						<?php dahuzi_admin_svg( 'seo-setup' ); ?>
						<h3>内置SEO设置</h3>
						<p>我们非常注重搜索引擎的优化，不需要安装任何插件即可轻松设置SEO信息。</p>
						<a href="https://www.xintheme.com/theme-docs/107113.html" target="_blank" class="components-button is-primary">了解更多</a>
					</div>
					<div class="dahuzi-gs-resource">
						<?php dahuzi_admin_svg( 'wp-optimization' ); ?>
						<h3>数十种优化</h3>
						<p>针对WordPress进行数十种性能优化，告别网站龟速加载！</p>
						<a href="https://www.xintheme.com/theme-docs/107140.html" target="_blank" class="components-button is-primary">了解更多</a>
					</div>
					<div class="dahuzi-gs-resource">
						<?php dahuzi_admin_svg( 'extensions' ); ?>
						<h3>常用的扩展功能</h3>
						<p>内置多种扩展功能，对象储存、链接转换、数据库优化清理等，减少插件使用量。</p>
						<a href="https://www.xintheme.com/theme-docs/107179.html" target="_blank" class="components-button is-primary">了解更多</a>
					</div>
					<div class="dahuzi-gs-resource">
						<?php dahuzi_admin_svg( 'online-update' ); ?>
						<h3>后台在线更新</h3>
						<p>无论我们何时发布新版本，您都可以在网站后台中进行在线更新主题。</p>
						<a href="https://www.xintheme.com/theme-docs/107026.html" target="_blank" class="components-button is-primary">了解更多</a>
					</div>
					<div class="dahuzi-gs-resource">
						<?php dahuzi_admin_svg( 'after-sale' ); ?>
						<h3>靠谱的售后服务</h3>
						<p>快速友好的技术支持，如果你在使用主题时候遇到问题，我们随时为你服务！</p>
						<a href="https://wpa.qq.com/msgrd?v=3&uin=670088886&site=qq&menu=yes" target="_blank" class="components-button is-primary">在线客服</a>
					</div>
				</div>
			</div>
			<div id="theme-help" class="panel-left">
				<?php
				$dahuzi_theme_help = get_transient( 'dahuzi-theme-help-feed' );

				if ( false === $dahuzi_theme_help ) {
					$dahuzi_theme_feed = wp_remote_get( 'https://www.xintheme.com/theme-help?theme_help=106921' );

					if ( ! is_wp_error( $dahuzi_theme_feed ) && 200 === wp_remote_retrieve_response_code( $dahuzi_theme_feed ) ) {
						$dahuzi_theme_help = json_decode( wp_remote_retrieve_body( $dahuzi_theme_feed ),true );
						set_transient( 'dahuzi-theme-help-feed', $dahuzi_theme_help, WEEK_IN_SECONDS );
					} else {
						$dahuzi_theme_help = '此帮助文档似乎暂时关闭，但是，您始终可以在www.xintheme.com网站上查看帮助文档。';
						set_transient( 'dahuzi-theme-help-feed', $dahuzi_theme_help, MINUTE_IN_SECONDS * 10 );
					}
				}

				delete_transient('dahuzi-theme-help-feed');//临时删除缓存
				echo wp_kses_post( $dahuzi_theme_help );
				?>
			</div>
			<div id="theme-upgrade" class="panel-left">
				<?php
				$dahuzi_theme_changelog = get_transient( 'dahuzi-theme-changelog-feed' );

				if ( false === $dahuzi_theme_changelog ) {
					$dahuzi_theme_changelog_feed = wp_remote_get( 'https://www.xintheme.com/theme-help?theme_changelog='.DAHUZI_EDD_ID.'' );

					if ( ! is_wp_error( $dahuzi_theme_changelog_feed ) && 200 === wp_remote_retrieve_response_code( $dahuzi_theme_changelog_feed ) ) {
						$dahuzi_theme_changelog = json_decode( wp_remote_retrieve_body( $dahuzi_theme_changelog_feed ),true );
						set_transient( 'dahuzi-theme-changelog-feed', $dahuzi_theme_changelog, WEEK_IN_SECONDS );
					} else {
						$dahuzi_theme_changelog = '此更新记录似乎暂时关闭，但是，您始终可以在www.xintheme.com网站上查看更新记录。';
						set_transient( 'dahuzi-theme-changelog-feed', $dahuzi_theme_changelog, MINUTE_IN_SECONDS * 10 );
					}
				}
				//delete_transient('dahuzi-theme-changelog-feed');//临时删除缓存
				echo wp_kses_post( $dahuzi_theme_changelog );
				?>
			</div>
			<div class="panel-right">

				<div class="panel-aside panel-db-plugin panel-club">
					<div class="panel-club-inside">
						<div class="cell panel-title" style="border-bottom: none;">
							<h3>【QQ群】申请加入售后群</h3>
						</div>
						<ul>
							<a href="https://jq.qq.com/?_wv=1027&k=XWjNeNOg" target="_blank"><img src="https://www.xintheme.com/wp-content/uploads/2021/01/Factory-QQqun.gif" alt="" /></a>
						</ul>
					</div>
				</div>

				<div class="panel-aside panel-db-plugin panel-club">
					<div class="panel-club-inside">
						<div class="cell panel-title">
							<h3>更多高品质WordPress主题</h3>
						</div>
						<ul>
							<li class="cell">
								<p><a href="https://www.xintheme.com/" target="_blank"><img src="https://www.xintheme.com/wp-content/uploads/2021/01/theme.png" alt="" /></a></p>
								<p>新主题（XinTheme），不断发布优秀产品和创新，同时让每个人都可以使用它们</p>
								<a class="button-primary club-button" target="_blank" href="https://www.xintheme.com/">浏览全部主题 &rarr;</a>
							</li>
						</ul>
					</div>
				</div>

			</div>

		</div>
	</div>
</div>
