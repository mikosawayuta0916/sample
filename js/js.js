new WOW().init();/*  wowの追加 */

/*ハンバーガーメニュー */ 
$(function() {
    $('.hamburger').click(function() { //ハンバーガーをクリックした時
        $(this).toggleClass('active');
        if ($(this).hasClass('active')) {
            $('.globalMenuSp').addClass('active');
        } else {
            $('.globalMenuSp').removeClass('active');
        }
    });
  });

   /* headerクリックイベント */
   jQuery('.header_nav ul li a').click(function() {
    jQuery('.header_nav ul li a').removeClass( 'is-active' );
    jQuery(this).addClass( 'is-active' );
    return false;
  });


    /*  フローティング */
    jQuery(window).on("scroll", function($) {
        if (jQuery(this).scrollTop() > 100) {
            jQuery('.home_button').show();
        } else {
            jQuery('.home_button').hide();
        }
    });
    
    jQuery('.home_button').click(function () {
        jQuery('body,html').animate({
            scrollTop: 0
        }, 1000);
        return false;
    });


    /*  プロフィール */
    jQuery(window).on("scroll", function($) {
        if (jQuery(this).scrollTop() > 0) {
            jQuery('#profile_button').show();
        } else {
            jQuery('#profile_button').hide();
        }
    });
    
    jQuery('#profile_button').click(function () {
        jQuery('body,html').animate({
            scrollTop: 500
        }, 1000);
        return false;
    });

    /*  ブランド */
    jQuery(window).on("scroll", function($) {
        if (jQuery(this).scrollTop() > 0) {
            jQuery('#brand_button').show();
        } else {
            jQuery('#brand_button').hide();
        }
    });
    
    jQuery('#brand_button').click(function () {
        jQuery('body,html').animate({
            scrollTop: 2900
        }, 1000);
        return false;
    });

    /*  プロジェクト　*/
    jQuery(window).on("scroll", function($) {
        if (jQuery(this).scrollTop() > 0) {
            jQuery('#project_button').show();
        } else {
            jQuery('#project_button').hide();
        }
    });
    
    jQuery('#project_button').click(function () {
        jQuery('body,html').animate({
            scrollTop: 3400
        }, 1000);
        return false;
    });

    /*  コンタクト */
    jQuery(window).on("scroll", function($) {
        if (jQuery(this).scrollTop() > 0) {
            jQuery('#contact_button').show();
        } else {
            jQuery('#contact_button').hide();
        }
    });
    
    jQuery('#contact_button').click(function () {
        jQuery('body,html').animate({
            scrollTop: 4100
        }, 1000);
        return false;
    });
