/*
* @Author: 大胡子
* @Email:  dahuzi@xintheme.com
* @Link:   www.dahuzi.me
* @Date:   2021-01-03 14:10:36
* @Last Modified by:   dahuzi
* @Last Modified time: 2021-01-03 14:11:45
*/

/** --------------------------------------------------------------------------------- *
 *  TAB切换
 *  --------------------------------------------------------------------------------- */
jQuery( '.inline-list' ).each( function() {
    jQuery( this )
        .find( 'li' )
        .each( function( i ) {
            jQuery( this ).click( function() {
                jQuery( this )
                    .addClass( 'current' )
                    .siblings()
                    .removeClass( 'current' )
                    .parents( '#wpbody' )
                    .find( 'div.panel-left' )
                    .removeClass( 'visible' )
                    .end()
                    .find( 'div.panel-left:eq(' + i + ')' )
                    .addClass( 'visible' );
                return false;
            } );
        } );
} );