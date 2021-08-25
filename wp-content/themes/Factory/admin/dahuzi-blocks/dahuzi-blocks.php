<?php

/**
 * @Author: 大胡子
 * @Email:  dahuzi@xintheme.com
 * @Link:   www.dahuzi.me
 * @Date:   2020-12-09 21:18:00
 * @Last Modified by:   dahuzi
 * @Last Modified time: 2020-12-10 21:20:32
 */

/** --------------------------------------------------------------------------------- *
 *  加载块功能
 *  --------------------------------------------------------------------------------- */
include TEMPLATEPATH.'/admin/dahuzi-blocks/dist/init.php';

/** --------------------------------------------------------------------------------- *
 *  布局的 Restapi
 *  --------------------------------------------------------------------------------- */
include TEMPLATEPATH.'/admin/dahuzi-blocks/includes/layout/layout-endpoints.php';

/** --------------------------------------------------------------------------------- *
 *  装载容器块PHP
 *  --------------------------------------------------------------------------------- */
include TEMPLATEPATH.'/admin/dahuzi-blocks/src/blocks/block-container/index.php';

/** --------------------------------------------------------------------------------- *
 *  布局组件注册表
 *  --------------------------------------------------------------------------------- */
include TEMPLATEPATH.'/admin/dahuzi-blocks/includes/layout/layout-functions.php';
include TEMPLATEPATH.'/admin/dahuzi-blocks/includes/layout/class-component-registry.php';
include TEMPLATEPATH.'/admin/dahuzi-blocks/includes/layout/register-layout-components.php';

