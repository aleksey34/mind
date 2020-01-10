/**
 * File customizer.js.
 *
 * Theme Customizer enhancements for a better user experience.
 *
 * Contains handlers to make Theme Customizer preview reload changes asynchronously.
 */

( function( $ ) {

	//Site title and description.
	wp.customize( 'blogname', function( value ) {
		value.bind( function( to ) {
			$( '.site-title a' ).text( to );
		} );
	} );
	wp.customize( 'blogdescription', function( value ) {
		value.bind( function( to ) {
			$( '.site-description' ).text( to );
		} );
	} );

	// Header text color.
	wp.customize( 'header_textcolor', function( value ) {
		value.bind( function( to ) {
			if ( 'blank' === to ) {
				$( '.site-title, .site-description' ).css( {
					'clip': 'rect(1px, 1px, 1px, 1px)',
					'position': 'absolute'
				} );
			} else {
				$( '.site-title, .site-description' ).css( {
					'clip': 'auto',
					'position': 'relative'
				} );
				$( '.site-title a, .site-description' ).css( {
					'color': to
				} );
			}
		} );
	} );

} )( jQuery );

;(function ($) {
	// ads
	wp.customize("ads_code" , function (value) {
		value.bind(function (newVal) {
			$("#adsBlock1").html(newVal);
        })
    });

	// footer settings  start
	// copy
    wp.customize("footer_copyright" , function (value) {
        value.bind(function (newVal) {
            $(".site-footer-copyright").html(newVal);
        })
    });
// about us
    wp.customize("footer_about_us_column_title" , function (value) {
        value.bind(function (newVal) {
            $(".footer-about-us_title").html(newVal);
        })
    });

    wp.customize("footer_about_us_content" , function (value) {
        value.bind(function (newVal) {
            $(".footer-about-us_content").html(newVal);
        })
    });
// end about us
// menu column -- middle column
    wp.customize("footer_menu_column_title" , function (value) {
        value.bind(function (newVal) {
            $(".footer-menu-title").html(newVal);
        })
    });

    // end menu column
	// contact
    wp.customize("footer_contact_column_title" , function (value) {
        value.bind(function (newVal) {
            $(".footer-contact-title").html(newVal);
        })
    });

    wp.customize("footer_contact_email" , function (value) {
        value.bind(function (newVal) {
            $(".footer-contact-email").html(newVal);
        })
    });

    wp.customize("footer_contact_phone" , function (value) {
        value.bind(function (newVal) {
            $(".footer-contact-phone").html(newVal);
        })
    });

    wp.customize("footer_contact_skype" , function (value) {
        value.bind(function (newVal) {
            $(".footer-contact-skype").html(newVal);
        })
    });

    wp.customize("footer_contact_address" , function (value) {
        value.bind(function (newVal) {
            $(".footer-contact-address").html(newVal);
        })
    });
// end contact
// end footer settiongs
})(jQuery);



