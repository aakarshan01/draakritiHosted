( function ( $ ) {

    var LAE_Message_Box = function ( $scope ) {

        let elem = $scope.find( '.lae-message-box' ).eq( 0 );

        this._init( elem );
    };

    LAE_Message_Box.prototype = {

        _init: function ( elem ) {
            let container = elem.closest( ".elementor-element" );
            container.addClass( "lae-message-box-container" );
            elem.find( ".lae-close-icon" ).on( "click", function ( e ) {
                $( this ).parent().addClass( "lae-hidden" );
                container.addClass( "lae-hidden" );
                container.animate( {
                    height: 0
                }, {
                    queue: false
                } )
            } )
        }
    };

    var WidgetLAEMessageBoxHandler = function ( $scope, $ ) {

        new LAE_Message_Box( $scope );

    };

    // Make sure you run this code under Elementor..
    $( window ).on( 'elementor/frontend/init', function () {

        elementorFrontend.hooks.addAction( 'frontend/element_ready/lae-message-box.default', WidgetLAEMessageBoxHandler );

    } );

} )( jQuery );