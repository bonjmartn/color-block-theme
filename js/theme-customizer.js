(function( $ ) {

    wp.customize( 'colorblock_logo', function( value ) {
        value.bind( function( to ) {
            if( to == '' ) {
                $(' #logo ').hide();
            } else {
                $(' #logo ').show();
                $(' #logo ').attr( 'src', to );
            }
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

})( jQuery );