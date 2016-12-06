(function( $ ) {

    wp.customize( 'colorblock_logo', function( value ) {
        value.bind( function( to ) {
            if( to == '' ) {
                $(' .navbar-brand > img').hide();
            } else {
                $(' .navbar-brand > img ').show();
                $(' .navbar-brand > img ').attr( 'src', to );
            }
        } );
    });     

    wp.customize( 'colorblock_spot1', function( value ) {
        value.bind( function( to ) {
            $( '.spot1-wrap img' ).attr( 'src', to );
        } );
    });

    wp.customize( 'colorblock_spot2', function( value ) {
        value.bind( function( to ) {
            $( '.spot2-image' ).attr( 'src', to );
        } );
    });

    wp.customize( 'colorblock_spot3', function( value ) {
        value.bind( function( to ) {
            $( '.spot3-image' ).attr( 'src', to );
        } );
    });

    wp.customize( 'colorblock_spot4', function( value ) {
        value.bind( function( to ) {
            $( '.spot4-image' ).attr( 'src', to );
        } );
    });

    wp.customize( 'colorblock_spot5', function( value ) {
        value.bind( function( to ) {
            $( '.spot5-image' ).attr( 'src', to );
        } );
    });

    wp.customize( 'colorblock_h1_color', function( value ) {
        value.bind( function( to ) {
            $( '.the_content h1' ).css( 'color', to );
            $( '.the_content h2' ).css( 'color', to );
            $( '.the_content h3' ).css( 'color', to );
            $( '.the_content h4' ).css( 'color', to );
            $( '.the_content h5' ).css( 'color', to );
            $( '.the_content h6' ).css( 'color', to );

        } );
    });

    wp.customize( 'homepage_text_color', function( value ) {
        value.bind( function( to ) {
            $( '.homepage p' ).css( 'color', to );
            $( '.homepage h1' ).css( 'color', to );
            $( '.homepage h3' ).css( 'color', to );
            $( '.homepage a' ).css( 'color', to );
            $( '.homepage h1 a' ).css( 'color', to );
            $( '.homepage h3 a' ).css( 'color', to );
            $( '.homepage .fa' ).css( 'color', to );
            $( '.homepage .fa a' ).css( 'color', to );
            $( '.homepage button' ).css( 'color', to );
            $( '.homepage button' ).css( 'border-color', to );
        } );
    });

    wp.customize( 'cta_block_color', function( value ) {
        value.bind( function( to ) {
            $( '.cta-bar' ).css( 'background-color', to );
            $( '.homepage button' ).css( 'background-color', to );
            $( '.homepage button:hover' ).css( 'color', to );
        } );
    });

    wp.customize( 'social_block_color', function( value ) {
        value.bind( function( to ) {
            $( '.homepage-social-icons' ).css( 'background-color', to );
        } );
    });

    wp.customize( 'blog_block_color', function( value ) {
        value.bind( function( to ) {
            $( '.most-recent-post' ).css( 'background-color', to );
        } );
    });

    wp.customize( 'colorblock_h1_font_type', function( value ) {
        value.bind( function( to ) {            
            $( 'h1' ).css( 'font-family', to );
            $( 'h2' ).css( 'font-family', to );  
            $( 'h3' ).css( 'font-family', to );  
            $( 'h4' ).css( 'font-family', to );  
            $( 'h5' ).css( 'font-family', to );  
            $( 'h6' ).css( 'font-family', to );  
            $( '.homepage h1' ).css( 'font-family', to );
            $( '.homepage h1 a' ).css( 'font-family', to );
            $( '.homepage h3' ).css( 'font-family', to );
            $( '.homepage h3 a' ).css( 'font-family', to );
        } );
    }); 

    wp.customize( 'colorblock_p_color', function( value ) {
        value.bind( function( to ) {
            $( '.the_content p' ).css( 'color', to );
            $( '.the_content li' ).css( 'color', to );
        } );
    });

    wp.customize( 'colorblock_a_color', function( value ) {
        value.bind( function( to ) {
            $( '.the_content a' ).css( 'color', to );
            $( '.the_content a:visited' ).css( 'color', to );
        } );
    });

    wp.customize( 'colorblock_p_font_size', function( value ) {
        value.bind( function( to ) {            
            $( 'p' ).css( 'font-size', to + 'px' ); 
            $( 'li' ).css( 'font-size', to + 'px' );         
        } );
    }); 

    wp.customize( 'colorblock_p_font_type', function( value ) {
        value.bind( function( to ) {            
            $( 'p' ).css( 'font-family', to ); 
            $( 'li' ).css( 'font-family', to );           
        } );
    });

})( jQuery );