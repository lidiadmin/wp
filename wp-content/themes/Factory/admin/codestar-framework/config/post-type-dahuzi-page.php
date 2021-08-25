<?php if ( ! defined( 'ABSPATH' ) ) { die; } // Cannot access pages directly.

$dahuzi_page_opts = 'post_type_dahuzi_page';

//
// Create a metabox
//
CSF::createMetabox( $dahuzi_page_opts, array(
	'title'        => '低配页面构建器',
	'post_type'    => 'dahuzi-page',
	//'show_restore' => true,
) );

//
// 添加首页模块
//
CSF::createSection( $dahuzi_page_opts, array(
    //'title'    => '首页模块',
    'fields'   => array(

    //Banner设置
    array(
      'id'         => 'page_banner',
      'type'       => 'accordion',
      //'title'    => 'Banner',
      'accordions' => array(

        array(
        	'title'  => 'Banner',
        	'fields' => array(

                array(
                    'id'                => 'banner_img',
                    'type'              => 'media',
                    'title'             => 'PC端图片',
                    'desc'          	=> '建议尺寸 1905×300 px',
                    'settings'          => array(
                        'button_title'  => '上传图片(PC端)',
                        'frame_title'   => '选择图片(PC端)',
                        'insert_title'  => '插入图片(PC端)',
                    ),
                ),
                array(
                    'id'                => 'banner_img_mobile',
                    'type'              => 'media',
                    'title'             => '手机端图片',
                    'desc'          	=> '建议尺寸 750×200 px（留空则显示PC端）',
                    'settings'          => array(
                        'button_title'  => '上传图片(手机端)',
                        'frame_title'   => '选择图片(手机端)',
                        'insert_title'  => '插入图片(手机端)',
                    ),
                ),

	            array(
	            	'id'				=> 'banner_title',
	            	'type'				=> 'text',
	            	'title'				=> 'Banner标题',
	            ),
	            array(
	            	'id'				=> 'banner_desc',
	            	'type'				=> 'text',
	            	'title'				=> 'Banner描述',
	            ),

        	)
        ),

      )
    ),

        // 模块类型
        array(
            'id'                => 'index_modular',
            'type'              => 'group',
            //'title'             => '添加首页模块',
            'button_title'      => '添加模块',
            'accordion_title'   => '添加模块',
            'fields'            => array(

                array(
                    'id'        => 'modular_name',
                    'type'      => 'text',
                    'title'     => '模块名称',
                    'desc'		=> '此处的自定义名称仅用于后台标记模块使用',
                ),

                array(
                    'id'        => 'modular_type',
                    'type'      => 'image_select',
                    'title'     => '选择模块',
                    //'inline'    => true,
                    //'class'     => 'horizontal',
                    'options'   => array(
                        '1'     => get_stylesheet_directory_uri() . '/static/images/admin/index-1.png',
                        '2'     => get_stylesheet_directory_uri() . '/static/images/admin/index-2.png',
                        '3'     => get_stylesheet_directory_uri() . '/static/images/admin/index-3.png',
                        '4'     => get_stylesheet_directory_uri() . '/static/images/admin/index-4.png',
                        '5'     => get_stylesheet_directory_uri() . '/static/images/admin/index-5.png',
                        '6'     => get_stylesheet_directory_uri() . '/static/images/admin/index-6.png',
                        '7'     => get_stylesheet_directory_uri() . '/static/images/admin/index-7.png',
                        '8'     => get_stylesheet_directory_uri() . '/static/images/admin/index-8.png',
                        '9'     => get_stylesheet_directory_uri() . '/static/images/admin/index-9.png',
                        '10'    => get_stylesheet_directory_uri() . '/static/images/admin/index-10.png',
                        '11'    => get_stylesheet_directory_uri() . '/static/images/admin/index-11.png',
                        '12'    => get_stylesheet_directory_uri() . '/static/images/admin/index-12.png',
                        '13'    => get_stylesheet_directory_uri() . '/static/images/admin/index-13.png',
                        '14'    => get_stylesheet_directory_uri() . '/static/images/admin/index-14.png',
                    ),
                    'default'   => '1',
                ),

                /** --------------------------------------------------------------------------------- *
                 *  通用模块设置
                 *  --------------------------------------------------------------------------------- */

                // 模块显示规则
                array(
                    'id'        => 'modular_display',
                    'type'      => 'button_set',
                    'title'     => '模块显示规则',
                    'options'   => array(
                        '1'     => '默认',
                        '2'     => '仅电脑端显示',
                        '3'     => '仅手机端显示',
                    ),
                    'default'   => '1',
                ),

                // 模块背景色加深，利于区分显示
                array(
                    'id'        => 'modular_bg_f9',
                    'type'      => 'checkbox',
                    'title'     => '',
                    'label'     => '模块背景色加深，利于区分显示',
                    'default'   => false,
                    'dependency'=> array( 'modular_type', 'any', '1,2,3,6,7,8,9,10,11,12,13' ),
                ),

                //模块标题和描述
                array(
                    'id'        => 'modular_title',
                    'type'      => 'textarea',
                    'title'     => '模块标题',
                    'default'   => '模块标题',
                    'dependency'=> array( 'modular_type', 'any', '2,3,4,6,7,8,10,11,12,13' ),
                ),
                array(
                    'id'        => 'modular_describe',
                    'type'      => 'textarea',
                    'title'     => '模块描述',
                    'default'   => '无需编码技能，您也可以创建出一个独特的网站（XinTheme）',
                    'dependency'=> array( 'modular_type', 'any', '2,3,4,6,7,8,10,11,12,13' ),
                ),

                /** --------------------------------------------------------------------------------- *
                 *  首页模块-1设置
                 *  --------------------------------------------------------------------------------- */
                array(
                    'id'        => 'modular1_col_img_num',
                    'type'      => 'slider',
                    'title'     => '一行显示几组图片',
                    'unit'      => '组',
                    'min'       => 2,
                    'max'       => 4,
                    'default'   => 3,
                    'dependency'=> array( 'modular_type', 'any', '1' ),
                ),
                array(
                    'id'                => 'add_modular_1',
                    'type'              => 'group',
                    'title'             => '',
                    'button_title'      => '添加模块内容',
                    'accordion_title'   => '添加模块内容',
                    'fields'            => array(
                        array(
                            'id'        => 'modular_1_title',
                            'type'      => 'text',
                            'title'     => '图片标题',
                        ),
                        array(
                            'id'        => 'modular_1_img',
                            'type'      => 'media',
                            'title'     => '特色图片',
                            'desc'		=> '建议尺寸：562×331 px',
                            'settings'  => array(
                                'button_title' => '上传图片',
                                'frame_title'  => '选择图片',
                                'insert_title' => '插入图片',
                            ),
                        ),
                        array(
                            'id'         => 'modular_1_url',
                            'type'       => 'text',
                            'title'      => '跳转链接',
                            'attributes' => array('style'=> 'width: 100%;'),
                            'desc'		 => '链接带上 http:// 或者 https://',
                        ),
                        array(
                            'id'         => 'modular_1_url_blank',
                            'type'       => 'checkbox',
                            'title'      => '',
                            'label'      => '链接新窗口打开',
                            'default'    => false
                        ),
                    ),
                    'dependency'        => array( 'modular_type', 'any', '1' ),
                ),

                /** --------------------------------------------------------------------------------- *
                 *  首页模块-2、首页模块-4、首页模块-7设置
                 *  --------------------------------------------------------------------------------- */

                // 调用文章
                array(
                    'id'        => 'modular_cat_or_post',
                    'type'      => 'select',
                    'title'     => '调用内容',
                    'desc'		=> '选择「指定分类」请勾选下分类目录，选择「指定文章」请设置一下指定文章',
                    'options'   => array(
                        '1'     => '请选择调用内容',
                        'cat'   => '指定分类',
                        'post'  => '指定文章',
                    ),
                    'default'   => '1',
                    'dependency'=> array( 'modular_type', 'any', '2,4,7' ),
                ),
                array(
                    'id'        => 'modular_category',
                    'type'      => 'select',
                    'title'     => '选择分类',
                    'chosen'    => true,
                    'multiple'  => true,
                    'sortable'  => true,
                    'options'   => 'categories',
                    'desc'		=> '如果分类下没有文章，此处将不显示此分类目录',
                    'placeholder'=> '选择分类目录，可多选，可排序',
                    //'dependency'=> array( 'modular_cat_or_post', 'any', 'cat' ),
                    'dependency'=> array( 'modular_type', 'any', '2,4,7,12' ),
                ),
                array(
                    'id'        => 'modular_posts_id',
                    'type'      => 'select',
                    'title'     => '指定文章',
                    'chosen'    => true,
                    'multiple'  => true,
                    'sortable'  => true,
                    'ajax'      => true,
                    'options'   => 'posts',
                    'placeholder'=> '输入关键词进行搜索，不少于三个字',
                    //'dependency'=> array( 'modular_cat_or_post', 'any', 'post' ),
                    'dependency'=> array( 'modular_type', 'any', '2,4,7' ),
                ),
                // 调用文章 结束

                // 缩略图尺寸
                array(
                    'id'         => 'post_img_width',
                    'type'       => 'spinner',
                    'title'      => '图片宽度',
                    'desc'		 => '自定义缩略图尺寸，默认宽高350*230，最小宽度350px，高度随意，如果缩略图模糊，可同比放大尺寸，没有固定尺寸，建议自己设置尺寸进行调试，达到自己满意的比例',
                    'max'        => 10000,
                    'min'        => 264,
                    'step'       => 1,
                    'unit'       => 'px',
                    'attributes' => array('style'=> 'width: 100%;'),
                    'dependency' => array( 'modular_type', 'any', '2,4,7' ),
                ),
                array(
                    'id'         => 'post_img_height',
                    'type'       => 'spinner',
                    'title'      => '图片高度',
                    //'desc' => 'max:1 | min:0 | step:0.1 | unit:px',
                    'max'        => 10000,
                    'min'        => 0,
                    'step'       => 1,
                    'unit'       => 'px',
                    'attributes' => array('style'=> 'width: 100%;'),
                    'dependency' => array( 'modular_type', 'any', '2,4,7' ),
                ),
                // 缩略图尺寸 结束

                // 首页模块-4 背景图片设置
                array(
                    'id'        => 'modular_4_bg',
                    'type'      => 'media',
                    'title'     => '背景图片',
                    'settings'  => array(
                        'button_title' => '上传图片',
                        'frame_title'  => '选择图片',
                        'insert_title' => '插入图片',
                    ),
                    'dependency'=> array( 'modular_type', 'any', '4' ),
                ),

                // 首页模块-7 文章数量设置
                array(
                    'id'        => 'modular7_col_post_num',
                    'type'      => 'slider',
                    'title'     => '每行显示文章数量',
                    'unit'      => '篇',
                    'min'       => 3,
                    'max'       => 4,
                    'default'   => 3,
                    'dependency'=> array( 'modular_type', 'any', '2,7' ),
                ),
                array(
                    'id'        => 'modular7_post_num',
                    'type'      => 'slider',
                    'title'     => '显示文章数量',
                    'unit'      => '篇',
                    'min'       => 3,
                    'max'       => 12,
                    'default'   => 3,
                    'dependency'=> array( 'modular_type', 'any', '2,7' ),
                ),

                /** --------------------------------------------------------------------------------- *
                 *  首页模块-3设置
                 *  --------------------------------------------------------------------------------- */
                array(
                    'id'    => 'modular_3',
                    'type'  => 'tabbed',
                    'title' => '',
                    'tabs'  => array(

                        array(
                            'title'  => '特点介绍',
                            'fields' => array(

                                array(
                                    'id'                => 'add_special',
                                    'type'              => 'group',
                                    'title'             => '',
                                    'button_title'      => '添加特点介绍',
                                    'accordion_title'   => '添加特点介绍',
                                    'fields'            => array(
                                        array(
                                            'id'        => 'special_text',
                                            'type'      => 'text',
                                            'title'     => '特点介绍',
                                        ),
                                    ),
                                ),

                            ),
                        ),
                        array(
                            'title'  => '数字介绍',
                            'fields' => array(

                                array(
                                    'id'                => 'add_number',
                                    'type'              => 'group',
                                    'title'             => '',
                                    'button_title'      => '添加数字介绍',
                                    'accordion_title'   => '添加数字介绍',
                                    'fields'            => array(
                                        array(
                                            'id'        => 'modular3_number',
                                            'type'      => 'text',
                                            'title'     => '数值',
                                        ),
                                        array(
                                            'id'        => 'modular3_number_text',
                                            'type'      => 'text',
                                            'title'     => '描述',
                                        ),
                                    ),
                                ),

                            ),
                        ),
                        array(
                            'title'  => '图片/视频',
                            'fields' => array(
                                array(
                                    'id'        => 'modular_3_img_left',
                                    'type'      => 'checkbox',
                                    'title'     => '',
                                    'label'     => '「图片/视频」区域，靠左显示',
                                    'default'   => false,
                                ),
                                array(
                                    'id'        => 'modular_3_img',
                                    'type'      => 'media',
                                    'title'     => '特色图片',
                                    'desc'		=> '宽350px，高随意（建议430px）',
                                    'settings'  => array(
                                        'button_title' => '上传图片',
                                        'frame_title'  => '选择图片',
                                        'insert_title' => '插入图片',
                                    ),
                                ),
                                array(
                                    'id'        => 'modular_3_video',
                                    'type'      => 'textarea',
                                    'title'     => '视频链接',
                                    'desc'		=> '视频直链，.mp4后缀，如：https://www.xintheme.com/video.mp4<br><b>特别注意：视频链接设置与第三方视频链接，2选1即可，不可同时使用</b>',
                                    'attributes'=> array('style'=> 'width:100%;min-height:65px;'),
                                ),
                                array(
                                    'id'        => 'modular_3_video2',
                                    'type'      => 'textarea',
                                    'title'     => '第三方视频链接',
                                    'desc'		=> '第三方视频平台分享链接，腾讯视频、优酷、爱奇艺等，比如：https://v.qq.com/txp/iframe/player.html?vid=j3162uatq40<br><b>特别注意：第三方视频链接设置与上面的视频链接设置，2选1即可，不可同时使用</b>',
                                    'attributes'=> array('style'=> 'width:100%;min-height:65px;'),
                                ),
                                array(
                                    'id'        => 'modular_3_video_text',
                                    'type'      => 'text',
                                    'title'     => '视频标题',
                                    'attributes'=> array('style'=> 'width:100%;'),
                                ),
                            ),
                        ),

                    ),
                    'dependency' => array( 'modular_type', 'any', '3' ),
                ),

                /** --------------------------------------------------------------------------------- *
                 *  首页模块-5设置
                 *  --------------------------------------------------------------------------------- */
                array(
                    'id'        => 'modular5_subtitle',
                    'type'      => 'text',
                    'title'     => '小标题',
                    'default'   => 'XinTheme',
                    'dependency'=> array( 'modular_type', 'any', '5' ),
                ),
                array(
                    'id'        => 'modular5_title',
                    'type'      => 'text',
                    'title'     => '大标题',
                    'default'   => '无需编码技能，您也可以创建出一个独特的网站',
                    'dependency'=> array( 'modular_type', 'any', '5' ),
                ),
                array(
                    'id'        => 'modular5_describe',
                    'type'      => 'textarea',
                    'title'     => '描述文本',
                    'default'   => '我们是专业的WordPress网站建设团队，提供高品质的WordPress主题。新主题微信公众号：www-xintheme-com，欢迎热爱WordPress的每一位朋友关注！',
                    'dependency'=> array( 'modular_type', 'any', '5' ),
                ),
                array(
                    'id'        => 'modular5_phone',
                    'type'      => 'text',
                    'title'     => '联系电话',
                    'default'   => '138-8888-8888',
                    'dependency'=> array( 'modular_type', 'any', '5' ),
                ),
                array(
                    'id'        => 'modular5_but_title',
                    'type'      => 'text',
                    'title'     => '按钮标题',
                    'default'   => '点击访问新主题官网',
                    'dependency'=> array( 'modular_type', 'any', '5' ),
                ),
                array(
                    'id'        => 'modular5_but_url',
                    'type'      => 'text',
                    'title'     => '按钮跳转链接',
                    'default'   => 'https://www.xintheme.com',
                    'dependency'=> array( 'modular_type', 'any', '5' ),
                ),
                array(
                    'id'        => 'modular5_bg_color',
                    'type'      => 'color',
                    'title'     => '模块背景颜色',
                    'default'   => '#091426',
                    'dependency'=> array( 'modular_type', 'any', '5' ),
                ),

                /** --------------------------------------------------------------------------------- *
                 *  首页模块-6设置
                 *  --------------------------------------------------------------------------------- */
                array(
                    'id'        => 'modular_6_bgimg',
                    'type'      => 'media',
                    'title'     => '模块背景图片',
                    'settings'  => array(
                        'button_title' => '上传背景图片',
                        'frame_title'  => '选择背景图片',
                        'insert_title' => '插入背景图片',
                    ),
                    'dependency'=> array( 'modular_type', 'any', '6' ),
                ),
                array(
                    'id'                => 'add_modular_6',
                    'type'              => 'group',
                    'title'             => '',
                    'button_title'      => '添加客户评价',
                    'accordion_title'   => '添加客户评价',
                    'fields'            => array(
                        array(
                            'id'         => 'modular_6_title',
                            'type'       => 'text',
                            'title'      => '客户昵称',
                        ),
                        array(
                            'id'        => 'modular_6_img',
                            'type'      => 'media',
                            'title'     => '客户头像',
                            'desc'		=> '建议尺寸：90×90 px',
                            'settings'  => array(
                                'button_title' => '上传头像',
                                'frame_title'  => '选择头像',
                                'insert_title' => '插入头像',
                            ),
                        ),
                        array(
                            'id'         => 'modular_6_describe',
                            'type'       => 'textarea',
                            'title'      => '客户评价内容',
                        ),
                    ),
                    'dependency'        => array( 'modular_type', 'any', '6' ),
                ),

                /** --------------------------------------------------------------------------------- *
                 *  首页模块-8设置
                 *  --------------------------------------------------------------------------------- */
                array(
                    'id'                => 'add_modular_8',
                    'type'              => 'group',
                    'title'             => '',
                    'button_title'      => '添加联系信息',
                    'accordion_title'   => '添加联系信息',
                    'fields'            => array(
                        array(
                            'id'        => 'modular_8_title',
                            'type'      => 'text',
                            'title'     => '联系内容...',
                        ),
                        array(
                            'id'        => 'modular_8_icon',
                            'type'      => 'media',
                            'title'     => '联系图标',
                        ),
                    ),
                    'dependency'        => array( 'modular_type', 'any', '8' ),
                ),
                //自定义表单文本
                array(
                    'id'                => 'modular_8_contact_textarea',
                    'type'              => 'text',
                    'title'             => '留言框默认显示文本',
                    'dependency'        => array( 'modular_type', 'any', '8' ),
                ),
                array(
                    'id'                => 'modular_8_contact_button',
                    'type'              => 'text',
                    'title'             => '提交按钮文本',
                    'dependency'        => array( 'modular_type', 'any', '8' ),
                ),

                /** --------------------------------------------------------------------------------- *
                 *  首页模块-9设置
                 *  --------------------------------------------------------------------------------- */
                array(
                    'id'                => 'add_modular_9',
                    'type'              => 'group',
                    'title'             => '',
                    'button_title'      => '添加合作伙伴',
                    'accordion_title'   => '添加合作伙伴',
                    'fields'            => array(
                        array(
                            'id'         => 'modular_9_title',
                            'type'       => 'text',
                            'title'      => '合作伙伴名字',
                        ),
                        array(
                            'id'        => 'modular_9_img',
                            'type'      => 'media',
                            'title'     => '合作伙伴Logo',
                            'desc'		=> '建议尺寸：160×42 px',
                            'settings'  => array(
                                'button_title' => '上传Logo',
                                'frame_title'  => '选择Logo',
                                'insert_title' => '插入Logo',
                            ),
                        ),
                        array(
                            'id'         => 'modular_9_url',
                            'type'       => 'text',
                            'title'      => '跳转链接',
                        ),
                    ),
                    'dependency'        => array( 'modular_type', 'any', '9' ),
                ),

                /** --------------------------------------------------------------------------------- *
                 *  首页模块-10 设置
                 *  --------------------------------------------------------------------------------- */
                array(
                    'id'                => 'add_modular_10',
                    'type'              => 'group',
                    'title'             => '',
                    'button_title'      => '添加项目',
                    'accordion_title'   => '添加项目',
                    'fields'            => array(
                        array(
                            'id'         => 'modular_10_title',
                            'type'       => 'text',
                            'title'      => '项目标题',
                            'attributes' => array('style'=> 'width:100%'),
                        ),
                        array(
                            'id'         => 'modular_10_desc',
                            'type'       => 'text',
                            'title'      => '项目描述',
                            'attributes' => array('style'=> 'width:100%'),
                        ),
                        array(
                            'id'        => 'modular_10_img',
                            'type'      => 'media',
                            'title'     => '项目图标',
                            'desc'		=> '建议尺寸：50×50 px',
                            'settings'  => array(
                                'button_title' => '上传图标',
                                'frame_title'  => '选择图标',
                                'insert_title' => '插入图标',
                            ),
                        ),
                        array(
                            'id'        => 'modular_10_img_bg_color',
                            'type'      => 'color',
                            'title'     => '图标背景颜色',
                            'default'   => '#fcab00',
                        ),
                        array(
                            'id'         => 'modular_10_url',
                            'type'       => 'text',
                            'title'      => '跳转链接',
                            'attributes' => array('style'=> 'width:100%'),
                        ),
                    ),
                    'dependency'        => array( 'modular_type', 'any', '10' ),
                ),

                /** --------------------------------------------------------------------------------- *
                 *  首页模块-11 设置
                 *  --------------------------------------------------------------------------------- */
                array(
                    'id'                => 'add_modular_11',
                    'type'              => 'group',
                    'title'             => '',
                    'button_title'      => '添加项目',
                    'accordion_title'   => '添加项目',
                    'fields'            => array(
                        array(
                            'id'         => 'modular_11_title',
                            'type'       => 'text',
                            'title'      => '项目标题',
                            'attributes' => array('style'=> 'width:100%'),
                        ),
                        array(
                            'id'         => 'modular_11_desc',
                            'type'       => 'text',
                            'title'      => '项目描述',
                            'attributes' => array('style'=> 'width:100%'),
                        ),
                        array(
                            'id'        => 'modular_11_img',
                            'type'      => 'media',
                            'title'     => '项目缩略图',
                            'desc'		=> '建议尺寸：370×250 px',
                            'settings'  => array(
                                'button_title' => '上传图片',
                                'frame_title'  => '选择图片',
                                'insert_title' => '插入图片',
                            ),
                        ),
                        array(
                            'id'        => 'modular_11_ico',
                            'type'      => 'media',
                            'title'     => '项目图标',
                            'desc'		=> '建议尺寸：50×50 px',
                            'settings'  => array(
                                'button_title' => '上传图标',
                                'frame_title'  => '选择图标',
                                'insert_title' => '插入图标',
                            ),
                        ),
                        array(
                            'id'        => 'modular_11_ico_bg_color',
                            'type'      => 'color',
                            'title'     => '图标背景颜色',
                            'default'   => '#fcab00',
                        ),
                        array(
                            'id'         => 'modular_11_url',
                            'type'       => 'text',
                            'title'      => '跳转链接',
                            'attributes' => array('style'=> 'width:100%'),
                        ),
                    ),
                    'dependency'        => array( 'modular_type', 'any', '11' ),
                ),

                /** --------------------------------------------------------------------------------- *
                 *  首页模块-13 设置
                 *  --------------------------------------------------------------------------------- */
                array(
                    'id'                => 'add_modular_13',
                    'type'              => 'group',
                    'title'             => '',
                    'button_title'      => '添加项目',
                    'accordion_title'   => '添加项目',
                    'fields'            => array(
                        array(
                            'id'         => 'modular_13_title',
                            'type'       => 'text',
                            'title'      => '项目标题',
                            'attributes' => array('style'=> 'width:100%'),
                        ),
                        array(
                            'id'         => 'modular_13_desc',
                            'type'       => 'textarea',
                            'title'      => '项目描述',
                            'attributes' => array('style'=> 'width:100%'),
                        ),
                        array(
                            'id'        => 'modular_13_ico',
                            'type'      => 'media',
                            'title'     => '项目图标',
                            'desc'		=> '建议尺寸：50×50 px',
                            'settings'  => array(
                                'button_title' => '上传图标',
                                'frame_title'  => '选择图标',
                                'insert_title' => '插入图标',
                            ),
                        ),
                        array(
                            'id'        => 'modular_13_img',
                            'type'      => 'media',
                            'title'     => '项目背景图',
                            'settings'  => array(
                                'button_title' => '上传图片',
                                'frame_title'  => '选择图片',
                                'insert_title' => '插入图片',
                            ),
                        ),
                        array(
                            'id'         => 'modular_13_url',
                            'type'       => 'text',
                            'title'      => '跳转链接',
                            'attributes' => array('style'=> 'width:100%'),
                        ),
                        array(
                            'id'         => 'modular_13_url_text',
                            'type'       => 'text',
                            'title'      => '按钮文本',
                            'attributes' => array('style'=> 'width:100%'),
                        ),
                    ),
                    'dependency'        => array( 'modular_type', 'any', '13' ),
                ),

                /** --------------------------------------------------------------------------------- *
                 *  首页模块-14 设置
                 *  --------------------------------------------------------------------------------- */
                array(
                    'id'        => 'modular_14_content',
                    'type'      => 'code_editor',
                    'title'     => '自定义代码',
                    'help'      => '支持html、css、js...',
                    'settings'  => array(
                        'theme'  => 'shadowfox',
                        'mode'   => 'htmlmixed',
                    ),
                    'dependency'=> array( 'modular_type', 'any', '14' ),
                ),



            ),

        ),
    ),
) );



// 文章SEO设置
$dahuzi_seo_switch = get_option('xintheme_optimize');
if( $dahuzi_seo_switch['dahuzi_seo_switch'] ){ //判断是否开启主题SEO设置

CSF::createSection( $prefix_post_opts, array(
	'title'  => ' SEO设置',
	//'icon'   => 'iconfont icon-wz-seo',
	'fields' => array(

        array(
            'id'    => 'seo_title',
            'type'  => 'text',
            'title' => 'SEO-标题',
            'after' => '<div class="cs-text-muted">留空则调用文章标题</div>'
        ),
        array(
            'id'    => 'seo_keywords',
            'type'  => 'text',
            'title' => 'SEO-关键词',
            'after' => '<div class="cs-text-muted">多个关键词之间用英文逗号隔开</div>'
        ),
        array(
            'id'    => 'seo_description',
            'type'  => 'textarea',
            'title' => 'SEO-描述',
            'after' => '<div class="cs-text-muted">留空则调用文章摘要</div>'
        ),

	)
) );


$prefix_page_opts = 'page_seo';

CSF::createMetabox( $prefix_page_opts, array(
	'title'        => 'SEO设置',
	'post_type'    => 'page',
	//'show_restore' => true,
) );

CSF::createSection( $prefix_page_opts, array(
	//'title'  => ' SEO设置',
	//'icon'   => 'iconfont icon-wz-seo',
	'fields' => array(

        array(
            'id'    => 'seo_title',
            'type'  => 'text',
            'title' => 'SEO-标题',
            'after' => '<div class="cs-text-muted">留空则调用文章标题</div>'
        ),
        array(
            'id'    => 'seo_keywords',
            'type'  => 'text',
            'title' => 'SEO-关键词',
            'after' => '<div class="cs-text-muted">多个关键词之间用英文逗号隔开</div>'
        ),
        array(
            'id'    => 'seo_description',
            'type'  => 'textarea',
            'title' => 'SEO-描述',
            'after' => '<div class="cs-text-muted">留空则调用文章摘要</div>'
        ),

	)
) );

}//判断是否开启主题SEO设置 END


//加载专属css
function wpkj_load_scripts($hook) {
 
	if( $hook != 'post.php' ) 
		return;
 
	echo '

<style type="text/css">

.post-type-dahuzi-page .csf-field-image_select .csf--image{max-width:23.5%;border:3px solid #eee}
.post-type-dahuzi-page .csf-field-image_select img{max-width:100%}
.post-type-dahuzi-page .csf-field-image_select .csf--image:nth-child(2n){margin-right:5px}
.post-type-dahuzi-page .csf-field-image_select .csf--image:nth-child(4n){margin-right:0}
.post-type-dahuzi-page .csf-field-image_select .csf--active{border:3px solid #f44336}
.post-type-dahuzi-page .csf-field-image_select .csf--image:before{background-color:#f44336}

</style>

	';
}
add_action('admin_enqueue_scripts', 'wpkj_load_scripts');





